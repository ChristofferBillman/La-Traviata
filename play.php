<?php
	session_start();
?>
<!doctype html>
<html lang="se">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soloäventyr - Spela</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" 
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
        <h1 class="display-4">Spela</h1>
        </div>
        <!--
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit hic aliquid nostrum quibusdam veritatis? Eaque accusantium odit id deserunt, quae minima adipisci nesciunt illum ipsa ea placeat, earum laboriosam corrupti.</p>
		<footer class="gotopagelinks">
			<p>
				<a href="play.php?page=1">Nästa sida</a>
				<a href="play.php?page=2">Gå till sidan</a>
			</p>
		</footer>
-->
        <form method="post">
            <div>

            </div>
        </form>
        <?php
	include_once 'db.php';

	if (isset($_GET['page'])) {
		// TODO load requested page from DB using GET
		$filteredPage = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);

		$stmt = $dbh->prepare("SELECT * FROM story WHERE id = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		echo "<pre>" . print_r($row,1) . "</pre>";

		// echo "<p>" . $row['text'] . "</p>";

		$stmt = $dbh->prepare("SELECT * FROM storylinks WHERE storyid = :id");
		$stmt->bindParam(':id', $filteredPage);
		$stmt->execute();

		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);		

		foreach ($row as $val) {
			echo "<a href=\"?page=" . $val['target'] . "\">" . $val['text'] . "</a>";
		}

	} elseif(isset($_SESSION['page'])) {
		// TODO load page from db
		// use for returning player / cookie
	} else {
		// TODO load start of story from DB
	}

?>
            </main>
            <script src="js/navbar.js"></script>
    </body>

</html>
