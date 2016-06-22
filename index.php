<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/">
		<title>Home</title>
		<style type="text/css">
			img {
				height: 250px;
			}
		</style>
	</head>
	<body>
		<div id = "nav"></div>
		<div id = "content">
				<table>
				<?php
					$file_pointer = fopen("data.txt", "r");
					$content = array();
					while (!feof($file_pointer)) {
						$content[] = fgets($file_pointer);
					}
					foreach ($content as $item) {
						$row = explode("	", $item);
						echo 
						"<tr>
							<td>
								<img src = '$row[4]'' alt = 'Video game box art' />
							</td>
							<td>
								<p>$row[0]<p/>
								<p>$row[1]</p>
								<p>$row[3]</p>
								<p>&#36;$row[2]</p>
							</td>
						</tr>";
					}
					fclose($file_pointer);
				?>
				</table>
		</div>
	</body>
</html>