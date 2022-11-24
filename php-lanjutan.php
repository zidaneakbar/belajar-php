<?php

$nama = "zidane";

// [PERULANGAN]
/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
echo $nama;
echo "<br>";
*/

/*
$no = 10;
$i = 0;

for ($i=0; $i<10; $i++) {
    $n= $i+1;
    echo $n." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n= $i+1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n= $i+1;
    echo $n." ".$nama."<br/>";
    $i++;

} while ($i < $no)
*/

/*
$data = array('xenia', 'avanza', 'lamborghini', 'tesla', 'rubicon', 'xpander');

echo $data[5];
foreach ($data as $value) {
    echo $value. "<br/>";
}
*/

// [PERCABANGAN]
/*
if ($nama == "zidane") {
    echo $nama." adalah orang sidoarjo";
} else if ($nama == "budi") {
    echo $nama." adalah orang jawa";
} else {
    echo $nama." siapa ya?";
}
*/

/*
switch ($nama) {
    case "zidane":
        $pesan = $nama." adalah orang sidoarjo";
    break;
    case "budi":
        $pesan = $nama." adalah orang jawa";
    break;
    default:
        $pesan = $nama." dari mana ya?";

}

echo $pesan
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input nama dan berulang</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {
            switch ($_POST['nama']) {
                case "zidane":
                    $pesan = $_POST['nama']." adalah orang sidoarjo";
                break;
                case "budi":
                    $pesan = $_POST['nama']." adalah orang jawa";
                break;
                default:
                    $pesan = $_POST['nama']." dari mana ya?";
            }

            for ($i=0; $i<$_POST['no']; $i++) {
                echo $pesan."<br/>";
            }
        } else {
            echo "Anda belum input nama dan jumlah";
        }
    
    ?>
</body>
</html>