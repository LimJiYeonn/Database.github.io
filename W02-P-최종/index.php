<?php
  $link = mysqli_connect('localhost','root','123456','dbp');
  $query = "SELECT * FROM diary";
  $result = mysqli_query($link, $query);
  $list ='';
  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title' => 'Welcome',
    'description' => 'Diary is ...'
  );
  if( isset($_GET['id'])) {
    $query = "SELECT * FROM diary WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
    'title' => $row['title'],
    'description' => $row['description']
  );
  }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Diary</title>
   </head>
   <body>
     <h1><a href="index.php">Diary</a></h1>
     <ol><?= $list ?></ol>
     <a href="create.php">create</a>
     <h2>><?= $article['title'] ?></h2>
     <?= $article['description'] ?>
   </body>
 </html>
