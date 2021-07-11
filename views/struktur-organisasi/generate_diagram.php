<?php

/* @var $this View */

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use ahmadfadlydziljalal\strukturorganisasi\components\helpers\OrganizationTree As Tree;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\web\View;

/* @var $nodes array */

$this->title = 'Generate Diagram Struktur Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

TreeFlexAsset::register($this);
?>

<div class="struktur-organisasi-diagram">

    <?= Html::a(FAS::icon(FAS::_SEARCH) . ' Back To Form',
        ['struktur-organisasi/generate-diagram'],
        ['class' => 'btn btn-primary'])
    ?>

    <?= Html::beginTag("div", [
        'class' => 'tf-tree',
        'style' => [
            'white-space' => 'normal',
        ]
    ]); ?>

    <?= Tree::buildTreeOutAsHtmlUnOrderedList($nodes); ?>
    <?= Html::endTag("div"); ?>

</div>
