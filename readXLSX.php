<?php 
echo "todo bien  ";
require 'db.php';
echo "todo bien .5";
require 'Classes/PHPExcel/IOFactory.php';
echo "todo bien2";

$file  = __DIR__.'/uploads/registro4.xlsx';

$obreader = PHPEXCEL_IOFactory::load($file);
echo "todo bien 2.5";
$obreader->setActiveShetIndex(0);
$nRows = $obreader->setActiveSheetIndex(0)->getHighestRow();
echo "todo bien 3";
for($i = 1; $i <= $nRows; $i++){
    echo "bien 4";
    $nameP = $obreader->getActiveSeet()->getCell('A'.$i)->getCalculatedValue();
    $Email = $obreader->getActiveSeet()->getCell('B'.$i)->getCalculatedValue();
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