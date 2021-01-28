<?php
  class PollsController {
    public function edit() {
      $poll_id = $_GET['poll_id'];
      $poll = Polls::find($poll_id);
      $questions = Questions::poll_q($poll_id);
      require_once('views/pages/edit.php');
    }

    public function remove(){
      require_once('views/pages/edit.php');
    }

    public function save(){
      require_once('views/pages/save.php');
    }

  }
?>