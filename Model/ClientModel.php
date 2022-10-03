<?php
  require_once(__dir__ . '/Db.php');
  class ClientModel extends Db {

    /**
      * @param array
      * @return array
      * @desc Creates and returns a client/subscriber record....
    **/
    public function createClient(array $client) :array
    {

      $this->query("INSERT INTO `db_clients` (name, email, phone_no) VALUES (:name, :email, :phone_no)");
      $this->bind('name', $client['name']);
      $this->bind('email', $client['email']);
      $this->bind('phone_no', $client['phone']);

      if ($this->execute()) {
        $Response = array(
          'status' => true,
        );
        return $Response;
      } else {
        $Response = array(
          'status' => false
        );
        return $Response;
      }
    }

        /**
      * @param string
      * @return array
      * @desc Returns a client record based on the method parameter....
    **/
    public function fetchClient(string $email) :array
    {
      $this->query("SELECT * FROM `db_clients` WHERE `email` = :email");
      $this->bind('email', $email);
      $this->execute();

      $client = $this->fetch();
      if (!empty($client)) {
        $Response = array(
          'status' => true,
          'data' => $client
        );
        return $Response;
      }
      return array(
        'status' => false,
        'data' => []
      );
    }
  }
 ?>