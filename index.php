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
          <form method="POST" action="php/login.php">
          <div class="input-group input-group-sm">
              <span class="input-group-addon glyphicon glyphicon-user"></span>
              <input type="text" class="form-control" name="user" id="user" placeholder="Username" required />
          </div>
          
          <div class="br">&nbsp;</div>
          
          <div class="input-group input-group-sm">
              <span class="input-group-addon glyphicon glyphicon-certificate"></span>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required />
          </div>
          
          <div class="br">&nbsp;</div>
          
          <button class="btn btn-primary full-width" type="button">Enter</button>
          </form>
      </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>