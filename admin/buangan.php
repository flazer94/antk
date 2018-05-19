<?php 
//koneksi ke database
mysql_connect('localhost', 'root', 'fasilitasserver');
mysql_select_db('harviacode');

//ambil data dari database
$query = "SELECT * FROM provinsi ORDER BY provinsi LIMIT 0,10";
$result = mysql_query($query);
?>
<form action="hapusbanyak.php" method="post">
    <input type="button" value="Tambah (fake)" />
    <table border="1" style="margin: 10px 0px">
            <tr>
                <th>Cek</th>
                <th>Id Provinsi</th>
                <th>Nama Provinsi</th>
                <th>Aksi (fake)</th>
            </tr>
    <?php 
    while ($data = mysql_fetch_array($result)) {
    ?>
            <tr>
                <td><input type="checkbox" id="cekbox" name="cekbox[]" value="<?php echo $data['id_provinsi'] ?>"/></td>
                <td><?php echo $data['id_provinsi'] ?></td>
                <td><?php echo $data['provinsi'] ?></td>
                <td>
                    <a href="#">Edit</a> | 
                    <a href="#">Delete</a>
                </td>
            </tr>
    
    <?php
    }
    ?>
    </table>
    <input type="submit" value="Hapus" name="submit" /><br />
</form>
<!--harviacode.com-->