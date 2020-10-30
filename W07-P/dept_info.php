<?php
    //데이터베이스에 접속
    $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');

    if (mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요. ";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }




    //쿼리
    $query = "
        SELECT d.dept_name, e.first_name, e.last_name
        FROM departments d inner join dept_manager m on d.dept_no = m.dept_no
        inner join employees e on e.emp_no = m.emp_no limit 20";


    //쿼리를 링크에 던지기
    $result = mysqli_query($link, $query);

    //결과값 화면에 출력
    $article = '';
    while ($row = mysqli_fetch_array($result)) {
        $article .= '<tr><td>';
        $article .= $row['dept_name'];
        $article .= '</td><td>';
        $article .= $row['first_name'];
        $article .= '</td><td>';
        $article .= $row['last_name'];


        $article .= '</td></tr>';
    }

    //이제 연결을 끊어줌
    mysqli_free_result($result);
    mysqli_close($link);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> 부서 직원 정보 </title>
        <style>
            body{
                font-family: Consolas, monospace;
                font-family: 12px;
            }
            table{
                width : 100%
            }
            th, td{
                padding: 10px;
                border-bottom: 1px solid #dadada;
            }
        </style>

    </head>
    <body>
            <h2><a href = "index.php">직원 관리 시스템</a> | 부서 정보</h2>
            <table>
                <tr>
                    <th>dept_name</th>
                    <th>first_name</th>
                    <th>last_name</th>

                </tr>

                <?= $article?> <!--article변수에 저장된 값을 쭉 넣어준다.-->
            </table>
    </body>
</html>
