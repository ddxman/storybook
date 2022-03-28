<!DOCTYPE html>
<html>

<head>
    <title>My first php page</title>
</head>

<body>
    <p>Тест php страницы</p>
    <?php
        $connection = mysqli_connect('127.0.0.1', 'root', '', 'test_database');
        $results = mysqli_query($connection, "SELECT TABLE_NAME from INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_SCHEMA='test_database'");
        $r2 = $results->fetch_all(MYSQLI_ASSOC);
        foreach($r2 as $rr){
            echo $rr['TABLE_NAME'];
            echo '</br>';
            //SELECT TABLE_NAME from INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_CATALOG='test_database'
        }

        function show_categories($connection)
        {
            if ($connection) {
                echo '<h1>Подключено к БД</h1>';
                $result = mysqli_query($connection, "SELECT * from test_database.articles_catagories");
                if (mysqli_num_rows($result) == 0) {
                    echo 'Категории не найдены';
                } else {
                    $res = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($res as $r) {
                        $articles_count = mysqli_query($connection, "SELECT COUNT('id') AS 'total_count' FROM test_database.articles WHERE categories_id =" . $r['id']);
                        $articles_count = mysqli_fetch_assoc($articles_count);
                        echo '<h2><li>' . $r['title'] . ' ' . ($articles_count['total_count']) . ' ' . '</li></h2>';
                    }
                }
            } else {
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                exit();
            }
        }

        function dates(){
            echo date('d.m.Y h:i');
            $start_date = '2016-12-10 14:00:00';
            $start_date_timestamp = strtotime($start_date);
            echo $start_date_timestamp . '</br>';
            echo time(). '</br>';
            $diff = time() - $start_date_timestamp. '</br>';
            echo (($diff/60)/60)/24;
        }

   

        

    //show_categories($connection);
    //dates();
    
    mysqli_close($connection);
    ?>

<form method="GET" action="/handler.php">
    <input type="text" name = "login" placeholder="Логин">
    <input type="text" name ="password" placeholder="Пароль">
    <hr>
    <input type="submit" value="Отправить">
    </form>

    <?php
    echo "<SELECT name='ListBox'>";
    foreach($r2 as $rr){
        echo "<OPTION>$rr[TABLE_NAME]</OPTION>";
    }
    
    echo "</SELECT><br><br>";
    ?>
</body>

</html>
