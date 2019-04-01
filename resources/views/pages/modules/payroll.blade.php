@php($page = 'Payroll')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row">
				  <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
				    <div class="col-md-12">
                        <div class="filters_byphone payroll_btnlist">
						    <a href="payroll-technician.html" class="Export_btn other-employe">Technician</a>
							<a href="payroll-otherepmloyee.html" class="Export_btn payroll-employee">Other Employee</a>
							<div class="namesvicky"> 
							  <ul class="skilllist skipcheck">
								 <li>
									 <div class="checkbox_area skiped_area">
									    <span class="skilname">Skip</span>
									    <input type="checkbox">
									    <label class="box-check"></label>
									 </div>
								</li>
								</ul>
							</div>
						</div>
						<div class="back-tohome float-right">
						 <a href="report.html" class="Export_btn">Export to Excel</a>
						<!--  <a href="report.html" class="Export_btn">Save</a> -->
					    <a href="index.html" class="Exit_btn  d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
					   </div>
					</div>
					<div class="col-md-8 col-lg-9">
					     <div class="appointment_summary-table genrate_customerReport">
                            <div class="table-responsive">						   
						      <table class="table" id="select-table">
								   <thead>
									  <tr>
										<th>Date</th>
										<th>Hours</th>
										<th>Regular</th>
										<th>Overtime</th>
										<th>Per day</th>
										<th>Per Week</th>
										<th>Commission</th>
										<th>Total Sale</th>
										<th>-Insurance-</th>
										<th>-Federal-</th>
										<th>-State-</th>
										<th>-S.Security-</th>
										<th>-S.Medicare-</th>
										<th>-Other-</th>
										<th>-Check-</th>
									 </tr>
								  </thead>
								 <tbody>
									 <tr>
										<td>08-14</td>
										<td>46</td>
										<td>$400</td>
										<td>$90</td>
										<td></td>
										<td></td>
										<td>$300</td>
										<td>$30,00</td>
										<td>$20</td>
										<td>$70.64</td>
										<td>$26.7</td>
										<td>$42.7</td>
										<td>$10.02</td>
										<td></td>
										<td>$620.48</td>
									 </tr>
									 
									 <tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									 </tr> <tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									 </tr>
								    <tr>
										<td>08-14</td>
										<td>46</td>
										<td>$400</td>
										<td>$90</td>
										<td></td>
										<td></td>
										<td>$300</td>
										<td>$30,00</td>
										<td>$20</td>
										<td>$70.64</td>
										<td>$26.7</td>
										<td>$42.7</td>
										<td>$10.02</td>
										<td></td>
										<td>$620.48</td>
									 </tr>
								  </tbody>
							  </table>
							</div>
						<div class="filter_data_list">
						  <div class="col-md-12 col-lg-5 p-l-0">
						          <ul class="manipulate-data_btn  p-0 payroll_btnbtm">
							        <li><a href="javascript:void(0)" class="Week_databtn">This Week</a></li>
								    <li><a href="javascript:void(0)" class="Month_databtn">This Month</a></li>
								    <li><a href="javascript:void(0)" class="Year_databtn">This Year</a></li>
							      </ul>
						  </div>
						  <div class="col-md-12 col-lg-7 p-r-0">
							  <ul class="manipulate-date_btnlist p-0 payrool_filterbtn pytechnician">
								 <li>
								    <div id="datepicker" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									</div>  
								 </li>
                               	<li>
								   <label class="todate">To</label>
									<div id="datepicker1" class="input-group date  datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									</div>  
								  </li>	
								  <li><a href="javascript" class="filter-btn">Filter</a></li>
							  </ul>							  
						  </div>
					      </div>	
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
					        <div class="appointment_summary-table genrate_customerReport payroll_wraper">
                                     <h3>Technician</h3>
								         <div class="Customers-info">
								                   <div class="select_teciecn">
													  <ul class="slect_tecns service_list technician_payroll">
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Classic manicure</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">Design</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Royal manicure</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Delux manicure</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Long Nails</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Princess manicure</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Dipping Powder</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Eyebrown Wax</label>
															</div>
														 </li>
														</ul>
												   </div>
								                </div>
							  
						           </div>
					</div>
					<div class="edit_employeee-detail row" id="open_editfield" style="display:none;">
						<div class="col-md-4">
						   <div class="Employee_Info">
						        <h3>Technician Informations</h3>
								<form method="post" class="emp_Details row">
								   <div class="form-group col-md-6">
								      <input type="text" placeholder="First Name">
								   </div>
								     <div class="form-group col-md-6">
								        <input type="text" placeholder="Last Name">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="DOB">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Job Being">
								     </div>
									 
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Job End">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Roll">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Social Security">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Phone#">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Address">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="City">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="State">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="zipcode">
								     </div>
									
									   <h3 class="cjheck-payoptn">Chjeck Pay Options</h3>
									   <div class="form-group col-md-6">
								        <input type="text" placeholder="By%">
								       </div>
									   <div class="form-group col-md-6">
								        <input type="text" placeholder="Fixed $">
								       </div>
									   <div class="custom-radios">
											  <ul class="fancy-radios emply_contact">
												<li >
													<div class="form-check col-md-4">
														<label>
														  
															<input type="radio" name="radio" > 
															  <span class="label-text">Hourly Rate</span>
														</label>
													</div>
													<div class="form-group col-md-8">
													   <input type="text" placeholder="">
													 </div>
												</li>
												</ul>
									 </div>
									 
								</form>
								<div class="update_btn_list">
								  <a href="report.html" class="Export_btn add_emp">Add</a>
					              <a href="report.html" class="Export_btn upd_emp">Update</a>
							      <a href="report.html" class="Export_btn dele_emp">Delete</a>
								</div>
						   </div>
						</div>
						<div class="col-md-4">
						   <div class="Employee_Info contact_Info">
						        <h3>Contract Options</h3>
								<form method="post" class="emp_Details emp_contactIfo">
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="radio" checked=""> 
													  <span class="label-text">By%</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Hourly Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
												<input type="radio" name="radio"> <span class="label-text">Overtime Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>

										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Per Per day</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Weekly</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
										   <div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Commission</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
									</ul>
								 </div>
								   <div class="deductions deduction_technician">
								      <h3>Deductions</h3>
									      <div class="form-group">
											<input type="text" placeholder="CC Tips Charges %">
										  </div>
										   <div class="form-group">
											<input type="text" placeholder="Clean up">
										  </div>
										  <div class="form-group">
											<input type="text" placeholder="Other">
										  </div>
									    </div>
								   
								</form>
							 </div>
						</div>
						<div class="col-md-4 employ-p-0">
						   <div class="Employee_Info contact_Info">
						        <h3>w4-Withholding</h3>
								<form method="post" class="emp_Details emp_contactIfo">
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact w4holding">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="radio" checked=""> 
													  <span class="label-text">Single</span>
												</label>
											</div>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Married</span>
												</label>
											</div>
										</li>
										
									   <div class="form-group">
									     <label>#Dependents</label>
								           <input type="text" placeholder="#Dependents">
								       </div>
									   <div class="form-group">
									       <label>Medicare%</label>
								           <input type="text" placeholder="Medicare%">
								       </div>
									   <div class="form-group">
									      <label>Social Security%</label>
								           <input type="text" placeholder="Social Security%">
								       </div>
									   <div class="form-group">
									        <label>Federal Allowance</label>
								           <input type="text" placeholder="Federal Allowance">
								       </div>
									   <div class="form-group">
									      <label>State Allowance</label>
								           <input type="text" placeholder="State Allowance">
								       </div>
									</ul>
								 </div>
								</form>
							 </div> 
						</div>
				    </div>
				</div>
			 </div>
        </div>
    </div>
 </div>
</div>

        @section('javascript')
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
	</script>
    
    <script>
        $('#select-table').on('click', 'tbody tr', function(event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
        });
</script>
        @endsection
    @endsection