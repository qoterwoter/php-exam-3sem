<?php
  class UserController {
    public function auth(){
      
      if($_POST['login'] == 'admin' && $_POST['pass'] == '12345'){
        $_SESSION['is_logged'] = true;
        header('Location: /');
      }
      else
        header('Location: ?controller=pages&action=login&error=1');  
    }

    public function logout(){
      session_destroy();
      header('Location: ?controller=pages&action=login');
    }
  }
?>