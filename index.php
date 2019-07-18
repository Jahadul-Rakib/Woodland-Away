<?php include 'inc/header.php'; ?>
<?php
include 'vendor/autoload.php';
use App\Animal\Animal;
$animalObj = new Animal();
$allAnimal = $animalObj->allAnimals();

use App\About\About;
$obj = new About();
$aboutPageContent = $obj->show();

?>
<section class="main-content-wrp">
	
		<div class="row">
			
			
			<div class="col-xs-12 col-sm-12 main-slider">
				<div id="owl-demo" class="owl-carousel owl-theme">
                    <?php foreach ($allAnimal as $animal){ ?>
				  <div class="item"><img src="upload/<?php echo $animal['image']; ?>" alt="Image Missing"></div>
                <?php } ?>

				</div>
			</div>
		</div>
	
</section>

<section class="about-wrp">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<marquee><h2 style="font-size: 20px; line-height: 24px; margin-top: 20px">Welcome To Woodlands Away</h2></marquee>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="contact-widget">
					<h3>Contact</h3>
					<div class="contact-field clearfix">
                        <form role="form" action="view/Message/Message.php" method="post">
						<div class="ne-field">
							<span class="name-field"><input name="name" type="text" placeholder="Name" required/></span>
							<span class="email-field"><input name="email" type="email" placeholder="Email" required /></span>
						</div>	
						<div class="txt-field">
							<span class="massage-field"><textarea name="message" placeholder="Massage"></textarea></span>
						</div>
						<div class="submit-field clearfix">
							<p>If You Contact with us,then please use this</p>
                            <?php if (isset( $_SESSION['contactSuccess'])){
                                echo  $_SESSION['contactSuccess'];
                                unset( $_SESSION['contactSuccess']);
                            }?>

                            <?php if (isset( $_SESSION['contactError'])){
                                echo  $_SESSION['contactError'];
                                unset( $_SESSION['contactError']);
                            }?>
							<input name="submit" type="submit" value="Submit">
						</div>
                        </form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="about-content">
					<h3>About Us</h3>
                    <?php foreach ($aboutPageContent as $abcontent){ ?>
					<p>

						<?php echo $abcontent['content']; ?>
					</p>
                    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>




<?php include 'inc/footer.php'; ?>