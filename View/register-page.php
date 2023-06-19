<?php 
require_once('../Helpers/Errors.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Register</title>
</head>
<body>
<!--Main Navigation-->
<header >
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container ">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
        </div>
        <!-- Left elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</header>
<section class="container vh-100 mt-5 p-2" >
    <?php 
    if(!empty($success_message)){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?php echo $success_message; ?> </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>

    <?php 
    if(!empty($general_error)){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong><?php echo $general_error; ?></strong>
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>


    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Register</h4>
            <a href="login.php" class="text-dark">Already have an account?</a>
        </div>
        <div class="card-body">
            <form method="post" action="register.php">
            <div class="row">
                <div class="col">
                    <label >Firstname</label>
                    <input type="text" name="firstname" class="form-control <?php echo $errors['firstname'] ? 'is-invalid' : '' ?>" value="<?php echo isset($old['firstname']) ? $old['firstname'] : '' ?>">
                    <?php showError($errors,'firstname'); ?>
                </div>
                <div class="col">
                    <label >Lastname</label>
                    <input type="text" name="lastname" class="form-control <?php echo $errors['lastname'] ? 'is-invalid' : '' ?>" value="<?php echo isset($old['lastname']) ? $old['lastname'] : ''?>">
                    <?php showError($errors,'lastname'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="email" name="email"  class="form-control <?php echo $errors['email'] || !empty($general_error) ? 'is-invalid' : '' ?>" value="<?php echo isset($old['email']) ? $old['email'] : ''?>">
                    <?php showError($errors,'email'); ?>
                </div>
                <div class="col">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control <?php echo $errors['password'] ? 'is-invalid' : '' ?>" value="<?php echo isset($old['password']) ? $old['password'] : ''?>">
                    <?php showError($errors,'password'); ?>
                </div>
                <div class="col">
                    <label for="">Confirm   Password</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo $errors['confirm_password'] ? 'is-invalid' : '' ?>" value="<?php echo isset($old['confirm_password']) ? $old['confirm_password'] : ''  ?>">
                    <?php showError($errors,'confirm_password','Confirm Password is not filled'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Province</label>
                    <select  class="form-control <?php echo $errors['province'] ? 'is-invalid' : '' ?>" id="province">
                        
                    </select>
                    <input type="hidden" id="prov_val" name="province">
                    <?php showError($errors,'province'); ?>
                </div>
                <div class="col">
                    <label>City/Municipality</label>
                    <select  class="form-control <?php echo $errors['city_municipality'] ? 'is-invalid' : '' ?>" id="city_municipality">
                        <option disabled selected>--SELECT CITY/MUNICIPALITY--</option>
                    </select>
                    <input type="hidden" id="cit_val" name="city_municipality">
                    <?php showError($errors,'city_municipality','City/Municipality is not filled'); ?>
                </div>
                <div class="col">
                    <label>Barangay</label>
                    <select  class="form-control <?php echo $errors['barangay'] ? 'is-invalid' : '' ?>" id="barangay">
                        <option disabled selected>--BARANGAY--</option>
                    </select>
                    <input type="hidden" id="bar_val" name="barangay">
                    <?php showError($errors,'barangay'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Street Name</label>
                    <input type="text" name="street" class="form-control <?php echo $errors['street'] ? 'is-invalid' : '' ?>" id="" value="<?php echo isset($old['street']) ? $old['street'] : '' ?>">
                    <?php showError($errors,'street'); ?>
                </div>
                <div class="col">
                    <label>Mobile Number</label>
                    <input type="text" pattern="[0-9]*" title="Please enter only numbers" name="mobile_number" class="form-control <?php echo $errors['mobile_number'] ? 'is-invalid' : '' ?>" id="" value="<?php echo isset($old['mobile_number']) ? $old['mobile_number'] : '' ?>">
                    <?php showError($errors,'mobile_number'); ?>
                </div>

            </div>
            <div class="row">
                <div class="col d-flex align-items-center justify-content-end pr-1 mt-2">
                    <input type="submit" name="register" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
        </div>
    </div>
</section> 
<!-- Footer -->
<footer class="text-center text-lg-start text-muted bg-primary">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start pt-4 pb-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-12 col-lg-3 col-sm-12 mb-2">
          <!-- Content -->
          <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
            MDB
          </a>
          <p class="mt-1 text-white">
            © 2023 Copyright: MDBootstrap.com
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">About us</a></li>
            <li><a class="text-white-50" href="#">Find store</a></li>
            <li><a class="text-white-50" href="#">Categories</a></li>
            <li><a class="text-white-50" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">Help center</a></li>
            <li><a class="text-white-50" href="#">Money refund</a></li>
            <li><a class="text-white-50" href="#">Shipping info</a></li>
            <li><a class="text-white-50" href="#">Refunds</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-white-50" href="#">Help center</a></li>
            <li><a class="text-white-50" href="#">Documents</a></li>
            <li><a class="text-white-50" href="#">Account restore</a></li>
            <li><a class="text-white-50" href="#">My orders</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
          <p class="text-white">Stay in touch with latest updates about our products and offers</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <div class="">
    <div class="container">
      <div class="d-flex justify-content-between py-4 border-top">
        <!--- payment --->
        <div>
          <i class="fab fa-lg fa-cc-visa text-white"></i>
          <i class="fab fa-lg fa-cc-amex text-white"></i>
          <i class="fab fa-lg fa-cc-mastercard text-white"></i>
          <i class="fab fa-lg fa-cc-paypal text-white"></i>
        </div>
        <!--- payment --->

        <!--- language selector --->
        <div class="dropdown dropup">
          <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div>
        <!--- language selector --->
      </div>
    </div>
  </div>
</footer>
<script src="https://kit.fontawesome.com/89863904a8.js" crossorigin="anonymous"></script>

<!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
<script src="./src/js/ph-locations.js"></script>
</body>
</html>