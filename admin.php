<html>
    <head>
        <title>Admin Page for Registrations</title>
        <style type="text/css">
            td
            {
                width: 150px;
                text-align: center;
                font-family: 'Arial',sans-serif;
                box-sizing: border-box;
                padding: 5px;
            }
            th
            {
                font-weight: bold;
                font-family: Arial;
            }
            tr:nth-child(2n)
            {
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <?php
            if($_REQUEST['key']=="vajra15axby"){
            echo "<h1 style='font-family:Arial,sans-serif;text-align:center;background-color:#fff;font-weight:300;box-sizing:border-                         box;padding: 20px;'>COLLEGE REGISTRATIONS (ADMIN PAGE)<br><br><span style='font-size:17px;color:red;font-weight:bold;background-                 color:#fff;box-sizing:border-box;padding:20px;display:block'>Please do not share this page with anyone else! Print only in landscape             mode!</span></h1>";
            $servername = "svr";
            $username = "abc";
            $password = "xyz";
            $dbname = "mysql";
            $conn = new mysqli($servername,$username,$password,$dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM collegereg";
            $row = $conn->query($sql);
            if($row->num_rows > 0)
            {
                echo "<table><tr><th>Rep Name</th><th>College</th><th>University</th><th>Phone</th><th>E-Mail</th><th>Address</th><th>Sports</th>                   <th>Accomodation</th></tr>";
                while($res = $row->fetch_assoc())
                {
                    $sports = "Participating in";
                    if($res["basketballmen"]==1)
                    {
                        $sports = $sports." , Basketball (Men)";
                    }
                    if($res["basketballwomen"]==1)
                    {
                        $sports = $sports." , Basketball (Women)";
                    }
                    if($res["football"]==1)
                    {
                        $sports = $sports." , Football (Men only)";
                    }
                    if($res["cricket"]==1)
                    {
                        $sports = $sports." , Cricket (Men only)";
                    }
                    if($res["volleyballmen"]==1)
                    {
                        $sports = $sports." , Volleyball (Men)";
                    }
                    if($res["volleyballwomen"]==1)
                    {
                        $sports = $sports." , Volleyball (Women)";
                    }
                    if($res["ttmen"]==1)
                    {
                        $sports = $sports." , Table Tennis (Men)";
                    }
                    if($res["ttwomen"]==1)
                    {
                        $sports = $sports." , Table Tennis (Women)";
                    }
                    if($res["chessmen"]==1)
                    {
                        $sports = $sports." , Chess (Men)";
                    }
                    if($res["chesswomen"]==1)
                    {
                        $sports = $sports." , Chess (Women)";
                    }
                    if($res["carrommen"]==1)
                    {
                        $sports = $sports." , Carrom (Men)";
                    }
                    if($res["carromwomen"]==1)
                    {
                        $sports = $sports." , Carrom (Women)";
                    }
                    if($res["sprintmen"]==1)
                    {
                        $sports = $sports." , 100m (Men)";
                    }
                    if($res["sprintwomen"]==1)
                    {
                        $sports = $sports." , 100m (Women)";
                    }
                    if($res["longjumpmen"]==1)
                    {
                        $sports = $sports." , Long Jump (Men)";
                    }
                    if($res["longjumpwomen"]==1)
                    {
                        $sports = $sports." , Long Jump (Women)";
                    }
                    if($res["badmintonmen"]==1)
                    {
                        $sports = $sports." , Badminton (Men)";
                    }
                    if($res["badmintonwomen"]==1)
                    {
                        $sports = $sports." , Badminton (Women)";
                    }
                    if($res["shotput"]==1)
                    {
                        $sports = $sports." , Shot Put (Men only)";
                    }
                    echo "<tr><td>".$res["repname"]."</td><td>".$res["collegename"]."</td><td>".$res["universitat"]."</td><td>".$res["phone"]."                         </td><td>".$res["email"]."</td><td>".$res["address1"]." ".$res["address2"]." ".$res["citystate"]." - ".$res["pinoycode"]."</td><td>".$sports."</td>";
                    if($res['accomodation']==1)
                    {
                        echo "<td>Yes</td>";
                    }
                    else
                    {
                        echo "<td>No</td>";
                    }
                    echo "</tr>";
                }
            }
            $conn->close();}
            else if($_REQUEST['key']=="vajra15czda")
            {
                echo "<h1 style='font-family:Arial,sans-serif;text-align:center;background-color:#fff;font-weight:300;box-sizing:border-                         box;padding: 20px;'>STUDENT REGISTRATIONS (ADMIN PAGE)<br><br><span style='font-size:17px;color:red;font-weight:bold;background-                 color:#fff;box-sizing:border-box;padding:20px;display:block'>Please do not share this page with anyone else! Print only in landscape             mode!</span></h1>";
            $servername = "127.2.177.2";
            $username = "adminAJXB21q";
            $password = "pYr_qSCTQmtl";
            $dbname = "mysql";
            $conn = new mysqli($servername,$username,$password,$dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM studentreg";
            $row = $conn->query($sql);
            $a = array();
            if($row->num_rows > 0)
            {
                echo "<table><tr><th>Rep Name</th><th>College</th><th>University</th><th>Phone</th><th>E-Mail</th><th>Address</th><th>Sports</th>                   <th>Accomodation</th></tr>";
                while($res = $row->fetch_assoc())
                {
                    $sports = "Participating in";
                    if($res["ttmen"]==1)
                    {
                        $sports = $sports." , Table Tennis (Men)";
                    }
                    if($res["ttwomen"]==1)
                    {
                        $sports = $sports." , Table Tennis (Women)";
                    }
                    if($res["chessmen"]==1)
                    {
                        $sports = $sports." , Chess (Men)";
                    }
                    if($res["chesswomen"]==1)
                    {
                        $sports = $sports." , Chess (Women)";
                    }
                    if($res["carrommen"]==1)
                    {
                        $sports = $sports." , Carrom (Men)";
                    }
                    if($res["carromwomen"]==1)
                    {
                        $sports = $sports." , Carrom (Women)";
                    }
                    if($res["sprintmen"]==1)
                    {
                        $sports = $sports." , 100m (Men)";
                    }
                    if($res["sprintwomen"]==1)
                    {
                        $sports = $sports." , 100m (Women)";
                    }
                    if($res["longjumpmen"]==1)
                    {
                        $sports = $sports." , Long Jump (Men)";
                    }
                    if($res["longjumpwomen"]==1)
                    {
                        $sports = $sports." , Long Jump (Women)";
                    }/*
                    if($res["badmintonmen"]==1)
                    {
                        $sports = $sports." , Badminton (Men)";
                    }
                    if($res["badmintonwomen"]==1)
                    {
                        $sports = $sports." , Badminton (Women)";
                    }*/
                    if($res["shotput"]==1)
                    {
                        $sports = $sports." , Shot Put (Men only)";
                    }
                    $uber = "no";
                    if($res["accomodation"] == 1)
                    {
                        $uber = "yes";
                    }/*array_push($a,$res["repname"],$res["collegename"],$res["universitat"],$res["phone"],$res["email"],$res["address1"],$res["address2"],$res["citystate"],$res["pinoycode"],$sports);*/
                    echo "<tr><td>".$res["repname"]."</td><td>".$res["collegename"]."</td><td>".$res["universitat"]."</td><td>".$res["phone"]."                         </td><td>".$res["email"]."</td><td>".$res["address1"]." ".$res["address2"]." ".$res["citystate"]." - ".$res["pinoycode"]."</td><td>".$sports."</td>";
                    if($res['accomodation']==1)
                    {
                        echo "<td>Yes</td>";
                    }
                    else
                    {
                        echo "<td>No</td>";
                    }
                    echo "</tr>";
                }
                /*if(isset($_REQUEST['csv'])
                {
                    $fp = fopen('php://output','w');
                    foreach($a as $fields)
                    {
                        fputcsv($fp,$fields);
                    }
                    fclose($fp);
                }*/
            }
            $conn->close();
            }
            else
            {
                echo "<b>403 Forbidden</b>";
            }
        ?>
    </body>
</html>