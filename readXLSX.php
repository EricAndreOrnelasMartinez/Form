<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');
//echo "todo bien  ";
require 'db.php';
//echo "todo bien .5";
require 'Classes/PHPExcel/IOFactory.php';
//echo "todo bien2";
function readAndC($fileU){
$fileName = "/var/www/html/Form/uploads/".$fileU;
$obReader = PHPExcel_IOFactory::load($fileName); 
//echo "todo bien 2.5";
$obReader->setActiveSheetIndex(0);
//echo "todo bien 2.7";
$nRows = $obReader->setActiveSheetIndex(0)->getHighestRow();
//echo "todo bien 3";
for($i = 2; $i <= $nRows; $i++){
    echo "bien 4";
    $nameP = $obReader->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
    $Email = $obReader->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
    //echo "bien 5";
    $sql = "INSERT INTO Info(Nombre,Email) VALUES('$nameP','$Email')";
    $rmysql = mysqli_query($con, $sql);
    if($rmysql){
        echo "capturado!!";
    }else{
        echo "algo falló";
    }
}
}


?>