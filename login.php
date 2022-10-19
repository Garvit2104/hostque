<?php
include('include/header.php');

function giveAlert($txt)
{
  echo "<script>";
  echo "alert('$txt');";
  echo "</script>";
}

if (isset($_POST['login'])) {
  // Email VALIDATION
  if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $password;
    $password = md5($password);
    echo "$email $password";
  } else {
    giveAlert("Enter data in all fields");
  }

  // login Query 
  if (isset($email) && isset($password)) {
    $sql = "SELECT * FROM users WHERE password = '$password' AND email = '$email'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header('Location: user/index.php');
      }
    } else {
      giveAlert("No record found, Enter valid email & password");
    }
  }
}

?>
<link rel="stylesheet" href="./styles/common.css" />
<link rel="stylesheet" href="./styles/login.css" />
<link rel="stylesheet" href="./styles/navbar.css" />
<style>
.login .form-item:nth-child(3) {
    align-items: center;
    flex-direction: row;
}

.login .form-item:nth-child(3) label {
    margin-left: 5px;
}
</style>
<title>Log in- Hostque</title>
</head>

<body>
    <section>
        <?php include('include/navbar.php') ?>

        <div class="login">
            <h1>Log in</h1>
            <form action="" method="POST">

                <div class="form-item">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>

                <button type="submit" name="login">Log in</button>
            </form>
        </div>
    </section>
</body>
<?php include('include/footer.php'); ?>