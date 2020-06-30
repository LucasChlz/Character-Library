<?php
  require(INCLUDE_PATH."/assets/header.php");
  require(INCLUDE_PATH."/assets/nav.php");
  require(INCLUDE_PATH."/assets/sidebar.php");
?>
<br>
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Welcome to character creation</h1>
    <p class="lead">Here you can create and store your characters</p>
    <hr class="my-4">
    <p>click here to create a new character</p>
    <a class="btn btn-primary btn-lg" href="character/create" role="button">Create Character</a>
  </div>
</div>
<script src="<?= URL_APP; ?>/public/js/sidebar.js"></script>
</body>
</html>