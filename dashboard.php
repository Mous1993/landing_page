<?php require_once('./controller/Dashboard.php'); 

  $Dashboard = new Dashboard();
  $active = $Dashboard->active;
  $clientsData = $Dashboard->getClients();
  if($clientsData["status"]){
    $clients = $clientsData['data'];
    $total_pages = $clientsData['total_pages'];
  }
  // main nav
  require('./nav.php'); 
?>
<main role="main" class="container" >
  <div class="container" >
    <div class="row mt-5 " >
      <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
        <br><br>
      </div>
    </div>
    <div class="row" >
      <?php if ($clientsData['status']):?>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($clients as $key => $value) : ?>
            <tr>
              <td><?php echo ucwords($value['name']); ?></td>
              <td><?php echo ucwords($value['email']); ?></td>
              <td><?php echo ucwords($value['phone_no']); ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif ;  ?>
    </div>
  </div>

</main>
        
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php for ($page = 1; $page <= $total_pages ; $page++):?>
      <li class="page-item">
        <a  class="page-link" href='<?php echo "?page=$page"; ?>' class="links">
          <?php  echo $page; ?>
        </a>
      </li>
    <?php endfor; ?>
  </ul>
</nav>

</body>
</html>
