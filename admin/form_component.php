<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
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
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Form elements</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Elements
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Help text</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                          <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Rounder</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Input focus</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Disabled</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Placeholder</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password"  class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Static control</label>
                                      <div class="col-lg-10">
                                          <p class="form-control-static">email@example.com</p>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group has-success">
                                      <label class="control-label col-lg-2" for="inputSuccess">Input with success</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputSuccess">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="control-label col-lg-2" for="inputWarning">Input with warning</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputWarning">
                                      </div>
                                  </div>
                                  <div class="form-group has-error">
                                      <label class="control-label col-lg-2" for="inputError">Input with error</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputError">
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Control sizing</label>
                                      <div class="col-lg-10">
                                          <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                                          <input class="form-control m-bot15" type="text" placeholder="Default input">
                                          <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">

                                          <select class="form-control input-lg m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                          <select class="form-control m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                          <select class="form-control input-sm m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
                                      <div class="col-lg-10">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                          </div>

                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great option one
                                              </label>
                                          </div>

                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Option two can be something else and selecting it will deselect option one
                                              </label>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Inline checkboxes</label>
                                      <div class="col-lg-10">
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                          </label>
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                          </label>
                                          <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                          </label>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Selects</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>

                                          <select multiple class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Column sizing</label>
                                      <div class="col-lg-10">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <input type="text" class="form-control" placeholder=".col-lg-2">
                                              </div>
                                              <div class="col-lg-3">
                                                  <input type="text" class="form-control" placeholder=".col-lg-3">
                                              </div>
                                              <div class="col-lg-4">
                                                  <input type="text" class="form-control" placeholder=".col-lg-4">
                                              </div>
                                          </div>

                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- Basic Forms & Horizontal Forms-->
              
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Basic Forms
                          </header>
                          <div class="panel-body">
                              <form role="form">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" id="exampleInputFile">
                                      <p class="help-block">Example block-level help text here.</p>
                                  </div>
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Horizontal Forms
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-10">
                                          <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                          <p class="help-block">Example block-level help text here.</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                      <div class="col-lg-10">
                                          <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox"> Remember me
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Sign in</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="panel">

                          <div class="panel-body">
                              <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Form in Modal
                              </a>
                              <a href="#myModal-1" data-toggle="modal" class="btn  btn-warning">
                                  Form in Modal 2
                              </a>
                              <a href="#myModal-2" data-toggle="modal" class="btn  btn-danger">
                                  Form in Modal 3
                              </a>

                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Email address</label>
                                                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Password</label>
                                                      <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputFile">File input</label>
                                                      <input type="file" id="exampleInputFile3">
                                                      <p class="help-block">Example block-level help text here.</p>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Check me out
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form">
                                                  <div class="form-group">
                                                      <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-10">
                                                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-10">
                                                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <div class="checkbox">
                                                              <label>
                                                                  <input type="checkbox"> Remember me
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-info">Sign in</button>
                                                      </div>
                                                  </div>
                                              </form>

                                          </div>

                                      </div>
                                  </div>
                              </div>
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form class="form-inline" role="form">
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                      <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                      <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Remember me
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-success">Sign in</button>
                                              </form>

                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- Inline form-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Inline form
                          </header>
                          <div class="panel-body">
                              <form class="form-inline" role="form">
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                  </div>
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox"> Remember me
                                      </label>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-12">                      

                      <div class="row">
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Color Pickers & Date Pickers
                                  </header>
                                  <div class="panel-body">
                                      <form class="form-horizontal " action="#">
                                          <!--date picker start-->

                                          <div class="form-group">
                                              <label class="control-label col-sm-4">Default Datepicker</label>
                                              <div class="col-sm-6">
                                                  <input id="cp1" type="text" value="28-10-2013" size="16" class="form-control">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label col-sm-4">Starts with years view</label>
                                              <div class="col-sm-6">


                                                  <div class="input-append date" id="dpYears" data-date="18-06-2013"
                                                       data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                      <input class="form-control" size="16" type="text" value="28-06-2013" readonly>
                                                      <span class="add-on"><i class="icon-calendar"></i></span>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="control-label col-sm-4"> Date Ranges</label>
                                              <div class="col-sm-6">
                                                  <div class="input-prepend">
                                                      <input id="reservation" type="text" class=" form-control" />
                                                  </div>
                                              </div>
                                          </div>
                                          <!--date picker end-->

                                          <!--color picker start-->
                                          <div class="form-group">
                                              <label class="control-label col-sm-4">Default</label>

                                              <div class="col-sm-5">
                                                  <input type="text" value="#CCCCCC" class="cp1 form-control">
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label col-sm-4">RGBA</label>

                                              <div class="col-sm-5">
                                                  <input type="text" data-color-format="rgba" value="rgb(255,255,255,1)" class="cp2 form-control">
                                              </div>
                                          </div>

                                          <!--color picker end-->

                                      </form>


                                  </div>
                              </section>
                              <section class="panel">
                                  <header class="panel-heading">
                                      Tags Input
                                  </header>
                                  <div class="panel-body">
                                      <input name="tagsinput" id="tagsinput" class="tagsinput" value="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal" />
                                  </div>
                              </section>
                          </div>
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Custom Checkbox & Radio
                                  </header>
                                  <div class="panel-body">
                                      <form action="#" method="get" accept-charset="utf-8">
                                          <div class="checkboxes">
                                              <label class="label_check" for="checkbox-01">
                                                  <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> I agree to the terms &#38; conditions.
                                              </label>
                                              <label class="label_check" for="checkbox-02">
                                              <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> Please send me regular updates. </label>
                                              <label class="label_check" for="checkbox-03">
                                              <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" /> This is nice checkbox.</label>

                                          </div>
                                          <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="sample-radio" id="radio-02" value="1" type="radio" /> and this is option B...
                                              </label>
                                              <label class="label_radio" for="radio-03">
                                                  <input name="sample-radio" id="radio-03" value="1" type="radio" /> or simply choose option C
                                              </label>
                                          </div>
                                      </form>
                                  </div>

                              </section>

                              <section class="panel">
                                  <header class="panel-heading">
                                      Switch
                                  </header>
                                  <div class="panel-body">
                                      <div class="row m-bot15">
                                          <div class="col-sm-6 text-center">
                                              <input type="checkbox" checked="" data-toggle="switch" />
                                          </div>
                                          <div class="col-sm-6 text-center">
                                              <input type="checkbox" data-toggle="switch" />
                                          </div>
                                      </div>
                                      <div class="row m-bot15">
                                          <div class="col-sm-6 text-center">
                                              <div class="switch switch-square"
                                                   data-on-label="<i class=' icon-ok'></i>"
                                                   data-off-label="<i class='icon-remove'></i>">
                                                  <input type="checkbox" />
                                              </div>
                                          </div>
                                          <div class="col-sm-6 text-center">
                                              <div class="switch switch-square"
                                                   data-on-label="<i class=' icon-ok'></i>"
                                                   data-off-label="<i class='icon-remove'></i>">
                                                  <input type="checkbox" checked="" />
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm-6 text-center">
                                              <input type="checkbox" disabled data-toggle="switch" />
                                          </div>
                                          <div class="col-sm-6 text-center">
                                              <input type="checkbox" checked disabled data-toggle="switch" />
                                          </div>
                                      </div>
                                  </div>
                              </section>


                          </div>
                      </div>

                      <div class="row">
                        <!-- Bootsrep Editor -->
                        <div class="col-lg-12">
                            <section class="panel">
                                  <header class="panel-heading">
                                      Bootsrep Editor
                                  </header>
                                  <div class="panel-body">    
                                    <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div>
                                    </div>
                            </section>
                          </div>
                          <!-- CKEditor -->
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      CKEditor
                                  </header>
                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="#" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2">CKEditor</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>
</html>
