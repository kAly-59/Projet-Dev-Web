<?php

session_start();
$_SESSION['user_login'] = "";
$_SESSION['user_mdp'] = ""; 

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Connexion</title>

    <header class="row">
        <div class="col-lg-3">
            <div id="title">
                <a HREF="cnx.php" style="color:black;"><h1>&nbsp;Shuffle Time</h1></a>
            </div>
    </header>

    <style>
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        body,
        html {
            height: 100%;
            overflow: hidden;
        }

        * {
            box-sizing: border-box;
        }

        header {
            background-color: rgb(243, 95, 9);
            background: linear-gradient(rgb(243, 95, 9), black);
            font-family: 'Playfair Display', serif;
        }

        .bg-img {
            /* The image used */
            background-image: url("../assets/back2.jpg");

            /* Control the height of the image */
            min-height: 675px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Add styles to the form container */
        .container {
            font-family: 'Playfair Display', serif;
            position: absolute;
            right: 0;
            top: 10%;
            margin: 20px;
            max-width: 350px;
            padding: 30px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit button */
        .btn1 {
            background-color: rgb(243, 95, 9);
            color: black;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn2 {
            background-color: rgb(243, 95, 9);
            color: black;
            padding: 16px 20px;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        .btn:hover {
            opacity: 1;
        }
      
    </style>

<body>

    <div class="bg-img">
        
            <form action="..\controler\cnx.action.php" class="container" method="POST">
                <h1>Connexion</h1>
                <label for="name"><b>Login</b></label>
                <input type="text" placeholder="Enter Login" name="user_login" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="user_mdp" required>

                <button type="submit" class="btn1">Sign up</button>
                <button a href="inscription.php" onclick="redirectIt(this)" class="btn2">Register</a></button>
            </form>
        </div>
    </div>


    <script>
        function redirectIt(obj) {
            var goTolink = obj.getAttribute("href");
            window.location.href = goTolink;
        }
    </script>

    <footer>
        
    </footer>


</body>


</html>