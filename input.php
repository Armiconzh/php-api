<!DOCTYPE html>
<html>
<head>
	<title>PHP Input</title>
	<style type="text/css">
		body {
				  display: flex;
				  flex-direction: column;
				  color: black;
				  font-family: Montserrat;
				  font-weight: 100;
				  font-size: 1em;
				  text-align: left;
				}


		table input {
		    background: transparent;
		    border: 2px solid black;
		    color: black;
		    border-radius: 5px;
		    padding: 2px 10px;
		    font-size: .9em;
		    text-transform: all;
		    font-family: Montserrat;
		}

		a {
			font-size: 13px;
		}
	</style>
</head>
<body>

	<h3>INPUT DATA BARU</h3>
	<form action="inputsql.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Full Name</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<br>
	<a href="index.php" style="text-decoration: none;"><b>Tampilkan Semua Data</b></a>
</body>
</html>
