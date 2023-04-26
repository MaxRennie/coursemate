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

//get number of events for user this week
$Calendar = new Calendar($Conn);
$events = $Calendar->getThisWeeksEventsForUser();
$event_count = count($events);
$smarty->assign('event_count', $event_count);

//get number of tasks for user this week
$tasks = $Calendar->getThisWeeksTasksForUser();
$task_count = count($tasks);
$smarty->assign('task_count', $task_count);

//get total time spent on tasks this week
$task_time = $Calendar->getThisWeeksTaskTimeForUser();
$smarty->assign('task_time', $task_time);

//get total completed tasks
$completed_tasks = $Calendar->getCompletedTasksForUser();
$completed_tasks_count = count($completed_tasks);
$smarty->assign('completed_tasks_count', $completed_tasks_count);


//get total time spent on tasks
$total_task_time = $Calendar->getTotalTaskTimeForUser();
$smarty->assign('total_task_time', $total_task_time);

