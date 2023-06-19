<?php 
//require_once('auth.php');
require_once('../vendor/autoload.php');
require_once('../Helpers/Errors.php');

// $clientID = "119992589866-aluh60072k8m3r9adgc44787q6slpt47.apps.googleusercontent.com";
// $secret = "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";

// // Google API Client
// $gclient = new Google_Client();

// $gclient->setClientId($clientID);
// $gclient->setClientSecret($secret);
// $gclient->setRedirectUri('http://localhost/php-ecommerce/login.php');


// $gclient->addScope('email');
// $gclient->addScope('profile');




// if(isset($_GET['code'])){
//     // Get Token
//     $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);

//     // Check if fetching token did not return any errors
//     if(!isset($token['error'])){
//         // Setting Access token
//         $gclient->setAccessToken($token['access_token']);

//         // store access token
//         $_SESSION['access_token'] = $token['access_token'];

//         // Get Account Profile using Google Service
//         $gservice = new Google_Service_Oauth2($gclient);
       

//         // Get User Data
//         $udata = $gservice->userinfo->get();
//         foreach($udata as $k => $v){
//             $_SESSION['user_'.$k] = $v;
//         }
//         $_SESSION['ucode'] = $_GET['code'];
//         $fullName = explode(",",$_SESSION['user_givenName']);
//         $_SESSION['user_lastname'] = $fullName[0];
//         $_SESSION['user_firstname'] = $fullName[1];
  

//         header('location: login.php');
//         exit(0);
//     }
//     //var_dump($udata);
    
// };






// $fb = new Facebook\Facebook([
//     'app_id' => '1325949094666148',
//     'app_secret' => '08f8cada8ecac733b4bdb0fb2d8b02f8',
//     'default_graph_version' => 'v2.5',
// ]);

// $helper = $fb->getRedirectLoginHelper();
// $permissions = ['email']; // optional

// try {
//     if (isset($_SESSION['facebook_access_token'])) {
//         $accessToken = $_SESSION['facebook_access_token'];
//     } else {
//         $accessToken = $helper->getAccessToken();
//     }
// } catch(Facebook\Exceptions\facebookResponseException $e) {
//     echo 'Graph returned an error: ' . $e->getMessage();
//     exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
//     exit;
// }

// if (isset($accessToken)) {
    
//     if (isset($_SESSION['facebook_access_token'])) {
//         $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
//     } else {
//         $_SESSION['facebook_access_token'] = (string) $accessToken;
//         $oAuth2Client = $fb->getOAuth2Client();
//         $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
//         $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
//         $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
//     }

//     try {
//         $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
//         $requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
//         $picture = $requestPicture->getGraphUser();
//         $profile = $profile_request->getGraphUser();
//         $fbid = $profile->getProperty('id');          // To Get Facebook ID
//         $fbfullname = $profile->getProperty('name');  // To Get Facebook full name
//         $fbemail = $profile->getProperty('email');    //  To Get Facebook email
//         $fbpic = "<img src='".$picture['url']."' class='img-rounded' style='height:170px; width: 170px;' />";

//         $_SESSION['fb_id'] = $fbid.'</br>';
//         $_SESSION['fb_name'] = $fbfullname.'</br>';
//         $_SESSION['fb_email'] = $fbemail.'</br>';
//         $_SESSION['fb_pic'] = $fbpic.'</br>';

//         var_dump($_SESSION);
    
//     } catch(Facebook\Exceptions\FacebookResponseException $e) {
//         echo 'Graph returned an error: ' . $e->getMessage();
//         session_destroy();
//         header("Location: login.php");
//         exit;
    
//     } catch(Facebook\Exceptions\FacebookSDKException $e) {
//         echo 'Facebook SDK returned an error: ' . $e->getMessage();
//         exit;
//     }
// } else {
//     $loginUrl = $helper->getLoginUrl('http://localhost/php-ecommerce/index.php');
// }
//var_dump($_SESSION);
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
    <title>Login</title>
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


<div class="container mt-5 pt-5">
<?php 
  if(!empty($general_error)) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?php echo $general_error; ?></strong>
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php } ?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <img src="src/resources/images/login-right-side-bg.png"
          class="img-fluid" alt="Sample image" style="height: 100%; width: 100%">
      </div>
      <div class="col-md-6 border py-5 px-3">
        <form method="POST" action="login.php">
          <div class="d-flex flex-row align-items-center justify-content-center">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center justify-content-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg <?php echo $errors['email'] ? "is-invalid" : '' ?>"
              placeholder="Enter a valid email address" value="<?php echo isset($old['email']) ? $old['email'] : '' ?>" name="email"/>
            <small class="text-danger text-bold"><?php echo isset($errors['email']) ? $errors['email'] : '' ?></small>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg <?php echo $errors['password'] ? "is-invalid" : '' ?>"
              placeholder="Enter password" name="password"/>
            <small class="text-danger text-bold"><?php echo isset($errors['password']) ? $errors['password'] : '' ?></small>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-center mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login" value="Login" />
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
</div>



<?php include "inc/footer.php"; ?>