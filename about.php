<?php include 'inc/header.php';

include 'vendor/autoload.php';
use App\About\About;
$obj = new About();
$aboutPageContent = $obj->show();


?>
<section class="about-page-content">
	<div class="container">
		<div class="row">
			<div class="page-initial">
				<div class="col-xs-12">
					<p><a href="#">Home &nbsp;>> &nbsp;</a><span><a href="">About Us</a></span></p>
				</div>
			</div>
		</div>
        <?php foreach ($aboutPageContent as $pagcontent){ ?>
		<div class="row about-inner-title">
			<div class="col-xs-12 ">
				<h3><?php echo $pagcontent['title']; ?></h3>
			</div>
		</div>
		<div class="row about-inner">
			<div class="col-sm-4 fetured-img">
				<img src="upload/<?php echo $pagcontent['image']; ?>">
			</div>
			<div class="col-xs-12 col-sm-8 fetured-content clearfix">
				<h6>
                    <?php echo $pagcontent['content']; ?>
				</h6>

			</div>
		</div>
    <?php } ?>
	</div>
</section>

<?php include 'inc/footer.php'; ?>