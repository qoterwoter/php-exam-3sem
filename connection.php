<?php
  class DB {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=std-mysql;dbname=std_962', 'std_962', '12345678', $pdo_options);
      }
      return self::$instance;
    }
  }
?>