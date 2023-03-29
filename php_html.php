<?php

$zorritos = ["https://images.pexels.com/photos/15007333/pexels-photo-15007333.jpeg?auto=compress&cs=tinysrgb&w=300&lazy=load", 
            "https://images.pexels.com/photos/15327232/pexels-photo-15327232.jpeg?auto=compress&cs=tinysrgb&w=300&lazy=load", 
            "https://images.pexels.com/photos/15567698/pexels-photo-15567698.jpeg?auto=compress&cs=tinysrgb&w=300&lazy=load]",
];            



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP con HTML</title>
</head>
<body>
    <h1>Hola! Esto es HTML desde PHP!</h1>

    <?php  foreach($zorritos as $zorrito) { ?>
        <img src="<?php echo $zorrito; ?>">
    <?php } ?>
</body>
</html>