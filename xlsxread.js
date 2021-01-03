const XLSX = require('xlsx');

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;
    const sheet = workbookSheets[1];
    const dataxlsx = XLSX.utils.sheet_to_json(workbook.Sheets[sheet]);
    for(const itemFila of dataxlsx){
        console.log(itemFila['Nombre'][2])
    }
}

read('uploads/registro1.xlsx');