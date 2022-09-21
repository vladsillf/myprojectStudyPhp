<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Визитка</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>






    <div class="wrapper">
            <?php include 'menu.inc.php' ?>
            <?php include 'logo.inc.php' ?>
    </div>




        <div class="content">
<?php
echo "Меня зовут $name " . "$surname" . "." . '<br>' . '<br>';
echo "Мне " . "$age" . " года" . '<br>';
echo "Я живу в г. ", $city, '<br>';
?>
        </div>

        <div class="content2">
<?php
echo $privetstvie;
?>

        </div>
             <div class="knowledge">
                 <?php  include 'knowledge.inc.php'; ?>
             </div>


        <div class="avatar">
             <img src="img/koshka_na_klave.gif" alt="avatar">
        </div>







<footer>
<?php include 'footer.inc.php' ?>
</footer>




</body>

</html>


