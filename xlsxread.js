const XLSX = require('xlsx');

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;
    const sheet = workbookSheets[0];
    const datxlsx = XLSX.utils.sheet_to_json(workbook.Sheets[sheet]);
    for(const item of datxlsx){
        console.log(item['Nombre']);
    }
}

read('uploads/registro1.xlsx');