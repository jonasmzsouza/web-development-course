<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - IfElse: Ternary Operator</title>
</head>
<body>

    <?php
        $user_has_store_card = false;
        $total_purchase = 350;

        $shipping_cost = 50;
        $shipping_discount_received = true;

        if($user_has_store_card  && $total_purchase >= 400) {
            $shipping_cost = 0;
        } else if($user_has_store_card  && $total_purchase >= 300) {
            $shipping_cost = 10;
        } else if($user_has_store_card  && $total_purchase >= 100) {
            $shipping_cost = 25;
        } else {
            $shipping_discount_received = false;
        }
    ?>

    <h1>Order details</h1>
    <p>Has store card?
        <?= $user_has_store_card ? 'YES' : 'NO'?>
    </p>

    <p>Total purchase: <?= $total_purchase ?></p>

    <p>Shipping discount received?
        <?= $user_has_store_card ? 'YES' : 'NO'?>
    </p>

    <p>Shipping cost: <?= $shipping_cost ?></p>

</body>
</html>