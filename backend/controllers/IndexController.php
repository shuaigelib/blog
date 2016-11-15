<?php
namespace backend\controllers;

/**
 * 控制器
 * @author Administrator
 *
 */
class IndexController extends CommonController{
    
    public function actionIndex() {
        return $this->renderPartial('index');
    }
    public function actionIndex2() {
        echo 2;
    }
}