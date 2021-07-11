<?php

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use rmrevin\yii\fontawesome\FAS;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel ahmadfadlydziljalal\strukturorganisasi\models\search\StrukturOrganisasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Struktur Organisasi';
$this->params['breadcrumbs'][] = $this->title;
TreeFlexAsset::register($this);
?>

<div class="struktur-organisasi-index">

    <?= Html::a(FAS::icon(FAS::_PLUS_CIRCLE) . ' Tambah', ['create'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a(FAS::icon(FAS::_TREE) . ' Generate Diagram', ['generate-diagram'], ['class' => 'btn btn-info']) ?>
    <?= Html::a(FAS::icon(FAS::_REDO) . ' Reload', ['index'], ['class' => 'btn btn-outline-dark']) ?>

    <?php try {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => require(__DIR__ . '/_columns.php'),
            'tableOptions' => [
                'class' => 'table table-striped'
            ],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>

</div>