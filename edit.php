<?php
	session_start();
?>
<!doctype html>
<html lang="se">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Soloäventyr</title>
</head>

<body class="bg-light">
    <main class="container-fluid">
        <div class="row navbar">
            <image class="col-3 logo" src="logotype%20black%20bkg.svg"></image>
            <a href="play.php">Spela</a>
            <a href="edit.php">Redigera</a>
            <div class="col-6"></div>
        </div>

        <div class="container">

            <h1 class="display-4">Redigera </h1>
            <br>
            <h3> Infoga </h3>
            <div class="containerStyling">
                <h6> Story</h6>
                <form method="POST">
                    <div class="form-row">

                        <div class="col">
                            <label for="text"></label>
                            <input type="text" class="form-control" name="insertText" placeholder="text" id="text">
                        </div>

                        <div class="col">
                            <label for="place"></label>
                            <input type="text" class="form-control" name="insertPlace" placeholder="place" id="place">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <input type="submit" class="btn btn-primary btn-sm form-control">
                        </div>
                    </div>
                </form>
                <hr></hr>
                <h6> Storylinks </h6>
                <form method="POST">
                    <div class="form-row">

                        <div class="col">
                            <label for="storyid"></label>
                            <input type="text" class="form-control" name="insertStoryId" placeholder="storyid" id="storyid">
                        </div>

                        <div class="col">
                            <label for="target"></label>
                            <input type="text" class="form-control" name="insertTarget" placeholder="target" id="target">
                        </div>

                        <div class="col">
                            <label for="text"></label>
                            <input type="text" class="form-control" name="insertChoiceText" placeholder="text" id="text">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <input type="submit" class="btn btn-primary btn-sm form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
    include_once 'db.php';
    // Handles insert into story
    $stmt = $dbh->prepare("INSERT INTO `story`(`text`, `place`) VALUES (:text,:place)");
    $stmt->bindParam(':text', $_POST['insertText']);
    $stmt->bindParam(':place', $_POST['insertPlace']);
    $stmt->execute();
            
    // Handles insert into storylinks        
    $stmt = $dbh->prepare("INSERT INTO `storylinks`(`storyid`, `target`, `text`) VALUES (:storyid,:target,:text)");
    $stmt->bindParam(':storyid', $_POST['insertStoryId']);
    $stmt->bindParam(':target', $_POST['insertTarget']);
    $stmt->bindParam(':text', $_POST['insertChoiceText']);
    $stmt->execute();
       
        //Select and fetch entire story into variable $story
        $stmt = $dbh->prepare("SELECT * FROM `story`");
        $stmt->execute();
        $story = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //echo var_dump($y);
        
        $x = count($story);
        
        echo "<div class='container'><br><h3> Tabeller </h3> <div class='containerStyling'> <h6> Story </h6> <table class='table'> <tr><th>Id</th><th>Text</th><th>Place</th></tr>";
            
        for($i = 0; $i < $x; $i++) {
        $id = $story[$i]['id'];
        $text = $story[$i]['text'];
        $place = $story[$i]['place'];
        echo "<tr><td> ". $id." </td><td>". $text."</td> <td>". $place ."</td></tr>";
}
        echo " </table> <hr><h6> Storylinks </h6><table class='table'> <tr><th>Id</th><th>Storyid</th><th>Target</th><th>Text</th></tr>";
                
        //Select and fetch entire storylinks into variable $storylinks
        $stmt = $dbh->prepare("SELECT * FROM `storylinks`");
        $stmt->execute();
        $storylinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //echo var_dump($y);
        
        $xs = count($storylinks);
        
        for($i = 0; $i < $xs; $i++) {
        $id = $storylinks[$i]['id'];
        $storyid = $storylinks[$i]['storyid'];
        $target = $storylinks[$i]['target'];
        $text = $storylinks[$i]['text']; 
        echo "<tr><td> ". $id." </td><td>". $storyid."</td> <td>". $target ."</td><td> " . $text . "</td></tr>";
}
        echo "</table> </div> </div>"
     /*       
    $success = $stmt->execute();
    var_dump($stmt);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if($success) {
            echo "bra";
        } else {
            echo $stmt->error;
            echo "nä";
        }  */



?>
    </main>

</body>

</html>
