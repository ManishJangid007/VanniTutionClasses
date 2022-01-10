<?php include "form_header.php" ?>

<div class="container" style="margin-top: 2%;">
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <img src="assets/login.png" alt="" style="width: 120%; margin-left: -10%">
    </div>
    <div class="col" >
    
    
    <div class="container" style="box-shadow:
  9.1px 3.3px 10.3px rgba(0, 0, 0, 0.171),
  30px 11px 82px rgba(0, 0, 0, 0.15)
;
 border-radius: 3%; margin-top: 20%; width: 100%">
    
    <br>
    <form class="needs-validation" novalidate>
  
    <label for="validationCustom01" class="form-label">Username</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Username" required style="width: 100%;">
    <div class="valid-feedback">
      Looks good!
    </div>
  
  <br>
  
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="Password" class="form-control" id="validationCustom02" placeholder="Enter Password" required style="width: 100%;">
    <div class="valid-feedback">
      Looks good!
    </div>
      <br>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Login</button>
  </div>
</form>
<br>
<a href="#" style="font-size:small;">Forgot Password_/</a>
<a href="#" style="font-size: small;">/_Register</a>

<br><br>


    </div>

    </div>
  </div>
</div>

<br><br><br>

<?php include "form_footer.php" ?>