<?php
if ($_POST) {
    if ($_POST['type'] == 'signup') {
        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        }

        $_SESSION['user'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        header('Location: ./register');
    } else {
        $User = new User($Conn);
        $validationError = $User->validateUserLogin($_POST);
        if ($validationError != null) {
            $smarty->assign('error', $validationError);
        } else {
            $user_data = $User->loginUser($_POST['email'], $_POST['password']);
            if ($user_data) {
                $_SESSION['is_loggedin'] = true;
                $_SESSION['user_data'] = $user_data;
                //redirect to tasks page
                header('Location: ./tasks');
            } else {
                $smarty->assign('error', "Incorrect Email/Password");
            }
        }
    }
}
