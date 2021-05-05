
<!doctype html>
<html>
	<head>
	  <meta charset="utf-8">

	  <title>Web de Ansible</title>

	</head>

	<body>
		<?php
			$servername="10.132.0.42";
			$username = "alex";
			$password = "1234";
			$database = "testdb";

			$conn = mysqli_connect($servername, $username, $password, $database);
			// Checking for connections
			if (!$conn) {
			    die("Connection Error: " . mysqli_connect_error());
			}
			// SQL query to select data from database
			$sql = "SELECT * FROM test";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			  // output data of each row
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "Mensaje: " . $row["message"]. "<br>";
			  }
			} else {
			  echo "0 results";
			}
			mysqli_close($conn);
		?>
	</body>
</html>


