<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="title">Hello <?php session_start();
                                    if (isset($_SESSION['name'])) echo $_SESSION['name'] ?></h1>
            <button class="logout-btn"><a href="logout.php">LOGOUT</a></button>
        </div>
    </div>
</body>

</html>