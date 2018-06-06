<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.05.2018
 * Time: 18:42
 */

namespace app\controllers;
use app\models\Table168;
use app\models\Table225;
use Yii;



class CardProductController extends AppController{
    public function actionTire($id){
        //получаем id товара
        $id = Yii::$app->request->get('id');
        $table_tire = Table168::findOne($id);
        if(empty($table_tire)){
            throw new \yii\web\HttpException(404, 'Такого товара нет.');
        }

        return $this->render('tire',compact('table_tire'));

    }

    public function actionDisk($id){
        $id = Yii::$app->request->get('id');
        $table_disk = Table225::findOne($id);
        if(empty($table_disk)){
            throw new \yii\web\HttpException(404, 'Такого товара нет.');
        }

        return $this->render('disk',compact('table_disk'));
    }

}