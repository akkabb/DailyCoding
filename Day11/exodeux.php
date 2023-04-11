<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="exo1.php">retour exo 1</a>
    </p>
    <?php 
            if ($_SERVER["REQUEST_METHOD"] === 'POST') 
            {
            $name= htmlspecialchars($_REQUEST['lname']);
                if(empty($name)){
                echo "Name is empty";
                }else{
                echo $name;
                }
            }
    ?>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="nom">
            <label for="lname">Nom</label>    
            <input type="text" name="lname" id="">
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Valider">
        </div>
    </form>
    </div>
</body>
</html>