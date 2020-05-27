<?php
include("config.php");
?>

<title><?php echo $title_name?></title>

<link rel="stylesheet" href="/css/style-hat.css">

<div class="header">

  <h1 class='title'>
    <?php echo $title_main ?>
  </h1>

  <ul class="menu">
    <div class="menu_element"><li><a href="/">Главная</a></li></div>
    <div class="menu_element"><li><a href="/pages/blog.php">Блог</a></li></div>
    <div class="menu_element"><li><a href="/pages/contact.php">Контакты</a></li></div>
  </ul>

</div>
