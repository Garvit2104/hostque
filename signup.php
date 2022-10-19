<?php

include('include/header.php');

function giveAlert($txt)
{
    echo "<script>";
    echo "alert('$txt');";
    echo "</script>";
}

if (isset($_POST["submit"])) {
    if (
        isset($_POST['uname']) && !empty($_POST['uname'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])
        && isset($_POST['c_password']) && !empty($_POST['c_password'])
    ) {
        // name validation
        if (preg_match("/^[A-Za-z\s]+$/", $_POST['uname'])) {
            $name = $_POST['uname'];
        } else {
            giveAlert("Only lower case, upper case and space is allowed");
        }

        // email validation
        $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (preg_match($pattern, $_POST['email'])) {
            // checking whether email already present in DB or not

            $check_email = $_POST['email'];
            $sql = "SELECT email FROM users WHERE email='$check_email'";
            $result = mysqli_query($connection, $sql);

            // if query founds a entry in db, then it will return rows count greater than 0
            if (mysqli_num_rows($result) > 0) {
                giveAlert("Email already in use");
            } else {
                // if no entry of email present in db
                $email = $_POST['email'];
            }
        } else {
            // email does not contains valid characters
            giveAlert("Invalid Email");
        }

        // PASSWORD VALIDATION
        // checking if password is of required length
        if (strlen($_POST['password']) >= 6) {
            // checking if both passwords are same
            if (($_POST['password']) == $_POST['c_password']) {
                $password = $_POST['password'];
            } else {
                // if passwords are not same
                giveAlert("password are not same");
            }
        } else {
            // if wrong password size 
            giveAlert("password should contain atleast 6 characters");
        }

        // IF every thing all right, inserting values
        if (isset($name) && isset($email) && isset($password)) {
            $password = md5($password);
            // query to insert value in table
            $sql = "INSERT INTO users (
                name,email,password
            ) VALUES (
                '$name', '$email', '$password'
            )";

            if (mysqli_query($connection, $sql)) {
                header("Location: login.php");
            } else {
                giveAlert("Data not Inserted, Please try again!!");
            }
        }
    } else {
        giveAlert("enter all fields");
    }
}

?>
<link rel="stylesheet" href="./styles/common.css" />
<link rel="stylesheet" href="./styles/login.css" />
<link rel="stylesheet" href="./styles/navbar.css" />
<style>
.login .form-item:nth-child(5) {
    align-items: center;
    flex-direction: row;
}

.login .form-item:nth-child(5) label {
    margin-left: 5px;
}
</style>
<title>Sign up- Hostque</title>
<style>
</style>
</head>

<body>
    <section>
        <?php include('include/navbar.php') ?>

        <div class="login">
            <h1>Sign up</h1>
            <form action="" method="POST">
                <div class="form-item">
                    <label for="uname">Name</label>
                    <input type="text" id="uname" name="uname" required />
                </div>
                <div class="form-item">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="minimum 6 characters"
                        pattern=".{6,}" required />
                </div>
                <div class="form-item">
                    <label for="c_password">Confirm Password</label>
                    <input type="password" id="c_password" name="c_password" placeholder="same as above" pattern=".{6,}"
                        required />
                </div>

                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </section>

    <?php include('include/footer.php') ?>