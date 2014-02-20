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
                  <a class="navbar-brand navbar-left"><img height="30px" src="img/logo.png" alt="Fishgate logo" /></a>
              </div>
              <p class="navbar-text navbar-right text-right">
                  Hello <a href="#" class="navbar-link">John Smith</a>!<br />
                  <a href="#">Logout</a>
              </p>
          </div>
      </nav>

      
      <!--========================================
                        CONTAINER
      =========================================-->
      <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-3">
                <h2>Menu</h2>
                <div class="bg-white">
                    <h3>File selection</h3>
                    <form method="POST" action="php/upload.php">
                        <input type="file" name="upload" id="upload" placeholder="Upload" />
                        <div class="br">&nbsp;</div>
                        <button class="btn btn-primary full-width" type="button">Upload</button>
                    </form>
                    
                    <hr />
                    
                    <h3>Status</h3>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                          <span class="sr-only">45% Complete</span>
                          45%
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
                <h2>Archives</h2>
                
                <div class="actions-holder">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Delete</a></li>
                            <li><a href="#">Share</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-archive">
                    <form>
                        <div class="row archive-row">
                            <div class="col-xs-1 text-center border-right"><input type="checkbox" /></div>
                            <div class="col-xs-7">filetitlehere.pdf</div>
                            <div class="col-xs-2">2014-02-19</div>
                            <div class="col-xs-1 archiver-hold border-left">
                                <a class="glyphicon glyphicon-share-alt archiver"></a>
                            </div>
                            <div class="col-xs-1 archiver-hold border-left">
                                 <a class="glyphicon glyphicon-zoom-in archiver"></a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="row archive-row">
                            <div class="col-xs-1 text-center border-right"><input type="checkbox" /></div>
                            <div class="col-xs-7">filetitlehere.pdf</div>
                            <div class="col-xs-2">2014-02-19</div>
                            <div class="col-xs-1 archiver-hold border-left">
                                <a class="glyphicon glyphicon-share-alt archiver"></a>
                            </div>
                            <div class="col-xs-1 archiver-hold border-left">
                                 <a class="glyphicon glyphicon-zoom-in archiver"></a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="row archive-row">
                            <div class="col-xs-1 text-center border-right"><input type="checkbox" /></div>
                            <div class="col-xs-7">filetitlehere.pdf</div>
                            <div class="col-xs-2">2014-02-19</div>
                            <div class="col-xs-1 archiver-hold border-left">
                                <a class="glyphicon glyphicon-share-alt archiver"></a>
                            </div>
                            <div class="col-xs-1 archiver-hold border-left">
                                 <a class="glyphicon glyphicon-zoom-in archiver"></a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="row archive-row">
                            <div class="col-xs-1 text-center border-right"><input type="checkbox" /></div>
                            <div class="col-xs-7">filetitlehere.pdf</div>
                            <div class="col-xs-2">2014-02-19</div>
                            <div class="col-xs-1 archiver-hold border-left">
                                <a class="glyphicon glyphicon-share-alt archiver"></a>
                            </div>
                            <div class="col-xs-1 archiver-hold border-left">
                                 <a class="glyphicon glyphicon-zoom-in archiver"></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      
      
      
    <?php include 'includes/scripts.php' ?>
    
  </body>
</html>