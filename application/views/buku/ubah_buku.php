<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
        <form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
<div class="modal-body">
<div class="form-group">
<input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $buku['judul_buku'];?>">
</div>
<div class="form-group">
<select name="id_kategori" class="form-control form-control-user">
<option value="">Pilih Kategori</option>
<?php
foreach ($kategori as $k) { 
    if($buku['id_kategori'] == $k['id']){?>
<option value="<?= $k['id'];?>" selected="selected"><?=$k['kategori'];?></option>
<?php } else { ?>
    <option value="<?= $k['id'];?>"><?=$k['kategori'];?></option>
<?php }
} ?>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value="<?= $buku['pengarang'];?>">
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value="<?= $buku['penerbit'];?>">
</div>
<div class="form-group">
<select name="tahun" class="form-control form-control-user">
<option value="">Pilih Tahun</option>
<?php
for ($i=date('Y'); $i > 1000 ; $i--) {
    if($buku['tahun_terbit'] == $i){
?>
<option value="<?= $i;?>" selected="selected"><?= $i;?></option>
<?php } else { ?>
<option value="<?= $i;?>"><?= $i;?></option>
<?php } 
}?>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $buku['isbn'];?>">
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $buku['stok'];?>">
</div>
<div class="form-group">
<input type="file" class="form-control form-control-user" id="image" name="image">
<input type="hidden" name="old_pict" value="<?= $buku['image'];?>">
<input type="hidden" name="id" value="<?= $buku['id'];?>">
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Update</button>
</div>
</form>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->