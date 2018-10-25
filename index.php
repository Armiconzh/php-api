<html>
<head>
  <title>PHP1</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    a {
      padding: 5px 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2><center>DATA MURID</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Full Name</th>
    <th>Edit</th>
  </tr></div>
  <?php
  include('connect.php');
  $sql_show ="SELECT * FROM tabel2";
  $murid=mysqli_query($conn,$sql_show);
  while($data_tabel=mysqli_fetch_array($murid,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $data_tabel['id']; ?></td>
      <td><?php echo $data_tabel['username']; ?></td>
      <td><?php echo $data_tabel['password']; ?></td>
      <td><?php echo $data_tabel['level']; ?></td>
      <td><?php echo $data_tabel['fullname']; ?></td>
      <td>
      <a class="edit" href="edit.php?id=<?php echo $data_tabel['id']; ?>" style="text-decoration: none;">Ubah</a> | 
      <a class="hapus" href="delete.php?id=<?php echo $data_tabel['id']; ?>" style="text-decoration: none;">Hapus</a>
      </td>
    </tr>
<?php } ?>
</body>
</html>