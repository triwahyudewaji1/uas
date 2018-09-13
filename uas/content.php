<!-- membuat content -->
<?php
  include('koneksi.php');
  //include('login_session.php');
  $title = 'kategori';
  $sql = 'SELECT * FROM barang';
  $result = mysqli_query($conn, $sql);
  ?>

<div class="content_b">
  <div class="main">
    <?php while ($row= mysqli_fetch_array($result)):?>
      <div class="box">
        <img src= "<?php echo "{$row['gambar']}" ?>" /><br/><br/>
        <a href="View.php?id=<?php echo $row['id_barang'];?>"><?php echo $row['nama_barang'];?></a><br/><br/><br/><br/>
      </div>
    <?php endwhile; ?>
  </div>
</div>