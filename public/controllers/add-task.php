<?php
if ($_POST) {
    if($_POST['start'] == ''){
        $_POST['start'] = null;
    }
    if($_POST['end'] == ''){
        $_POST['end'] = null;
    }
    if($_POST['due_date'] == ''){
        $_POST['due_date'] = null;
    }
    if($_SESSION['user_data']['user_id'] == ''){
        $_POST['user_id'] = $_POST['person_id'];
    }else{
        $_POST['user_id'] = $_SESSION['user_data']['user_id'];
    }
    $Calendar = new Calendar($Conn);
    $calendar = $Calendar->insertItem($_POST);

}
