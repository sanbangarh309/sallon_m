@php($page = 'Expense')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary annual-growths" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists annual_growth_warper p-3 rounded">
				      <div class="row">
						 <div class="col-12 col-md-3">
							<div class="annual-report">
								 <h2 class="p-3 rounded-top mb-0">Report Type</h2>
								   <ul class="anul-list p-0 m-0">
									 <li class="active"><a href="annual-growth.html">Annual Growth</a></li> 
									 <li><a href="annual-sale.html">Annual Sale</a></li>
									 <li><a href="annual-total.html">Total Sale</a></li>
									 <li><a href="annual-income.html">Total Income</a></li>
									 <li><a href="annual-category.html">Sell By Category</a></li>
									 <li><a href="annula-secvice.html">Sell By Service</a></li>
									 <li><a href="annual-ticket.html">Discount Tickets</a></li>
									 <li><a href="void.html">Void Ticket</a></li>
									 <li><a href="annula-batch.html">Batch Summary</a></li>
									 <li><a href="annula-product.html">Products</a></li>
									 <li><a href="annula-supplies.html">Supplies</a></li>
								  </ul>
							 </div>
							</div>
						 <div class="col-12 col-md-9">
							  <div class="annual-report row pt-3">
								 <div class="col-md-4 select_boxannula">
									  <div class="form-group">
										<select>
											<option>Select Category</option>
											<option>Silver</option>
											<option>Gold</option>
											<option>Diamond</option>
										</select>
									  </div>
								  </div>
								 <div class="col-md-8">
										 <div class="right_option  float-right">
										 <button class="print-report">Print Report</button>
										 <a href="index.html" class="Exit_btn"><i class="fas fa-home"></i></a>
										 </div>
								 </div>
								 
								 <div class="col-12 col-md-12 annual-body-content">
								        <div class="annula-graphaling">
										   <img src="images/annual-graph.png" alt="">
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