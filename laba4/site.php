<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connect = new PDO("mysql:host=MySQL-8.2; dbname=hospital;", 'root', '');

    if (isset($_POST['firstname'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $middlename = htmlspecialchars($_POST['middlename']);
        $birthdate = $_POST['birthdate'];
        $snils = htmlspecialchars($_POST['snils']);
        $address = htmlspecialchars($_POST['address']);
        $phone = htmlspecialchars($_POST['phone']);

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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 5px;
            max-width: 500px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .submit-button {
            text-align: center;
        }
        .submit-button input {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-button input:hover {
            background-color: #0056b3;
        }
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