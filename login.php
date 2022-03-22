<?php require('header.php');?>

<div class="container-fluid quemsomos" style="padding-bottom: 5%;">
  <div class='row'>
    <div class="col-lg-6 quemsomos login">
      <hr class="my-4">
      <form class="needs-validation input-group-lg" id='formlogin' name="formlogin">
        <div>
          <label for="email" class="form-label paddingtop">Email</label> <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
        </div><label for="password" class="form-label paddingtop">Password</label> <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
        <div class="mb-3 form-check paddingtop">
          <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Remember me?</label>
        </div>
        <hr class="my-4">
        <button class="w-50 btn btn-primary btn-lg mx-auto d-block" type='button' id='btnlogin'>Login</button>
        <hr class="my-4">
        <span id='returnlogin'></span>
      </form>
    </div>
    <div class="col-lg-6 quemsomos login">
      <form class="needs-validation input-group-lg" id='formregister' name="formregister">
        <hr class="my-4">
        <div>
          <label for="userR" class="form-label paddingtop">User</label> <input type="text" class="form-control" id="userR" name="userR" placeholder="John123" required="">
        </div>
        <div>
          <label for="emailR" class="form-label paddingtop">Email</label> <input type="email" class="form-control" id="emailR" name="emailR" placeholder="you@example.com">
        </div>
        <div>
          <label for="passwordR" class="form-label paddingtop">Password</label> <input type="password" class="form-control" id="passwordR" name="passwordR" placeholder="Password" required="">
        </div><label for="cpasswordR" class="form-label paddingtop">Confirm Password</label> <input type="password" class="form-control" id="cpasswordR" name="cpasswordR" placeholder="Reenter password" required="">
        <hr class="my-4">
        <button class="w-50 btn btn-primary btn-lg mx-auto d-block" type="button" id='btnregister'>Register</button>
        <hr class="my-4">
        <span id='returnregister'></span>
      </form>
    </div>
  </div>
</div>


<script src="js/jquery.js"></script> 
<script src="js/jquery-validate.js"></script> 
<script src="js/login.js"></script>

<?php require "footer.php"?>