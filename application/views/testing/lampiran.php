<html>
<head>
    <title>Upload Form</title>
</head>
<body>

<?php echo form_open_multipart('Lampiran/unggah_lampiran');?>
<label>Tanggal</label><br>
<input type="date" name="tanggal"/>
<br/>
<label>Nama Lampiran</label><br>
<input type="text" name="nama" />
<br/>
<label>Kategori Lampiran</label><br>
<input type="text" name="kategori" value="UMUM"/>
<br/>
<label>File Lampiran</label><br>
<input type="file" name="lampiran" size="2000" />
<br /><br />
<input type="submit" value="upload" />
</form>
</body>
</html>