<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>

    <header class="row">
        <div class="col-lg-3">
            <div id="title">
                <a HREF="cnx.php" style="color:black;"><h1>&nbsp;Shuffle Time</h1></a>
            </div>
    </header>
</head>

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
        overflow-x: hidden;
             
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
        min-height: 770px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Add styles to the form container */
    .container {
        font-family: 'Playfair Display', serif;
        position: absolute;
        margin: 60px;
        max-width: 350px;
        padding: 30px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password], 
    input[type=email],
    input[type=tel],
    input[type=radio] {
        width: 100%;
        border: none;
        background: #f1f1f1;
        margin: 0px 0 0px 0;
    }

    input[type=text]:focus,
    input[type=password]:focus,
    input[type=email]:focus,
    input[type=tel]:focus, 
     input[type=radio]:focus {

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

    .btn:hover {
        opacity: 1;
    }
</style>

<body>

   

    <div class="bg-img">
        <div class="offset-4 col-md-3">
            <form action="..\controler\inscription.action.php" class="container" method="POST">
                <h1>Register</h1>

                <label for="name"><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="user_prenom" required>
                <label for="name"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="user_nom" required>
                <label for="name"><b>Mail</b></label>
                <input type="email" placeholder="Enter mail" name="user_adresse" required>
                <label for="name"><b>Phone</b></label>
                <input type="tel" placeholder="Enter Phone" name="user_tel" required>
                <label for="name"><b>Login</b></label>
                <input type="text" placeholder="Enter Login" name="user_login" required>
                <label for="name"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="user_mdp" required>
                <b>Man</b><input type="radio" id="genderType" name="user_gender" value="male" required>
                <b>Women</b><input type="radio" id="genderType" name="user_gender" value="female" required> 

                <button type="submit" class="btn1">Sign up</button>


            </form>
        </div>
    </div>

</body>


</html>