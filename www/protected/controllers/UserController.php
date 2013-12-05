<?php
/**
 * Created by PhpStorm.
 * User: vishin
 * Date: 05.12.13
 * Time: 15:46
 */

class UserController extends CController{
    public function actionLogout(){
        Yii::app()->user->logout();
        $this->forward('/site/index');
    }
} 