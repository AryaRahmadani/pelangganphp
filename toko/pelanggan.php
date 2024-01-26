<form action="" method="post">
    pelanggan:
    <input type="text" name="pelanggan" placeholder="nama pelanggan" >
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="masukkan alamat">
    <br>
    telp:
    <input type="number" name="telp" placeholder="masukkan teml">
    
    <input type="submit" name="pel" value="simpan">
</form>
<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";
$sambungan=new mysqli($host,$user,$password,$db);

if(isset($_POST["pel"])){
    $pelanggan =$_POST["pelanggan"];
    $alamat =$_POST["alamat"];
    $telp =$_POST["telp"];
    $sql = "INSERT INTO pelanggan (pelanggan,alamat,telp) VALUES ('$pelanggan','$alamat',$telp)";
    $hasil = mysqli_query($sambungan, $sql);
};
//pelanggan
$sql="SELECT * FROM pelanggan";
$hasil =mysqli_query($sambungan,$sql);
echo "<table border=2px>
    <thead>
    <tr></tr></tr>
        <th>
            PELANGGAN
        </th>
        <th>
            ALAMAT
        </th>
        <th>
            TELEPHONE
        </th>
        </tr>
    </thead>
    <tbody>";
    while($row=mysqli_fetch_array($hasil)){
        echo "<tr>";
        echo "<td>". $row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>" .$row[3]."</td>";
        echo "</tr>";
    };
    echo "</tbody>
    </table>";
?>