<?php 

    /**
     * Penulis : Abdul Aziz Mubarak
     * Website : https://www.mubarakabaz.xyz/
     * Email   : mubarakaa16h@student.unhas.ac.id
     * 
     * Sesuaikan dengan kebutuhan anda
     */


    // Mendefinisikan konstata
    define('HOST', 'localhost');
    define('USER','root');
    define('PASS', '');
    define('DB','daengponic');

    // Membuat konksi dengan database
    $con = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to Connect');

?>