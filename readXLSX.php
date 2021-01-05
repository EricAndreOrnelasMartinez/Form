<?php 
error_reporting(E_ALL);
ini_set('display_errors','1');
echo "todo bien  ";
require 'db.php';
echo "todo bien .5";
require 'Classes/PHPExcel/IOFactory.php';
echo "todo bien2";

$fileName = "/var/www/html/Form/uploads/registro4.xls";
$inputFileType = PHPExcel_IOFactory::identify($fileName);
$obReader = PHPExcel_IOFactory::createReader($inputFileType);
$obPHPExcel = $obReader->load($fileName); 
echo "todo bien 2.5";
$obPHPExcel->setActiveShetIndex(0);
$nRows = $obPHPExcel->setActiveSheetIndex(0)->getHighestRow();
echo "todo bien 3";
for($i = 1; $i <= $nRows; $i++){
    echo "bien 4";
    $nameP = $obPHPExcel->getActiveSeet()->getCell('A'.$i)->getCalculatedValue();
    $Email = $obPHPExcel->getActiveSeet()->getCell('B'.$i)->getCalculatedValue();
    echo "bien 5";
    $sql = "INSERT INTO Info(Nombre,Email) VALUES('$nameP','$Email')";
    $rmysql = $con->query($sql);
    if($rmysql){
        echo "capturado!!";
    }else{
        echo "algo falló";
    }
}


?>