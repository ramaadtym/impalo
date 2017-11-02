<html>
<head>
    <title>Tambah Matakuliah</title>
</head>
<body>

<p><?php echo $this->session->flashdata('error'); 
echo $this->session->flashdata('success');
?></p>

<?php echo form_open('MataKuliah/tambahMataKuliah');?>

<label>Kode Mata Kuliah</label><br>
<input type="text" name="kode_matkul"/>
<br/>
<label>Nama Mata Kuliah</label><br>
<input type="text" name="nama_matkul" />
<br/><br>
<input type="submit" value="Tambahkan" />
</form>
</body>
</html>