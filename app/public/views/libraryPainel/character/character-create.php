<?php
   require(INCLUDE_PATH."/assets/header.php");
   require(INCLUDE_PATH."/assets/nav.php");
   require(INCLUDE_PATH."/assets/sidebar.php");
?>
<br>

<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-6 text-center">Create Character</h1>
    <p class="lead text-center mt-3">Fill all fields for create a new character</p>
  </div>
</div>
</div>

<div class="container">
<form method="POST" enctype="multipart/form-data" >

  <div class="row">
    <div class="col">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name" name="name">
    </div>

    <div class="col">
        <label for="exampleFormControlInput1">Scenario</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="scenario">
    </div>
  </div>

  <div class="row">
    <div class="col">
        <label for="exampleFormControlInput1">Age</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="age" name="age">
    </div>

    <div class="col">
      <label for="exampleFormControlSelect1">Gender</label>
      <select class="form-control" name="gender" id="exampleFormControlSelect1">
        <option>Male</option>
        <option>Female</option>
        <option>other</option>
      </select>
      </div>
    </div>

    <label for="exampleFormControlTextarea1">Background</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="background"></textarea>

  </div>

  <div class="container">

    <div class="row">
        <div class="col">
            <label for="exampleFormControlTextarea1">Appearance</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="appearance"></textarea>
        </div>

        <div class="col">
            <label for="exampleFormControlTextarea1">Annotations</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="annotations"></textarea>
        </div>
  </div>
  </div>

  <div class="container">
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Items</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="items"></textarea>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
          <label for="exampleFormControlTextarea1">Benefits</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="benefits"></textarea>
      </div>

      <div class="col">
          <label for="exampleFormControlTextarea1">Defects</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="defects"></textarea>
      </div>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
  </div>
  </div>
  <div class="container">
    <button type="submit" class="btn btn-primary" name="create">Create</button>
  </div>
</form>
</div>
<br>
<br>

<script src="<?= URL_APP; ?>/public/js/sidebar.js"></script>
</body>
</html>