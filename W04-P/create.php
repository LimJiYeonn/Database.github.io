<?php
  $link = mysqli_connect('localhost', 'root', '123456', 'dbp');
  $query = "SELECT * FROM diary";
  $result = mysqli_query($link, $query);
  $list ='';
  while ($row = mysqli_fetch_array($result)) {
      $list = $list."<li><a
      href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title' => 'Welcome',
    'description' => 'Database is ...'
  );

  $update_link='';

  if (isset($_GET['id'])) {
      $query = "SELECT * FROM diary WHERE id={$_GET['id']}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
      $update_link = '<a href = "update.php?id'.$_GET['id'].'">update</a>';
  }

  $query = "SELECT * FROM author";
  $result = mysqli_query($link, $query);
  $select_from = '<select name = "author_id">';
  while ($row = mysqli_fetch_array($result)) {
      $select_from .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $select_from .= '</select>';


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>DATABASE</title>
   </head>
   <body>
     <h1><a href="index.php">DATABASE</a></h1>
     <ol><?= $list ?></ol>
     <form action="process_create.php" method="POST">
       <p><input type="text" name="title" placeholder="title"></p>
       <p><textarea name="description" placeholder="description"></textarea></p>
       <?= $select_from ?>
       <p><input type="submit"></p>
     </form>
   </body>
 </html>
