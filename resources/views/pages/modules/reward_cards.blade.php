@php($page = 'Expense')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row">
				    <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
                    <div class="col-md-12 col-lg-5">
                        <div class="filters_byphone expense_TopBar">
                            <div class="form-group col-md-5 p-l-0">
                                <select>
                                    <option>Select Member Type</option>
                                    <option>Silver</option>
                                    <option>Gold</option>
                                    <option>Diamond</option>
                                </select>
                            </div>
							
							<div class="form-group col-md-3">
							 <input type="text" placeholder="Enter Phone">
                            </div>
							<div class="form-group col-md-3">
							 <input type="text" placeholder="Swipe Card">
                            </div>
                          </div>
                    </div>
                    <div class="back-tohome col-md-12  col-lg-7 expnse-rightbtn feedbackdate">
					       <div class="form-group col-md-3">
                                <div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                              <!--  <label class="tofdate">To</label> -->
                                <div id="datepicker4" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
							 <div class="col-md-6">
								<div class="expnse-top-btnlits">
									<ul class="right_exprtbtnlist">
									 
									 <li><a href="" class="list-inlinebtn">List</a></li>
									 <li><a href="report.html" class="Export_btn export_tofedback">Export to Excel</a></li>
									  <li><a href="index.html" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a></li>
									 </ul>
								</div>
							 </div>
					 </div>
					  
                   <div class="col-md-7 col-lg-9">
                        <div class="appointment_summary-table genrate_customerReport table-responsive">
                            <table class="table" id="select-table">
                                <thead>
                                     <tr>
                                        <th>Level</th>
                                        <th>Customer Name</th>
										<th>Phone #</th>
										<th>Carcode</th>
                                        <th>Member Since</th>
										<th>Points</th>
										<th>$ Value</th>
										<th>Date</th>
										<th>Type</th>
										<th>Points</th>
										<th>Balance</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Silver</td>
                                        <td>Ashely Long</td>
                                        <td>402-45-5055</td>
                                        <td>123456789</td>
										 <td>11-01-2018</td>
                                        <td>100</td>
                                        <td>$5</td>
										<td>12-05-2019</td>
                                        <td>Redeem</td>
                                        <td>-200</td>
										<td>100</td>
                                     </tr>
                                   <tr>
                                       <td>Gold</td>
                                       <td>Ashely Long</td>
                                        <td>402-45-5055</td>
                                        <td>123456789</td>
										 <td>11-01-2018</td>
                                        <td>100</td>
                                        <td>$5</td>
										<td>12-05-2019</td>
                                        <td>Redeem</td>
                                        <td>-200</td>
										<td>100</td>
                                  </tr>
								</tbody>
                            </table>
                         </div>
                    </div>
					
				    <div class="col-md-5 col-lg-3 lat-p-l-0">
                       <div class="edit_employeee-detail row" id="open_editfield" style="display:block;">
                            <div class="appointment_summary-table genrate_customerReport">
							    <div class="genrate_csreports rewardCardInfo_page">
					              <h3>Card Information</h3>
								   <form method="post" class="customerReportGenrate">
										<div class="filters_byphone select_custmer_reprt">
											<div class="form-group">
											  <label>Cutomers Phone#</label>
											  <input type="text" placeholder="">
											</div>
											<div class="form-group">
											  <label>Cutomers Name#</label>
											  <input type="text" placeholder="">
											</div>
											<div class="form-group">
											  <label>Membership Type</label>
												<select>
												   <option>Service Category</option>
												   <option>Product Category </option>
												   <option>Service Product </option>
												</select>
											</div>
											<div class="form-group">
											  <label>Points</label>
											  <input type="text" placeholder="">
											</div>
											<div class="form-group">
											  <label>Carcode</label>
											  <input type="text" placeholder="Enter swipe code">
											</div>
											<div class="botm_rewardbtn_list">
												<button class="encode_giftcard">Encode  New Card</button>
												<button class="encode_giftcard">Update Membership</button>
												<button class="delet_giftcard">Delete Giftcard</button>
											 </div>
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