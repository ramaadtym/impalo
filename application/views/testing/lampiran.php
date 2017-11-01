<html>
<head>
    <title>Upload Form</title>
</head>
<body>

<?php
print_r($_SESSION);
?>
<?php echo form_open_multipart('Lampiran/unggah_lampiran');?>
<input type="date" name="tanggal"/>
<br/>
<input type="text" name="nama" />
<br/>
<input type="text" name="kategori" value="UMUM"/>
<br/>
<input type="file" name="lampiran" size="2000" />
<br /><br />
<input type="submit" value="upload" />
</form>
</body>
</html>