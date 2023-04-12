<?php
$user_id = $_SESSION['user_data']['user_id'];

$User = new User($Conn);
$user = $User->getUser($user_id);

$smarty->assign('user', $user);

if ($_POST['currentPassword']) {
    if (strlen($_POST['currentPassword']) < 8) {
        $smarty->assign('error', "Password must be at least 8 characters in length");
    } elseif ($_POST['newPassword'] != $_POST['new_password_confirm']) {
        $smarty->assign('error', "Passwords do not match");
    } else {
        $user = $User->changeUserPassword($_POST['currentPassword'], $_POST['new_password_confirm']);
        if ($user[0]) {
            $smarty->assign('success', "Password changed successfully, please login again");
            header('Location: ./logout');
        } else {
            $smarty->assign('error', $user[1]);
        }
    }
}
//TODO: FIX CHANGE IMAGE FUNCTION
if (isset($_POST['submit'])) {
    $data = $_POST;
    $random = substr(str_shuffle(MD5(microtime())), 0, 10);
    $new_filename = $random . $_FILES['user_image']['name'];
    $data['user_image'] = $new_filename;
    if (move_uploaded_file($_FILES['user_image']['tmp_name'], SITE_ROOT . '/user-images/' . $new_filename)) {
        $user = $User->changeUserImage($data['user_image']);
        if ($user) {
            header('Location: ./account');
        } else {
            $smarty->assign('error', "An error occured, please try again later");
        }
    }
}
