<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseau Social</title>
</head>
<body>
    <h1>Social NetWork</h1>
        <?php 
        foreach ($user as $key => $values) {
            
            // var_dump($user);
            echo implode(',',$user[$key]);
            echo "<br>";
            
        }
    ?>
</body>
</html>