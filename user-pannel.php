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
?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<?php include 'inc/sidebar.php'; ?>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>



<footer class="footer-wrp">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="footer-left">
					<a href="">Loremipsum.com</a>
					<p>All Lorem Ipsum</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="footer-right">
					<span><a href="">Lorem Ipsum</a>  &nbsp; &nbsp;|&nbsp; &nbsp; <a href="">Lorem Ipsum</a></span>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- script -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/js.js"></script>
<!-- end of script -->

</body>
</html>