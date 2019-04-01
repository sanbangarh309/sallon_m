@php($page = 'Employee Management')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row">
				         <div class="col-md-12">
						         <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
								  <div class="filters_byphone">
								    <a href="{{route('temps','technician')}}" class="Export_btn">Technician</a>
									<a href="report.html" class="Export_btn">Receptionist</a>
									<a href="report.html" class="Export_btn">Sale Associate</a>
									<a href="report.html" class="Export_btn">Manager</a>
									<a href="report.html" class="Export_btn">Schedule</a>
							     </div>
								  <div class="back-tohome float-right">
									 <a href="report.html" class="Export_btn">Print Schedule</a>
									 <a href="report.html" class="Export_btn">Save</a>
									 <a href="{{url('/')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
								 </div>
					     </div>
					     <div class="col-md-4">
							   <div class="Selected_employess_list">
								 <div class="employee_name">
									<h2>Name</h2>
								 </div>
									<ul class="employee_list-blck">
									   <li><a href="">Vicky Nguyen</a></li>
									   <li><a href="">Lisa Ngo</a></li>
									   <li><a href="">Khai Phan</a></li>
										<li><a href="">Lisa Ngo</a></li>
										 <li><a href="">Vicky Nguyen</a></li>
									   <li><a href="">Lisa Ngo</a></li>
									   <li><a href="">Khai Phan</a></li>
										<li><a href="">Lisa Ngo</a></li>
										 <li><a href="">Vicky Nguyen</a></li>
									   <li><a href="">Lisa Ngo</a></li>
									</ul>	
							   </div>
					     </div>
					     <div class="col-md-8">
						     <div class="appointment_summary-table genrate_customerReport table-responsive">
							    <table class="table" id="select-table">
									<thead>
										<tr>
											<th>Customer Name</th>
											<th>Phone#</th>
											<th>Since</th>
											<th>#Visit</th>
											<th>Total spent </th>
											<th>Reward point</th>
											<th>Reward level</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
										   <tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
										 <tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
									   
										<tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
										 <tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
										 <tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
										 <tr>
											<td>Ashely Thomans</td>
											<td>402-203-4587</td>
											<td>11-05-2019</td>
											<td>50</td>
											<td>$15000</td>
											<td>350</td>
											<td>Gold</td>
										</tr>
									</tbody>
								 </table>
							 </div>
					    </div>
				</div>
				</div>
			 </div>
        </div>
    </div>
 </div>
</div>
@endsection