<?php 

require 'Classes/PHPExel/IOFactory.php';
include('db.php');

function readAndC($nameF){
$file  = __DIR__.'/uploads/'.$nameF;

$obreader = PHPEXEL_IOFactory::load($file);
$obreader->setActiveShetIndex(0);
$nRows = $obreader->setActiveSheetIndex(0)->getHighestRow();
for($i = 1; $i <= $nRows; $i++){
    $nameP = $obreader->getActiveSeet()->getCell('A'.$i)->getCalculatedValue();
    $Email = $obreader->getActiveSeet()->getCell('B'.$i)->getCalculatedValue();

    $sql = "INSERT INTO Info(Nombre,Email) VALUES('$nameP','$Email')";
    $rmysql = mysqli_query($con,$sql);
    if($rmysql){
        echo "capturado!!";
    }else{
        echo "algo falló";
    }
}

}

?>