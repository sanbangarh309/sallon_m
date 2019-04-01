@php($page = 'Point of Sale')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary top_pointsale" id="GenrateCustomer_report">
            <div class="container-fluid">
                            <div class="filter_lists row">
							    <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
								 <div class="col-md-3 col-lg-2">
									<div class="form-group">
										<span class="customerName">Customer: Alex Johans</span> 
										<input type="text" placeholder="Enter Phone#">
									</div>
								 </div>	
							    <div class="col-md-3 col-lg-3 text-center">
									<div class="form-group m-0 mt-3">
										<span class="customerName">Trans ID: 3107</span> 
										<button class="timedisplay">10:35:45 AM</button>
									</div>
							    </div>
							     <div class="col-md-3 col-lg-3 ">
								    <div class="right_voiddraw">
									  <div class="form-group m-0 mt-3">
									     <input type="text" placeholder="Scan or Type in Ticket#">
								      </div>
							        </div>
							     </div>
								<div class="col-md-3 col-lg-4">
							     	<div class="pointofsaledraw float-right mt-3">
									   <a href="report.html" class="Export_btn">Drawer</a>
									   <a href="report.html" class="Export_btn">Void</a>
									   <a href="{{url('/')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
								   </div>
								</div>
							     <div class="col-md-4 col-lg-2">
								       <div class="appointment_summary-table genrate_customerReport payroll_wraper">
									       <h3>Customers</h3>
								                 <div class="Customers-info">
								                   <div class="select_teciecn">
													  <ul class="slect_tecns service_list point-customers">
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Asley Johns</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">Lily Thompson</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Alexa Amazon</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Christina Chang</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Kayla Wooka</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Cindy Wenche</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vicky Anderson</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Book Watts</label>
															</div>
														 </li>
														</ul>
												   </div>
								                </div>
							            </div>
					               </div>
								   
				      <div class="col-md-5 col-lg-5">
					   <div class="appointment_summary-table genrate_customerReport">
						       <h1>Product/Service</h1>
							     <div class="web-tabs poitn-ofsale">
                                       	<nav>
											 <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
											  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Manicure</a>
											  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pedicure</a>
											  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Waxing</a>
											  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
											    <a class="nav-item nav-link" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-about" aria-selected="false">Products</a>
											</div>
                                        </nav>
									  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
											<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
											  <div class="Customers-info">
								                   <div class="select_teciecn service_tabspad">
													  <ul class="slect_tecns service_list">
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
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Tipto manicure</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Gel Powder</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Short Nails</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Delux Pedicure</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Acrylic</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Fancy Manicure</label>
															</div>
														 </li>
														  
														</ul>
												   </div>
								                </div>
											</div>
											<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											     <div class="select_teciecn">
													  <ul class="slect_tecns service_list">
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
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Tipto manicure</label>
															</div>
														 </li>
														 </ul>
												   </div> 
											</div>
											<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											          <div class="select_teciecn">
														<ul class="slect_tecns service_list">
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
														</ul>
												     </div>
											</div>
											<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
											       <div class="select_teciecn">
													  <ul class="slect_tecns service_list">
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
													</ul>
												   </div>
											</div>
											<div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-about-tab">
											       <div class="select_teciecn">
													  <ul class="slect_tecns service_list">
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
													</ul>
												   </div>
											</div>
									  </div> 
                                     </div>
									 
									 <div class="giftCrads_detail">
									    <h1><a href="javascript:void(0)" id="giftcrad" class="giftcard">Giftcard <span class="change_icon"><i class="fas fa-angle-down"></i></span></a></h1>
										       <div class="select_teciecn" id="Open_Giftcard" style="display:none">
													  <ul class="slect_tecns service_list">
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">$25</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$50</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$75</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$100</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$125</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$150</label>
															</div>
														 </li>
														   <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$175</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">$200</label>
															</div>
														 </li>
													</ul>
												</div>
									 </div>
									     <div class="giftCrads_detail_discounts">
									           <h1 class="discount_heading">Discounts</h1>
									               <ul class="slect_tecns discounts-cupon">
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Student</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox" checked="">
															   <label class="aftercheck">Senior</label>
															</div>
														 </li>
														  <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">10% Off Spring</label>
															</div>
														 </li>
										             </ul>
									    </div>
							
						      </div>
					        </div>
					               <div class="col-md-3 col-lg-2">
					                   <div class="appointment_summary-table genrate_customerReport payroll_wraper">
                                             <h3>Technician</h3>
								                 <div class="Customers-info">
								                   <div class="select_teciecn">
													  <ul class="point_saletechnican">
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vocky Naguyn</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vocky Naguyn</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vocky Naguyn</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vocky Naguyn</label>
															</div>
														 </li>
														 <li>
															<div class="slect_boxtech">
															   <input type="checkbox">
															   <label class="aftercheck">Vocky Naguyn</label>
															</div>
														 </li>
														</ul>
												   </div>
												   
												 <div class="service_techn"> <button class="service_techncian">Servcie / Technician</button></div>
								                </div>
							            </div>
					               </div>
								      <div class="col-md-12 col-lg-3">
					                   <div class="appointment_summary-table genrate_customerReport payroll_wraper">
									        <div class="table-responsive">
                                              <table class="table small-table" id="select-table">
												<thead>
													<tr>
														<th>T</th>
														<th>Q</th>
														<th>Descriptions</th>
														<th>Price</th>
														
													</tr>
												</thead>
												<tbody>
													 <tr>
														<td>P</td>
														<td>1</td>
														<td>Classic Manicure</td>
														<td>Deluxe Pedicure</td>
													 </tr>
													 <tr>
														<td>P</td>
														<td>1</td>
														<td>Classic Manicure</td>
														<td>Deluxe Pedicure</td>
													 </tr>
													 <tr>
														<td><button class="deleted btn-danger">Delete	</button></td>
														<td><button class="deleted btn-primary">Qty	</button></td>
														<td colspan="2"><button class="deleted bg-success">Update Price	</button></td>
														
													 </tr>
													 <tr>
														<td colspan="2"><button class="deleted btn-danger">Delete</button></td>
														<td colspan="2"><button class="deleted btn-primary">Total:$70</button></td>
													</tr>
												 </tbody>
							                 </table>
											 </div>
											 <div class="extra_tip">
											        <div class="padiiing-box">
														<div class="tip_ratio">
															   <span class="extra_tip0">
																  <label>Extra</label> <input type="text" placeholder="$10">
															   </span>
															   <span class="extra_tip1">
																  <label>Tip</label> <input type="text" placeholder="$5">
															   </span>
																<span class="extra_tips">
																  <label>Off</label> <input type="text" placeholder="-5">
															   </span>
															   <div class="form-group grand-totl">
																	<label class="grand-total">Grand total:</label>
																	 <input type="text" placeholder="$80">
															   </div>
															   <div class="extar_tip_btns">
																 <button class="ex_pt btn-primary">Extra</button>
																  <button class="ex_tp bg-success">Tip</button>
																   <button class="ex_cbmn btn-danger">Combine</button>
															   </div>
												         </div>
												    </div>
												    <div class="reaward_details">
											          <h1><a href="javascript:void(0)" id="RewardPoints" class="giftcard">Reward Points <span class="change_icon"><i class="fas fa-angle-down"></i></span></a></h1>
									                 </div>
													 <div class="reward_points" id="reward_points" style="display:none;">
															  <div class="form-group reward">
																  <input type="text" placeholder="Swipe Reward Card">
																  <input type="text" placeholder="#Enter Phone Number">
																  <button class="searching  bg-success">Search</button>
															   </div>
															<div class="member_pointss">
															  <span class="alex_john">
																Alex Johans
																<b>120 Points</b>
															  </span>
															   <span class="alex_apply">
																 <button class="apply_btn btn-primary">Apply</button>
															  </span>
														   </div>
														   <div class="member_earnings">
															  <span class="alex_john">
															   Paid: <b>$20</b>
															  </span>
															   <span class="alex_john">
															   Remaining: <b>$60</b>
															  </span>
														   </div>
															<div class="member_earnings">
															  <span class="alex_john">
															   Paid: <b>$20</b>
															  </span>
															   <span class="alex_john">
															   Remaining: <b>$60</b>
															  </span>
															  <ul class="complete_listingimg">
																 <li><img src="images/atm.png" alt=""></li>
																  <li><img src="images/money.jpg" alt=""></li>
																  <li><img src="images/giftcard.png" alt=""></li>
															  </ul>
															   <button class="complete_btn btn-primary">Complete Sale</button>
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
	@section('javascript')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>	   
  $(document).ready(function(){
  $("#giftcrad").click(function(){
    $("#Open_Giftcard").slideToggle("slow");
	$("i", this).toggleClass("fas fa-angle-up fas fa-angle-down");
	});
});

  $(document).ready(function(){
  $("#RewardPoints").click(function(){
    $("#reward_points").slideToggle("slow");
	$("i", this).toggleClass("fas fa-angle-up fas fa-angle-down");
    });
});

<!--   $("#giftcrad").click(function(){ -->
    <!-- $("#reward_points").hide(); -->
	
	<!-- }); -->
	 <!-- $("#RewardPoints").click(function(){ -->
  <!--   $("#Open_Giftcard").hide(); -->
	
<!-- 	});  -->
    
	
	
    $('#select-table').on('click', 'tbody tr', function(event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
        });
</script>
@endsection
@endsection