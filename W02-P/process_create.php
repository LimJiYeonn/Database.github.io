<?php
  $link = mysqli_connect("localhost", "root", "123456", "dbp");
  $query = "
    INSERT INTO diary
      (title, description, date)
      VALUES (
        '{$_POST['title']}',
        '{$_POST['description']}',
        now()
        )
  ";

  $result = mysqli_query($link, $query);

  if($result == false){
    echo '저장하는 과정에서 문제가 발생했을때 관리자에게 문의하세요';
    error_log(mysqli_error($link));//관리자가 볼 수 있게 내부 로그에 저장한다.
  }else{
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
?>
