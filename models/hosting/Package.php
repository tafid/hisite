<?php

namespace app\models\hosting;

use hipanel\modules\stock\models\Part;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * Class Package
 * @property string $name
 *
 * @package app\models\hosting
 */
class Package extends Model
{
    /** @var Part[] */
    public $parts;

    /** @var Tariff */
    public $tariff;

    /** @var array */
    public $calculation;

    protected $resourcesMap = [];

    public function init()
    {
        parent::init();

        $this->resourcesMap = [
            'cpu' => [
                'title' => Yii::t('app', 'CPU'),
                'value' => function () {
                    $part = $this->getPartByType('cpu');
                    preg_match('/((\d{1,2}) cores?)$/i', $part->partno, $matches);
                    return (int) $matches[2];
                },
            ],
            'ram' => [
                'title' => Yii::t('app', 'RAM'),
                'value' => function () {
                    $part = $this->getPartByType('ram');
                    preg_match('/((\d{1,5}) MB)$/i', $part->partno, $matches);
                    return (int) $matches[2] / 1024; // Gb
                }
            ],
            'hdd' => [
                'title' => function () {
                    if ($this->tariff->type === Tariff::TYPE_XEN) {
                        return Yii::t('app', 'SSD');
                    } else {
                        return Yii::t('app', 'HDD + SSD cache');
                    }
                },
                'value' => function () {
                    $part = $this->getPartByType('hdd');
                    preg_match('/((\d{1,5}) GB)$/i', $part->partno, $matches);
                    return (int) $matches[2]; // Gb
                }
            ],
            'ip' => [
                'title' => Yii::t('app', 'Dedicated IP'),
                'value' => function () {
                    return $this->getResourceByType('ip_num')->quantity;
                }
            ],
            'support_time' => [
                'title' => Yii::t('app', '24/7 support'),
                'value' => function () {
                    $quantity = $this->getResourceByType('support_time')->quantity;
                    if ($quantity == 1) {
                        return Yii::t('app', 'Bronze');
                    } elseif ($quantity == 1.5) {
                        return Yii::t('app', 'Silver');
                    } elseif ($quantity == 2) {
                        return Yii::t('app', 'Gold');
                    } elseif ($quantity == 3) {
                        return Yii::t('app', 'Platinum');
                    } else {
                        return Yii::t('app', '{n, plural, one{# hour} other {# hours}}', ['n' => $quantity]);
                    }
                }
            ],
            'traffic' => [
                'title' => Yii::t('app', 'Traffic'),
                'value' => function () {
                    return $this->getResourceByType('server_traf_max')->quantity; // Gb
                }
            ],
            'speed' => [
                'title' => Yii::t('app', 'Port speed'),
                'value' => function () {
                    return 1; // Gbit/s
                }
            ],
            'panel' => [
                'title' => Yii::t('app', 'Control panel'),
                'value' => function () {
                    $result = Yii::t('app', 'No panel / {hipanelLink}', ['hipanelLink' => 'HiPanel']); // todo: add faq link
                    if ($this->getResourceByType('isp5')->quantity > 0) {
                        $result .= ' / ' . Yii::t('app', 'ISP manager');
                    }

                    return $result;
                }
            ],
            'purpose' => [
                'title' => Yii::t('app', 'Purpose'),
                'value' => function () {
                    return Yii::t('app', $this->tariff->label); // todo: translate possible labels
                }
            ]
        ];
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->calculation['value']['usd']['value'];
    }

    /**
     * Finds required parts in $parts and sets them to [[parts]]
     * @param Part[] $parts array of parts
     */
    public function loadParts($parts)
    {
        $result = [];
        $part_ids = array_filter(ArrayHelper::getColumn($this->tariff->resources, 'object_id'));

        foreach ($parts as $id => $part) {
            if (in_array($id, $part_ids)) {
                $result[$id] = $parts[$id];
            }
        }

        $this->parts = $result;
    }

    public function getName()
    {
        return $this->tariff->name;
    }

    /**
     * @param string $type
     * @return mixed
     * @throws InvalidConfigException
     */
    public function getResourceValue($type)
    {
        if (isset($this->resourcesMap[$type]) && $this->resourcesMap[$type]['value'] instanceof \Closure) {
            return call_user_func($this->resourcesMap[$type]['value']);
        }

        throw new InvalidConfigException("Resource type \"$type\" is not declared in \$resourcesMap");
    }

    /**
     * @param string $type
     * @return string
     * @throws InvalidConfigException
     */
    public function getResourceTitle($type)
    {
        if (isset($this->resourcesMap[$type])) {
            if ($this->resourcesMap[$type]['title'] instanceof \Closure) {
                return call_user_func($this->resourcesMap[$type]['value']);
            } else {
                return $this->resourcesMap[$type]['title'];
            }
        }

        throw new InvalidConfigException("Resource type \"$type\" is not declared in \$resourcesMap");
    }

    /**
     * @param string $type
     * @return Part|null
     */
    public function getPartByType($type)
    {
        foreach ($this->parts as $part) {
            if ($part->model_type === $type) {
                return $part;
            }
        }

        return null;
    }

    /**
     * @param string $type
     * @return Resource|null
     */
    public function getResourceByType($type)
    {
        foreach ($this->tariff->resources as $resource) {
            if ($resource->type === $type) {
                return $resource;
            }
        }

        return null;
    }
}
