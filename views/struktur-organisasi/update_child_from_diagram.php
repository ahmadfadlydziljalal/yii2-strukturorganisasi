<?php

use ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi;

/* @var $this yii\web\View */
/* @var $model StrukturOrganisasi */
/* @var $parent StrukturOrganisasi */

$this->title = 'Update Struktur Organisasi: '  . $parent->nama;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="struktur-organisasi-update">
    <?= $this->render('_form_child_from_diagram', [
        'model' => $model,
    ]) ?>
</div>
