<table border="1" width="100%">
    <tr>
        <th>id_mencegah</th>
        <th>nama_mencegah</th>
        <th>desk_mencegah</th>
    </tr>
    <?php
        // Koneksi ke database
        $con = mysqli_connect("localhost", "root", "", "db_edukasi");

        // Cek koneksi
        if (!$con) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data
        $sql = mysqli_query($con, "SELECT * FROM mencegah_diabetes");

        // Loop untuk menampilkan data
        while ($data = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>" . $data['id_mencegah'] . "</td>";
            echo "<td>" . $data['nama_mencegah'] . "</td>";
            echo "<td>" . $data['desk_mencegah'] . "</td>";
            echo "</tr>";
        }

        // Tutup koneksi
        mysqli_close($con);
    ?>
</table>

