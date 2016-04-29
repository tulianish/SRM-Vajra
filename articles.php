<html>
    <head>
        <title>Golden Retriever AJAXBOiz</title>
    </head>
    <body>
        <?php
            $conn = new mysqli("svr","abc","xyz","mysql");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $foke = $conn->query("SELECT ArticleHeading,ArticleID from articles WHERE 1");
            $yoke = $conn->query("SELECT * from articles WHERE ArticleID=5");
            if($_REQUEST['q']==="head"){
                while($heading = $foke->fetch_assoc())
                {
                    echo "<a href='#tres' onclick='showArticle(this)' id='".$heading["ArticleID"]."'>".$heading["ArticleHeading"]."&nbsp;&nbsp;<div class='triage'></div></a><br />";
                }
            }
            else if($_REQUEST['q']==="first")
            {
                $fetch = $yoke->fetch_assoc();
                echo "<h2>".$fetch["ArticleHeading"]."</h2><i>Date: ".$fetch["ArticleDate"]."</i><br><br>".$fetch["ArticleBody"];
            }
            else //here we have q=id of the article
            {
                $dom = $conn->query("SELECT * FROM articles WHERE ArticleID=".$_REQUEST['q']);
                $hi = $dom->fetch_assoc();
                echo "<h2>".$hi["ArticleHeading"]."</h2><i>Date: ".$hi["ArticleDate"]."</i><br><br>".$hi["ArticleBody"];
            }
            $conn->close();
        ?>
    </body>
</html>