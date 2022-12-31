<?php
$Name = $_POST["name"];
$Email = $_POST["email"];
$Moblie = $_POST["moblie"];
$connection = new mysqli("localhost", "root", "", "users");
$stmt = $connection->prepare("insert into users_info(Name,Email,Moblie) values(?,?,?)");
$stmt->bind_param("ssd", $Name, $Email, $Moblie);
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