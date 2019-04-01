@php($page = 'Gift Cards')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                 <div class="filter_lists row">
						<div class="col-md-12 col-lg-6">
							<div class="filters_byphone filter-row">
							    <a href="index.html" class="Exit_btn d-block d-sm-block d-lg-none d-md-none">
								 <i class="fas fa-home"></i>
								</a>
								<div class="col-md-4">
								  <a href="regulargiftcard.html" class="regular_gift active">Regular</a>
								  <a href="preferredgiftcard.html" class="preferred_gift">Preferred</a>
								</div>
								<div class="form-group col-md-4 p-0">
								   <input type="text" placeholder="Enter Phone">
								</div>
								<div class="form-group col-md-4 p-0">
								   <input type="text" placeholder="Swipe Giftcard">
								</div>
							</div>
						</div>
                        <div class="back-tohome col-md-12 col-lg-6 expnse-rightbtn feedbackdate">
					        <div class="form-group col-md-4">
                                 <div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                              <!--  <label class="tofdate">To</label> -->
                                <div id="datepicker4" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
							 <div class="col-md-4 p-0">
								<div class="expnse-top-btnlits">
									<ul class="right_exprtbtnlist">
									  <li><a href="report.html" class="Export_btn export_tofedback">Export to Excel</a></li>
									  <li><a href="index.html" class="Exit_btn d-none d-sm-none d-lg-block d-md-block"><i class="fas fa-home"></i></a></li>
									 </ul>
								</div>
							 </div>
					    </div>
					  <div class="col-md-8 col-lg-9">
                        <div class="appointment_summary-table genrate_customerReport table-responsive">
                            <table class="table" id="select-table">
                                <thead>
                                     <tr>
                                       <th>Phone #</th>
                                        <th>Name</th>
                                        <th>Carcode</th>
                                        <th>Balance</th>
										<th>Expiration</th>
										<th>Bought on</th>
										<th>Amount</th>
										<th>Customer Name</th>
										<th>Used on</th>
										<th>Amount</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>402-235-5896</td>
                                        <td>Ashely Thomans</td>
                                        <td>1234567893</td>
                                        <td>$150</i>
									    <td>11-05-2019</td>
                                        <td>11/08/18</td>
                                        <td>$200</td>
										<td>Ashely Thomans</td>
										 <td>11-05-2019</td>
										 <td>$20</td>
                                    </tr>
                                    <tr>
                                        <td>402-235-5896</td>
                                        <td>Ashely Thomans</td>
                                        <td>1234567893</td>
                                        <td>$150</i>
									    <td>11-05-2019</td>
                                        <td>11/08/18</td>
                                        <td>$200</td>
										<td>Ashely Thomans</td>
										 <td>11-05-2019</td>
										 <td>$20</td>
                                    </tr>
								</tbody>
                            </table>
                         </div>
                    </div>
					 <div class="col-md-4 col-lg-3 lat-p-r-0 ">
                       <div class="edit_employeee-detail row" id="open_editfield" style="display:block;">
                          <div class="Employee_Info giftcard_detail-info">
                                <h3>Giftcard Informations</h3>
								  <form method="post" class="giftcard-summary">
								     <div class="form-group">
									    <label>Customer Phone#</label>
										<input type="text" placeholder="">
									 </div>
									 <div class="form-group">
									    <label>First Name</label>
										<input type="text" placeholder="">
									 </div>
									  <div class="form-group">
									    <label>Last Name</label>
										<input type="text" placeholder="">
									 </div>
									  <div class="form-group">
									    <label>$ Amount</label>
										<input type="text" placeholder="">
									 </div>
									  <div class="form-group">
									    <label>Carcode</label>
										<input type="text" placeholder="swipe giftcard">
									 </div>
									 <div class="form-group">
										<div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
											<input class="form-control" type="text" readonly="">
											<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
										</div>
                                     </div>
									 
									 <div class="form-group">
									    <button class="encode_giftcard">Encode  New Card</button>
										<button class="delet_giftcard">Delete Giftcard</button>
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