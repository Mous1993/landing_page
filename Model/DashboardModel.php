<?php
    require_once(__dir__ . '/Db.php');
class DashboardModel extends Db {

  /**
    * @param null
    * @return array
    * @desc Returns an array of clients....
  **/
  public function fetchPaginatedClients() :array
  {
    $perPage = 5;
    // Calculate Total pages
    $this->query("SELECT count(*) as count FROM db_clients");
    $this->execute();
    $clients_total_count_results = $this->fetch(PDO::FETCH_ASSOC);

      if (count($clients_total_count_results['count']) > 0) {

        $total_pages = ceil($clients_total_count_results['count'] / $perPage);
        // Current page
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $starting_limit = ($page - 1) * $perPage;
        // Query to fetch clients
        $this->query("SELECT * FROM db_clients ORDER BY id ASC LIMIT $starting_limit,$perPage");
        // Fetch all clients for current page
        $this->execute();
        $clients = $this->fetchAll();

        $Response = array(
          'status' => true,
          'data' => $clients,
          'total_pages' => $total_pages
        );
        return $Response;
      }else{
        $Response = array(
          'status' => false,
          'data' => [],
          'total_pages' => $total_pages
        );
        return $Response;
      }

    }
    
  }
?>
