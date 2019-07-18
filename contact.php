<?php include 'inc/header.php'; ?>



<section class="about-page-content">
	<div class="container">
		<div class="row">
			<div class="page-initial">
				<div class="col-xs-12">
					<p><a href="#">Home &nbsp;>> &nbsp;</a><span><a href="">Contact Us</a></span></p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="contact-widget">
					<h3>Contact Us</h3>
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
                                <?php if (isset( $_SESSION['ccontactSuccess'])){
                                    echo  $_SESSION['ccontactSuccess'];
                                    unset( $_SESSION['ccontactSuccess']);
                                }?>

                                <?php if (isset( $_SESSION['ccontactError'])){
                                    echo  $_SESSION['ccontactError'];
                                    unset( $_SESSION['ccontactError']);
                                }?>
                                <input name="csubmit" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 contact-address">
				<h5>Contact Info</h5>
				<p>Nemo enim ipsam voluptatem sed quia consequuntur.</p>
				<p>
					Magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur qui ratione voluptatem sequi nesciunt.
				</p>
				<h6>
					<ul>
						<li>The Company Name inc.</li>
						<li>12345 St Vincent Place,</li>
						<li>Glasgow, DC 45 fr 45.</li>
						<li>Phone No. : <a href="tel:-1811 256 6325"> -1811 256 6325</a></li>
						<li class="email">E-mail :<a href="mailto:mail@demolink.org"> mail@demolink.org</a></li>
					</ul>
				</h6>
			</div>
		</div>
	</div>
</section>

<?php include 'inc/footer.php'; ?>