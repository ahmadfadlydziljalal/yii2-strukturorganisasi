<?php

use ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model StrukturOrganisasi */
/* @var $form ActiveForm */
?>

<div class="struktur-organisasi-form">

    <?php $form = ActiveForm::begin([]); ?>

    <?php if (!$model->isNewRecord) : ?>
        <?= $form->field($model, 'parent_id')
            ->dropDownList(StrukturOrganisasi::mapIDToNamaDenganKode(), [
                'autofocus' => 'autofocus',
                'prompt' => '-'
            ])
        ?>
    <?php endif ?>

    <?= $form->field($model, 'tipe')->dropDownList(StrukturOrganisasi::optsTipe()) ?>
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'singkatan')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kode')->textInput(['maxlength' => true])->hint("Ganti spasi dengan underscore | Best Practice: GROUP_PERUSAHAAN_CABANG_DEPARTEMEN_JABATAN ") ?>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?= Html::a(FAS::icon(FAS::_WINDOW_CLOSE) . ' Tutup', ['index'], ['class' => 'btn btn-default']) ?>
            <?= Html::submitButton(FAS::icon(FAS::_SAVE) . ' Simpan', ['class' => 'btn btn-primary pull-right']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
