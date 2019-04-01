@php($page = 'Expense')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="Expense_page">
            <div class="container-fluid">
                <div class="filter_lists row">
                    <div class="col-md-12 col-lg-8">
					        <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
					     <div class="filters_byphone expense_TopBar">
                            <div class="form-group col-md-3">
                                <label>Select Single Category</label>
                                <select>
                                    <option>Select Category</option>
                                    <option>Silver</option>
                                    <option>Gold</option>
                                    <option>Diamond</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Choose Custom Date From</label>
                                <div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <label>To</label>
                                <div id="datepicker4" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="" class="List_btn">List</a>
                            </div>

                        </div>
                    </div>
                    <div class="back-tohome col-md-12 col-lg-4 expnse-rightbtn">
                        <div class="expnse-top-btnlits">
                            <a href="index.html" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
							 <a href="javascript:void(0)" type="button"  data-toggle="modal" data-target="#CreateCategory"class="Export_btn">Create Category</a>
							        

                            <a href="report.html" class="Export_btn">Export to Excel</a>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-8">
                        <div class="appointment_summary-table genrate_customerReport table-responsive">
                            <table class="table expensetble" id="select-table">
                                <thead>
                                    <tr>
                                        <th>Date Spent</th>
                                        <th>Expense Title</th>
                                        <th>Expense Category</th>
                                        <th>$Spent</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ashely Thomans</td>
                                        <td>11-05-2019</td>
                                        <td>402-203-4587</td>
                                        <td>40-223-5682</td>
                                      

                                    </tr>
                                    <tr>
                                        <td>Ashely Thomans</td>
                                        <td>11-05-2019</td>
                                        <td>402-203-4587</td>
                                        <td>40-223-5682</td>
                                    </tr>
									 <tr>
									   <td >Total</td>
									    <td></td>
										 <td></td>
										  <td>$1750</td>
									 </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                     <div class="col-md-5 col-lg-4">
                       <div class="edit_employeee-detail row" id="open_editfield" style="display:block;">
                          <div class="Employee_Info">
                                <h3>Expense Informations</h3>
                                <form method="post" class="emp_Details expense_print_sheet">
								    <div class="form-group">
								       <label>Expense Title</label>
                                        <input type="text" placeholder="Expense Title">
                                    </div>
									<div class="form-group">
											<label>Expense Category</label>
											<select>
												<option>Select Category</option>
												<option>Silver</option>
												<option>Gold</option>
												<option>Diamond</option>
											</select>
                                     </div>
									 <div class="form-group">
								       <label>Spent</label>
                                        <input type="text" placeholder="Expense Title">
                                    </div>
									<div class="form-group">
									   
								       <label>Data Spent</label>
                                        <input type="text" placeholder="Expense Title">
                                    </div>
							<div class="form-group">
							  <h3 class="date-spent">Date Spent</h3>
                                <label>Select Date</label>
                                <div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
                                    <input class="form-control" type="text" readonly="">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
                                   
                                </form>   
                                <div class="update_btn_list">
                                    <a href="report.html" class="Export_btn add_emp">Add</a>
                                    <a href="report.html" class="Export_btn upd_emp">Update</a>
                                    <a href="report.html" class="Export_btn dele_emp">Delete</a>
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