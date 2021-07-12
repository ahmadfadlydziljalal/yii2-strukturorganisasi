<?php

/* @var $this View */

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use ahmadfadlydziljalal\strukturorganisasi\components\helpers\OrganizationTree as Tree;
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

    <?= Html::a(FAS::icon(FAS::_SEARCH) . ' Kembali ke form',
        ['struktur-organisasi/generate-diagram'],
        [
            'class' => 'btn btn-primary',
            'style' => [
                    'margin-bottom' => '2em'
            ]
        ])
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
