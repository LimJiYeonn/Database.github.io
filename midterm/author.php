<?php
    $link = mysqli_connect('localhost', 'root', '123456', 'midterm');
    $category = $_GET['category'];
    $search = $_GET['search'];
    // $db = new mysqli('localhost', 'root', '123456', 'midterm');

    function mq($sql)
    {
        global $link;
        return $link->query($sql);
    }
?>

<!DOCTYPE html>
  <div class="container">
    <div id="board_area">
      <?php
        if ($category == 'name') {
            $keyword = '제목';
        } elseif ($category == 'author') {
            $keyword = '작가';
        } else {
            $keyword = '장르';
        }
      ?>
        <h1>'<?=$keyword?>'에서 '<b><?=$search?></b>' 검색결과</h1>
        <h4>는 다음과 같습니다. </h4><br>
        <table>
          <tr>
            <th>제목</th>
            <th>작가</th>
            <th>장르</th>
            <th>평점</th>
            <th>리뷰</th>
          </tr>
<?php
  $sql = mq("SELECT author, name, genre, rating, review
            from best
            where '$category' like '%{$search}%'");

?>

        </table>
    </div>
  </div>
</html>
