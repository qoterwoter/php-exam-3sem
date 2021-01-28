<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        require_once('models/polls.php');
        $controller = new PagesController();
      break;
      case 'user':
        $controller = new UserController();
      break;
      case 'polls':
        require_once('models/questions.php');
        require_once('models/polls.php');
        $controller = new PollsController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('pages' => ['login', 'main', 'error', 'edit'],
                       'user' => ['auth', 'logout'],
                       'polls' => ['show', 'edit', 'add', 'remove', 'save']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>