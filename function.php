<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Belajar PHP</title>
    </head>
    <body>

    <h1>Fungsi PHP</h1>

    <?php
    //----- fungsi -----

    //parameter
    function print_text( $text, $angka )
    {
        $text = "gedung ". $text. "". $angka;
        echo "--------";
        echo $text;
        echo "--------";
    }

    function jarak(){
        echo "<br>";
    }

    //print_text("Koding ", 21);
    //jarak();
    //print_text("Perawat ", 21);
    //jarak();
    //print_text("Mengemudi ", 21);
    //jarak();

    //----- return fungsi -----

    //function menghitung($x, $y){
     //   $z = $x + $y;
     //   return $z;
    //}
    //$hasil = menghitung(2, 5) * 10;
    //echo "hasil dari penjumlahan ". $hasil;

    //------ scape ------

    $a = 20000;
    $b = 3;

    function menghitung(){
        global $a, $b;

        //$c = $GLOBALS['a'] + $GLOBALS['b'];
        $c = $a + $b;
        return $c;
    }

    //echo menghitung();

    //---- anonymous function ----

    //$ngetik = function($text){
      //  echo $text;
    //};

    //$greeting = $ngetik;

    //$ngetik( 'Selamat datang semuanya 123 ');

//---- callback function ----

    function berteriak($callback){
        echo 'HALOOOOOOOO <br>';
        //$callback();

        if ( is_callable($callback) ){ //menguji apakah dia fungsi
            call_user_func($callback, 'selamat datang' );
        }else{
            echo ' dia bukan fungsi ';
        }

    }

    //berteriak(function){
    //    echo ' saya anonymous, alias ngga punya nama ';
    //};

    $panggil = function($text){
        echo $text;
    };
    berteriak( 123 );

    ?>

    </body>
</html>