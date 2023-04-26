<?php

$Calendar = new Calendar($Conn);

$yesterdaysGrat = $Calendar->getYesterdaysGrat();
$todaysGrat = $Calendar->checkGrat();
$todaysTasks = $Calendar->getTodaysTasksForUser();
$tomorrowsTasks = $Calendar->getTomorrowsTasksForUser();
$weekTasks = $Calendar->getThisWeeksTasksForUser();

$smarty->assign('todaysGrat', $todaysGrat[0]["gratitude"]);
$smarty->assign('yesterdaysGrat', $yesterdaysGrat[0]["gratitude"]);
$smarty->assign('todaysTasks', $todaysTasks);
$smarty->assign('tomorrowsTasks', $tomorrowsTasks);
$smarty->assign('weekTasks', $weekTasks);

if ($_POST) {
    if ($_POST['start'] == '') {
        $_POST['start'] = null;
    }
    if ($_POST['end'] == '') {
        $_POST['end'] = null;
    }

    if ($_POST['due_date'] == '') {
        $_POST['due_date'] = null;
    }

    $_POST['user_id'] = $_SESSION['user_data']['user_id'];

    if ($_POST['item_id'] == '') {
        $calendar = $Calendar->insertItem($_POST);
    } else {
        $calendar = $Calendar->updateItem($_POST);
    }


    $calendar = $Calendar->insertItem($_POST);

    header('Location: ./tasks');
}
