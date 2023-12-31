<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
    <style>
        .error{
            color:red;
            font-size:11px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<center>
<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
<table>
<tr>
<th colspan="3">Form Input Data Mata Kuliah</th>
</tr>
<tr>
<td colspan="3">
<hr>
</td>
</tr>
<tr>
<th>Kode MTK</th>
<th>:</th>
<td>
<input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>">
<?php echo form_error('kode', '<div class="error">','</div>'); ?>
</td>
</tr>
<tr>
<th>Nama MTK</th>
<td>:</td>
<td>
<input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
<?php echo form_error('nama', '<div class="error">','</div>'); ?>
</td>
</tr>
<tr>
<th>SKS</th>
<td>:</td>
<td>
<select name="sks" id="sks">
<option value="">Pilih SKS</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>

</center>
    
</body>
</html>