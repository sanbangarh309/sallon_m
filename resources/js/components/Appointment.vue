<template>
<div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="appointment_summary">
            <div class="container-fluid">
			    <div class="filter_lists row">
				    <div class="col-md-4 d-lg-none d-md-none d-block">
                        <div class="filters_byphone float-right">
                            <a href="{{url('/')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filters_byphone">
                            <div class="form-group">
                                <input type="text" placeholder="Date">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-sm-block d-md-block d-lg-block">
                        <div class="filters_byphone float-right">
                            <a href="{{url('/')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="appointment_summary-table">
                        <a href="" class="appointnment_btn active">Appointment</a>
                        <a href="report.html" class="appointnment_btn">Report</a>
						<div class="table-responsive">
                         <table class="table" id="select-table">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Customers</th>
                                    <th>Phone#</th>
                                    <th>Technicians</th>
                                    <th>Service</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10:00 AM</td>
                                    <td>Karen Johns</td>
                                    <td>402-203-4587</td>
                                    <td>Vicky Nguyen</td>
                                    <td>Dipping Powder</td>
                                    <td>I am very easy getting infection. Please clean your tools</td>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Karen Johns</td>
                                        <td>402-203-4587</td>
                                        <td>Vicky Nguyen</td>
                                        <td>Dipping Powder</td>
                                        <td>I am very easy getting infection. Please clean your tools</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Karen Johns</td>
                                        <td>402-203-4587</td>
                                        <td>Vicky Nguyen</td>
                                        <td>Dipping Powder</td>
                                        <td>I am very easy getting infection. Please clean your tools</td>
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Karen Johns</td>
                                        <td>402-203-4587</td>
                                        <td>Vicky Nguyen</td>
                                        <td>Dipping Powder</td>
                                        <td>I am very easy getting infection. Please clean your tools</td>
                                    </tr>
                            </tbody>
                        </table>
						</div>

                        <!--UPDATE-APPOINTMENT-FIELDS-->
                        <div class="update_appointments" style="display:none;">
                            <div class="listing table-responsive">
                                <table class="table" id="select-table">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Customers</th>
                                            <th>Phone#</th>
                                            <th>Technicians</th>
                                            <th>Service</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td contenteditable='true'>10:00 AM</td>
                                            <td contenteditable='true'>Karen Johns</td>
                                            <td contenteditable='true'>402-203-4587</td>
                                            <td contenteditable='true'>Vicky Nguyen</td>
                                            <td contenteditable='true'>Dipping Powder</td>
                                            <td contenteditable='true'>I am very easy getting infection. Please clean your tools</td>
                                    </tbody>
                                </table>
                                <div class="edit_delet_btn_list">
                                    <a href="" class="update_btn">Update Appointment</a>
                                    <a href="" class="delete_btn">Delete Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!--UPDATE-APPOINTMENT-FIELDS-->

                        <!--ADDNEW-APPOINTMENT-FIELDS-->
                        <div class="addnew_apointments" style="display:none;"> 
                                <div class="col-md-3 col-12">
								  <div class="Customers-info form-list">
								      <h2>Customers informations</h2>
									     <form method="post">
									        <div class="form-group">
											    <input type="text" placeholder="Phone">
											</div>
											<div class="form-group">
											    <input type="text" placeholder="First Name">
											</div>
											<div class="form-group">
											    <input type="text" placeholder="Last Name">
											</div>
											<div class="form-group">
											  <input type="text" placeholder="Date">
											</div>
											<div class="form-group">
											    <textarea>Notes</textarea>
											</div>
											<div class="form-group">
											   <button class="apointment_infoo">Submit</button>
											</div>
									     </form>
								  </div>
								</div>
								<div class="col-md-4">
								  <div class="Customers-info form-list1">
								      <h2>Select Technicians</h2>
									   <div class="select_teciecn">
									      <ul class="slect_tecns">
										     <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" checked>
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											 <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											 <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" >
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											 <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" >
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											 <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" >
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" >
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox" >
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											  <li>
											    <div class="slect_boxtech">
												   <input type="checkbox">
												   <label class="aftercheck">Vicky Nguyen</label>
												</div>
											 </li>
											 
										  </ul>
									   </div>
								  </div>
								</div>
                                <div class="col-md-5">
                                    <div class="web-tabs">
                                       	<nav>
											 <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
											  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Manicure</a>
											  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pedicure</a>
											  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Waxing</a>
											  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
											</div>
                                        </nav>
									  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
											<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
											  <div class="Customers-info">
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
															   <input type="checkbox" checked>
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
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
															   <input type="checkbox" checked>
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
															   <label class="aftercheck">Fancy Manicure</label>
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
															   <input type="checkbox" checked>
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
															   <label class="aftercheck">Fancy Manicure</label>
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
															   <input type="checkbox" checked>
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
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
															   <input type="checkbox" >
															   <label class="aftercheck">Fancy Manicure</label>
															</div>
														 </li>
														  
														</ul>
												   </div>
											</div>
									  </div> 
                                     </div>
								</div>
                            </div>
							<div class="add-appointmemnt_btn">
							   <a href="javascript:void(0)" class="addappointnment_btn">Add Appointment</a>
							</div>
                        </div>
                    </div>
                    <!--ADDNEW-APPOINTMENT-FIELDS-->

                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
</template>