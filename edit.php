<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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

		input {
		    background: transparent;
		    border: 2px solid black;
		    color: black;
		    border-radius: 5px;
		    padding: 2px 10px;
		    font-size: .9em;
		    text-transform: all;
		    font-family: Montserrat;
		}
	</style>
</head>
<body>
	<div class="judul">
		<h2>Edit Data</h2>
	</div>
	<br/>
	<form action="edit-aksi.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id" placeholder="Id yang akan diubah"></td>
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
				<td>Fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		<br>
		<a href="index.php" style="text-decoration: none;">Tampilkan Semua Data</a>
	</form>
</body>
</html>
