<?php

namespace app\controllers;

use app\models\hosting\Calculation;
use app\models\hosting\Package;
use app\models\hosting\Tariff;
use hipanel\modules\stock\models\Part;
use hiqdev\hiart\ErrorResponseException;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\UnprocessableEntityHttpException;

class HostingController extends Controller
{

    /**
     * @param $type (svds|ovds)
     * @return mixed
     * @throws UnprocessableEntityHttpException
     */
    private function getAvailablePackages($type)
    {
        $part_ids = [];
        $parts = [];

        $cacheKeys = [
            Yii::$app->params['seller'],
            Yii::$app->user->id,
            $type,
        ];

        /** @var \app\models\hosting\Tariff[] $tariffs */
        $tariffs = Yii::$app->getCache()->getTimeCached(2, $cacheKeys, function ($seller, $client_id, $type) {
            return Tariff::find(['scenario' => 'get-available-info'])
                ->joinWith('resources')
                ->where(['type' => $type, 'seller' => $seller])
                ->all();
        });

        foreach ($tariffs as $tariff) {
            $part_ids += array_filter(ArrayHelper::getColumn($tariff->resources, 'object_id'));
            $calculations[] = $tariff->getCalculationModel();
        }

        if (!empty($part_ids)) {
            $parts = Part::find()->where(['id' => $part_ids])->indexBy('id')->all();
        }

        $calculationData = [];
        foreach ($calculations as $calculation) {
            $calculationData[$calculation->getPrimaryKey()] = $calculation->getAttributes();
        }

        try {
            $prices = Calculation::perform('CalcValue', $calculationData, true);
        } catch (ErrorResponseException $e) {
            $prices = $e->errorInfo['response'];
        } catch (\Exception $e) {
            throw new UnprocessableEntityHttpException('Failed to calculate tariff value', 0, $e);
        }

        $packages = [];

        foreach ($tariffs as $tariff) {
            $package = new Package([
                'tariff' => $tariff,
                'calculation' => $prices[$tariff->id],
            ]);
            $package->loadParts($parts);

            $packages[] = $package;
        }

        ArrayHelper::multisort($packages, 'price', SORT_ASC, SORT_NUMERIC);

        return $packages;
    }

    public function actionXenSsd()
    {
        return $this->render('xen_ssd', [
            'packages' => $this->getAvailablePackages(Tariff::TYPE_XEN),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionOpenVz()
    {
        return $this->render('xen_ssd', [
            'packages' => $this->getAvailablePackages(Tariff::TYPE_OPENVZ),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionTariffsDetails()
    {
        return $this->render('tariffs_details');
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionWhatIsVds()
    {
        return $this->render('what_is_vds');
    }

    /**
     * @param $type (svds|ovds)
     * @return array
     */
    public function priceAttributeData($type)
    {
        return [
            'cpu' => [
                'label' => Yii::t('app', 'CPU'),
                'buildValue' => function ($resource) {
                    return $resource['cpu']['partno'];
                }
            ],
            'ram' => [
                'label' => Yii::t('app', 'RAM'),
                'tooltip' => $type == 'svds' ? Yii::t('app', 'Additional $4/1 GB') : Yii::t('app', 'Additional $4/1 GB')
            ],
            'hd' => [
                'label' => $type == 'svds' ? Yii::t('app', 'SSD') : Yii::t('app', 'HDD+SSD cache'),
            ],
            'dedicated_ip' => [
                'label' => Yii::t('app', 'Dedicated IP'),
            ],
            'support' => [
                'label' => Html::a(Yii::t('app', 'Support 24/7'), '#'),
            ],
            'traffic' => [
                'label' => Yii::t('app', 'Traffic'),
            ],
            'port' => [
                'label' => Yii::t('app', 'Connection Port'),
            ],
            'control_panel' => [
                'label' => Html::a(Yii::t('app', 'Control panel'), '#'),
            ],
            'purpose' => [
                'label' => Yii::t('app', 'Purpose'),
            ],
        ];
    }
}
