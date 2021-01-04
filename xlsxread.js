const XLSX = require('xlsx');
const MYSQL = require('mysql');

var i = 0
var nombre = ''
var mail = ''
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

function read(path){
    const workbook = XLSX.readFile(path);
    const workbookSheets = workbook.SheetNames;
    const sheet = workbookSheets[0];
    const dataxlsx = XLSX.utils.sheet_to_json(workbook.Sheets[sheet]);
    while(i < 100){

        for(const item of dataxlsx){
            nombre = item['Nombre']
            mail = item['Mail']
            //console.log(dataxlsx[i])
            con.query('INSERT INTO Info(Nombre,Email) VALUES("' + nombre + '","' + mail + '")', (error,rows) =>{
                if (err) console.log(err);
                console.log('Conectado!!')
            });
            i = i + 1;
            
        }
    }
}

read('uploads/registro1.xlsx');
