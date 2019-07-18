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
<?php
include '../vendor/autoload.php';
use App\Booking\Booking;
$bookingObj = new Booking();
$singleBook = $bookingObj->bookingSingleView($_GET['id']);
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
                        <li><i class="icon_document_alt"></i>Bookings</li>
                        <li><i class="fa fa-file-text-o"></i>Edit Booking</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Booking
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal " method="post" action="../view/Booking/Booking.php">
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $singleBook['email']; ?>" type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                
                                
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $singleBook['start_date']; ?>" name="start_date" type="text"  class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $singleBook['end_date']; ?>" name="end_date" type="text"  class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Room</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $singleBook['cabin_type']; ?>" name="cabin_type" type="text"  class="form-control" placeholder="" >
                                    </div>
                                </div>
                               
                                
                                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">

                                <div class="form-group">
                                    <button style="margin-right: 20px" type="submit" name="updateBooking" class="btn btn-danger pull-right">Update</button>

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
