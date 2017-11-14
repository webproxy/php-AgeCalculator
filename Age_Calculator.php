
<?php

if(isset($_POST['sub']))

{

$mm=$_POST['mm'];

$dd=$_POST['dd'];

$yy=$_POST['yy'];

$dob=$mm."/".$dd."/".$yy;

$arr=explode('/',$dob);

//$dateTs=date_default_timezone_set($dob);

$dateTs=strtotime($dob);

$now=strtotime('today');

if(sizeof($arr)!=3) die('ERROR:please enter a valid date');

if(!checkdate($arr[0],$arr[1],$arr[2])) die('PLEASE: enter a valid dob');

if($dateTs>=$now) die('ENTER a dob earlier than today');

$ageDays=floor(($now-$dateTs)/86400);

$ageYears=floor($ageDays/365);

$ageMonths=floor(($ageDays-($ageYears*365))/30);

echo "<div class='well' align='center' style='font-weight:bold; color:darkcyan'>You are approx $ageYears years and $ageMonths months old. </div>";

}

?>
<html>

  <head>

  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Simple Age Calculator built using PHP, HTML5, CSS3 and Bootstrap 3">
    <meta name="keywords" content="Age Calculator, PHP Age Claculator Script, webproxy ">
    <title> PHP Age Calculator   | WebProxy</title>
    <link rel="shortcut icon" href="//d2d3qesrx8xj6s.cloudfront.net/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->

  </head>
  
<body>

  <div class="container">

    <div class="row sm">

            <center>

                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h4>Age Calculator</h4>
                    </div>

                    <div class="panel-body">

                        <form method="post">

                        <label for="">
                        Date of Birth</label>

                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <select required class="form-control" name="mm">
                                        <option value="">Month</option>
                                        <?php
                                        for($i=1;$i<=12;$i++)
                                        {
                                        echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                </select required>
                                </div>

                                <div class="col-xs-4 col-md-4">
                                    <select required class="form-control"  name="dd">
                                        <option value="">Date</option>
                                            <?php
                                            for($i=1;$i<=31;$i++)
                                            {
                                            echo "<option value='$i'>$i</option>";
                                            }

                                            ?>
                                    </select required>
                                </div>

                                <div class="col-xs-4 col-md-4">
                                    <select required class="form-control" name="yy">
                                        <option value="">Year</option>
                                            <?php
                                        for($i=2015;$i>=1950;$i--)
                                        {
                                        echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select required>
                                </div>

                        </div>
                                
                               

                            <div class="panel-footer">	
                                <button type="submit" class="btn btn-primary" name="sub">Calculate my Age</button>
                            </div>

                        </form>
                    </div>

                </div>

            </center>


     </div>
      
   </div>

</body>

</html>