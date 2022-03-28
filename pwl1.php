<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Fungsi Matematika</h1>
    <form action="pwl1.php" method="POST">
        <fieldset>
            <legend>Fungsi Matematika :</legend>

            <table>
                <tr>
                    <td>Bilangan 1</td>
                    <td>: <input type="number" name="bilangan1" value="0"></td>
                </tr>
                <tr>
                    <td>Bilangan 2</td>
                    <td>: <input type="number" name="bilangan2" value="0"></td>
                </tr>
                <tr>
                    <td>Operasi</td>
                    <td>: 
                        <select name="operasi" id="">
                            <option value="perkalian">Perkalian</option>
                            <option value="pembagian">Pembagian</option>
                            <option value="penjumlahan">Penjumlahan</option>
                            <option value="pengurangan">Pengurangan</option>
                        </select>    
                    </td>
                </tr>
            </table>
            <button type="submit" name="hitung">Hitung</button>
            <br>
            <?php 
                function matematik($bilangan1, $bilangan2,$operasi){
                    if($operasi=="perkalian"){
                        return $bilangan1 * $bilangan2;
                    }elseif($operasi=="pembagian"){
                        return $bilangan1 / $bilangan2;
                    }elseif($operasi=="penjumlahan"){
                        return $bilangan1 + $bilangan2;
                    }else{
                        return $bilangan1 - $bilangan2;
                    }
                }

                if(isset($_POST['hitung'])){
                    $bilangan1 = $_POST['bilangan1'];
                    $bilangan2 = $_POST['bilangan2'];
                    $operasi = $_POST['operasi'];

                    echo "Hasil dari <b>".$operasi."</b> antara <b>".$bilangan1."</b> dan <b>".$bilangan2."</b> adalah <b>".matematik($bilangan1,$bilangan2,$operasi)."</b>";                    
                }
            ?>
        </fieldset>
    </form>


    <hr>
    <h1>Biodata</h1>
    <form action="pwl1.php" method="POST">
        <fieldset>
            <legend>Bidata :</legend>

            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: 
                        <select name="tanggal" id="">
                            <?php 
                                $max=31;
                                for($i=1;$i<=$max;$i++){?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?php } ?>
                        </select>
                        .   
                        <select name="bulan" id="">
                        <?php 
                                $max=12;
                                for($i=1;$i<=$max;$i++){?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?php } ?>
                        </select>
                        .
                        <select name="tahun" id="">
                        <?php 
                                $max=2030;
                                for($i=1960;$i<=$max;$i++){?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?php } ?>
                        </select>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        :
                        <input type="radio" name="jenisKelamin" id="" value="laki-laki">Laki-Laki
                        <input type="radio" name="jenisKelamin" id="" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Sudah Menikah</td>
                    <td>:
                        <input type="checkbox" name="nikah" id="" value="1">Ya
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:
                        <textarea name="alamat" id="" cols="100%" rows="5%"></textarea>
                    </td>
                </tr>

            </table>
            <button type="submit" name="submit">Submit</button>
            <br>
            <?php 
                $bulan=['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                $nikah="Belum";

                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $tanggalLahir = $_POST['tanggal']." ".$bulan[$_POST['bulan']]." ".$_POST['tahun'];
                    $jenisKelamin = $_POST['jenisKelamin'];
                    if(isset($_POST['nikah'])){
                        $nikah = "Sudah Menikah";
                    }
                    $alamat = $_POST['alamat'];
                }
            ?>
        </fieldset>
        <br><br>
        <?php if(isset($_POST['submit'])){ ?>
        <fieldset>
            <legend>Biodata <?= $nama ?></legend>
            <table>
            <tr>
                <td>Nama</td>
                <td>: <?=$nama?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <?=$tanggalLahir?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?=$jenisKelamin?></td>
            </tr>
            <tr>
                <td>Sudah Menikah ?</td>
                <td>: <?=$nikah?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?=$alamat?></td>
            </tr>
            
        </table>
        </fieldset>

        <?php } ?>
    </form>
</body>
</html>