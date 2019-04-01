@php($page = 'Text & Email marketting')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary annual-growths" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists annual_growth_warper p-3 rounded">
				      <div class="row no-gutter">
					             <div class="annual-report emailmarketting row pt-3">
							            <div class="right_option  float-right d-block d-sm-block  d-md-none d-lg-none">
										     <a href="{{url('/')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
										</div>
							        <div class="col-md-12 select_boxannula email_marketingbtn">
									   <a href="email-marketting.html" class="print-report active">Text Message</a>
									   <a href="auto-message.html" class="print-report">Automated Message</a>
									   <a href="manual-email.html" class="print-report">Manual Email</a>
									   <a href="automated-email.html"n class="print-report">Automated Email</a>
									   <a href="limited_deals.html" class="print-report">Limited Deals</a>
									   <a href="deal-tracker.html" class="print-report">Deals Trackers</a>
									    <div class="right_option  float-right d-none d-sm-none d-md-block d-lg-block">
										 <a href="{{url('/')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
										</div>
								    </div>
								    <div class="col-12 col-md-12 col-lg-4 email-text-content">
								        <div class="annula-graphaling d-flex">
										   <div class="form-group col-md-5 p-0 col-12">
										     <input type="text" placeholder="Enter Phone#"> 
										   </div>
										  <div class="form-group col-md-12 col-lg-7 col-12">
										       <label>Or</label>
						                         <select class="select_input">
													<option>Select Customer Group</option>
													<option>Silver</option>
													<option>Gold</option>
													<option>Diamond</option>
												 </select>	
						                   </div>
										</div>
                                         <div class="appointment_summary-table genrate_customerReport table-responsive">
												<div class="table-responsive">
												  <table class="table" id="select-table">
													<thead>
														<tr>
															<th>Order</th>
															<th>Name</th>
															<th>Phone#</th>
															<th>Last checkin </th>
															<th><input type="checkbox"></th>
														 </tr>
													</thead>
													<tbody>
														<tr>
															<td>0</td>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															  <td><input type="checkbox"></td>

														</tr>
														<tr>
															 <td>1</td>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															<td><input type="checkbox"></td>
														</tr>
														 <tr>
														  <td>3</td>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															<td><input type="checkbox"></td>
														 </tr>
													</tbody>
												</table>
												</div>
											   <div class="form-group custom-textarae">
												  <textarea>Compost your text message here</textarea>
												  <small>* Maximum 160 Characters<br><b style="color:red">Chaaracter count:50</b></small>
											   </div>
												<button class="send_message">Send Message</button>
                                           </div>
								     </div>
								    <div class="col-12 col-md-12 col-lg-8 annual-body-content">
								        <div class="annula-graphaling">
										    <ul class="emailtext_list">
										        <li>
												   <span class="meghdng">Total</span>
												   <span class="count-text">650</span>
											    </li>
												<li>
												   <span class="meghdng">Appointment</span>
												   <span class="count-text">200</span>
											    </li>
												<li>
												   <span class="meghdng">Technician</span>
												   <span class="count-text">100</span>
											    </li>
												<li>
												   <span class="meghdng">Checkin</span>
												   <span class="count-text">100</span>
											    </li>
												<li>
												   <span class="meghdng">Checkout</span>
												   <span class="count-text">100</span>
											    </li>
												<li>
												   <span class="meghdng">Discount</span>
												   <span class="count-text">100</span>
											    </li>
												<li>
												   <span class="meghdng">Birthday</span>
												   <span class="count-text">100</span>
											    </li>
												<li>
												   <span class="meghdng">Custom</span>
												   <span class="count-text">100</span>
											    </li>
											</ul>
											
											<div class="search_listfilter d-flex">
											   <div class="form-group col-md-12 col-lg-5 p-0 col-12">
											      <input type="text" placeholder="Enter Phone">
												   <button class="search_cnt">Search</button>
											   </div>
											   <div class="form-group d-flex col-md-12 col-lg-7 col-12 slect_emaildate p-0">
											        <div id="datepicker" class="col-md-5 input-group date datepicker " data-date-format="mm-dd-yyyy">
												       <label class="datesent">Date Sent</label> 
														<input class="form-control" type="text" readonly="">
														<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
													</div>
													 
													<div id="datepicker" class="col-md-5  col-12 input-group date datepicker" data-date-format="mm-dd-yyyy">
													 <label class="datesent"> To  Date Sent</label> 
													  <input class="form-control" type="text" readonly="" placeholder="">
														<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
													</div>
													 <div class="form-group col-md-1 col-lg-1 float-right">
											        <button class="search_cnt">List</button>
											   </div>
											   </div>
											  
											</div>
										</div> 
										<div class="appointment_summary-table genrate_customerReport">
											<div class="table-responsive">
												<table class="table" id="select-table">
													<thead>
														<tr>
															<th>Customer Name</th>
															<th>Phone#</th>
															<th>Date Sent</th>
															<th>Message Content</th>
															<th></th>
														 </tr>
													</thead>
													<tbody>
														<tr>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															<td>This message is sent to dddd</td>
															 <td><input type="checkbox"></td>

														</tr>
														<tr>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															<td>This message is sent to dddd</td>
															 <td><input type="checkbox"></td>

														</tr>
														 <tr>
															<td>Ashely Thomans</td>
															<td>402-203-4587</td>
															<td>12/11/19</td>
															<td>This message is sent to dddd</td>
															 <td><input type="checkbox"></td>
														 </tr>
													</tbody>
												</table>
											</div>
											<div class="delet_allbutns">
											   <a href="" class="deletBtn">Delete</a>
											   <a href="" class="selectBtn">Select All</a>
											   <a href="" class="deletBtn">Deselect All</a>
											</div>
										</div>
								  </div>
						 </div>
					</div>						 
                </div>
            </div>
        </div>
    </div>
  
	
	
	
    <!-------CREATE-CATEGORY-POPUP-WINDOW------>
	<!-- Trigger the modal with a button -->
           <!-- Modal -->
			<div id="CreateCategory" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-body">
				     <div class="slect_categroy-pop">
					     <button type="button" class="close select_cat" data-dismiss="modal">&times;</button>
					    <form method="post">
						  <div class="form-group">
							 <label>Expense Category</label>
							 <select>
								<option>Select Category</option>
								<option>Silver</option>
								<option>Gold</option>
								<option>Diamond</option>
							 </select>	
						  </div>
						  
						   <button class="submit_catgry">Submit Category</button>
						  </form>
					  </div>
				  </div>
				  
				</div>

			  </div>
			</div>
			@section('javascript')
					<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
			@endsection
		@endsection