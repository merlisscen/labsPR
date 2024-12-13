<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connect = new PDO("mysql:host=MySQL-8.2; dbname=hospital;", 'root', '');

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $middlename = $_POST['middlename'];
        $birthdate = $_POST['birthdate'];
        $snils = $_POST['snils'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $query = $connect->query("INSERT INTO appointments (firstname, lastname, middlename, birthdate, snils, address, phone) 
                  VALUES ('$firstname', '$lastname', '$middlename', '$birthdate', '$snils', '$address', '$phone')");
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Запись к врачу</title>
    <style>
        /* CSS стили (оставь как есть) */
    </style>
</head>
<body>

<div class="form-container">
    <h2>Запись к врачу</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname">Имя:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Фамилия:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="middlename">Отчество:</label>
            <input type="text" id="middlename" name="middlename">
        </div>
        <div class="form-group">
            <label for="birthdate">Дата рождения:</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="snils">Номер СНИЛС:</label>
            <input type="text" id="snils" name="snils" required>
        </div>
        <div class="form-group">
            <label for="address">Место проживания:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="submit-button">
            <input type="submit" value="Отправить">
        </div>
    </form>
</div>

</body>
</html>