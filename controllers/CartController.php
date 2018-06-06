<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2018
 * Time: 9:48
 */

namespace app\controllers;
use app\models\Cart;
use app\models\Table168;
use app\models\Table225;
use Yii;


class CartController extends AppController
{
    public function actionAdd(){
        //в переменную id получаем данные из массива get
        $id =Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
//        print_arr(1);

//        return json_encode(['status'=>1, 'id'=>$id]);

        //проверяем что товар достаали из бд
        if( Yii::$app->request->get('type') == 'disk' ){
            $product = Table225::findOne($id);
        } else if( Yii::$app->request->get('type') == 'tire' ) {
            $product = Table168::findOne($id);
        }
        if (empty($product)) return false;
        //открываем сессию
        $session = Yii::$app->session;
        $session->open();
        //создаем объект модели
        $cart = new Cart();
        $cart-> addToCart($product, $qty);
//        if (!Yii::$app->request-isAjax){
//            return $this->redirect(Yii::$app->request->referrer);
//        }
//        //убираем шаблон
        $this->layout = false;

//        return json_encode(['status'=>1, 'data'=>$_SESSION]);
        return $this->render('cart-modal', compact('session'));
       }

    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
//        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem(){
        $id =Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));

    }

    public function actionShow(){
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView(){
        return $this->render('view');
    }
}