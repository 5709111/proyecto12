<?php include_once dirname(__DIR__) . ROOT . 'header.php'?>
<?php $verify = false; $subtotal = 0; $send = 0; $discount = 0; $user_id = $data['user_id']; ?>
<h2 class="text-center">Carrito de compras</h2>
<format action="<?= ROOT ?>cart/update" method="POST">
    <table class="table table-stripped" width="100%">
        <tr>
            <th width="12%">Producto</th>
            <th width="58%">Descripcion</th>
            <th width="1.8%">Cant.</th>
            <th width="10.12%">Precio</th>
            <th width="10.12%"></th>
            <th width="1%"></th>
            <th width="6.5%"></th>

        </tr>
        <?php foreach ($data['data'] as $key => $value): ?>
        <?php endforeach;
    </table>
</format>
<?php include_once dirname(__DIR__) . ROOT . 'footer.php'?>
