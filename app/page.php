<?php 
	if(isset($_GET["page"])) {
		switch($_GET["page"]) {
			case "game":
        include("views/game.php");
			  break;
			case "home":
        include("views/home.php");
			  break;
			case "settings":
        include("views/settings.php");
			  break;
			case "tutorial":
        include("views/tutorial.php");
			  break;
			case "scoreboard":
		include("views/scoreboard.php");
			  break;
			default:
				include("views/error.php");
				break;
		}
	} else {
		include("views/home.php");
	}
?>