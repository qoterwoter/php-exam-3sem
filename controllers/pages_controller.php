<?php
  class PagesController {
    public function main() {
      $polls = Polls::all();
      require_once('views/pages/main.php');
    }

    public function login() {
      require_once('views/pages/login.php');
    }

    public function edit(){
      $poll = Polls::find($_GET['poll_id']);
      require_once('views/pages/edit.php');
    }

  }
?>