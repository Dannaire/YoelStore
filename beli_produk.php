<?php
include "header.php";
include "toko_online.php";
$qry_detail_buku=mysqli_query($conn,"select * from produk where
id_produk = '".$_GET['id_produk']."'");
$dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<h2>Beli Produk</h2>
<div class="row">
<div class="col-md-4">
<img src="gambar/<?=$dt_buku['foto']?>"
class="card-img-top">
</div>
<div class="col-md-8">
<form action="masukkankeranjang.php?id_produk=<?=$dt_buku['id_produk']?>" 
method="post">
<table class="table table-hover table-striped">
<thead>
<tr>
<td>Nama
Buku
</td><td><?=$dt_buku['nama_produk']?></td>
</tr>

<tr>
<td>Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
</tr>
<tr>

<tr>
<td>Harga</td><td><?=$dt_buku['harga']?></td>
</tr>
<tr>
<td>Jumlah Produk</td><td><input type="number"
name="jumlah_pinjam" value="1"></td>
</tr>
<tr>

<td colspan="2"><input class="btn btn-success"
type="submit" value="Beli"></td>
</tr>
</thead>
</table>


</form>
</div>
</div>
<?php
include "footer.php";
?>