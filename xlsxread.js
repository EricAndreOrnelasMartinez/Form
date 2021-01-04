const XLSX = require('xlsx');
const MYSQL = require('mysql');

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;
    const sheet = workbookSheets[0];
    const dataxlsx = XLSX.utils.sheet_to_json(workbook.Sheets[sheet]);
    console.log(dataxlsx[1]);
    for(const itemFila of dataxlsx){
        console.log(itemFila['Nombre']);
    }
}

read('uploads/registro1.xlsx');

const con = MYSQL.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'Lasric.2018',
    database: 'Minmer'
})

con.connect((err) =>{
    if (err) throw err
    console.log('Conectado!!')
})