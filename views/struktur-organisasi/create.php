<?php

/* @var $this yii\web\View */
/* @var $model StrukturOrganisasi */

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi;

$this->title = 'Tambah Struktur Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
TreeFlexAsset::register($this);
?>

<div class="struktur-organisasi-create">

    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
