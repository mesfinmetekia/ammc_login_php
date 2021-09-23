<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · AMMC Dashboard Project</title>


    <!--<title>LOGIN</title>-->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>

    <main class="form-signin">

        <form action="login.php" method="post">

            <img class="mb-4" src="image/ammc_logo.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Welcome to Dashboard</h1>

            <!-- <h2>LOGIN</h2> -->

            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>


            <div class="form-floating">
                <input type="text" name="uname" class="form-control" id="floatingInput" placeholder="User Name">
                <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted">&copy; AMMC - 2021</p>





            <!-- <label>User Name</label>

            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Password</label>

            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button> -->

        </form>

    </main>

    <div>
        <img class="image_right" src="image/doctor_image.png" alt="" width="550" height="550">
    </div>

</body>

</html>