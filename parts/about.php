<?php
    $title = "About us";
    include('parts/header.php');
    
    // array() - старый вариант
    // []; - современный ваиант

?>
<div class="article">
    <p></p>
    <h1>Страница о нас</h1>
    <p>Мы все время на рынке</p>

    <?php 
    $auto =[
        'peugeot' => [
            '306' => [
                'цвет' => 'жёлтый',
                'лошадиные силы' => 150,
                'количество мест' => 5
            ],
            '3008' => [
                'цвет' => 'синий',
                'лошадиные силы' => 210,
                'количество мест' => 6
            ]
        ], 
        'LADA' => [], 
        'BMW' => [], 
        'Audi' => []
    ]; // многоуровневый массив - ассоциативый. запись массива лучше в стобик. 
    // echo '<pre>';
    // print_r($auto); // функция для вывода массива, т.к. эхо выводит строку
    // echo '</pre>'; // отображение содержимого с учётом пробелов, переносов строк и тд


    // вывод значений простого массива
    // foreach ($auto as $key => $value){     // $key - аналог индекса
    //     if ($key == 1){
    //         echo "<div> $key => $value </div>";
    //     }
    //     // echo $key . '=>' . "$value <br>";  // конкатенация в php через точку или $value . '<br>'
    // }

    foreach ($auto['peugeot'] as $key => $value){ //ключ - значения в пежо, вэлью - массив, который в ключе. $auto['peugeot'][3008] - взять массив 3008 из массива пежо, который находится в авто
        echo "<div> $key </div>"; //вывод только ключей (всё, что внутри пежо)
        foreach ($value as $option => $opt_value){
            echo "<div style='font-style: italic; margin-left: 20px'> $option : $opt_value </div>";
        }

    }

    // <!-- strlen -->
    // <!-- preg_mach -->
    
    ?>
</div>
<?php
    include('parts/footer.php');
?>