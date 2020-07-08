<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th><span class="glyphicon glyphicon-remove"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($session['cart'] as $id => $item): ?>
                    <tr>
                        <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 50])?></td>
                        <td><?= $item['name']?></td>
                        <td><?= $item['qty']?></td>
                        <td><?= $item['price']?></td>
                        <td><span class="glyphicon glyphicon-remove text-danger del-item" data-id="<?= $id ?>"></span></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Total: </td>
                    <td><?= $session['cart.qty']?></td>
                </tr>
                <tr>
                    <td colspan="4">Sum: </td>
                    <td><?= $session['cart.sum']?></td>
                </tr>           
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Cart is empty</h3>
<?php endif; ?>
