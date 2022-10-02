<?php
    require_once(__dir__ . '/Db.php');
    class DashboardModel extends Db {

      /**
        * @param null
        * @return array
        * @desc Returns an array of clients....
      **/
      public function fetchClients() :array
      {
        $this->query("SELECT * FROM `db_clients` ORDER BY `id` DESC");
        $this->execute();
        $clients = $this->fetchAll();

        if (count($clients) > 0) {
          $Response = array(
            'status' => true,
            'data' => $clients
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'data' => []
        );
        return $Response;
      }
      
    }
 ?>
