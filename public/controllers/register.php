<?php
if ($_SESSION['is_loggedin'] == true) {
    header('Location: ./');
}


$school = false;
$course = false;

$School = new School($Conn);
$schools = $School->getAllSchools();
$Course = new Course($Conn);
$courses = $Course->getAllCourses();
if (!$schools) {
    print_r('Could not get school data');
}
if (!$courses) {
    print_r('Could not get course data');
}

$smarty->assign('schools', $schools);
$smarty->assign('courses', $courses);

if ($_POST) {
    $User = new User($Conn);
    $userValidation = $User->validateUserSignup($_POST);

    if ($error) {

        $smarty->assign('error', $error);
    } else {

        $data = $_POST;
    }
    if ($userValidation["error"] != null) {

        $smarty->assign('error', $userValidation["error"]);
    }
    $user_exists = $User->checkUserExists($_POST);

    if ($user_exists) {

        $smarty->assign('error', "Email already exists, please login instead");
    } else {

        $data = $_POST;

        $random = substr(str_shuffle(MD5(microtime())), 0, 10);
        $new_filename = $random . $_FILES['user_image']['name'];
        $data['user_image'] = $new_filename;
        if (move_uploaded_file($_FILES['user_image']['tmp_name'], SITE_ROOT . '/user-images/' . $new_filename)) {
            $attempt = $User->createUser($data);

            if ($attempt) {
                $User->loginUser($_POST['email'], $_POST['password']);

                $_SESSION['is_loggedin'] = true;
                $_SESSION['user_data'] = $User;
                header('Location: ./tasks');
            } else {
                $smarty->assign('error', "An error occured, please try again later");
            }
        }
    }
}
