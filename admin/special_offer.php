<?php
  require_once dirname(__DIR__)."/core/init.php";
  $user = new staff();

  if($user->isLoggedIn() && $user->hasPermission('admin')){

  

  include_once "head.php";

?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
    include_once "nav.php";
    
  ?>
  <br><br><br><br><br><br>
    <section id="main-content">
    <section class="wrapper">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add special offer</li>
      </ol>
      <div class="row">
        <div class="col-md-4" id="set_time_panel">
              <?php
if(isset($_GET['day'])){
      $day = $_GET['day'];
    }else {
      $day = date('j');
    }

    if(isset($_GET['month'])){
      $month = $_GET['month'];
    }else {
      $month = date("n");
    }

    if(isset($_GET['year'])){
      $year = $_GET['year'];
    }else {
      $year = date("Y");
    }

    //$day = date("j");
    //$month = date("n");
    //$year = date("Y");

    //echo $day."/".$Month."/".$year;

    $currentTimeStamp = strtotime("$year-$month-$day");
    $MonthName = date("F",$currentTimeStamp);
    $numDays = date("t",$currentTimeStamp);
    $counter = 0;


  ?>  

  <?php
    if(isset($_GET['add'])){
      @$title = $_POST['title'];
      @$details = $_POST['details'];
      @$eventdate = $month."/".$day."/".$year;

      $insert = DB::getInstance()->insert("eventcalender",array(
        'title' => $title,
        'detail' => $details,
        'evenDate' => $eventdate,
        'dateAdded' => 'now()'
      ));

      if($insert){
        
        
        echo "successfully addedd";
      }else {
        //echo "fail";
      }
    }
  ?>
  <div style="margin-top:50px;">
  <table class="table table-bordered">
    <tr>
      <td align="center"><input type="button" name="" value="<<" style="width: 70px" onclick="goLastMonth(<?php echo $month.",". $year ?>)"></td>
      <td colspan="5" align="center"><?php echo $MonthName.", ".$year ?></td>
      <td align="center"><input type="button" name="" value=">>" style="width: 70px" onclick="goNextMonth(<?php echo $month.",". $year ?>)"></td>
      
    </tr>

    <tr id="day" style="background:grey;">
      <td width="50px;">Sun</td>
      <td width="50px;">Mon</td>
      <td width="50px;">Tue</td>
      <td width="50px;">Wed</td>
      <td width="50px;">Thu</td>
      <td width="50px;">Fri</td>
      <td width="50px;">Sat</td>
      
    </tr>
      
      <?php
        echo "<tr>";
          
          for($i = 1; $i < $numDays; $i++, $counter++){
            $timeStamp = strtotime("$year-$month-$i");

            if($i == 1){
              $firstDay = date("w", $timeStamp);

              for($j = 0; $j<$firstDay; $j++,$counter++){
                //blank space
                echo "<td>&nbsp;</td>";
              }

            }

            if($counter % 7 == 0){
              echo "<tr></tr>";
            }

            $monthstring = $month;
            $monthlength = strlen($monthstring);

            $daystring = $i;
            $daylength = strlen($daystring);

            if($monthlength <=1){
              $monthstring = "0".$monthstring;
            }

            if($daylength <=1){
              $daylength = "0".$daystring;
            }

            
            $todaysDate = date("m/d/Y");
            $dateToCompare = $monthstring."/".$daystring."/".$year;

            //echo "<td align='center'><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";

            echo "<td align='center' ";

              $query = DB::getInstance()->query("SELECT * from eventcalender where evendate='$dateToCompare'");

              if($query->count()){
                echo "class='event'";
              }

            echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";

          }
        echo "</tr>"  
      ?>

  </table>
</div>

    <?php
      if(isset($_GET['v'])){
        echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Special Offer</a>"; 

        if(isset($_GET['f'])){
          include "eventFrom.php";
        }

        $sqlEvent = DB::getInstance()->query( "Select * from eventcalender where evenDate='$month/$day/$year'");


        foreach ($sqlEvent->results() as $event) {
          echo "<br></br>";
          echo "<hr/>";
          echo "Title -". $event->title."<br>";
          echo "details". $event->detail."<br>";
          echo "event Date". $event->evenDate;
        }
      }



    ?>  
        </div>
      </div>
      
    </div>
</section>
    <?php
       
       include_once "jsfile.php"; 
    ?>
    
  </div>
</section>
</body>

</html>

  <?php
    }else {
       Redirect::to('../index.php');
    }
  ?>
