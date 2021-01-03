const XLSX = require('xlsx');

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;
    const sheet = workbookSheets[0];
    const dataxlsx = XLSX.utils.sheet_to_json(workbook.Sheets[sheet]);
    for(let itemFila of dataxlsx){
        console.log(itemFila['Nombre']);
    }
}

read('uploads/registro1.xlsx');