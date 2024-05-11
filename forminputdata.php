<?php
$koneksi=mysqli_connect("localhost","root","","databasesiswa");
if (isset($_POST["tblsubmit"])) 
{
$nis=$_POST ["fnis"];
$nama=$_POST ["fnama"];
$kelas=$_POST ["fkelas"];
$nohp=$_POST ["fnohp"];

$query="INSERT INTO tabelsiswa VALUES ('$nis','$nama','$kelas','$nohp')" ;
mysqli_query($koneksi,$query);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>FORM INPUT</title>
</head>
<body>
    <table border='1' align="center" cellspacing="0">
        <tr>
            <td>
                <form method="post" name="form_siswa" action="">
                    <table>
                        <tr>
                            <td colspan="3" align="center" height="24">
                                <b>INPUT DATA SISWA</b>
                            </td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fnis" required></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fnama" required></td>
                        </tr>
                        <tr>
                            <td>KELAS</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fkelas" required></td>
                        </tr>
                        <tr>
                            <td>NO HP</td>
                            <td align="center">:</td>
                            <td><input type="text" name="fnohp" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><button type="submit" name="tblsubmit">SIMPAN</button></td>
                            <td><button type="reset" name="tblreset">BATAL</button></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
