<!-- Note: Session 3 -->
<pre><?php // print_r($_SESSION); ?></pre>
<?php // unset($_SESSION['cart'][0]) ?>
<table class="striped">
    <thead>
        <tr>
            <th>Artikel</th>
            <th>Anzahl</th>
            <th>Preis</th>
        </tr>
    </thead>
    <tbody>

    <?php
    
    $total = 0;
    foreach($_SESSION['cart'] as $key => $item) : ?>
        <tr>
            <td><?= $item["name"] ?></td>
            <td><?= $item["count"] ?></td>
            <td><?= number_format($item["price"], 2, ",", ".") ?> &euro;</td>
        </tr>
        <?php $total += $item['price']; ?>
    <?php endforeach; ?>

    </tbody>
    <tfoot>
    <tr>
        <td></td>
        <td>Summe:</td>
        <td> <?= number_format($total, 2, ",", ".") ?> &euro; </td>
    </tr>
    </tfoot>
</table>