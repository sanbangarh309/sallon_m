@php($page = 'Transaction Management')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary annual-growths" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists annual_growth_warper p-3 rounded">
                    <div class="row no-gutter">
                        <div class="annual-report emailmarketting row pt-3">
						         <div class="filter_data_list">
									  <div class="col-md-12 col-lg-8">
										<ul class="manipulate-data_btn  p-0 transaction_cc m-0">
										 <li><a href="transaction-managementcc.html" class="print-report active">CC Transaction</a></li>
											<li><a href="transaction-managementlog.html" class="print-report">Transaction Log</a></li>
											 <li><a href="javascript:void(0)" class="today_databtn">Today</a></li>
											  <li><a href="javascript:void(0)" class="Week_databtn">This Week</a></li>
											   <li><a href="javascript:void(0)" class="Month_databtn">This Month</a></li>
												<li><a href="javascript:void(0)" class="Month_databtn">This Year</a></li>
										 </ul>
									  </div>
									  <div class="col-md-12 col-lg-4">
										  <ul class="manipulate-date_btnlist p-0 transcation_fileter filter-transctn">
											 <li>
												<div id="datepicker" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
													<input class="form-control" type="text" readonly />
													<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
												</div>  
											 </li>
											 <li>
											 <label class="todate">To</label>
											 </li>								 
											  <li>
												<div id="datepicker1" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
													<input class="form-control" type="text" readonly />
													<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
												</div>  
											  </li>	
											  <li><a href="javascript:void(0)" class="filter-btn">Filter</a></li>
											   <li><a href="index.html" class="Exit_btn homebtn"><i class="fas fa-home"></i></a></li>
										  </ul>							  
									  </div>
					              </div>
						    <div class="col-12 col-md-9 automated_Message_right">
                                <div class="appointment_summary-table table-responsive">
                                     <table class="table automated_messge" id="">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Ticket</th>
                                                <th>Trans #</th>
                                                <th>Customer</th>
                                                <th>Phone</th>
												 <th>Status</th>
												<th>Type</th>
												 <th>Sale</th>
                                                <th>Tips</th>
												<th>Discount</th>
												<th>Total</th>
												<th>Payment</th>
												<th>Completed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											    <td>1</td>
												<td>15</td>
                                                <td>Ashely</td>
                                                <td>402-002-2568 </td>
                                                <td>Waxing $5</td>
                                                <td>2</td>
                                                <td>$5</td>
												<td>Waiting.</td>
                                                <td>12/30/18</td>
												 <td>11/30/18</td>
												 <td>11</td>
												 <td>11/30/18</td>
												 <td>11</td>

                                             </tr>
                                              <tr>
											    <td>1</td>
												<td>15</td>
                                                <td>Ashely </td>
                                                <td>402-002-2568 </td>
                                                <td>Waxing $5</td>
                                                <td>2</td>
                                                <td>$5</td>
												<td>Waiting.</td>
                                                <td>12/30/18</td>
												 <td>11/30/18</td>
												 <td>11</td>
												 <td>11/30/18</td>
												 <td>11</td>

                                             </tr>
											   <tr>
											    <td>1</td>
												<td>15</td>
                                                <td>Ashely </td>
                                                <td>402-002-2568 </td>
                                                <td>Waxing $5</td>
                                                <td>2</td>
                                                <td>$5</td>
												<td>Waiting.</td>
                                                <td>12/30/18</td>
												 <td>11/30/18</td>
												 <td>11</td>
												 <td>11/30/18</td>
												 <td>11</td>

                                             </tr>
											   <tr>
											    <td>1</td>
												<td>15</td>
                                                <td>Ashely </td>
                                                <td>402-002-2568 </td>
                                                <td>Waxing $5</td>
                                                <td>2</td>
                                                <td>$5</td>
												<td>Waiting.</td>
                                                <td>12/30/18</td>
												 <td>11/30/18</td>
												 <td>11</td>
												 <td>11/30/18</td>
												 <td>11</td>

                                             </tr>
											   <tr>
											    <td>1</td>
												<td>15</td>
                                                <td>Ashely </td>
                                                <td>402-002-2568 </td>
                                                <td>Waxing $5</td>
                                                <td>2</td>
                                                <td>$5</td>
												<td>Waiting.</td>
                                                <td>12/30/18</td>
												 <td>11/30/18</td>
												 <td>11</td>
												 <td>11/30/18</td>
												 <td>11</td>

                                             </tr>
											 
											   <tr>
											    <td colspan="2"><span class="grand"><label>Grand Total</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>Total Sale</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>Total Tip</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>T.Discount</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>T.Payment</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>T. Transaction</label><input type="text"></span></td>
												<td colspan="2"><span class="grand"><label>T.Ticket</label><input type="text"></span></td>
                                              </tr>
											
                                        </tbody>
                                    </table>
                                 </div>
                            </div>
							<div class="col-md-3">
							     <div class="ticket_summary_transaction_mng">
								     <h3>Ticket Summary</h3>
									   <div class="sumry">
									     <ul class="ticket_list">
										     <li><span class="ticket-count">Ticket#:15</span></li>
											 <li><span class="ticket-count">Customer:Laynda Roads</span></li>
											 <li><span class="ticket-count">Phone#:402-235-5896</span></li>
										 </ul> 
                                            <h3>Sales item</h3>	
                                            <ul class="ticket_list">
										     <li><span class="ticket-count">Kid hand Polish $15</span></li>
											 <li><span class="ticket-count">(Serviced By Cindy Le)</span></li>
											 <li><span class="ticket-count">Service Time In:10:35AM</span></li>
											  <li><span class="ticket-count">Service Time Out:10:35AM</span></li>
											  <li><span class="ticket-count">Duration:20 minutes</span></li>
											    <li><span class="ticket-count"></li>
												  <li><span class="ticket-count"></li>
												    <li><span class="ticket-count"></li>
												  <li><span class="ticket-count"></li>
												  <li><span class="ticket-count">Kid Eyebrown Wax $5</span></li>
												  <li><span class="ticket-count">(Serviced By Cindy Le)</span></li>
													 <li><span class="ticket-count">Service Time In:10:35AM</span></li>
													  <li><span class="ticket-count">Service Time Out:10:35AM</span></li>
													  <li><span class="ticket-count">Duration:5 minutes</span></li>
										   </ul>
                                      <h3>Payment</h3>	
                                            <ul class="ticket_list">
										     <li><span class="ticket-count">Payment Type: Cash</span></li>
											 <li><span class="ticket-count">Amount:$5</span></li>
											 <li><span class="ticket-count">Payment Type: Credit Card</span></li>
											   <li><span class="ticket-count">Amount:$5</span></li>
											  <li><span class="ticket-count">Total:$20</span></li>
											    <li><span class="ticket-count">Date: 11/20/19 11:15:05</li>
											 </ul>										   
									   </div>
								</div>
							</div>
							
							<div class="col-md-12 botm_transctionbtn">
								   <a href="email-marketting.html" class="print-report active">Close Batch</a>
								   <a href="auto-message.html" class="print-report">Adjust Tip</a>
								   <a href="manual-email.html" class="print-report">Adjust Total</a>
								   <a href="automated-email.html" n="" class="print-report">Void</a>
								   <a href="limited_deals.html" class="print-report">Refund</a>
								   <a href="deal-tracker.html" class="print-report">Print Batch Report</a>
									<div class="float-right reprintbtn">
									  <a href="deal-tracker.html" class="print-report">Re-print Receipt</a>
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