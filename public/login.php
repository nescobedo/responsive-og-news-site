
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shale Experts Research Sections</title>

    <!--Begin Head-->
    <?php include("resources/inc/head.php"); ?>
    <!--End Head-->

  </head>

  <body class="body-wrap">

  <!--Begin Header-->
    <?php include("resources/inc/header.php"); ?>
    <?php include("resources/inc/nav.php"); ?>
  <!--End Header-->


  <!--Begin Content-->

  <div id="Login" class="content pg-padding">
      <div class="container">

        <div class="row">
          <div class="col-sm-4 center-block">

              <form class="form-login">
                <h2 class="form-login-heading">Member Log in</h2>
                <div class="form-group">
                  <label for="inputUserName" class="sr-only">Username</label>
                  <input id="inputUserName" class="form-control" placeholder="Username" required="" autofocus="" type="email">
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
                </div>
                <div class="checkbox">
                  <label>
                    <input value="remember-me" type="checkbox"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
              </form>

          </div>
          </div>
      </div>

  </div>
  <!--End Content-->


  <!--Begin Footer-->
  <?php include("resources/inc/footer.php"); ?>
  <!--End Footer-->

  <!--Begin Foot-->
  <?php include("resources/inc/foot.php"); ?>
  <!--End Foot-->

  </body>
</html>
