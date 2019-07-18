<?php include 'inc/header.php'; ?>

<section class="about-page-content">
	<div class="container">
		<div class="the-page-content">
			<div class="row">
				<div class="page-initial">
					<div class="col-xs-12">
						<p><a href="#">Home &nbsp;>> &nbsp;</a><span><a href="">Sign Up</a></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
            <div class="sessionmsg">
                <?php
                if (isset($_SESSION['EmailErrorMass'])){
                    echo $_SESSION['EmailErrorMass'];
                    unset($_SESSION['EmailErrorMass']);
                }

                ?>
            </div>
        	<div class="panel panel-default">
        		<div class="panel-heading" style="background: #7FC02E; color: #fff;">
			    		<h3 class="panel-title">Please sign up <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="view/User/Registration.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="fname" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lname" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="form-group">
			    				<textarea name="address" placeholder="Address" style=""></textarea>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="zip" id="zip" class="form-control input-sm" placeholder="Zip Code">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<select  name="gender">
			    							<option>Select Gender</option>
			    							<option value="male">Male</option>
			    							<option value="female">Female</option>
			    						</select>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                <div>
                                    <?php if (isset($_SESSION['EmailErrorMass'])){
                                        echo $_SESSION['EmailErrorMass'];
                                        unset($_SESSION['EmailErrorMass']);
                                    }?>
                                </div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
                                    <div>
                                        <?php if (isset($_SESSION['passworNotmach'])){
                                            echo $_SESSION['passworNotmach'];
                                            unset($_SESSION['passworNotmach']);
                                        }?>
                                    </div>
			    				</div>
			    			</div>
			    			
			    			<input name="signup" style="width:100px; background: #7FC02E; border:none" type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

<?php include 'inc/footer.php'; ?>