const express = require('express');
const routes = express.Router();
const controllers = require('../controllers/Datadogs_usage')

// Get MSP
routes.get('/msp',controllers.getMSP)
// Get SUB_ORG
routes.get('/subOrg',controllers.getsupOrg)


//Search Org name | MSP
routes.get('/msp/:org_name',controllers.searchOrgname)

module.exports = routes