<?php

use ahmadfadlydziljalal\strukturorganisasi\assets\TreeFlexAsset;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \ahmadfadlydziljalal\strukturorganisasi\models\StrukturOrganisasi */


$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

TreeFlexAsset::register($this);
?>
<div class="struktur-organisasi-view">

    <div class="row">
        <div class="col-sm-12">
            <?= Html::a(FAS::icon(FAS::_ARROW_LEFT) . ' Kembali',
                Yii::$app->request->referrer, ['class' => 'btn btn-default']) ?>

            <?= Html::a(FAS::icon(FAS::_PLUS) . ' Buat Lagi',
                ['create'], ['class' => 'btn btn-primary']) ?>

            <?= Html::a(FAS::icon(FAS::_LIST) . ' Index', ['index'],
                ['class' => 'btn btn-primary']) ?>

            <?= Html::a(FAS::icon(FAS::_PEN) . ' Update',
                ['update', 'id' => $model->id, 'page' => Yii::$app->request->getQueryParam('page', null)], ['class'
                => 'btn btn-primary']) ?>

            <?= Html::a(FAS::icon(FAS::_TRASH) . ' Hapus',
                ['delete', 'id' => $model->id, 'page' => Yii::$app->request->getQueryParam('page', null)], [
                    'class' => 'btn btn-danger pull-right',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]);
            ?>
        </div>
    </div>
    <br/>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'parent_id',
                'value' => function ($model) {
                    return $model->parent->nama;
                }
            ],
            'tipe',
            'nama',
            //'alias',
            'kode',
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
            ],
            [
                'attribute' => 'created_by',
                /*'value' => function ($model) {
                    return app\models\User::findOne($model->created_by)->username;
                }*/
            ],
            [
                'attribute' => 'updated_by',
                /*'value' => function ($model) {
                    return app\models\User::findOne($model->updated_by)->username;
                }*/
            ],
        ],
    ]) ?>

</div>