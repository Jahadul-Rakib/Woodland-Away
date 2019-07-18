<?php include 'inc/header.php'; ?>

<section class="about-page-content">
	<div class="container">
		<div class="the-page-content">
			<div class="row">
				<div class="page-initial">
					<div class="col-xs-12">
						<p><a href="#">Home &nbsp;>> &nbsp;</a><span><a href="">Login</a></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
            <?php if (isset( $_SESSION['RegSuccess'])){
                echo  $_SESSION['RegSuccess'];
                unset( $_SESSION['RegSuccess']);
            }?>
            <?php if (isset( $_SESSION['RegError'])){
                echo  $_SESSION['RegError'];
                unset( $_SESSION['RegError']);
            }?>
        	<div class="panel panel-default">
        		<div class="panel-heading" style="background: #7FC02E; color: #fff;">
			    		<h3 class="panel-title">Login</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="view/User/Login.php">
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="form-group">
			    				<input type="password" name="password" id="email" class="form-control input-sm" placeholder="Password">
			    			</div>
			    			
			    			
			    			<input style="width:100px; background: #7FC02E; border:none" type="submit" name="login" value="Login" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
<?php include 'inc/footer.php'?>