<?php foreach($arrProducts as $id => $product) : ?>
    <div class="row">
        <p>ID: <?= $id ?></p>
        <p>Name: <?= $product['name'] ?></p>
        <p>Name: <?= $product['details'] ?></p>
        <p>Name: <?= number_format($product['price'], 2, ',', '.') ?> &euro;</p>
        <p><a href="<?= _BASE_ ?>?p=shop&addItem=<?=$id?>">In den Warenkorb</a></p>
    </div>
<?php endforeach; ?>
