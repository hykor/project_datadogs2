const express = require('express')
const Datadogs_usage = require('../models/Datadogs_usage')
const OrgUsageMSP = require('../models/OrgUsageMSP')


const getMSP = (req, res) =>{
    OrgUsageMSP.find((err, datadogs_usage)=>{
        if (err) return next(err)
        res.json(datadogs_usage)
    })
}

const getsupOrg = (req, res) =>{
    Datadogs_usage.find((err, datadogs_usage)=>{
        if (err) return next(err)
        res.json(datadogs_usage)
    })
}

const searchOrgname = (req, res) =>{
    OrgUsageMSP.findOne({org_name:req.params.org_name },(err, datadogs_usage) => {
        if(err) return next(err)
        res.json(datadogs_usage)
        // for await (const genOrgMSP of OrgUsageMSP){
        
        // }
    })
    
}

module.exports = {getMSP, getsupOrg, searchOrgname}

