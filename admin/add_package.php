<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->


      <?php include 'inc/header.php'?>
      <!--header end-->

      <!--sidebar start-->
      <?php include 'inc/sidebar.php'; ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Packages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Packages</li>
						<li><i class="fa fa-square-o"></i>Add Package</li>
					</ol>
				</div>
			</div>
      <div>
        <?php if(isset($_SESSION['addSuccess'])){
        echo $_SESSION['addSuccess'];
        unset($_SESSION['addSuccess']);
      } ?>
      <?php if(isset($_SESSION['addError'])){
        echo $_SESSION['addError'];
        unset($_SESSION['addError']);
      } ?>
      </div>
              <!-- page start-->
              <div class="panel-body">
                        <form action="../view/Package/Package.php" class="form-horizontal "  method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Park Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pkg_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Loaction</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="description" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12"><h3>Available Cabins</h3></div>
                              <div class="col-sm-4">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Original
                                    </header>
                                    <div class="panel-body">
                                        
                                            <!--date picker start-->

                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Adult</label>
                                                <div class="col-sm-6">
                                                    <input name="adaltPrOri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Chield</label>
                                                <div class="col-sm-6">
                                                    <input name="chieldPrOri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Quantaty</label>
                                                <div class="col-sm-6">
                                                  <select name="oriQuantaty" class="form-control input-lg m-bot15">
                                                      <option disabled="">Quantaty</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                  </select>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                              </div>
                              <div class="col-sm-4">
                                <section class="panel">
                                    <header class="panel-heading">
                                       Luxary
                                    </header>
                                    <div class="panel-body">
                                        
                                            <!--date picker start-->

                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Adult</label>
                                                <div class="col-sm-6">
                                                    <input name="adultLaxpri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Chield</label>
                                                <div class="col-sm-6">
                                                    <input name="chieldLaxpri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Quantaty</label>
                                                <div class="col-sm-6">
                                                  <select name="luxquantaty" class="form-control input-lg m-bot15">
                                                      <option disabled="">Quantaty</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                  </select>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                              </div>
                              <div class="col-sm-4">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Contemporary 
                                    </header>
                                    <div class="panel-body">
                                        
                                            <!--date picker start-->

                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Adult</label>
                                                <div class="col-sm-6">
                                                    <input name="adultConPri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Peice for Chield</label>
                                                <div class="col-sm-6">
                                                    <input name="chieldConPri" id="cp1" type="text" placeholder="$" size="16" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Quantaty</label>
                                                <div class="col-sm-6">
                                                  <select name="contQuantaty" class="form-control input-lg m-bot15">
                                                      <option disabled="">Quantaty</option>
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                  </select>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                              </div>
                            
                            </div>
                            <div class="row">
                                <label class="col-sm-2 control-label">Upload Image</label>
                                <div class="input-group col-sm-10" style="margin-bottom: 10px">
                                    <input type="file"  name="pacimg">
                                </div>
                                <div style="margin-top: 20px" class="input-group">
                                    <label class="col-sm-2 control-label">Avaiable Time</label>
                                    <div class="col-sm-4">
                                          <input name="fromTime" type="text" class="form-control">
                                          
                                      </div>
                                      <div class="col-sm-2">To</div>
                                      <div class="col-sm-4">
                                          <input name="toTime" type="text" class="form-control">
                                      </div>
                                </div>
                              </div>
                              <div style="margin-top: 40px" class="col-sm-12"><button type="submit" class="btn btn-primary" name="pacSubmit">Submit</button></div>
                        </form>
                    </div>
              <!-- page end-->
          </section>
      </section>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
