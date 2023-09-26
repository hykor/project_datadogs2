// const mongoose = require('mongoose');
// const MongoClient = require('mongodb').MongoClient;
// const username = encodeURIComponent('wisit48140')
// const password = encodeURIComponent('wisit@oE6eH!007')

// const url = `mongodb+srv://${username}:${password}@cluster0.3omdfwf.mongodb.net/DatadogsOrgUsage?retryWrites=true&w=majority`
// const dbName = 'DatadogsOrgUsage'

// // ส่งการเชื่อมต่อฐานข้อมูลไปใช้งาน
// module.exports = new Promise((resolve, reject)=>{
//     MongoClient.connect(url, (error, client) => {
//         if (error) throw error
//         var db = client.db(dbName)
//         console.log("Connected successfully to server")
//         resolve(db)
//     })
// })