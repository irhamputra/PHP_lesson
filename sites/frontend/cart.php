<!-- Note: Session 3 -->
<?php if (!empty($_SESSION['cart']) && isset($_SESSION['cart'])): ?>
    <table class="white">
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
        foreach ($_SESSION['cart'] as $key => $item) : ?>
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
    <a class="btn" href="<?= _BASE_ ?>?p=shipping">Weiter! </a>
<?php else : ?>
    <h4>Kein Produkt im Warenkorb.</h4>
    <p>Besuchen sie unseren <a href="index.php?p=shop">Shop</a></p>
<?php endif; ?>