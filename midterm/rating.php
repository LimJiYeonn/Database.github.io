<?php
    $link = mysqli_connect('localhost', 'root', '123456', 'midterm');

    $query = "SELECT rating, name, author, review, genre
              from best
              order by rating desc limit 100";
    $result = mysqli_query($link, $query);

    $emp_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['rating'].'</td>';
        $emp_info .= '<td>'.$row['name'].'</td>';
        $emp_info .= '<td>'.$row['author'].'</td>';
        $emp_info .= '<td>'.$row['review'].'</td>';
        $emp_info .= '<td>'.$row['genre'].'</td>';
        $emp_info .= '</tr>';
    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>아마존 베스트셀러 정보 시스템</title>
</head>

<body>
    <h2><a href="index.php">아마존 베스트셀러 정보 시스템</a> | 평가점수 조회</h2>
    <table border="1">
        <tr>
            <th>rating</th>
            <th>name</th>
            <th>author</th>
            <th>review</th>
            <th>genre</th>
        </tr>
        <?=$emp_info?>
    </table>
    <td><a href = "rating_next1.php">next</a></td>


</body>

</html>
