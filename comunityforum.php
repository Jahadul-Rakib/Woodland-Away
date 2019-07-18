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
		<div class="centered-form">
          <?php if(isset($_SESSION['qSuccess'])){
            echo $_SESSION['qSuccess'];
            unset($_SESSION['qSuccess']);

          }?>
            <form id="bookForms" action="view/Question/Question.php" method="post">
              <div class="form-group">
                  <label class="col-sm-2 control-label">Add Question</label>
                  <div class="col-sm-10">
                      <textarea name="question"></textarea>
                  </div>
              </div>
              <input type="hidden" name="email" class="form-control" value="<?php echo $_SESSION['user_details']['email']; ?>">
              <input type="hidden" name="id" class="form-control" value="<?php echo  $_SESSION['user_details']['id'];?>">
              <button style="display: block; margin-top: 10px" name="qsub" type="submit" class="btn btn-success pull-right" >Submit</button>

            </form>
        </div>
		</div>
	</div>
</div>


<?php include 'inc/footer.php'; ?>