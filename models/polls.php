<?php
  class Polls {
    public $id;
    public $name;
    public $status;

    public function __construct($id, $name, $status) {
      $this->id      = $id;
      $this->name  = $name;
      $this->status = $status;
    }

    public static function all() {
      $list = [];
      $db = DB::getInstance();
      $req = $db->query('SELECT * FROM polls');

      foreach($req->fetchAll() as $polls) {
        $list[] = new Polls($polls['id'], $polls['name'], $polls['status']);
      }

      return $list;
    }
    
    public function find($id) {
      $db = DB::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM polls WHERE id = :id');
      $req->execute(array('id' => $id));
      $poll = $req->fetch();

      return new Polls($poll['id'], $poll['name'], $poll['status']);
    }
  }
?>