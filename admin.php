
<?php
include("config.php");
include("admin_header.php");
include "data_fetch.php"; ?>
<h2 class="text-center display-4">Admin</h2>
</div>

<div class="p-3">
    <div class="row">
      <?php if (strtolower($_SESSION['email']) == 'abhishekrajora889@gmail.com'): ?>
      <div class="col-sm-3">
        <div class="card">
          <img src="images/radisson.jpg" height= "100px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Admin</h5>
            <a class="btn btn-primary btn-sm" href="admin_data.php?type=5&msg=run&table=admin" role="button" target="_blank">Edit</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <div class="col-sm-3">
    <div class="card">
      <img src="images/radisson.jpg" height= "100px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Hotels</h5>
        <a class="btn btn-primary btn-sm" href="admin_data.php?type=1&msg=run&table=hotels" role="button" target="_blank">Edit</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img src="images/LOTUS.jpg" height= "100px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Restaurants</h5>
        <a class="btn btn-primary btn-sm" href="admin_data.php?type=2&msg=run&table=restaurants" role="button" target="_blank">Edit</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img src="images/red fort.jpg" height= "100px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tourist Places</h5>
        <a class="btn btn-primary btn-sm" href="admin_data.php?type=3&msg=run&table=tourist_places" role="button" target="_blank">Edit</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img src="images/qutub.jpg" height= "100px" class="card-img-top" alt="...">
      <div class="card-body" height= "200px">
        <h5 class="card-title">Clubs & Pubs</h5>
        <a class="btn btn-primary btn-sm" href="admin_data.php?type=4&msg=run&table=clubs_pubs" role="button" target="_blank">Edit</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php include("footer.php")
?>
