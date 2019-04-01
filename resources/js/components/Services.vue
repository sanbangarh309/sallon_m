<template>
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
					 <!-- <example-component></example-component> -->
                        <div class="appointment_summary-table genrate_customerReport table-responsive">
                            <table class="table" id="select-table">
                                <thead>
                                     <tr>
									   <th>Service Name</th>
									   <th>Category</th>
									   <th>Price</th>
									   <th>Time</th>
                                       <th>Turn</th>
                                       <th>Guarantee</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Classic Manicure </td>
                                        <td>Manicure</td>
                                        <td>$25</td>
										<td>30</td>
										<td>Yes</td>
                                        <td>Yes</td>
									 </tr>
                                    <tr>
									   <td>Classic Manicure </td>
                                        <td>Manicure</td>
                                        <td>$25</td>
										<td>30</td>
										<td>Yes</td>
                                        <td>Yes</td>
									</tr>
								</tbody>
                            </table>
                         </div>
                    </div>
					<div class="col-md-5 col-lg-3 p-r-0">
                       <div class="edit_employeee-detail row" id="open_editfield" style="display:block;">
                          <div class="Employee_Info giftcard_detail-info">
                                <h3>Service Informations</h3>
								  <form method="post" class="giftcard-summary inventory_mangment">
								     <div class="form-group">
									    <label>Service Name</label>
										<input type="text" placeholder="">
									 </div>
									 <div class="form-group">
									    <label>Service Category</label>
										<input type="text" placeholder="">
									 </div>
									  <div class="form-group">
									    <label>Service Price</label>
										<input type="text" placeholder="">
									 </div>
									  <div class="form-group">
									    <label>Service Total Time</label>
										<input type="text" placeholder="">
									 </div>
									  <ul class="skilllist">
										     <li>
											      <div class="checkbox_area">
													  <span class="skilname">Its is a turn Service ?</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												  </div>
											  </li>
											 <li>
											      <div class="checkbox_area">
													  <span class="skilname">Its is a Guarantee Service ?</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
										</ul>
									
									   <div class="form-group">
									    <label>Expiration</label>
										<input type="text" placeholder="">
									 </div>
									 <div class="form-group">
										<div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
											<input class="form-control" type="text" readonly="">
											<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
										</div>
                     </div>
									 <div class="form-group">
									    <button class="encode_giftcard">Add Service</button>
										 <button class="encode_giftcard">Update Service</button>
										<button class="delet_giftcard">Delete Giftcard</button>
									 </div>
								  </form>
                  </div>
                        </div>
                      </div>
                </div>
            </div>
                      </template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>