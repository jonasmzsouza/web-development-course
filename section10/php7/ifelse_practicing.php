<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IfElse: Practicing</title>
</head>
<body>

    <?php
        $user_has_store_card = true;
        $total_purchase = 99;

        $shipping_cost = 50;
        $shipping_discount_received = false;

        if($user_has_store_card  && $total_purchase >= 100) {
            $shipping_cost = 0;
            $shipping_discount_received = true;
        }

    ?>

    <h1>Order details</h1>
    <p>Has store card?
        <?php
        if ($user_has_store_card) {
            echo 'YES';
        } else {
            echo 'NO';
        }
        ?>
    </p>

    <p>Total purchase: <?= $total_purchase ?></p>

    <p>Shipping discount received?
        <?php
        if ($shipping_discount_received) {
            echo 'YES';
        } else {
            echo 'NO';
        }
        ?>
    </p>

    <p>Shipping cost: <?= $shipping_cost ?></p>

</body>
</html>