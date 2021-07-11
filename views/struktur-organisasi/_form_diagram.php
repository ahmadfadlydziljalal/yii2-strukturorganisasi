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

    <?php $form = ActiveForm::begin([]); ?>

    <?= $form->field($model, 'parent_id')
        ->dropDownList(StrukturOrganisasi::mapIDToNamaDenganKode(), [
            'autofocus' => 'autofocus'
        ])
        ->hint("Pilih Parent / Node Yang Paling Atas")
    ?>

    <?= Html::a(FAS::icon(FAS::_WINDOW_CLOSE) . ' Tutup', ['index'], ['class' => 'btn btn-secondary']) ?>
    <?= Html::submitButton(FAS::icon(FAS::_SEARCH) . ' Cari', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>
