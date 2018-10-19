<html>
<head>
  <title>PHP1</title>
  <link rel="stylesheet" href="style.css">
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
  </tr></div>
  <?php
  include('connect.php');
  $sql_show ="SELECT * FROM tabel2";
  $murid=mysqli_query($conn,$sql_show);
  while($data_tabel=mysqli_fetch_array($murid,MYSQLI_ASSOC)){
    echo'
    </tr>
      <td>'.$data_tabel['id'].'</td>
      <td>'.$data_tabel['username'].'</td>
      <td>'.$data_tabel['password'].'</td>
      <td>'.$data_tabel['level'].'</td>
      <td>'.$data_tabel['fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>