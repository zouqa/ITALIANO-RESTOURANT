<?php
$Name = $_POST["name"];
$Email = $_POST["email"];
$Feedback = $_POST["feedback"];
$connection = new mysqli("localhost", "root", "", "users");
$stmt = $connection->prepare("insert into users_recommendations(Name,Email,Feedback) values(?,?,?)");
$stmt->bind_param("sss", $Name, $Email, $Feedback);
$stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="discription" content="this is our resturant website from students of FCDS">
        <title>Italiano Resturant</title>
        <link rel="stylesheet" href="home.css">

    </head>

    <body>
        <h1>Italiano Resturant</h1>
        <section>
            <ul>
                <br>
                <br>
                <br>


                <li data-text="Home"><a href="Home.html">Home</a> </li>
                <li data-text="Menu"><a href="menu.html" target="_blank">Menu</a></li>

            </ul>
        </section>
        <script src="alert.js"></script>
    </body>

</html>
<style>
    * {
        text-align: center;
        text-decoration: none;
        border-radius: 10px;
        color: #07a02d;
    }

    h1 {
        text-align: center;
        color: #c70808;
    }

    body {
        background: linear-gradient(#07a02d, #fff, #c70808);
        height: 100vh;
        font-family: system-ui;
    }

    .form {
        text-decoration: none;
        border-radius: 10px;
        color: #07a02d;
    }

    a:hover {
        color: #c70808;
    }

    input {
        background-color: #079c2f;
        border: none;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        border-radius: 5px;
        width: 180px;
    }
</style>

</body>

</html>