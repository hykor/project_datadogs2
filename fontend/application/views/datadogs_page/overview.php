<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Usage</h3>
	</div>

	<div class="">
		<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="d-flex">
					<div>
						<h4 class="card-title"><span class="lstick"></span>Usage Summary</h4>
					</div>
					<div class="ml-auto">

						<!-- <form action="<?php echo base_url() ?>index.php/test" method="post"> -->
						<form id="searchUsage" method="post">

							<!-- <span>User: </span> -->

							<!-- <span>Mount: <?php echo $usageG[0]['date_mount'] ?></span> -->
							<select id="searchUser" class="custom-select b-0" name="user">
								<option value="">Select User</option>
								<option value="John">John </option>
								<option value="Teen">Teen </option>
								<option value="Disk">Disk </option>
							</select>
							
							<!-- <span>Mount: </span> -->

							<select id="searchMonth" class="custom-select b-0" name="mount">
								<option value="">Select Month</option>
								<option value="01">January </option>
								<option value="02">February </option>
								<option value="03">March </option>
								<option value="04">April</option>
								<option value="05">May </option>
								<option value="06">June </option>
								<option value="07">July </option>
								<option value="08">August </option>
								<option value="09">September </option>
								<option value="10">October </option>
								<option value="11">November </option>
								<option value="12">December </option>
							</select>
							
							<!-- <span>Year: </span> -->

							<select id="searchYear" class="custom-select b-0" name="year">
								<option value="">Select Year</option>
								<option value="2020">2020 </option>
								<option value="2021">2021 </option>
								<option value="2022">2022 </option>
								<option value="2023">2023 </option>
							</select>

							<button type="submit" class="btn waves-effect waves-light btn-lg btn-primary" value="search" style="font-size: 12px; "><i class="fa fa-search"></i> Search</button>

						</form>
					</div>
				</div>

				<div class="row m-t-30">
					<div class="col-md-12">
						<div class="card">
							<ul class="nav nav-tabs customtab" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"><strong>All</strong></span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Infrastructure</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#apm" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">APM</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Profiler" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Profiler</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#custom_metrics" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Custom Metrics</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#log_management" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Log Management</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#security" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Security</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#network " role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Network</span></a> </li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="home2" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Infra Hosts</h6>
																	<h2>22</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="tab-pane  p-20" id="profile2" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">


											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Infra Hosts</h6>
																	<h2>22</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Agent Hosts</h6>
																	<h2>22</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Azure App Service Hosts</h6>
																	<h2>1</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Containers</h6>
																	<h2>143</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

								</div>

								<div class="tab-pane p-20" id="apm" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>APM Hosts</h6>
																	<h2>2</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Standard APM Hosts</h6>
																	<h2>2</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Ingested Spans</h6>
																	<h2>2.46 GB</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Indexed Spans</h6>
																	<h2>9</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="tab-pane p-20" id="Profiler" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Profiled Hosts</h6>
																	<h2>1</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Profiled Host Hours</h6>
																	<h2>5</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								
								<div class="tab-pane p-20" id="custom_metrics" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Custom Metrics</h6>
																	<h2>10.2K</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										

										</div>
									</div>
								</div>
								
								<div class="tab-pane p-20" id="log_management" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Ingested Logs (live & rehydrated)</h6>
																	<h2>15.5 GB</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Ingested Live Logs</h6>
																	<h2>15.5 GB</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Indexed Logs (live & rehydrated)</h6>
																	<h2>9.92M</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Indexed Live Logs</h6>
																	<h2>9.92M</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Indexed Logs (15 Day Retention)</h6>
																	<h2>9.92M</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>										

										</div>
									</div>
								</div>
								
								<div class="tab-pane p-20" id="security" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Analyzed Logs (Security)</h6>
																	<h2>15.5 GB</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Cloud Workload Security Hosts</h6>
																	<h2>3</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Cloud Workload Security Containers</h6>
																	<h2>74</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Cloud Security Posture Management Hosts</h6>
																	<h2>3</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Azure App Services CSPM Hosts</h6>
																	<h2>1</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Agent CSPM Hosts</h6>
																	<h2>3</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								
											
											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Cloud Security Posture Management Containers</h6>
																	<h2>60</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																								

										</div>
									</div>
								</div>
								
								<div class="tab-pane p-20" id="network" role="tabpanel">
									<div class="p-20">
										<div class="row m-t-30">

											<div class="col-2 col-lg-3 col-md-4 col-sm-4">
												<div class="card">
													<div class="card-body" style="border: 1px solid rgb(16 16 16 / 10%); box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;  height:120px">
														<div class="d-flex justify-content-center">
															<div class="align-self-center"></div>
															<div class="align-self-center">
																<center>
																	<h6>Network Hosts</h6>
																	<h2>6</h2>
																</center>
															</div>
														</div>
													</div>
												</div>
											</div>																																																																																																

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




