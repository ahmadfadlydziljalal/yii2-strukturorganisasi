<?php


/* @var $this View */
/* @var $model DiagramStrukturOrganisasi */

use ahmadfadlydziljalal\strukturorganisasi\models\form\DiagramStrukturOrganisasi;
use ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

$this->title = 'Generate Diagram Struktur Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="struktur-organisasi-form">

    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([]); ?>

    <?= $form->field($model, 'parent_id')
        ->dropDownList(StrukturOrganisasi::mapIDToNamaDenganKode(), [
            'autofocus' => 'autofocus'
        ])
        ->hint("Pilih Parent / Node Yang Paling Atas")
    ?>

    <div class="row">
        <div class="col-sm-12">
            <?= Html::a(FAS::icon(FAS::_WINDOW_CLOSE) . ' Tutup', ['index'], ['class' => 'btn btn-default']) ?>
            <?= Html::submitButton(FAS::icon(FAS::_SEARCH) . ' Cari', ['class' => 'btn btn-primary pull-right']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
