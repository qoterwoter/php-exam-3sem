<?php
  class Questions {
    public $id;
    public $poll_id;
    public $name;
    public $type;
    public $options;

    public function __construct($id, $poll_id, $name, $type, $options) {
      $this->id      = $id;
      $this->poll_id  = $poll_id;
      $this->name  = $name;
      $this->type = $type;
      $this->options = $options;
    }

    public function all() {
      $list = [];
      $db = DB::getInstance();
      $req = $db->query('SELECT * FROM questions');
      
      foreach($req->fetchAll() as $question) {
        $list[] = new Questions($question['id'], $question['poll_id'], $question['name'], $question['type'], $question['options']);
      }

      return $list;
    }
    
    public function poll_q($id) {
      $list = [];
      $db = DB::getInstance();
      $id = intval($id);
      $req = $db->prepare("SELECT * FROM questions WHERE poll_id = :id");
      $req->execute(array('id' => $id));

      foreach($req->fetchAll() as $q) {
        $list[] = new Questions($q['id'], $q['poll_id'], $q['name'], $q['type'], $q['options']);
      }

      return $list;
    }
  }
?>
