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
                        <h5 class="card-title">AWN <a class="get-code" data-toggle="collapse" href="#tt1" aria-expanded="true"><i class="fa fa-sort-desc has-arrow waves-effect waves-dark" title="List Customer org" data-toggle="tooltip"></i></a></h5>
                        <div class="collapse show m-t-15" id="tt1" aria-expanded="true">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Subscription</th>
                                            <th>Usage</th>
                                            <th>Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2023-04</td>
                                            <td>Infra Host</td>
                                            <td>80</td>
                                            <td>Per Host</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Filter Organization <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul class="m-t-20">
                <li><b>Custommer</b></li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_1">AWN</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_2">DTGO</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_3">Greenline</label>
                    </b>
                </li>
                <li>
                    <b class="">
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in chk-col-indigo" checked />
                        <label for="basic_checkbox_4">Heng</label>
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

<table id="employees"></table>

<!-- ============================================================== -->
<!-- End Right sidebar -->


<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
<script>
    // api url
    const api_url =
        "http://localhost:3000/datadogs_usage/MSP";

    // Defining async function
    async function getapi(url) {

        // Storing response
        const response = await fetch(url);

        // Storing data in form of JSON
        var data = await response.json();
        console.log(data);
        show(data)
    }
    // Calling that async function
    getapi(api_url);

    function show(data) {
    let tab =
        `<tr>
          <th>Name</th>
          <th>Office</th>
          <th>Position</th>
          <th>Salary</th>
         </tr>`;
   
    // Loop to access all rows
     for (let r of data.list) {
        tab += `<tr>
    <td>${r.org_name} </td>
       
</tr>`;
    }
    // Setting innerHTML as tab variable
    document.getElementById("employees").innerHTML = tab;
}


</script>