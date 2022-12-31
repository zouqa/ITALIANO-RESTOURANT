<?php
$connection = new mysqli("localhost", "root", "", "users");
$stmt = $connection->prepare("select * from users_recommendations");
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>sign up to our resturant</title>
        <link rel="stylesheet" href="hover.css">
    </head>

    <body>

        <div class="title">
            <h1>Italiano Resturant </h1>
            <h2> Have a nice expreince in our resturant</h2>
            <!-- this &emsp; for space is bigger than <br> -->
        </div>
        <div>
            <h3>sign up </h3>
            <div class="form">
                <form action="add1.php" method="post">
                    <input class="hvr-pop" name="name" type="text" required placeholder=" &emsp;Name" size="25"
                        autofocus /> <br>
                    <br>
                    <input class="hvr-pop" name="email" type="email" required placeholder="&emsp;E-mail" size="25" />
                    <br> <br>
                    <input class="hvr-pop" name="moblie" type="text" required placeholder="&emsp;Mobile" size="25" />
                    <br> <br>

                    <br>
                    You have a problem <a href="contact.php" target="_blank" title="Go to Support">contact us </a>
                    <br>



                    &emsp;
                    <br>

                    <input class="hvr-pop" id="sub" type="submit" size="20">
                    <input class="hvr-pop" id="sub" type="reset" size="20">
                </form>
                <p>&emsp;
                    &emsp;
                    &emsp;
                </p>
            </div>
        </div>
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
                background-color: #wight;
                border: none;
                color: black;
                font-size: 14px;
                font-weight: 600;
                border-radius: 5px;
                width: 180px;
            }

            #sub {
                background-color: #cb202d;
                border: none;
                color: #ffffff;
                font-size: 16px;
                font-weight: 600;
                border-radius: 5px;
                width: 100px;
            }

            #sub:hover {
                background-color: #079c2f;

            }
        </style>

    </body>

</html>