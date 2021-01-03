const XLSX = require('xlsx');

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;

    console.log(workbookSheets);
}

read('uploads/registro1.xlsx');