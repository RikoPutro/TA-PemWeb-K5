<!DOCTYPE html>
<html>
<head>
	<title>Kelompok 2</title>
</head>
<body>
	<center><h2>Data Databases</h2></center>
	<table style="margin:10px auto;" border="1">
		<tr>
			<th><?php 
                        $nip="SD";
                        echo anchor('sekolah/jenjang/'.$nip,'SD'); ?>
                        </th>
                        <th><?php 
                        $nip="SMP";
                        echo anchor('sekolah/jenjang/'.$nip,'SMP'); ?>
                        </th>
			<th><?php 
                        $nip="SMA";
                        echo anchor('sekolah/jenjang/'.$nip,'SMA'); ?>
                        </th>
			<th><?php 
                        $nip="SMK";
                        echo anchor('sekolah/jenjang/'.$nip,'SMK'); ?>
                        </th>
			<th><?php 
                        $nip="MTS";
                        echo anchor('sekolah/jenjang/'.$nip,'MTS'); ?>
                        </th>
                        <th><?php 
                        $nip="MA";
                        echo anchor('sekolah/jenjang/'.$nip,'MA'); ?>
                        </th>
		</tr>
	</table>
        <center>
            <?php echo anchor('sekolah/kecamatan/','KECAMATAN'); ?>
        </center>
</body>
</html>