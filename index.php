<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DIY Cake</title>
</head>
<body>
    <?php
        $cakeShape = array("Heart", "Rectangle", "Square", "Round");
        $cakeFlavor = array("Chocolate", "Vanilla", "Lemon", "Cheesecake");
        $cakeToppings = array("Cookies", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows");
    ?>

    <h1>D-I-Y Cake</h1>

    <table class="add-border add-padding">
        <tr>
            <th class="inc-text-size add-border">Cake Shape</th>
            <th class="inc-text-size add-border">Cake Flavor</th>
            <th class="inc-text-size add-border">Cake Toppings</th>
        </tr>
        <tr>
            <td class="add-border">
                <?php foreach($cakeShape as $cs): ?>
                    <input type="radio" name="cakeshape" value="<?php echo $cs; ?>">
                    <?php echo $cs; ?><br/>
                <?php endforeach; ?>
            </td>
            <td class="add-border">
                <?php foreach($cakeFlavor as $cf): ?>
                    <input type="radio" name="cakeflavor" value="<?php echo $cf; ?>">
                    <?php echo $cf; ?><br/>
                <?php endforeach; ?>
            </td>
            <td class="add-border">
                <?php foreach($cakeToppings as $ct): ?>
                    <input type="radio" name="caketoppings" value="<?php echo $ct; ?>">
                    <?php echo $ct; ?><br/>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>

</body>
</html>