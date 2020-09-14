<?php
  $link = mysqli_connect("localhost","root","123456","dbp");
  $query = "
    INSERT INTO diary (
      title,
      description,
      date
    ) VALUES (
      'Second day of studying database',
      'Today is ...',
      now()
    )";

  $result = mysqli_query($link, $query);

  if($result == false){
    echo mysqli_error($link);
  }
?>
