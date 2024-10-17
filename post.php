<?php

// $name = $_POST['name'];

// if ($name == '') {
//     echo "<script>
//     alert('Nama Tidak boleh kosong');
//     window.location.href='2.php';
//     </script>";
// }
if($_POST['name']!="" && $_POST['email']!="" && $_POST['alamat']!=""){
    echo "<script>
    alert('Berhasil');
    window.location.href='2.php';
    </script>";
} else if($_POST['name']=="" && $_POST['email']=="" && $_POST['alamat']==""){
    echo "<script>
    alert('Mohon Mengisi Semua Data !!');
    window.location.href='2.php';
    </script>";
} else {
    if($_POST['name']==""){
        echo "<script>
        alert('Nama tidak boleh kosong!!');
        window.location.href='2.php';
        </script>";   
    } else if($_POST['email']==""){
        echo "<script>
        alert('Email tidak boleh kosong!!');
        window.location.href='2.php';
        </script>";   
    } else if($_POST['alamat']==""){
        echo "<script>
        alert('Alamat tidak boleh kosong!!');
        window.location.href='2.php';
        </script>";   
    }
}