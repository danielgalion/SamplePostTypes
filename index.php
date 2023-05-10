<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszulki</title>
</head>
<body>
    <table>
        <tr>
            <td>SKU</td>
            <td>typ przesyłki</td>
        </tr>
        
        <?php
            require_once('assets/data.php');
            require_once('controllers/SendController.php');

            foreach ($sku as $cloth) {
                echo '<tr>';
                echo '<td>';
                echo $cloth[0];
                echo '</td>';
                echo '<td>';
                echo (new \controllers\SendController($sendTypes))->typeOnSizes($cloth[1], $cloth[2], $cloth[3])->getType();
                echo '</td>';
                echo '</tr>';
            } 
        ?>

    </table>
</body>
</html>