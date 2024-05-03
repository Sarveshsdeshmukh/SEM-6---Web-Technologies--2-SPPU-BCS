<?php
    session_start();

    if(isset($_SESSION['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $correct_username = 'admin';
        $correct_password = 'admin';

        if($username == $correct_username && $password == $correct_password){
            $_SESSION['loggedin'] = true;
            header('location:welcome.php');
            exit;
        }else{
        if(isset($_SESSION['attempts'])) {
            $_SESSION['attempts']--;
        } else {
            $_SESSION['attempts'] = 3;
        }
        }

                // Display error message if maximum login attempts exceeded
        if($_SESSION['attempts'] <= 0) {
            echo 'Maximum login attempts exceeded. Please try again later.';
        } else {
            // Display error message
            echo 'Invalid username or password. You have '.$_SESSION['attempts'].' Attempt(s) left.';
        }
    }
?>

<!-- HTML form for user input -->
<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" name="submit" value="LogIn">
</form>