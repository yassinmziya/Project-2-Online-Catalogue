<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/"/>
		<title>Add</title>
	</head>
	<body>
		<div id = "nav">
			<ul>
				<a href = "index.php"><li>Home</li></a>
				<a href = "add.php"><li> Add</li></a>
				<a href = "search.php"><li>Search</li></a>
			</ul>
		</div>
		<div id = "content">
			<?php 
				include "addHandler.php";
			?>
				<form action="add.php" method = "get">
					<input type = "text" name = "game" placeholder = "Video Game"/>
					$<input type = "text" name = "price" placeholder = "Price"/>
					<input type = "text" name = "year" placeholder = "Release Year"/><br/>
					<input type = "radio" name = "plat" value = "MULTIPLATFORM" checked/>Multiplatform<br/>
					<input type = "radio" name = "plat" value = "PS4" />PS4<br/>
					<input type = "radio" name = "plat" value = "XBONE"/>XBox One<br/>
					<input type = "radio" name = "plat" value = "PC"/>PC<br/>
					<input type = "text" name = "img" placeholder = "Box Art URL"/>
					<input type = "submit" name = "submit" value = "Submit"/>
				</form>
		</div>
	</body>
</html>