<?php
$connection = new mysqli("localhost", "root", "", "users");
$stmt = $connection->prepare("select * from users_recommendations");
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="intro.css">
        <link rel="stylesheet" href="hover.css">
        <title>contact</title>


    </head>

    <body>

        <div class="contact">

            <h1> contact us</h1>
            <form action="add2.php" method="post">

                <input class="hvr-pop" name="name" required type="text" placeholder="name">
                <br>
                <br><br>
                <input required name="email" type="email" id="email" placeholder="email" class="hvr-pop">
                <br>
                <br>
                <br>
                <textarea required name="feedback" cols="30" rows="15" placeholder="feedback"
                    class="hvr-skew"></textarea>
                <br>
                <br>
                <input type="submit" name="submit" value="submit" class="hvr-grow">
                <br>
                <br>
            </form>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>






        </div>





    </body>


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

        input>button {
            background-color: #079c2f;
            border: none;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            border-radius: 5px;
            width: 180px;
        }
    </style>





</html>