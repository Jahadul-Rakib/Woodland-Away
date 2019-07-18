<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="images/slider4.jpg" class="img-responsive" alt="">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            <?php echo $_SESSION['user_details']['fname']." ".$_SESSION['user_details']['lname'];?>
        </div>
        <div class="profile-usertitle-job">
            <?php echo $_SESSION['user_details']['email']?>
        </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->

    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav" style="background: #7FC02E;">
            <li class="active">
                <a href="user-pannel.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Overview </a>
            </li>
            <li>
                <a href="view_special_offer.php">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Special Offers </a>
            </li>
            <li>
                <a href="allpackages.php">
                    <i class="fa fa-frown-o" aria-hidden="true"></i>
                    Packages </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    Community Forum </a>
                    <ul>
                        <li><a href="comunityforum.php">Add Question</a></li>
                        <li><a href="allquestions.php">All Questions</a></li>
                    </ul>
            </li>
            <li>
                <a href="user-pannel.php">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    Profile </a>
            </li>
            <li>
                <a href="view/User/Logout.php">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    Logout </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>