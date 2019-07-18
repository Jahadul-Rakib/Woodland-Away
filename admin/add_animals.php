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
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        #img-upload{
            width: 100%;
        }
    </style>
</head>
<?php
include '../vendor/autoload.php';

?>
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
                        <li><i class="icon_document_alt"></i>Animals</li>
                        <li><i class="fa fa-file-text-o"></i>Add Animal</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Adding
                        </header>
                        <div class="panel-body">
                            <?php if (isset($_SESSION['animalError'])){
                                echo $_SESSION['animalError'];
                                unset($_SESSION['animalError']);
                            }?>
                            <form class="form-horizontal " method="post" action="../view/Animals/add_animal.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" placeholder="Enter name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Description</label>
                                    <div class="col-sm-10">
                                        <textarea style="max-width: 100%; width: 100%; min-height: 150px; padding: 5px" name="description" placeholder="Description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Upload Image</label>
                                    <div class="input-group col-sm-10">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input name="postimg" type="file" id="imgInp">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>

                                    </div>
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <img style="max-height: 200px; max-width: 200px" id='img-upload'/>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <button style="margin-right: 20px" type="submit" name="addanimal" class="btn btn-danger pull-right">Add</button>

                                </div>
                            </form>
                        </div>
                    </section>


                </div>
            </div>
            <!-- Basic Forms & Horizontal Forms-->

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
