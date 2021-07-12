<?php

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi */

$this->title = 'Update Struktur Organisasi: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

TreeFlexAsset::register($this);
?>
<div class="struktur-organisasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
