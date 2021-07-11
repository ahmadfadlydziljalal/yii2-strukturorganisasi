<?php
namespace ahmadfadlydziljalal\strukturorganisasi\assets;
use yii\web\AssetBundle;

/**
 * Pohon struktur organisasi.
 *
 * @author dzil <ahmadfadlydziljalal@gmail.com>
 * @since 1.0
 */
class TreeFlexAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ahmadfadlydziljalal/assets';
    public $css = [ 
        'css/tree-flex.css',
    ];
}