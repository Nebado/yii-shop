<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sum</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($session['cart'] as $id => $item): ?>
                <tr>

                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><?= $item['price'] * $item['price']?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Total: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="3">Sum: </td>
                <td><?= $session['cart.sum']?></td>
            </tr>           
        </tbody>
    </table>
</div>
