<!DOCTYPE html>
<html>
<head>
	<title>Kelompok 2</title>
</head>
<body>
	<center><h2>Data Databases</h2></center>
	<table style="margin:10px auto;" border="1">
		<tr>
			<th>KODE KECAMATAN</th>
                        <th>NAMA KECAMATAN</th>
			<th>PROFINSI</th>
                        <th>SEKOLAH</th>
		</tr>
                <?php
                        foreach ($kec as $y)
                        {
                ?>
                <tr>
                    <th><?php echo $y->kode_kec ?></th>
                    <th><?php echo $y->nama_kec ?></th>
                    <th>
                        <?php
                        foreach ($kab as $x)
                                {
                                if($x->id==$y->kode_kab)
                                    {
                                    echo $x->kabupaten;
                                    }
                                }
                        ?>
                    </th>
                    <th>                     
                        <?php
                        $i=$y->kode_kec;
                        echo anchor('sekolah/sd/'.$i,'SD');
                        echo ' ';
                        echo anchor('sekolah/SMP/'.$i,'SMP');
                        echo ' ';
                        echo anchor('sekolah/MTS/'.$i,'MTS');
                        echo ' ';
                        echo anchor('sekolah/SMA/'.$i,'SMA');
                        echo ' ';
                        echo anchor('sekolah/MA/'.$i,'MA');
                        ?>
                    </th>
                </tr>
                <?php        
                        }
                ?>
                
	</table>
        
</body>
</html>