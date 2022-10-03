<?php
  require_once(__dir__ . '/Controller.php');
  require_once('./Model/DashboardModel.php');
  class Dashboard extends Controller {

    public $active = 'dashboard'; //for highlighting the active link...
    private $dashboardModel;

    /**
      * @param null|void
      * @return null|void
      * @desc Checks if the user session is set and creates a new instance of the DashboardModel...
    **/
    public function __construct()
    {
      if (!isset($_SESSION['auth_status'])) header("Location: index.php");
      $this->dashboardModel = new DashboardModel();
    }

    /**
      * @param null|void
      * @return array
      * @desc Returns an array of clients by calling the DashboardModel fetchPaginatedClients method...
    **/
    public function getClients() :array
    {
      $PaginatedClients = $this->dashboardModel->fetchPaginatedClients();
      return $PaginatedClients;
    }
  }
 ?>
