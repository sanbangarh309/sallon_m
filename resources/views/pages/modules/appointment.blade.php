@php($page = 'Appointment')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" id="vue_appointment" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
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
						<div class="table-responsive" id="appointment_list_table">
										<div class="form-group" id="alert_msgs" style="text-align: center;">
											<span class="help-block success" id="msgs"></span>
										</div>
							  @include('includes.appointment_list')
						</div>

                        <!--UPDATE-APPOINTMENT-FIELDS-->
                        <div class="update_appointments" style="display:none;">
                            <div class="listing table-responsive" id="editable_table">
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
                                            <td contenteditable='true' id="appointment_date_time"></td>
                                            <td contenteditable='true' id="appointment_customer"></td>
                                            <td contenteditable='true' id="appointment_phone"></td>
                                            <td>
														  <select id="appointment_technician" multiple>  
														  @foreach(App\Models\Employee::where('role_id',2)->get() as $emp)
																<option value="{{$emp->id}}">{{$emp->fname}} {{$emp->lname}}</option>
															@endforeach
															</select>
															</td>
                                            <td> <select id="appointment_service" multiple>  
														  @foreach(App\Models\Service::all() as $ser)
																<option value="{{$ser->id}}">{{$ser->name}}</option>
															@endforeach
															</select></td>
														  <td contenteditable='true' id="appointment_note"></td>
                                    </tbody>
                                </table>
                                <div class="edit_delet_btn_list">
                                    <a href="javascript:void(0)" class="update_btn" id="update_appointment_btn">Update Appointment</a>
                                    <a href="javascript:void(0)" class="delete_btn" id="delete_appointment_btn">Delete Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!--UPDATE-APPOINTMENT-FIELDS-->

                        <!--ADDNEW-APPOINTMENT-FIELDS-->
                        <div class="addnew_apointments" style="display:none;"> 
                                <div class="col-md-3 col-12">
								  <div class="Customers-info form-list">
								      <h2>Customers informations</h2>
									     <form id="add_appointment_form">
										  <div class="form-group" id="alert_msg">
											<span class="help-block success" id="msg"></span>
										  </div>
										  <input type="hidden" value="" name="id">
									        <div class="form-group">
											    <input type="text" placeholder="Phone" name="phone">
											</div>
											<div class="form-group">
											    <input type="text" placeholder="Email" name="email">
											</div>
											<div class="form-group">
											    <input type="text" placeholder="First Name" name="fname">
											</div>
											<div class="form-group">
											    <input type="text" placeholder="Last Name" name="lname">
											</div>
											<div class="form-group">
											  <input type="text" placeholder="Date" name="appointment_date" class="datepicker" data-date-format="yyyy-mm-dd">
											</div>
											<div class="form-group">
											    <textarea name="note" placeholder="Notes"></textarea>
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
									      <ul class="slect_tecns" id="slect_tecns_apnt">
											 @foreach(App\Models\Employee::where('role_id',2)->get() as $emp)
												<li>
													<div class="slect_boxtech">
														<input type="checkbox" value="{{$emp->id}}">
														<label class="aftercheck">{{$emp->fname}} {{$emp->lname}}</label>
													</div>
												</li>
												@endforeach
										  </ul>
									   </div>
								  </div>
								</div>
                                <div class="col-md-5">
                                    <div class="web-tabs">
                                       	<nav>
											 <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> 
											  @foreach(App\Models\Category::all() as $key => $cat)
											  		  @php($active='')
											  		  @if($key == 0)
															@php($active = 'active')
													  @endif
											  		<a class="nav-item nav-link {{$active}}" id="nav-home-tab" data-toggle="tab" href="#{{$cat->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$cat->name}}</a>
												@endforeach
											  	<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
											</div>
                                        </nav>
									  <div class="tab-content py-3 px-3 px-sm-0 san_cat_services" id="nav-tabContent"> 
									      @foreach(App\Models\Category::with('services')->get() as $key => $cat)
											  		  @php($active='')
											  		  @if($key == 0)
															@php($active = 'show active')
													  @endif
											  		<div class="tab-pane fade {{$active}}" id="{{$cat->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
														<div class="Customers-info">
																	<div class="select_teciecn">
																<ul class="slect_tecns service_list">
																	@foreach($cat->services as $service)
																	<li>
																		<div class="slect_boxtech">
																			<input type="checkbox" value="{{$service->id}}">
																			<label class="aftercheck">{{$service->name}}</label>
																		</div>
																	</li>
																	@endforeach
																</ul>
															</div>
														</div>
													</div>
											@endforeach
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
															   <input type="checkbox">
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
	    @section('javascript')
				<script type="text/javascript">
				var token = $('meta[name=csrf-token]').attr("content");
				var baseurl = $('meta[name=baseurl]').attr("content");
				let fields = ['fname','lname','phone','appointment_date','note','id','email'];

				$('body').on('click', '.pagination a', function(e) {
					e.preventDefault();
					$('.loading_').show();
					var url = $(this).attr('href');
					getAppointments(url);
					window.history.pushState("", "", url);
				});
				
				function getAppointments(url){
						axios.post(url).then((response) => {
							$('#appointment_list_table').html(response.data.list_html);
							$('.loading_').hide();
						})
						.catch((error) => {
									
						})
				}

            $('#appointment_list_table').on('click', '#select-table tbody tr', function(event) {
					if(!$(this).attr('id')){
						return false;
					}
					$(this).addClass('highlight').siblings().removeClass('highlight');
					$('.loading_').show();
					$('.update_appointments').addClass('update_apptinfo').siblings().removeClass('update_apptinfo');
					axios.get(baseurl+'/booking/'+$(this).attr('id')).then((response) => {
						$('.update_appointments #editable_table tbody tr').attr('id',$(this).attr('id'));
						$('.update_appointments #editable_table tbody tr td#appointment_date_time').text(response.data.detail.appointment_date);
						$('.update_appointments #editable_table tbody tr td#appointment_customer').text(response.data.detail.fname);
						$('.update_appointments #editable_table tbody tr td#appointment_phone').text(response.data.detail.phone);
						$('.update_appointments #editable_table tbody tr td select#appointment_technician').val(response.data.detail.employees);
						$('.update_appointments #editable_table tbody tr td select#appointment_service').val(response.data.detail.services);
						$('.update_appointments #editable_table tbody tr td#appointment_note').text(response.data.detail.note);
						$('.loading_').hide();
					})
					
				});
								
				$(".addappointnment_btn").click(function(){
					$(".addnew_apointments").toggle('slow');
				});

				$('form#add_appointment_form').on('submit', function(e){
						e.preventDefault();
						var id = $( "#add_appointment_form input[name='id']").val();
						let data = new FormData(this);
						var technicians = $("#slect_tecns_apnt li input:checkbox:checked").map(function(){
							return $(this).val();
						}).get();
						data.append('technicians',JSON.stringify(technicians));
						var services = $(".san_cat_services ul li input:checkbox:checked").map(function(){
							return $(this).val();
						}).get();
						if(services.length <= 0){
							$(this).find('#msg').css("color", "red");
							$(this).find('#msg').text('Please Select Services');
							return false;
						}
						data.append('services',JSON.stringify(services));
						var id = $( "form input[name='id']").val();
						var val = $("button[type=submit][clicked=true]").attr('id');
						if(val == 'employee_delete_btn'){
							return;
						}
						$('.loading_').show();
					  axios.post(baseurl+'/addappointment', data, {
								headers: {
									'X-CSRF-TOKEN': token
								}
						}).then((response) => {
									if(!response.data.success){
										$('#alert_msg #msg').css("color", "red");
										$('#alert_msg #msg').text(response.data.message);
										$('.loading_').hide();
										return false;
									}	
									if(id){
										$('#appointment_list_table table tbody tr#'+response.data.detail.id).remove();
									}
									$('#appointment_list_table tr#no_appointments').remove();
									$('#alert_msg #msg').css("color", "green");
									$('#alert_msg #msg').text(response.data.message);
									$('#appointment_list_table table tbody').append('<tr id="'+response.data.detail.id+'"><td>'+response.data.detail.fname+' '+response.data.detail.lname+'</td><td>'+response.data.detail.phone+'</td><td>'+response.data.detail.appointment_date+'</td></tr>')
									$.each(fields,function(index, value){
										$( "input[name='"+value+"']").val('');
									});
									$("#slect_tecns_apnt li input:checkbox").prop('checked',false);
									$(".slect_tecns.service_list li input:checkbox").prop('checked',false);
									$('.loading_').hide();
									
						})
						.catch((error) => {
									console.log(error.data);
									$('.loading_').hide();
						})
					return false;
				});

				$('#update_appointment_btn').on('click',function(e){
					e.preventDefault();
					$('.loading_').show();
					let data = {
						'id':$('.update_appointments #editable_table tbody tr').attr('id'),
						'appointment_date':$('.update_appointments #editable_table tbody tr td#appointment_date_time').text(),
						'name':$('.update_appointments #editable_table tbody tr td#appointment_customer').text(),
						'phone':$('.update_appointments #editable_table tbody tr td#appointment_phone').text(),
						'employees':$('.update_appointments #editable_table tbody tr td select#appointment_technician').val(),
						'services':$('.update_appointments #editable_table tbody tr td select#appointment_service').val(),
						'note':$('.update_appointments #editable_table tbody tr td#appointment_note').text()
					}
					axios.put(baseurl+'/updateappointment', data, {
								headers: {
								'X-CSRF-TOKEN': token
							}
					}).then((response) => {	
							$('#appointment_list_table table tbody tr#'+response.data.detail.id).remove();
							$('#appointment_list_table tr#no_appointments').remove();
							$('#alert_msgs #msgs').css("color", "green");
							$('#alert_msgs #msgs').text(response.data.message);
							$('#appointment_list_table table tbody').append('<tr id="'+response.data.detail.id+'"><td>'+response.data.detail.fname+' '+response.data.detail.lname+'</td><td>'+response.data.detail.phone+'</td><td>'+response.data.detail.appointment_date+'</td></tr>')
							$('.loading_').hide();		
						})
						.catch((error) => {
							console.log(error.data);
							$('.loading_').hide();
						})
				});
				$('#delete_appointment_btn').on('click',function(e){
					$('.loading_').show();
					let id = $('.update_appointments #editable_table tbody tr').attr('id');
					axios.delete(baseurl+'/booking/'+id).then((response) => {
						$('#alert_msgs #msgs').css("color", "green");
						$('#alert_msgs #msgs').text(response.data.message);
						$('.update_appointments').removeClass('update_apptinfo').siblings().addClass('update_apptinfo');
						$('#appointment_list_table table tbody tr#'+id).remove();
						$('.loading_').hide();
					})
				});
            </script>
        @endsection
@endsection