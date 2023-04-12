<?php

class Calendar
{
    protected $Conn;
    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }
    public function getItems()
    {
        $stmt = $this->Conn->prepare("SELECT * FROM items");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getItemsForUser()
    {
        if ($_SESSION['user_data']['user_id'] == '') {
            $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id");
            $stmt->execute(
                array(
                    ':person_id' => $_POST['person_id']
                )
            );
        } else {
            $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id");
            $stmt->execute(
                array(
                    ':person_id' => $_SESSION['user_data']['user_id']
                )
            );
        }
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getTasksForUser()
    {
        if ($_SESSION['user_data']['user_id'] == '') {
            $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 2");
            $stmt->execute(
                array(
                    ':person_id' => $_POST['person_id']
                )
            );
        } else {
            $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 2");
            $stmt->execute(
                array(
                    ':person_id' => $_SESSION['user_data']['user_id']
                )
            );
        }
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getTodaysTasksForUser()
    {
        $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 2 AND due_date = CURDATE()");
        $stmt->execute(
            array(
                ':person_id' => $_SESSION['user_data']['user_id']
            )
        );
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getTomorrowsTasksForUser()
    {
        $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 2 AND due_date = CURDATE() + INTERVAL 1 DAY");
        $stmt->execute(
            array(
                ':person_id' => $_SESSION['user_data']['user_id']
            )
        );
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getThisWeeksTasksForUser()
    {
        $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 2 AND due_date BETWEEN CURDATE() AND CURDATE() + INTERVAL 7 DAY");
        $stmt->execute(
            array(
                ':person_id' => $_SESSION['user_data']['user_id']
            )
        );
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getEventsForUser()
    {
        $stmt = $this->Conn->prepare("SELECT * FROM items WHERE person_id = :person_id AND type_id = 1");
        $stmt->execute(
            array(
                ':person_id' => $_SESSION['user_data']['user_id']
            )
        );
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function insertItem($post)
    {
        $query = "INSERT INTO items (type_id, title, start, end, due_date, description, additional_notes, priority, completed, person_id, associated_item) VALUES (:type_id, :title, :start, :end, :due_date, :description, :additional_notes, :priority, :completed, :person_id, :associated_item)";
        $statement = $this->Conn->prepare($query);
        $statement->execute(
            array(
                ':title'  => $post['title'],
                ':type_id' => $post['type_id'],
                ':start' => $post['start'],
                ':end' => $post['end'],
                ':due_date' => $post['due_date'],
                ':description' => $post['description'],
                ':additional_notes' => $post['additional_notes'],
                ':priority' => $post['priority'],
                ':completed' => 0,
                ':person_id' => $_POST['user_id'],
                ':associated_item' => $post['associated_item']
            )
        );
    }
    public function deleteItem($id)
    {

        $query = "DELETE FROM items WHERE item_id=:item_id";
        $statement = $this->Conn->prepare($query);
        $statement->execute(
            array(
                ':item_id'   => $id
            )
        );
    }
    public function updateItem($item)
    {
        // $query = "UPDATE items SET (item_id, type_id, title, start, end, due_date, description, additional_notes, priority, completed, associated_item) = (:item_id, :type_id, :title, :start, :end, :due_date, :description, :additional_notes, :priority, :completed, :person_id, :associated_item) WHERE item_id=:item_id";

        $query = "UPDATE items SET type_id=:type_id, title=:title, start=:start, end=:end, due_date=:due_date, description=:description, additional_notes=:additional_notes, priority=:priority, completed=:completed, associated_item=:associated_item WHERE item_id=:item_id";

        $statement = $this->Conn->prepare($query);
        $statement->execute(
            array(
                ':item_id'   => $item['item_id'],
                ':title'  => $item['title'],
                ':type_id' => $item['type_id'],
                ':start' => $item['start'],
                ':end' => $item['end'],
                ':due_date' => $item['due_date'],
                ':description' => $item['description'],
                ':additional_notes' => $item['additional_notes'],
                ':priority' => $item['priority'],
                ':completed' => $item['completed'],
                ':associated_item' => $item['associated_item'],
            )
        );
    }
    public function addTime($item)
    {
        $query = "INSERT INTO items (type_id, duration, person_id, associated_item) VALUES (:type_id, :duration, :person_id, :associated_item)";
        $statement = $this->Conn->prepare($query);
        $statement->execute(
            array(
                ':type_id'   => 3,
                ':duration' => $item['duration'],
                ':person_id' => $item['user_id'],
                ':associated_item' => $item['associated_item']
            )
        );
    }

    public function getTimesForItem($item_id){
        $stmt = $this->Conn->prepare("SELECT * FROM items WHERE associated_item = :associated_item AND type_id = 3");
        $stmt->execute(
            array(
                ':associated_item' => $item_id
            )
        );
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
