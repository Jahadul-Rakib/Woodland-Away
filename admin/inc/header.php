<?php session_start();

if (!isset($_SESSION['admin_details'])){
    unset($_SESSION['admin_details']);
    header('location: login.php');

}

?>
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.html" class="logo">Woodland Away <span class="lite">Admin</span></a>
    <!--logo end-->

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">



            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            
                    <span class="username"><?php if (isset($_SESSION['admin_details'])){
                        echo $_SESSION['admin_details']['fname']." ".$_SESSION['admin_details']['lname'];
                        }?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                    </li>

                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>