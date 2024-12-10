<table border="1" width="100%">
    <tr>
        <th>id_diabetes</th>
        <th>nama_diabetes</th>
        <th>ket_diabetes</th>
    </tr>
    <?php
        // Koneksi ke database
        $con = mysqli_connect("localhost", "root", "", "db_edukasi");

        // Cek koneksi
        if (!$con) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data
        $sql = mysqli_query($con, "SELECT * FROM jenis_diabetes");

        // Loop untuk menampilkan data
        while ($data = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>" . $data['id_diabetes'] . "</td>";
            echo "<td>" . $data['nama_diabetes'] . "</td>";
            echo "<td>" . $data['ket_diabetes'] . "</td>";
            echo "</tr>";
        }

        // Tutup koneksi
        mysqli_close($con);
    ?>
</table>

