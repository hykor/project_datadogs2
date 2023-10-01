const mongoose = require('mongoose');

const MSPSchema = new mongoose.Schema({
    org_name:String,
    month:String,
    infra_host:Number,
    network_device:Number,
    apm_host:Number,
    apm_trace_search:Number,
    dbm_host:Number,
    dbm_normalized_queries:Number,
    infra_container:Number,
    ingested_spans:Number,
    logs_indexed_30day:Number,
    logs_ingested:Number,
    serverless_invocation:Number,
    timeseries:Number,
    logs_indexed_3day:Number,
    synthetics_api_tests:Number,
},
    { collection: 'MSP' }
)

module.exports = mongoose.model('OrgUsageMSP', MSPSchema)