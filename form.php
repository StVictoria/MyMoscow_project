
<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    include ($_SERVER['DOCUMENT_ROOT'].'/parts/config.php');
    $sql = "INSERT INTO clients (id, fio, email, phone, comment) VALUE (NULL, '{$_POST['fio']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['comment']}')";
    $result = mysqli_query($db, $sql);

    if ($result){
        echo "Данные добавлены";
    }else{
        echo "Ошибка добавления";
    }
?>