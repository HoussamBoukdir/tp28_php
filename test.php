<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Learn PHP</h3>
    <?php  
    $nombre=rand(1,20);
    echo $nombre."<br/>";
    
    #operateur twenaire
    $x=(($nombre%2)? "est paire":"est impaire");
    echo $x;
    ?>
</body>
</html>
