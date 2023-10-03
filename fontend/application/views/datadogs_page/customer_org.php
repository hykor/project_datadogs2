<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Organization</h4>
    </div>

    <div class="">
        <button class="right-side-toggle  btn waves-effect waves-light btn-outline-secondary m-l-10 "><i class="ti-filter"></i><span>Filter</span></button>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-md-12">
                        <h4 class="card-title"><span class="lstick"></span>Customer Organization</h4>
                    </div>

                    <div class="col-md-12 mt-2">
                        <!-- <div class=""> -->
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered max-display-content" data-toggle="table" data-sort-name="stargazers_count" data-height="300" data-mobile-responsive="true" data-sort-order="desc">
                                <thead>
                                    <tr class="max">
                                        <th data-sortable="true" data-width="100">Organization</th>
                                        <th data-width="100" data-sortable="true">Infra Host</th>
                                        <th data-width="100" data-sortable="true">Network Device</th>
                                        <th data-width="100" data-sortable="true">APM Host</th>
                                        <th data-width="100" data-sortable="true">APM Trace Search</th>
                                        <th data-width="100" data-sortable="true">DBM Host</th>
                                        <th data-width="100" data-sortable="true">DBM Normalized Queries</th>
                                        <th data-width="100" data-sortable="true">Infra Container</th>
                                        <th data-width="100" data-sortable="true">Ingested Spans</th>
                                        <th data-width="100" data-sortable="true">Logs Indexed 30day</th>
                                        <th data-width="100" data-sortable="true">Logs Ingested</th>
                                        <th data-width="100" data-sortable="true">Serverless Invocation</th>
                                        <th data-width="100" data-sortable="true">Timeseries</th>
                                        <th data-width="100" data-sortable="true">Logs Indexed 3day</th>
                                        <th data-width="100" data-sortable="true">Synthetics API Tests</th>
                                    </tr>
                                </thead>
                                <tbody id="data">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Table -->
<!-- <div class="card">
    <div class="card-body">
        <h4 class="card-title">Test sort table</h4>
        <h6 class="card-subtitle">Test table</h6>
        <table data-toggle="table" data-url="http://localhost:3000/datadogs_usage/MSP" data-sort-name="stargazers_count" data-height="300" data-mobile-responsive="true" data-sort-order="desc" class="table">
            <thead>
                <tr>
                    <th data-field="org_name" data-sortable="true" data-width="100"> Organization </th>
                    <th data-field="infra_host" data-sortable="true"> Infra Host </th>
                    <th data-field="network_device" data-sortable="true"> Network Device </th>
                    <th data-field="apm_host" data-sortable="true"> APM Host </th>
                    <th data-field="apm_trace_search" data-sortable="true">APM Trace Search</th>
                    <th data-field="dbm_host" data-sortable="true">DBM Host</th>
                    <th data-field="dbm_normalized_queries" data-sortable="true">DBM Normalized Queries</th>
                    <th data-field="infra_container" data-sortable="true">Infra Container</th>
                    <th data-field="ingested_spans" data-sortable="true">Ingested Spans</th>
                    <th data-field="logs_indexed_30day" data-sortable="true">Logs Indexed 30day</th>
                    <th data-field="logs_ingested" data-sortable="true">Logs Ingested</th>
                    <th data-field="serverless_invocation" data-sortable="true">Serverless Invocation</th>
                    <th data-field="timeseries" data-sortable="true">Timeseries</th>
                    <th data-field="logs_indexed_3day" data-sortable="true">Logs Indexed 3day</th>
                    <th data-field="synthetics_api_tests" data-sortable="true">Synthetics API Tests</th>
                </tr>
            </thead>
        </table>
    </div>
</div> -->


<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Filter Organization <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul class="m-t-20">
                <li><b>Custommer</b></li>
                <li>
                    <b class="">
                        <select class="form-control">
                            <option>Select Customer</option>
                            <option>AWN</option>
                            <option>DTGO</option>
                            <option>Greenline</option>
                            <option>Heng</option>
                            <option>Major Cineplex</option>
                            <option>Noble</option>
                            <option>PTG</option>
                            <option>Thairath</option>
                        </select>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_1">PTT Oil and Retail Business</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_2">OR AOA WEB</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_3">OR AOA</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_4">OR LMS</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_4">OR Data Platform</label>
                    </b>
                </li>
            </ul>

            <ul class="m-t-20 chatonline">
                <li><b>Usage</b></li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_5">Infra Host</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_6">infra_container</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_7">apm_host</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_8">logs_ingested</label>
                    </b>
                </li>
            </ul>
        </div>



    </div>
</div>

<!-- ============================================================== -->
<!-- End Right sidebar -->


<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
<script>
    fetch("http://localhost:3000/datadogs_usage/MSP").then(
        res => {
            res.json().then(
                data => {
                    console.log(data);
                    if (data.length > 0) {

                        var temp = "";
                        data.forEach((itemData) => {
                            temp += "<tr>";
                            temp += "<td  data-toggle='table' class='text-center'><h6>" + itemData.org_name + "</h6></td>";
                            if (itemData.infra_host > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.infra_host + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.network_device > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.network_device + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.apm_host > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.apm_host + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.apm_trace_search > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.apm_trace_search + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.dbm_host > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.dbm_host + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.dbm_normalized_queries > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.dbm_normalized_queries + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.infra_container > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.infra_container + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.ingested_spans > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.ingested_spans + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.logs_indexed_30day > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.logs_indexed_30day + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.logs_ingested > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.logs_ingested + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.serverless_invocation > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.serverless_invocation + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.timeseries > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.timeseries + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.logs_indexed_3day > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.logs_indexed_3day + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            if (itemData.synthetics_api_tests > 0) {
                                temp += "<td class='text-center'><h6>" + itemData.synthetics_api_tests + "</h6></td>";
                            } else {
                                temp += "<td class='text-center'><h6>-</h6></td>"
                            }
                            temp += "</tr>";
                        });
                        document.getElementById('data').innerHTML = temp;
                    }
                }
            )
        }
    )
</script>