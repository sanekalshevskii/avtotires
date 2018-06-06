<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.05.2018
 * Time: 10:09
 */

namespace app\models;
use yii\db\ActiveRecord;


/*Array
(
    [1] => Array
    (
        [qty] => QTY
        [name] => NAME
        [price] => PRICE
        [img] => IMG
    )
    [10] => Array
    (
        [qty] => QTY
        [name] => NAME
        [price] => PRICE
        [img] => IMG
    )
)
    [qty] => QTY,
    [sum] => SUM
);*/

class Cart extends ActiveRecord{
    public function addToCart($product, $qty = 1){
//         проверяем есть ли добавляемый товара в корзине
        if (isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else{
            $_SESSION['cart'][$product->id] =[
                'cat_id' => $product -> cat_id,
                'qty' => $qty,
                'name' => $product -> name,
//                'price' => $product -> price,
                'img' => $product -> imgs . '.jpg'
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        //$_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }

    public function recalc($id)
    {
        if (!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
//        $sumMinus = $_SESSION['cart'][$id]['sum'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
//        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
    }
}