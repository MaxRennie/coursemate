<?php
class Extension{
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
}

$extension = new Extension($Conn);

$items[] = $extension->getItems();