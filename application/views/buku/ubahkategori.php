<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
        <form action="<?= base_url('buku/ubahkategori'); ?>" method="post">
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-formlabel">Nama Kategori</label>
                <div class="col-sm-10">
                <select name="kategori" class="form-control form-control-user">
                    <option value="">Pilih Kategori</option>
                    <?php
                    $k =['Sains','Hobby','Komputer','Komunikasi','Hukum','Agama','Populer','Bahasa','Komik'];
                    for ($i=0;$i<9;$i++) { 
                        
                        if ($kategori['kategori'] == $k[$i]){?>
                        <option value="<?= $k[$i];?>" selected="selected"><?=$k[$i];?></option>
                        <?php 
                    } else{ ?>
                            <option value="<?= $k[$i];?>"><?=$k[$i];?></option>
                        <?php }
                     } ?>
                    </select>
                </div>

            </div>
            </div>
        </div>
    </div>
<div class="form-group row justify-content-end">
<div class="col-sm-10">
<button type="submit" class="btn btn-primary">Ubah</button>
<input type="hidden" name="id" value="<?= $kategori['id'];?>">
<button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
</div>
</div>
</form>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->