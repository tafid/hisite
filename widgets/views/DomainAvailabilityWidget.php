<!-- DOMAIN SEARCH -->
<div class="domainavailability">
    <div class="row">
        <div class="col-sm-12 col-md-9 center-block">
            <h1 class="text-center"><?= Yii::t('app', 'Domains search and registration') ?></h1>
            <div class="domain-form-container">
                <form action="" method="post" class="material">
                    <div class="row">
                        <input type="hidden" name="direct" value="true" />
                        <div class="col-sm-9">
                            <input type="text" name="domain" placeholder="<?= Yii::t('app', 'Domain Search') ?>">
                        </div>
                        <div class="col-sm-2">
                            <select name="ext" data-placeholder="<?= Yii::t('app', 'Zone') ?>">
                                <option>.com</option>
                                <option>.net</option>
                                <option>.org</option>
                                <option>.eu</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- END OF DOMAIN SEARCH -->
