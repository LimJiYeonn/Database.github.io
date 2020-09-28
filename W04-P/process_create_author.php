<?php
  $link = mysqli_connect("localhost", "root", "123456", "dbp");
  $filtered = array(
    'name' => mysqli_real_escape_string($link, $_POST['name']), //값을 입력하면 post방식으로 넘어온다
    'profile' => mysqli_real_escape_string($link, $_POST['profile'])

  );

  $query = "
    INSERT INTO author
      (name, profile)
      VALUES (
        '{$filtered['name']}',
        '{$filtered['profile']}'
        )
  ";

  $result = mysqli_query($link, $query);
  if ($result == false) {
      echo '저장하는 과정에서 문제가 발생했습니다. 관라자에게 문의하세요.';
      error_log(mysqli_error($link));
  } else {
      header('Location: author.php');
  }
