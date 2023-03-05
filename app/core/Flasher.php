<?php 

class Flasher{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash']= [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function Flash()
    {
        
        if (isset($_SESSION['flash'])) {
            echo "<script>
            Swal.fire({
              position: 'center',
              icon: '" . $_SESSION['flash']['tipe'] . "',
              title: 'Data Buku " . $_SESSION['flash']['pesan'] .' '. $_SESSION['flash']['aksi']. "',
              showConfirmButton: false,
              timer: 1200
              });
              </script>";
              unset($_SESSION['flash']);
        }
    }
}