<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionSay($message = 'Привет') {
        return $this->render('say', ['message' => $message]);
    }

}
