<?php
use yii\helpers\Html;
?>
<?php if (!empty($session['cart'])):?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Картинка</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item): ?>
                <tr>
                    <td>
                    <?php if ($item['cat_id'] == 225) {
                            echo Html::img("@web/images/225_all/{$item['img']}", ['alt' => $item['name'], 'style' => ['width' => '50px']]);
                        }else if ($item['cat_id'] == 168){
                            echo Html::img("@web/images/168_all/{$item['img']}", ['alt' => $item['name'], 'style' => ['width' => '50px']]);
                        }
                        ?></td>

                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
<!--                    <td>--><?//= $item['price']?><!--</td>-->
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Итого: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
<!--                <td>--><?//= $session['cart.sum']?><!--</td>-->
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>

