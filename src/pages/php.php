<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require_once 'connection.php'; // подключаем скрипт

    if (
        isset($_POST['name']) && isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['name3'])
        && isset($_POST['name4']) && isset($_POST['name5']) && isset($_POST['name6']) && isset($_POST['name7'])
        && isset($_POST['name8']) && isset($_POST['name9'])
    ) {

        // подключаемся к серверу
        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

        // экранирования символов для mysql
        $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
        $name1 = htmlentities(mysqli_real_escape_string($link, $_POST['name1']));
        $name2 = htmlentities(mysqli_real_escape_string($link, $_POST['name2']));
        $name3 = htmlentities(mysqli_real_escape_string($link, $_POST['name3']));
        $name4 = htmlentities(mysqli_real_escape_string($link, $_POST['name4']));
        $name5 = htmlentities(mysqli_real_escape_string($link, $_POST['name5']));
        $name6 = htmlentities(mysqli_real_escape_string($link, $_POST['name6']));
        $name7 = htmlentities(mysqli_real_escape_string($link, $_POST['name7']));
        $name8 = htmlentities(mysqli_real_escape_string($link, $_POST['name8']));
        $name9 = htmlentities(mysqli_real_escape_string($link, $_POST['name9']));

        // создание строки запроса
        $query = "INSERT INTO person VALUES(NULL, '$name','$name1','$name2','$name3','$name4','$name5','$name6','$name7','$name8','$name9')";

        // выполняем запрос
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result) {
            echo "<span style='color:blue;'>Данные добавлены</span>";
        }
        // закрываем подключение
        mysqli_close($link);
    }
    ?>
    
    <form method="POST">
<p>НОму Насаб:<br> 
<input type="text" name="name" /></p>
<p>Ихтисос:<br> 
<input type="text" name="name1" /></p>
<p>Шакли тахсил:<br> 
<input type="text" name="name2" /></p>
<p>Санаи таввалуд:<br> 
<input type="text" name="name3" /></p>
<p>Миллат:<br> 
<input type="text" name="name4" /></p>
<p>Мансубияти ичтимои:<br> 
<input type="text" name="name5" /></p>
<p>Чои таввалуд:<br> 
<input type="text" name="name6" /></p>
<p>Сурогаи истикомат:<br> 
<input type="text" name="name7" /></p>
<p>Раками телефон:<br> 
<input type="text" name="name8" /></p>
<p> Email:<br> 
<input type="text" name="name9" /></p>
<input type="submit" value="Добавить">
</form>
</body>

</html>