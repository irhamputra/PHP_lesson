<div>
    <h4>Cart</h4>
    <table class="white">
        <thead>
        <tr>
            <th>Name</th>
            <th>Anzahl</th>
            <th>Preis</th>
        </tr>
        </thead>
        <tbody>
    <?php foreach($_SESSION['cart'] as $k => $item): ?>
        <tr>
            <td>
                <?= $item['name'] ?>
            </td>
            <td>
                <?= $item['count'] ?>
            </td>
            <td>
                <?= $item['price'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div>
    <h4>Shipping</h4>
    <p style="font-size: 20px;">
        Name: <?= $_SESSION['shipping']['name'] ?><br/>
        Nachname: <?= $_SESSION['shipping']['lastname'] ?><br/>
        Stadt: <?= $_SESSION['shipping']['city'] ?><br/>
    </p>
</div>

<div>
    <h4>payment</h4>
    <p style="font-size: 20px;">
        Anbieter: <?= $_SESSION['payment']['cc_name'] ?><br/>
        Nummer: <?= $_SESSION['payment']['cc_number'] ?><br/>
        Gültig bis: <?= $_SESSION['payment']['cc_expires'] ?><br/>
        Prüfziffer: <?= $_SESSION['payment']['cc_id'] ?><br/>
    </p>
</div>

<div>
    <a href="" class="btn">Bestellung abschließen</a>
</div>