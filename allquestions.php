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
use App\Question\Question;
$quesObj = new Question();
$allQ = $quesObj->allQuestions();


?>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
            <?php include 'inc/sidebar.php'; ?>
		</div>
		<div class="col-md-9">
       <?php if(isset($_SESSION['ansSuccess'])){
            echo $_SESSION['ansSuccess'];
            unset($_SESSION['ansSuccess']);

          }?>
      <?php foreach($allQ as $qs){ ?>
		  <div style="margin-bottom: 30px">
        <p><?php echo $qs['question']; ?></p>
        <a href="">Author: <?php echo $qs['email']; ?></a>
        <div>
          <h6><u>All Answar: </u></h6>
          <?php 
          $allAns = $quesObj->allans($qs['qid']);
         

          ?>
          <?php foreach($allAns as $ans){ ?>
          <div>
            <p><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $ans['email']." :- ".$ans['ans']; ?> </p>
          </div>
          <?php } ?>
          
        </div>
        <form method="post" action="view/Question/Question.php">
          <textarea style="border: 1px solid #000; width: 100%; margin-top: 20px;padding: 5px; height: 100px " name="answar" placeholder="Answer Here"></textarea>
          <input type="hidden" name="qid" value="<?php echo $qs['qid']; ?>">
          <input type="hidden" name="email" value="<?php echo  $_SESSION['user_details']['email'];?>">
          <button name="anssubmit" type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      <?php } ?>
		</div>
	</div>
</div>


<?php include 'inc/footer.php'; ?>