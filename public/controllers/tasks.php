<?php

$Calendar = new Calendar($Conn);


$todaysTasks = $Calendar->getTodaysTasksForUser();
$tomorrowsTasks = $Calendar->getTomorrowsTasksForUser();
$weekTasks = $Calendar->getThisWeeksTasksForUser();

$smarty->assign('todaysTasks', $todaysTasks);
$smarty->assign('tomorrowsTasks', $tomorrowsTasks);
$smarty->assign('weekTasks', $weekTasks);

if($_POST) {
    if($_POST['start'] == '') {
        $_POST['start'] = null;
    }
    if($_POST['end'] == '') {
        $_POST['end'] = null;
    }
    
    if($_POST['due_date'] == '') {
        $_POST['due_date'] = null;
    }

    $calendar = $Calendar->insertItem($_POST);
    if ($calendar) {
        header('Location: ./tasks');
    } else {
        $smarty->assign('error', "An error occured, please try again later");
    }
}
