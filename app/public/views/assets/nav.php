<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="<?= URL ?>">Character Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-sm-2">
      <li class="nav-item <?php if($_GET['url'] == ""){
        echo 'active';
      } ?>">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
          <?php if(!isset($_SESSION['logged'])){ ?>
            <a class="nav-link" href="<?= URL; ?>/login">Login</a>
          <?php }else{ ?>
            <a class="nav-link" href="<?= URL; ?>/home">Library</a>
          <?php } ?>
      </li>
      <li class="nav-item">
          <?php if(!isset($_SESSION['logged'])){ ?>
            <a class="nav-link" href="<?= URL; ?>/register">SignUp</a>
          <?php } ?>
      </li>
      <?php if(isset($_SESSION['logged'])){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['nickname']; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">My characters</a>
          <a class="dropdown-item" href="#">Edit user</a>
          <a class="dropdown-item" href="home/loggout">Loggout</a>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  </div>
</nav>