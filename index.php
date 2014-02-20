<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FG Filer UI</title>
    
    <?php include 'includes/head.php'; ?>
    
  </head>
  <body>
      <!--========================================
                        NAVBAR
      =========================================-->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand"><img height="30px" src="img/logo.png" alt="Fishgate logo" /></a>
              </div>
          </div>
      </nav>
      
      
      <!--========================================
                        LOGIN
      =========================================-->
      <div class="well well-lg loginbox">
          <h1>login</h1>
          <form name="formlogin" method="POST" action="php/checklogin.php">
          <div class="input-group input-group-sm">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="myusername" id="myusername" placeholder="Username" required />
          </div>
          
          <div class="br">&nbsp;</div>
          
          <div class="input-group input-group-sm">
              <span class="input-group-addon glyphicon glyphicon-certificate"></span>
              <input type="password" class="form-control" name="mypassword" id="mypassword" placeholder="Password" required />
          </div>
          
          <div class="br">&nbsp;</div>
          <input class="btn btn-primary full-width" type="submit" name="submit" value="login" />
<!--          <button class="btn btn-primary full-width" type="button">Enter</button>-->
          </form>
      </div>
      

    <?php include 'includes/scripts.php' ?>
      
  </body>
</html>