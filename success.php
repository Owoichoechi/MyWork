<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="form.php"><button class="button button-block"/>Continue</button></a>
</div>
</body>
</html>