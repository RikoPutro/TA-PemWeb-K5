<!DOCTYPE html>
<html>
<head>
	<title>Data Sekolah Se-DIY</title>
</head>
<body>
	<center><h2>Data Sekolah</h2></center>
	<table style="margin:10px auto;" border="1">
		<tr>
			<th>NO</th>
                        <th>JENJANG</th>
                        <th>NPSN</th>
                        <th>SK PENDIRIAN</th>
                        <th>KABUPATEN</th>
                        <th>KECAMATAN</th>
                        <th>KELURAHAN</th>
                        <th>AKREDITASI</th>                     
		</tr>
                <?php        
		$no = 1;
		foreach($sekolah as $u){ 
		if($u->kec==$i){
                ?>
		<tr>
			<td><?php echo $no++ ?></td>
                        <td><?php echo $u->jenjang ?></td>
                        <td><?php echo $u->npsn ?></td>
			<td><?php echo $u->sk_pendirian ?></td>
			<td><?php
                            foreach ($kab as $x)
                                {
                                if($x->id==$u->kab)
                                    {
                                    echo $x->kabupaten;
                                    }
                                }
                        ?></td>
			<td><?php
                        foreach ($kec as $y)
                                {
                                if($y->kode_kec==$u->kec)
                                    {
                                    echo $y->nama_kec;
                                    }
                                }
                        ?></td>
			<td><?php echo $u->kel ?></td>
                        <td><?php echo $u->akreditasi ?></td>
		</tr>
                <?php
                }
                }
                ?>
	</table>
</body>
</html>