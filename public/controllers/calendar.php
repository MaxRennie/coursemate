<?php

$calendar = new Calendar($Conn);

// Get all the items from the database for the user
if (isset($_POST['load'])) {
    $events = $calendar->getItemsForUser();
    // Convert the events array to json
    echo json_encode($events);
}
if (isset($_POST['loadTasks'])) {
    $events = $calendar->getTasksForUser();
    // Convert the events array to json
    echo json_encode($events);
}
// Listen for POST insert from ajax request in calendar.js
if (isset($_POST['insert'])) {
    // Get the data from the POST request
    $post['type_id'] = 1;
    $post['title'] = $_POST['title'];
    $post['start'] = $_POST['start'];
    $post['end'] = $_POST['end'];
    // Call the insertItem method and pass the data
    $calendar->insertItem($post);
}
if (isset($_POST['gratitude'])) {
    // Get the data from the POST request
    $post['user_id'] = $_SESSION['user_data']['user_id'];
    $post['entry_date'] = date("Y-m-d");
    $post['gratitude'] = $_POST['gratitude'];

    $exists = $calendar->checkGrat($post);
    if ($exists) {
        $calendar->updateGrat($post);
    } else {
        $calendar->insertGrat($post);
    }

    // Call the insertItem method and pass the data
}
if (isset($_POST['delete'])) {
    // Get the data from the POST request

    $id = $_POST['item_id'];

    // Call the deleteItem method and pass the data
    $calendar->deleteItem($id);
}
// Get all the items from the database
if (isset($_POST['update'])) {
    // Get the data from the POST request
    $item['item_id'] = $_POST['item_id'];
    $item['type_id'] = $_POST['type_id'];
    $item['title'] = $_POST['title'];
    $item['start'] = $_POST['start'];
    $item['end'] = $_POST['end'];
    $item['due_date'] = $_POST['due_date'];
    $item['description'] = $_POST['description'];
    $item['additional_notes'] = $_POST['additional_notes'];
    $item['priority'] = $_POST['priority'];
    $item['completed'] = $_POST['completed'];
    $item['associated_item'] = $_POST['associated_item'];
    foreach ($item as $key => $value) {
        if ($value == '') {
            $item[$key] = null;
        }
    }
    // Call the updateItem method and pass the data
    $calendar->updateItem($item);
}

if (isset($_POST['time'])) {
    echo $_POST;
    // Get the data from the POST request
    $post['duration'] = $_POST['duration'];
    $post['associated_item'] = $_POST['item_id'];
    $post['user_id'] = $_POST['person_id'];
    // Call the insertItem method and pass the data
    $calendar->addTime($post);
}

if (isset($_POST['complete'])) {
    $calendar->completeTask($_POST['item_id']);
    header("Refresh:0");
}