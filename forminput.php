<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Input</title>
</head>
<body>
<h1>Input Data</h1>
<form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="text" name="tgl_lahir">
            <br>
            <label>Pekerjaan: 
            <select name='pekerjaan'>
				<option value='Mahasiswa'>Mahasiswa</option>
                <option value='Direktur'>Direktur</option>
                <option value='Manager'>Manager</option>
                <option value='Staff'>Staff</option>
                <option value='Operator'>Operator</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
	
	<h2>Hasil</h2>
    <?php
		if(isset($_POST['nama']) AND isset($_POST['tgl_lahir'])){
            # Memanggil Nama
            echo 'Nama: ' . $_POST['nama'];
    
            # Merubah Tanggal Lahir menjadi Umur (Tahun)
            $tgl_lahir = @$_POST['tgl_lahir'];
    
            $lahir = new DateTime($tgl_lahir);
            $hari_ini = new DateTime();
    
            $diff = $hari_ini->diff($lahir);
    
            # Memanggil fungsi umur yg sudah dibuat diatas
            echo "<br> Umur: ". $diff->y ." Tahun";
    
            # Memanggil pekerjaan
            echo "<br> Pekerjaan: ". $_POST['pekerjaan'];
    
            # Kondisi if pekerjaan untuk menentukan gaji
            $pekerjaan = @$_POST['pekerjaan'];
    
            if($pekerjaan == "Mahasiswa"){
                echo '<br> Gaji: Rp. 0,-';
            }elseif($pekerjaan == "Direktur"){
                echo '<br> Gaji: Rp. 17.000.000,-';
            }elseif($pekerjaan == "Manager"){
                echo '<br> Gaji: Rp. 13.000.000,-';
            }elseif($pekerjaan == "Staff"){
                echo '<br> Gaji: Rp. 8.500.000,-';
            }elseif($pekerjaan == "Operator"){
                echo '<br> Gaji: Rp. 6.000.000,-';
            }

        }else{
            echo "Mohon Masukkan Data";}
    ?>
</body>
</html>