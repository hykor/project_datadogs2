const express = require('express');
const routes = express.Router();
const mongoose = require('mongoose');
const Datadogs_usage = require('../models/Datadogs_usage'); 
const OrgUsageMSP = require('../models/OrgUsageMSP');


// Get SUB_ORG
routes.get('/subOrg', (req,res,next)=>{
    Datadogs_usage.find((err, datadogs_usage)=>{
        if (err) return next(err)
        res.json(datadogs_usage)
    })
})


// Get MSP
routes.get('/msp', (req,res,next)=>{
    OrgUsageMSP.find((err, datadogs_usage)=>{
        if (err) return next(err)
        res.json(datadogs_usage)
    })
})


module.exports = routes