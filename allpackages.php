<?php include 'inc/header.php'; ?>
    <!--
    User Profile Sidebar by @keenthemes
    A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
    Licensed under MIT
    -->
<?php if (!isset($_SESSION['user_details'])){
    unset($_SESSION['user_details']);
    header('location: login.php');

}
include 'vendor/autoload.php';
use App\Package\Package;
$allpakge = new Package();
$pack = $allpakge->allPackage();

/*echo "<pre>";
var_dump($pack);
echo "</pre>";*/

?>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <?php include 'inc/sidebar.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach($pack as $pac){ ?>
                    <div class="col-sm-6">
                        <img src="upload/<?php echo $pac['image']; ?>">
                        <h5>Package Name: <?php echo $pac['package_name']; ?> </h5>
                        <h5>Loaction: <?php echo $pac['location']; ?></h5>
                        <p><u>Deasciption:</u> <?php echo $pac['description']; ?></p>

                        <div>
                            <h3>Luxary:</h3>
                            <h5>Quantaty: <?php echo $pac['lxquantaty']; ?></h5>
                            <h5>Adult Price: <?php echo $pac['lxprad']; ?></h5>
                            <h5>Chield Price: <?php echo $pac['lxprch']; ?></h5>
                        </div>
                        <div>
                            <h3>Original:</h3>
                            <h5>Quantaty: <?php echo $pac['orquantaty']; ?></h5>
                            <h5>Adult Price: <?php echo $pac['orpadult']; ?></h5>
                            <h5>Chield Price: <?php echo $pac['orprich']; ?></h5>
                        </div>
                        <div>
                            <h3>Contemporary:</h3>
                            <h5>Quantaty: <?php echo $pac['conquantaty']; ?></h5>
                            <h5>Adult Price: <?php echo $pac['conpriadu']; ?></h5>
                            <h5>Chield Price: <?php echo $pac['conprichi']; ?></h5>
                        </div>
                        <a href="booking.php?id=<?php echo $pac['id']; ?>" class="btn btn-success" style="margin-bottom: 30px; display: block;">Booking</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


<?php include 'inc/footer.php'; ?>