
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ujian Tw 2</title>
  </head>
  <body>
    <a href="signup.php">Sign Up</a>
    <table border="1">
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    <?php
    include 'config.php';
    $nomor = 1;
    $sql  = "SELECT * FROM users";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $nomor++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['email'] ?></td>
      <td>
        <a href="edit.php?id=<?= $res[id] ?>">Edit</a>
        <a href="delete.php?id=<?= $res[id] ?>">Hapus</a>
      </td>
    </tr>
    <?php
      }
    }
     ?>
    </table>
  </body>
</html>
