<?php
    $link = mysqli_connect('localhost', 'root', '123456', 'midterm');

    $query = "SELECT year, name, author, rating
              From best
              Where rating >= 4.5
              Order by year desc limit 100";
    $result = mysqli_query($link, $query);

    $emp_info = '';
    while ($row = mysqli_fetch_array($result)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['year'].'</td>';
        $emp_info .= '<td>'.$row['name'].'</td>';
        $emp_info .= '<td>'.$row['author'].'</td>';
        $emp_info .= '<td>'.$row['rating'].'</td>';
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
    <h2><a href="index.php">아마존 베스트셀러 정보 시스템</a> | (3) 최근 베스트 셀러 중 별점이 4.5이상인 책</h2>
    <table border="1">
        <tr>
            <th>year</th>
            <th>name</th>
            <th>author</th>
            <th>rating</th>
        </tr>
        <?=$emp_info?>
    </table>
</body>

</html>
