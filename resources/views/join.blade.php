{{--

    <?php
    //Koneksi database MySQL
    ($koneksi = mysqli_connect('localhost', 'root', '', 'app_absen')) or die('Error ' . mysqli_error($koneksi));
    //Mengambil data pada table dari database MySQL
    $sql = 'select * from employees';
    ($result = mysqli_query($koneksi, $sql)) or die('Error in Selecting ' . mysqli_error($koneksi));
    //Membuat array
    $identitas = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $identitas[] = $row;
    }
    //Menampilkan konversi data pada tabel identitas ke format JSON
    echo json_encode($identitas);
    //close the db connection
    mysqli_close($koneksi);
    ?>
