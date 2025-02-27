const express = require('express')
const app = express()
var cors = require('cors')
app.use(cors())
const mysql = require('mysql')
 
const db = mysql.createConnection({
    host: "localhost",
    port: 3307,
    database: "fogado",
    user: "root",
    password: ""
});
 
app.get('/szobak', (req, res) => {
    const sqlParancsok = "SELECT `sznev`, `agy` FROM `szobak`;"
    db.query(sqlParancsok, (err, result)=> {
        res.json(result);
    })
})
app.get('/SelectSzobak', (req, res) => {
    const sqlParancsok = "SELECT `szazon`, `sznev` FROM `szobak`;"
    db.query(sqlParancsok, (err, result)=> {
        if(err){
            res.json(err);
        }
        res.json(result);  
    })
})
app.get('/Szobakfoglaltsaga', (req, res) => {
    const sqlParancsok = "SELECT szobak.sznev, COUNT(vendeg) AS vendegekszama, SUM(tav - erk) AS szallasiIdo FROM szobak INNER JOIN foglalasok ON szobak.szazon = foglalasok.szoba GROUP BY sznev ORDER BY szallasiIdo ASC;"
    db.query(sqlParancsok, (err, result)=> {
        if(err){
            res.json(err);
        }
        res.json(result);  
    })
})
 
app.get('/Szobafoglalatsag/:id', (req, res) => {
    const sqlParancsok = "SELECT vendegek.vnev, foglalasok.erk, foglalasok.tav FROM szobak INNER JOIN foglalasok ON szobak.szazon = foglalasok.szoba INNER JOIN vendegek ON vendegek.vsorsz = foglalasok.vendeg WHERE szobak.szazon =?;"
    db.query(sqlParancsok, req.params.id, (err, result)=> {
        if(err){
            res.json(err);
        }
        res.json(result);
    })
})
 
app.listen(3001, () => {
  console.log(`Example app listening on port 3001`)
})