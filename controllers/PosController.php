<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\pos\PosForm;

class PosController extends Controller {

    public function actionIndex() {
        return $this->render('pos');
    }

}
