<?php
    $link = mysqli_connect('localhost', 'root', '123456', 'midterm');

    $query = "SELECT author, name, genre, rating, review
              from best
              where author like ‘D%’ limit 50;";
    $result = mysqli_query($link, $query);

    $emp_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['author'].'</td>';
        $emp_info .= '<td>'.$row['name'].'</td>';
        $emp_info .= '<td>'.$row['genre'].'</td>';
        $emp_info .= '<td>'.$row['rating'].'</td>';
        $emp_info .= '<td>'.$row['review'].'</td>';
        $emp_info .= '</tr>';
    }

    // mysqli_free_result($result);
    // mysqli_close($link);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>아마존 베스트셀러 정보 시스템</title>
</head>

<body>
    <h2><a href="index.php">아마존 베스트셀러 정보 시스템</a> | 저자 검색</h2>
    <table border="1">
        <tr>
            <th>author</th>
            <th>name</th>
            <th>genre</th>
            <th>rating</th>
            <th>review</th>
        </tr>
        <?=$emp_info?>
    </table>
</body>

</html>
