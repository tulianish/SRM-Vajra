<html>
	<head>
		<title>Registration Status</title>
        <meta http-equiv="refresh" content="10;http://www.srmvajra.com" />
        <link rel="stylesheet" href="index_style.css" />
		<style type="text/css">
			body
			{
				font-size: 30px;
				font-family: century gothic;
                background-color: ghostwhite;
			}
            center
            {
                font-size: 20px;
                position: relative;
                top: 200px;
                color: #000;
                font-family: sans-serif;
            }
            caption
            {
                font-size: 15px;
                font-family: sans-serif;
            }
            center b
            {
                font-family: monospace;
            }
            div[class="button"]
            {
                position: relative;
                top: 0px;
            }
            table
            {
                display: block;
                border-collapse: separate;
                top: 10px;
                position: relative;
                border-spacing: 5px;
                max-width: 960px;
                margin-left: auto;
                margin-right: auto;
            }
            td
            {
                padding-top: 20px;
                padding-left: 20px;
                padding-right: 20px;
                padding-bottom: 20px;
                font-family: sans-serif;
            }
            table tr:nth-child(2n+1)
            {
                color: #000;
                font-weight: bold;
            }
            tr td:nth-child(2n+1)
            {
                text-align: center;
            }
            table tr:nth-child(2n)
            {
                background-color: dodgerblue;   
                color: #fff;
                font-weight: bold;
            }
		</style>
	</head>
	<body>
		<?php
			if (isset($_REQUEST['typereg'])&&$_REQUEST['typereg']=="UNIVERSITY")
			{
				$email = $_REQUEST['mailu'] ;
				$subject = $_REQUEST['typereg']." Registration: ".$_REQUEST['college']." ".$_REQUEST['university'];
			    $name = $_REQUEST['nameu'];
    $college = $_REQUEST['collegeu'];
    $university = $_REQUEST['univu'];
    $phone = $_REQUEST['phoneu'];
    $usem = $_REQUEST['mailu'];
    $pinoycode = $_REQUEST['pinu'];
    $add1 = $_REQUEST['a1u'];
    $add2 = $_REQUEST['a2u'];
    $inmycity = $_REQUEST['cityu'];
    $sportslist = 'Participating in';
    $date = $_REQUEST['date'];
                $bbm = 0;
                $bbwm = 0;
                $football = 0;
                $cricket = 0;
                $ttmu = 0;
                $ttwmu = 0;
                $vballm = 0;
                $vballwm = 0;
                $chessmu = 0;
                $chesswmu = 0;
                $carrommu= 0;
                $carromwmu = 0;
                $usainmu = 0;
                $usainwmu = 0;
                $ljumpmu = 0;
                $ljumpwmu = 0;
                $badmu = 0;
                $badwmu = 0;
                $shotputu = 0;
                $acu = 0;
    if(isset($_REQUEST['bbm']))
    {
        $sportslist = $sportslist.", Basketball (Men)";
        $bbm = 1;
    }
    if(isset($_REQUEST['bbwm']))
    {
        $sportslist = $sportslist.", Basketball (Women)";
        $bbwm = 1;

    }
    if(isset($_REQUEST['football']))
    {
        $sportslist = $sportslist.", Football (Men only)";
        $football = 1;
    }
    if(isset($_REQUEST['cricket']))
    {
        $sportslist = $sportslist.", Cricket (Men only)";
        $cricket = 1;
    }
    if(isset($_REQUEST['ttmu']))
    {
        $sportslist = $sportslist.", Table Tennis (Men)";
        $ttmu = 1;
    }
    if(isset($_REQUEST['ttwmu']))
    {
        $sportslist = $sportslist.", Table Tennis (Women)";
        $ttwmu = 1;
    }
    if(isset($_REQUEST['chessmu']))
    {
        $sportslist = $sportslist.", Chess (Men)";
        $chessmu = 1;
    }
    if(isset($_REQUEST['chesswmu']))
    {
        $sportslist = $sportslist.", Chess (Women)";
        $chesswmu = 1;
    }
    if(isset($_REQUEST['carrommu']))
    {
        $sportslist = $sportslist.", Carrom (Men)";
        $carrommu = 1;
    }
    if(isset($_REQUEST['carromwmu']))
    {
        $sportslist = $sportslist.", Carrom (Women)";
        $carromwmu = 1;
    }
    if(isset($_REQUEST['vballm']))
    {
        $sportslist = $sportslist.", Volleyball (Men)";
        $vballm = 1;
    }
    if(isset($_REQUEST['acu']))
    {
        $acu = 1;
    }            
    if(isset($_REQUEST['vballwm']))
    {
        $sportslist = $sportslist.", Volleyball (Women)";
        $vballwm = 1;
    }
    if(isset($_REQUEST['usainmu']))
    {
        $sportslist = $sportslist.", 100m (Men)";
        $usainmu = 1;
    }
    if(isset($_REQUEST['usainwmu']))
    {
        $sportslist = $sportslist.", 100m (Women)";
        $usainwmu = 1;
    }
    if(isset($_REQUEST['ljumpmu']))
    {
        $sportslist = $sportslist.", Long Jump (Men)";
        $ljumpmu = 1;
    }
    if(isset($_REQUEST['ljumpwmu']))
    {
        $sportslist = $sportslist.", Long Jump (Women)";
        $ljumpwmu = 1;
    }
    if(isset($_REQUEST['badwmu']))
    {
        $sportslist = $sportslist.", Badminton (Women)";
        $badwmu = 1;
    }
    if(isset($_REQUEST['badmu']))
    {
        $sportslist = $sportslist.", Badminton (Men)";
        $badmu = 1;
    }
    if(isset($_REQUEST['shotputu']))
    {
        $sportslist = $sportslist.", Shot Put (Men only)";
        $shotputu = 1;
    }
    
                $servername = "svname";
                $username = "abc";
                $password = "xyz";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $conn->query("USE mysql");
    $conn->query("CREATE TABLE IF NOT EXISTS `collegereg` (
  `repname` text,
  `collegename` text,
  `universitat` text,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `pinoycode` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `citystate` text NOT NULL,
  `basketballmen` tinyint(1) NOT NULL,
  `basketballwomen` tinyint(1) NOT NULL,
  `football` tinyint(1) NOT NULL,
  `cricket` tinyint(1) NOT NULL,
  `volleyballmen` tinyint(1) NOT NULL,
  `volleyballwomen` tinyint(1) NOT NULL,
  `ttmen` tinyint(1) NOT NULL,
  `ttwomen` tinyint(1) NOT NULL,
  `chessmen` tinyint(1) NOT NULL,
  `chesswomen` tinyint(1) NOT NULL,
  `carrommen` tinyint(1) NOT NULL,
  `carromwomen` tinyint(1) NOT NULL,
  `sprintmen` tinyint(1) NOT NULL,
  `sprintwomen` tinyint(1) NOT NULL,
  `longjumpmen` tinyint(1) NOT NULL,
  `longjumpwomen` tinyint(1) NOT NULL,
  `shotput` tinyint(1) NOT NULL,
  `badmintonmen` tinyint(1) NOT NULL,
  `badmintonwomen` tinyint(1) NOT NULL,
  `typereg` text NOT NULL,
  `accomodation` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
     $apes = $conn->query("SELECT * from collegereg WHERE email='".$usem."'");
                $grapes = $apes->num_rows;
                if($grapes != 0)
                {
                    die("<center>The following e-mail address:<br /><b>".$usem."</b><br />is already registered with us. :(<br/><br/><a href=\"registration.html\"><div class=\"button\">Go Back</div></a><br /><br /><br /><sup>Please do not hesitate to contact us at <a href=\"mailto:srmvajra15@gmail.com\">this</a> e-mail ID if you think this was a mistake.</sup></center>");
                }
                else
                {
                    $mail = "<table><caption><br /><i>Registered successfully, redirecting to the index page</i></caption><tr><td>Name</td><td>".$name."</td></tr><tr><td>College</td><td>".$college."</td></tr><tr><td>Sport list</td><td>".$sportslist."</td></tr><tr><td>Phone</td><td>".$phone."</td></tr><tr><td>E-Mail ID</td><td>".$usem."</td></tr><tr><td>Address 1</td><td>".$add1."</td></tr><tr><td>Address 2</td><td>".$add2."</td></tr><tr><td>City</td><td>".$inmycity."</td></tr><tr><td>Pincode</td><td>".$pinoycode."</td></tr></table>";
                    echo $mail."<br>";
                    //here we enter the code to input into dbase
                    $ql = "INSERT INTO collegereg                               (repname,collegename,universitat,phone,email,pinoycode,address1,address2,citystate,basketballmen,basketballwomen,football,cricket,volleyballmen,volleyballwomen,ttmen,ttwomen,chessmen,chesswomen,carrommen,carromwomen,sprintmen,sprintwomen,longjumpmen,longjumpwomen,shotput,badmintonmen,badmintonwomen,typereg,accomodation,date) VALUES ('".$name."','".$college."','".$university."','".$phone."','".$usem."','".$pinoycode."','".$add1."','".$add2."','".$inmycity."',".$bbm.",".$bbwm.",".$football.",".$cricket.",".$vballm.",".$vballwm.",".$ttmu.",".$ttwmu.",".$chessmu.",".$chesswmu.",".$carrommu.",".$carromwmu.",".$usainmu.",".$usainwmu.",".$ljumpmu.",".$ljumpwmu.",".$shotputu.",".$badmu.",".$badwmu.",'UNIVERSITY',".$acu.",'".$date."')";
                    echo $ql;
                    if ($conn->query($ql) === TRUE) {
                            echo "";
                        } else {
                        echo "Error: " . $ql . "<br>" . $conn->error;
                            }
                }
                //kappa lol
            $conn->close();
        }
    else
    {
        $email = $_REQUEST['mail'] ;
				$subject = $_REQUEST['typereg']." Registration: ".$_REQUEST['college']." ".$_REQUEST['university'];
			    $name = $_REQUEST['name'];
    $college = $_REQUEST['college'];
    $university = $_REQUEST['university'];
    $phone = $_REQUEST['phone'];
    $usem = $_REQUEST['mail'];
    $pinoycode = $_REQUEST['pincode'];
    $add1 = $_REQUEST['a1'];
    $add2 = $_REQUEST['a2'];
    $inmycity = $_REQUEST['city'];
    $sportslist = 'Participating in';
                $ttmu = 0;
                $ttwmu = 0;
                $chessmu = 0;
                $chesswmu = 0;
                $carrommu= 0;
                $carromwmu = 0;
                $usainmu = 0;
                $usainwmu = 0;
                $ljumpmu = 0;
                $ljumpwmu = 0;
                $date = $_REQUEST['date'];
                $shotputu = 0;
                $acu = 0;
    if(isset($_REQUEST['ttm']))
    {
        $sportslist = $sportslist.", Table Tennis (Men)";
        $ttmu = 1;
    }
    if(isset($_REQUEST['ttwm']))
    {
        $sportslist = $sportslist.", Table Tennis (Women)";
        $ttwmu = 1;
    }
    if(isset($_REQUEST['chessm']))
    {
        $sportslist = $sportslist.", Chess (Men)";
        $chessmu = 1;
    }
    if(isset($_REQUEST['chesswm']))
    {
        $sportslist = $sportslist.", Chess (Women)";
        $chesswmu = 1;
    }
    if(isset($_REQUEST['carromm']))
    {
        $sportslist = $sportslist.", Carrom (Men)";
        $carrommu = 1;
    }
    if(isset($_REQUEST['carromwm']))
    {
        $sportslist = $sportslist.", Carrom (Women)";
        $carromwmu = 1;
    }
    if(isset($_REQUEST['ac']))
    {
        $acu = 1;
    }            
    if(isset($_REQUEST['usainm']))
    {
        $sportslist = $sportslist.", 100m (Men)";
        $usainmu = 1;
    }
    if(isset($_REQUEST['usainwm']))
    {
        $sportslist = $sportslist.", 100m (Women)";
        $usainwmu = 1;
    }
    if(isset($_REQUEST['ljumpm']))
    {
        $sportslist = $sportslist.", Long Jump (Men)";
        $ljumpmu = 1;
    }
    if(isset($_REQUEST['ljumpwm']))
    {
        $sportslist = $sportslist.", Long Jump (Women)";
        $ljumpwmu = 1;
    }
    if(isset($_REQUEST['shotput']))
    {
        $sportslist = $sportslist.", Shot Put (Men only)";
        $shotputu = 1;
    }
    
$servername = "svrname";
$username = "abc";
$password = "xyz";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $conn->query("USE mysql");
         $conn->query("CREATE TABLE IF NOT EXISTS `studentreg` (
  `repname` text,
  `collegename` text,
  `universitat` text,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `pinoycode` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `citystate` text NOT NULL,
  `ttmen` tinyint(1) NOT NULL,
  `ttwomen` tinyint(1) NOT NULL,
  `chessmen` tinyint(1) NOT NULL,
  `chesswomen` tinyint(1) NOT NULL,
  `carrommen` tinyint(1) NOT NULL,
  `carromwomen` tinyint(1) NOT NULL,
  `sprintmen` tinyint(1) NOT NULL,
  `sprintwomen` tinyint(1) NOT NULL,
  `longjumpmen` tinyint(1) NOT NULL,
  `longjumpwomen` tinyint(1) NOT NULL,
  `shotput` tinyint(1) NOT NULL,
  `typereg` text NOT NULL,
  `accomodation` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
     $apes = $conn->query("SELECT * from studentreg WHERE email='".$usem."'");
                $grapes = $apes->num_rows;
                if($grapes != 0)
                {
                    die("<center>The following e-mail address:<br /><b>".$usem."</b><br />is already registered with us. :(<br/><br/><a href=\"registration.html\"><div class=\"button\">Go Back</div></a><br /><br /><br /><sup>Please do not hesitate to contact us at <a href=\"mailto:srmvajra15@gmail.com\">this</a> e-mail ID if you think this was a mistake.</sup></center>");
                }
                else
                {
                    $mail = "<table><caption><br /><i>Registered successfully, redirecting to the index page</i></caption><tr><td>Name</td><td>".$name."</td></tr><tr><td>College</td><td>".$college."</td></tr><tr><td>Sport list</td><td>".$sportslist."</td></tr><tr><td>Phone</td><td>".$phone."</td></tr><tr><td>E-Mail ID</td><td>".$usem."</td></tr><tr><td>Address 1</td><td>".$add1."</td></tr><tr><td>Address 2</td><td>".$add2."</td></tr><tr><td>City</td><td>".$inmycity."</td></tr><tr><td>Pincode</td><td>".$pinoycode."</td></tr></table>";
                    echo $mail."<br>";
                    //here we enter the code to input into dbase
                    $ql = "INSERT INTO studentreg                               (repname,collegename,universitat,phone,email,pinoycode,address1,address2,citystate,sprintmen,sprintwomen,longjumpmen,longjumpwomen,shotput,typereg,accomodation,date) VALUES ('".$name."','".$college."','".$university."','".$phone."','".$usem."','".$pinoycode."','".$add1."','".$add2."','".$inmycity."',".$usainmu.",".$usainwmu.",".$ljumpmu.",".$ljumpwmu.",".$shotputu.",'STUDENT',".$acu.",'".$date."')";
                    if ($conn->query($ql) === TRUE) {
                            echo "";
                        } else {
                        echo "Error: " . $ql . "<br>" . $conn->error;
                            }
                }
                //kappa lol
            $conn->close();
    }
    ?>
	</body>
</html>