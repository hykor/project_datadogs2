const mongoose = require('mongoose');


// SUB_ORG
const UsageSchema = new mongoose.Schema({
    parent_org:String,
    org_name:String,
    month:String,
    infra_container:Number,
    infra_host:Number,
    logs_indexed_30day:Number,
    logs_ingested:Number,
    serverless_invocation:Number,
    timeseries:Number
},
    { collection: 'SUB_ORG' }
)

module.exports = mongoose.model('Datadogs_usage', UsageSchema)

