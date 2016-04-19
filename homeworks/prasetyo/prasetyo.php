<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hausaufgaben</title>
</head>
<body>

</body>
</html>
<html>
    <head>
        <title>Test</title>
    </head>
<body>

    <?php
        echo "Hausaufgaben";
    ?>

    <?php

        $handle = fopen("prasetyo.txt", "r");

        if ($handle){
            echo "YIPPIE!!!";
        }
        else {
            echo "Oouch Sorry!!";
        }
?>


<p><strong>Hier ist mein Hausaufgabe</strong><p>

        <?php
            $dokument1 = file_get_contents('prasetyo.txt');
            echo $dokument1;
        ?>

<p>Hier sind nur die Buchstaben des Dokuments:<p>

    <?php
        $data = fopen("prasetyo.txt","r");
        $daten = fread($data, 7);
        echo $daten;
    ?>
</body>
</html>


