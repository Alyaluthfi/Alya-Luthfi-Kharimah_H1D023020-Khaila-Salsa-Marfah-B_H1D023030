<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>nama_obat</th>
        <th>desk_obat</th>
    </tr>
    <?php
        // Koneksi ke database
        $con = mysqli_connect("localhost", "root", "", "db_edukasi");

        // Cek koneksi
        if (!$con) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data
        $sql = mysqli_query($con, "SELECT * FROM obat_dokter");

        // Loop untuk menampilkan data
        while ($data = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['nama_obat'] . "</td>";
            echo "<td>" . $data['desk_obat'] . "</td>";
            echo "</tr>";
        }

        // Tutup koneksi
        mysqli_close($con);
    ?>
</table>

