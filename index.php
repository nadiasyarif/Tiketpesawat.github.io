<?php
$no=1;
$maskapai = @$_POST['namamaskapai'];
$asalbandara = @$_POST['asal'];
$bandaratujuan = @$_POST['tujuan'];
$hargatiket = @$_POST['hargatix'];
$pajakasal = @$_POST['pajak'];
$pajaktujuan = @$_POST['pajakk'];
$akhirtix = @$_POST['totalhargatix'];

if(isset($asalbandara)){
    if($asalbandara == "Soekarno Hatta"){
        $pajakasal = 65000;
    }
    else if($asalbandara == "Husein Sastranegara"){
        $pajakasal = 50000;
    }
    else if($asalbandara == "Abdul Rachman Saleh"){
        $pajakasal = 40000;
    }
    else if($asalbandara == "Juanda"){
        $pajakasal = 30000;
    }
    
}

if(isset($bandaratujuan)){
    if($bandaratujuan == "Ngurah Rai"){
        $pajaktujuan = 85000;
    }
    else if($bandaratujuan == "Hasanuddin"){
        $pajaktujuan = 70000;
    }
    else if($bandaratujuan == "Inanwatan"){
        $pajaktujuan = 90000;
    }
    else if($bandaratujuan == "Sultan Iskandar Muda"){
        $pajaktujuan =60000;
    }
    
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Pemesanan Tiket Pesawat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
</head> 
<body>
    <div class="container">
    <br>
    <div class="head"> 
        <h1 style="text-align: center"> PEMESANAN<br>TIKET PESAWAT</h1>
    </div>
    <br>
    <div class="main">
    <form method="post" name="form1" id="form1">
        <table class="pilih" align="center"> 
            <tr>
                <td><b>Nama Maskapai</b></td>
                <td>:</td>
                <td>
                    <select name="namamaskapai" class="input">
                        <option style="display: none;">-- Pilih Maskapai --</option>
                        <option>Air Asia</option>
                        <option>Lion Air</option>
                        <option>Batik Air</option>
                        <option>Garuda Indonesia</option>
                        <option>Citilink</option>
                        <option>Wings Air</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Bandara Asal</b></td>
                <td>:</td>
                <td>
                <select name="asal" class="input"
                    <?php
                        $bandara = array(1=>"-- Pilih Bandara --", 5=>"Soekarno Hatta", 3=>"Husein Sastranegara", 2=>"Abdul Rachman Saleh", 4=>"Juanda");
                        sort($bandara);
                        echo "<select>";
                        for ($asal = 0; $asal < count($bandara); $asal++) {  
                        echo "<option value='$bandara[$asal]'>$bandara[$asal]</option>";}
                        echo "</select>";
                        
                        
                    ?>
                ></select>
                </td>
            </tr>
            <tr>
                <td><b>Bandara Tujuan</b></td>
                <td>:</td>
                <td>
                <select name="tujuan" class="input"
                    <?php
                        $bandara = array( 1=>"-- Pilih Bandara --", 4=>"Ngurah Rai", 2=>"Hasanuddin", 3=>"Inanwatan", 5=>"Sultan Iskandar Muda");
                        sort($bandara);
                        echo "<select>";
                        for ($tujuan = 0; $tujuan < count($bandara); $tujuan++) {  
                        echo "<option value='$bandara[$tujuan]'>$bandara[$tujuan]</option>";}
                        echo "</select>";
                        
                    ?>
                ></select>
                </td>
            </tr>
            <tr>
                <td><b>Harga Tiket</b></td>
                <td>:</td>
                <td><input type="number" name="hargatix" class="input"></td>
            </tr>
            
            <tr>
                <td>
                <br>
                <input type="submit" name="spn" value="simpan">
                </td>
            </tr>
        </table>
        </form>
    </div>
    <div class="head"> 
        <h3 style="text-align: center">Data Tiket</h3>
    </div>
    <table class="pilih" border="1" cellpadding="6" cellspassing="0" align="center">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Maskapai</th>
            <th>Asal Penerbangan</th>
            <th>Tujuan Penerbangan</th>
            <th>Harga Tiket</th>
            <th>Pajak</th>
            <th>Total Harga Tiket</th>
        </tr>
        <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo date("j/M/o"); ?></td>
            <td><?php echo $maskapai; ?></td>
            <td><?php echo $asalbandara; ?></td>
            <td><?php echo $bandaratujuan; ?></td>
            <td><?php echo $hargatiket; ?></td>
            <td><?php echo $pajak = $pajakasal + $pajaktujuan; ?></td>
            <td><?php echo $akhirtix = $hargatiket + $pajak; ?></td>
        </tr>
    <?php
    ?>
    </table>
    </div>
</body>
</html>