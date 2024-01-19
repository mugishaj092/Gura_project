<?php
include('connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkUserQuery = "SELECT * FROM signup WHERE email = '$email'";
    $userResult = mysqli_query($connection, $checkUserQuery);
    if ($userResult) {
        $userData = mysqli_fetch_assoc($userResult);
        if ($userData) {
            if ($password==$userData['password']) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_names']=$userData['Names'];
            $_SESSION['user_email'] = $userData['email'];
            header('Location: ./index.php');
            exit();
            } else {
                echo "<script>console.log('Incorrect password')</script>";
                header("Location:login.php");
            }
        } else {
            echo "<script>console.log('User not registered, create an account')'</script>";
            header("Location:signup.php");
        }
        mysqli_free_result($userResult);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>