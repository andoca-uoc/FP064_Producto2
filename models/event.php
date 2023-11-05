<?php
require_once dirname(__FILE__) ."/config/db.php";
class event {
    private $events;
    public function __construct() {
        $this->events = array();
}
public function add($event) {
    $this->events[] = $event;
    $sql = "SELECT * FROM ''";