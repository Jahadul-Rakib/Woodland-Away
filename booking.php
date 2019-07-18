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
			<?php
			if (isset($_SESSION['bookingSuccess'])) {
				echo $_SESSION['bookingSuccess'];
				unset($_SESSION['bookingSuccess']);
			}
			if (isset($_SESSION['bookingError'] )) {
				echo $_SESSION['bookingError'] ;
				unset($_SESSION['bookingError']);
			}
      if (isset($_SESSION['mailSendMsg'])) {
        echo $_SESSION['mailSendMsg'];
        unset($_SESSION['mailSendMsg']);
      }
			?>
		<div class="centered-form">
            <form id="bookForms" action="view/Booking/Booking.php" method="post">
              <div class="form-group">
                  <label class="col-sm-2 control-label">Start Date: </label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="startdate" id="dp1" required="">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">End Date: </label>
                  <div class="col-sm-10">
                      <input type="text" name="enddate" class="form-control" required="" id="dp2">
                  </div>
              </div>
              <input type="hidden" name="email" class="form-control" value="<?php echo $_SESSION['user_details']['email']; ?>">
              <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id'];?>">


              <div class="form-group">
                  <label class="col-sm-2 control-label">Select Cabin Type </label>
                  <div class="col-sm-10">
                      <select required="" name="cabintype">
                      	<option disabled="">Select Type</option>
                      	<option value="Luxary">Luxary</option>
                      	<option value="Original">Original</option>
                      	<option value="Contemporary">Contemporary</option>
                      </select>
                  </div>
              </div>
              <button style="display: block;" name="book" type="submit" class="btn btn-success" >Booking</button>

            </form>
        </div>
		</div>
	</div>
</div>


<?php include 'inc/footer.php'; ?>