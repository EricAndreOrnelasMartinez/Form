'use strict';
const testss = require('./xlsxread')
const backm = require('./xlsxread')

const obj = new testss();

function registrar(filename){
obj.readX('uploads/' + filename);
}

function setFileName(name){
setTimeout(registrar(name), 5000)
}

