@php($page = 'Inventory')
@extends('layouts.app')
@section('main-content')
      <div class="Saloon_web_wrapper" id="vue_inventory" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row">
				   <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
                    <div class="col-md-9 col-lg-8">
                        <div class="filters_byphone filter-row inventory_btnlist">
						    <div class="col-md-12 p-l-0">
						       <ul class="btn_listupr"> 
								   <li><a href="inventory.html" class="preferred_gift active">Service Name</a></li>
								   <li><a href="product.html" class="preferred_gift">Product</a></li>
								   <li><a href="giftcardinventory.html" class="regular_gift">Giftcards</a></li>
								   <li><a href="discount.html" class="preferred_gift">Discounts</a></li>
								   <li><a href="supplies.html" class="preferred_gift">Supplies</a></li>
							   </ul>
               </div>
                            
						</div>
                    </div>
                    <div class="back-tohome col-md-3 col-lg-4 expnse-rightbtn feedbackdate">
					       <div class="col-md-12 p-r-0">
								<div class="expnse-top-btnlits">
									<ul class="right_exprtbtnlist">
									  <li><a href="javascript:void(0)" class="Export_btn export_tofedback" data-toggle="modal" data-target="#CreateCategory">Create Category</a></li>
									  <li><a href="{{url('/')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a></li>
									 </ul>
								</div>
							 </div>
					 </div>
					 <div class="col-md-7 col-lg-9">
                        <div class="appointment_summary-table genrate_customerReport table-responsive">
                            <table class="table" id="select-table">
                                <thead><div class="form-group">
											<label class="btn btn-success">
													Browse <input type="file" name = "image" hidden>
											</label>
									</div>
                  <tr>
									   <th>Service Name</th>
									   <th>Category</th>
									   <th>Price</th>
									   <th>Time</th>
                    <th>Turn</th>
                    <th>Guarantee</th>
                  </tr>
                   </thead>
                     <tbody id="san_t_body">
                      <tr><td colspan="6">Loading....</td></tr>
								     </tbody>
                  </table>
                 </div>
           </div>
					<div class="col-md-5 col-lg-3 p-r-0">
                       <div class="edit_employeee-detail row" id="open_editfield" style="display:block;">
                          <div class="Employee_Info giftcard_detail-info">
                                <h3>Service Informations</h3>
								  <form id="add_service_form" class="giftcard-summary inventory_mangment">
										<input type="hidden" value="" name="id" id="edit_id">
										<div class="form-group" id="alert_msg">
										<span class="help-block" id="msg"></span>
										</div>
								     <div class="form-group">
									    <label>Service Name</label>
										<input type="text" placeholder="" name="name" required>
									 </div>
									 <!-- custom-select -->
									 <div class="form-group">
										<!-- <label>Service Category</label> -->
									<select name="category" required>
										<option value="">Select category</option>
										@foreach(App\Models\Category::all() as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
										</div>
									  <div class="form-group">
									    <label>Service Price</label>
										<input type="text" placeholder="" name="price" required>
									 </div>
									  <div class="form-group">
									    <label>Service Total Time</label>
										<input type="text" placeholder="" name="duration">
									 </div>
									 <div class="form-group">
											<label class="btn btn-success">
													Browse <input type="file" name = "image" hidden>
											</label>
									</div>
									  <ul class="skilllist">
										     <li>
											      <div class="checkbox_area">
													  <span class="skilname">Its is a turn Service ?</span>
													  <input type="checkbox" name="type[]" id="turn_chk" value="turn">
													   <label class="box-check"></label>
												  </div>
											  </li>
											 <li>
											      <div class="checkbox_area">
													  <span class="skilname">Its is a Guarantee Service ?</span>
													  <input type="checkbox" name="type[]" id="guarantee_chk" value="guarantee">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
										</ul>
									
										<div class="form-group">
										<label>Expiration</label>
										<div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
											<input class="form-control" type="text" readonly="" name="start">
											<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
										</div>
                     </div>
									 <div class="form-group">
										<div id="datepicker4" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
											<input class="form-control" type="text" readonly="" name="end" id="end_expr">
											<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
										</div>
                     </div>
									 <div class="form-group">
											<button type="submit" class="encode_giftcard" id="loader_submit_org_">Add Service</button>
											<button class="submit_catgry submit_catgry_loader" id="loader_submit">
												<i class="fa fa-spinner fa-spin"></i><span>Adding..</span>
											</button>
										 <button type="submit" class="encode_giftcard" id="update_service">Update Service</button>
										<button type="submit" class="delet_giftcard" id="delete_service">Delete Giftcard</button>
									 </div>
								  </form>
                  </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
  
	
		<!-- <services></services> -->
	
    <!-------CREATE-CATEGORY-POPUP-WINDOW------>
	<!-- Trigger the modal with a button -->
           <!-- Modal -->
			<div id="CreateCategory" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
				     <div class="slect_categroy-pop">
					     <button type="button" class="close select_cat" data-dismiss="modal">&times;</button>
									<form id="add_category_form">
									<div class="form-group" id="alert_msg">
									<span class="help-block" id="msg"></span>
									</div>
									<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" value="" required="" title="Please enter category" placeholder="enter category Name">
											<span class="help-block"></span>
									</div>
									<div class="form-group">
											<label class="btn btn-success">
													Browse <input type="file" name = "image" hidden>
											</label>
									</div>
									<button type="submit" class="submit_catgry" id="loader_submit_org">Save</button>
									<button class="submit_catgry submit_catgry_loader" id="loader_submit">
										<i class="fa fa-spinner fa-spin"></i><span>Adding..</span>
									</button>
									</form>
					  </div>
				  </div>
				</div>
			  </div>
			</div>

			@section('javascript')
				<!-- <script src="{{asset('js/custom_select.js')}}"></script> -->
				<script>
				var token = $('meta[name=csrf-token]').attr("content");
				var baseurl = $('meta[name=baseurl]').attr("content");
				window.onload = function() {
					  axios.get(baseurl+'/getservices').then((response) => {
							let html = '';
							let turn = 'no';
							let grntee = 'no';
							$.each(response.data.detail, function( index, value ) {
								if($.inArray("turn", value.type)){
									turn = 'yes';
								}
								if($.inArray("guarantee", value.type)){
									grntee = 'yes';
								}
								html += '<tr id="'+value.id+'"><td>'+value.name+'</td><td>'+value.category.name+'</td><td>$'+value.price+'</td><td>'+value.duration+'</td><td>'+turn+'</td><td>'+grntee+'</td></tr>';
							});
							if(!html){
								$('table#select-table tbody').html('<tr><td colspan="6">No Service</td></tr>');
							}else{
								$('table#select-table tbody').html(html);
							}
						})
						.catch((error) => {
									
						})
				}
				$('form#add_category_form').on('submit', function(e){
					e.preventDefault();
					let data = new FormData(this);
					$('.submit_catgry_loader').show();
  				$('#loader_submit_org').hide();
					  axios.post(baseurl+'/addcategory', data, {
								headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {
							    $('#CreateCategory #msg').addClass('success');
									$('#CreateCategory #msg').removeClass('error');
									$('#CreateCategory #msg').text(response.data.message);
									$('.submit_catgry_loader').hide();
  								$('#loader_submit_org').show();
									
						})
						.catch((error) => {
									$('#CreateCategory #msg').addClass('error');
									$('#CreateCategory #msg').removeClass('success');
									$('#CreateCategory #msg').text(response.data.message);
									$('.submit_catgry_loader').hide();
  								$('#loader_submit_org').show();
						})
					return false;
				});
				$("form button[type=submit]").click(function() {
						$("button[type=submit]", $(this).parents("form")).removeAttr("clicked");
						$(this).attr("clicked", "true");
				});
				$('form#add_service_form').on('submit', function(e){
					e.preventDefault();
					var val = $("button[type=submit][clicked=true]").attr('id');
					if(val == 'delete_service'){
						return;
					}
					let data = new FormData(this);
					if(val =='update_service'){
						$('.submit_catgry_loader span').text('Updating..');
					}
					$('.submit_catgry_loader').show();
  				$('#loader_submit_org_').hide();
					  axios.post(baseurl+'/manageservice', data, {
								headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {
							    $('#add_service_form #msg').addClass('success');
									$('#add_service_form #msg').removeClass('error');
									$('#add_service_form #msg').text(response.data.message);
									$('.submit_catgry_loader').hide();
									
									let turn = 'no';
									let grntee = 'no';
									if($.inArray("turn", response.data.detail.type)){
										turn = 'yes';
									}
									if($.inArray("guarantee", response.data.detail.type)){
										grntee = 'yes';
									}
									if(val =='update_service'){
										$('table#select-table tbody #'+response.data.detail.id).remove();
									}else{
										$('#loader_submit_org_').show();
									}
									
									$('table#select-table tbody').append('<tr id="'+response.data.detail.id+'"><td>'+response.data.detail.name+'</td><td>'+response.data.detail.category.name+'</td><td>$'+response.data.detail.price+'</td><td>'+response.data.detail.duration+'</td><td>'+turn+'</td><td>'+grntee+'</td></tr>')
									
						})
						.catch((error) => {
									$('#add_service_form #msg').addClass('error');
									$('#add_service_form #msg').removeClass('success');
									$('#add_service_form #msg').text(response.data.message);
									$('.submit_catgry_loader').hide();
  								$('#loader_submit_org_').show();
						})
					return false;
				});

				$('#select-table tbody#san_t_body').on('click','tr',function(){
					$('#turn_chk').prop('checked', false);
					$('#guarantee_chk').prop('checked', false);
					$('.loading_').show();
					axios.get(baseurl+'/service/'+$(this).attr('id')).then((response) => {
						$('#edit_id').val(response.data.detail.id);
						if($.inArray("turn", response.data.detail.type)){
							$('#turn_chk').prop('checked', true);
						}
						if($.inArray("guarantee", response.data.detail.type)){
							$('#guarantee_chk').prop('checked', true);
						}
						// $(".datepicker").datepicker("update", new Date());
						$('#datepicker3').datepicker("update",response.data.detail.expiration.start);
						$('#datepicker4').datepicker("update",response.data.detail.expiration.end);
						$("select[name='category']").val(response.data.detail.category.id);
						$( "input[name='name']").val(response.data.detail.name);
						$( "input[name='price']").val(response.data.detail.price);
						$( "input[name='duration']").val(response.data.detail.duration);
						$('#loader_submit_org_').hide();
						$('#update_service').show();
						$('#delete_service').show();
						$('.loading_').hide();
					}).catch((error) => {})
				});

				$('#delete_service').on('click',function(){
					var id = $('#edit_id').val();
					axios.delete(baseurl+'/service/'+id).then((response) => {
						$('#select-table tbody#san_t_body #'+id).remove();
						$('#add_service_form #msg').addClass('success');
						$('#add_service_form #msg').removeClass('error');
					  $('#add_service_form #msg').text(response.data.message);
					})
				});
				</script>
			@endsection
	@endsection