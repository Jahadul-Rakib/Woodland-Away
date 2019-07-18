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
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i>About</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>About</li>

                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <?php if (isset($_SESSION['addAboutSuccess'])){
                            echo $_SESSION['addAboutSuccess'];
                            unset($_SESSION['addAboutSuccess']);
                        }?>
                    </div>
                    <section class="panel">
                        <header class="panel-heading">
                            Add About Page Content
                        </header>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data" action="../view/About/add_about.php" method="post">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea style="width: 100%; display: block; padding: 5px; min-height: 150px" id="content" name="content" placeholder="Content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="postimg">Add image</label>
                                    <input name="postimg" type="file" id="postimg">

                                </div>
                                <button name="aboutcontent" type="submit" class="btn btn-primary">Publish</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

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
<script src="js/js.js"></script>

</body>
</html>
