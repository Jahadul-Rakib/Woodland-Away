<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

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
<?php
include '../vendor/autoload.php';
use App\Animal\Animal;
$animalObj = new Animal();
$allAnimal = $animalObj->allAnimals();
?>
<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <?php include 'inc/header.php'; ?>
    <!--header end-->

    <!--sidebar start-->
    <?php include 'inc/sidebar.php'; ?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Soprts</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-table"></i>Animals</li>

                    </ol>
                </div>
            </div>
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset( $_SESSION['animalSuccess'])){
                        echo  $_SESSION['animalSuccess'];
                        unset( $_SESSION['animalSuccess']);
                    }?>
                </div>
                <div class="col-lg-12">
                    <section class="panel">

                        <header class="panel-heading">
                            All Sports
                        </header>


                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th> Name</th>
                                <th> Description</th>
                                <th> Image</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            <?php foreach ($allAnimal as $animal){ ?>
                                <tr>
                                    <td><?php echo $animal['name'];?></td>
                                    <td><?php echo $animal['description'];?></td>
                                    <td><img style="height: 70px; width: 70px; " src="../upload/<?php echo $animal['image'];?>"></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="animal_single_view.php?id=<?php echo $animal['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger" href="view/delete_animal.php?id=<?php echo $animal['id'];?>"><i class="icon_close_alt2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>


                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>

</section>
<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>
<script src="js/js.js"></script>


</body>
</html>
