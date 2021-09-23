<?php

session_start();

// echo "Welcome " . $_SESSION['user_name'];

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>HOME</title>

        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div>
            <a href="index.php" style="font-weight:700 ; font-size:1.3em; padding-left:1820px; color:red; text-decoration: none">Logout</a>
        </div>

        <div class="display_username" style="padding-top:20px; font-weight:700 ; font-size:3em; padding-left:750px; color: brown">

            <?php

            echo "Welcome " . $_SESSION['user_name'];

            ?>

        </div>


        <div style="display:flex">
            <div class="nav_bar" style="padding-top:10px; font-weight:700 ; font-size:x-large; padding-left:20px">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client.php">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Help</a>
                    </li>
                </ul>

            </div>

            <div style="padding-left:600px; padding-top:100px">
                <h3>Number of clients:53
                    &nbsp; &nbsp; &nbsp;
                    <select name="customers" id="customers">
                        <option value="0">Select</option>
                        <option value="1">Tony</option>
                        <option value="2">Sherry</option>
                        <option value="3">Jake</option>
                        <option value="4">Cathy</option>
                    </select>
                </h3><br></br>


                <h3>Number of reports generated:163</h3><br></br>
                <h3>Number of reports pending:6</h3><br></br>
            </div>
    </body>

    </html>

<?php

} else {

    header("Location: index.php");

    exit();
}

?>