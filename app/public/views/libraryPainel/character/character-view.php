<?php
  require(INCLUDE_PATH."/assets/header.php");
  require(INCLUDE_PATH."/assets/nav.php");
  require(INCLUDE_PATH."/assets/sidebar.php");
?>
<br>
<div class="container mb-2">
  <div class="jumbotron">
    <h1 class="display-4">Welcome to character creation</h1>
    <p class="lead">Here you can create and store your characters</p>
    <hr class="my-4">
    <p>click here to create a new character</p>
    <a class="btn btn-primary btn-lg" href="character/create" role="button">Create Character</a>
  </div>
</div>
<div class="container">
<div class="list-group">
  <a href="character/<?= $characters['id']; ?>" class="list-group-item list-group-item-action active">
    <img style="width: 200px;" src="app/public/images/<?= $characters['img']; ?>" class="rounded float-left w-40" alt="...">
    <div class="float-right d-flex w20">
        <small>Created At: <?= $characters['created_at']; ?></small>
    </div>
    <div class="d-flex w-50">
      <h5 class="mb-1 ml-4">Name: <?= $characters['name']; ?></h5>
      <h5 class="mb-1 ml-4">Scenario: <?= $characters['scenario']; ?></h5>
    </div>
    <div class="d-flex w-50">
      <h5 class="mb-1 ml-4">Age: <?= $characters['age']; ?></h5>
    </div>
    <div class="d-flex w-70">
      <p class="mb-1 ml-4 mt-3"><?= $characters['background']; ?></p>
    </div> 
  </a>
</div>
</div>
<script src="<?= URL_APP; ?>/public/js/sidebar.js"></script>
</body>
</html>