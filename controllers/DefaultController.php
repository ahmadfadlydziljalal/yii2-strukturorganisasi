<?php

namespace ahmadfadlydziljalal\strukturorganisasi\controllers;

use yii\web\Controller;

/**
 * Default controller for the `Module` module
 */
class DefaultController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderContent("Halaman Default Module Struktur Organisasi");
    }
}
