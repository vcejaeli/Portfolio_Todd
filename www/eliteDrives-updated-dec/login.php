<?php
//should give us access to db
//include_once ('includes/database.php');

$page_title = "Elite Drives | Log In";

include ('includes/header.php');
?>

<!--$conn inside our code to connect to db-->

<body>
    <div class="loginbackground"></div>

    <div id="frm" class="login-box">
        <form action="index.php" method="POST">

            <div class="textbox">
                <p>
                    <img id="login-user" src="/img/images/user-icon-png-white.png" >
                    <label>Username:</label>
                    <input type="text" id="user" name="user" />
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass" />
                </p>
            </div>

            <p>
                <input class="loginBtn" type="submit" id="login-btn" value="Login" />
            </p>

            <p>
                <p id="sign-up-text">not a member yet?</p>
                <btn class="signupBtn">Sign-Up!</btn>
            </p>



        </form>
    </div>



<?php
//    $sql = "SELECT * FROM users;";
//    $result = mysqli_query( $conn, $sql );
//    $resultCheck = mysqli_num_rows($result);
//
//    if ($resultCheck > 0) {
//
//    }
//?>

<!--<div class="loginbackground">-->
<!--    <div class="login-box">-->
<!--        <h1>Login</h1>-->
<!--        <div class="textbox">-->
<!--                 not sure why the user and lock icons didn't load..-->
<!--            <img id="login-user" src="www/img/images/login/user-icon-png-white.png" alt="">-->
<!--            <input type="text" placeholder="Username" name="" value="">-->
<!--        </div>-->
<!--        <div class="textbox">-->
<!--            <img id="login-lock" src="www/img/images/login/lock-icon-png-white.png" alt="">-->
<!--            <input type="text" placeholder="Password" name="" value="">-->
<!--        </div>-->
<!---->
<!--        <input class="btn" type="button" name="" value="Sign in">-->
<!--    </div>-->
<!--</div>-->
</body>



<?php
//if (isset($_POST ['submit'] )) {
//    $un=$_POST['username'];
//    $pw=$_POST['password'];
//
//    if ($un=='username' && $pw=='password') {
//        header("location:home.php");
//        exit();
//    }
//    else
//        echo '<span style="color: #f65158; text-align: center;">Invalid Username/Password</span>' ;
//
//}
//?>