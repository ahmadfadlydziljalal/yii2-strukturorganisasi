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

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?= Html::a(FAS::icon(FAS::_PLUS_CIRCLE) . ' Tambah', ['create'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(FAS::icon(FAS::_TREE) . ' Generate Diagram', ['generate-diagram'], ['class' => 'btn btn-info']) ?>
            <?= Html::a(FAS::icon(FAS::_REDO) . ' Reload', ['index'], ['class' => 'btn btn-default pull-right']) ?>
        </div>
    </div>

    <?php try {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => require(__DIR__ . '/_columns.php'),
            'tableOptions' => [
                'class' => 'table table-striped table-bordered'
            ],
            'layout' => 
                "<br/>{items}\n" .
                "<div class= 'row'><div class='col-sm-12'> {pager}" .
                "<div class='pull-right'>{summary}\n</div> </div></div>"
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>

</div>