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
								    <a href="{{route('temps',['slug'=>'employees','type'=>'technician'])}}" class="Export_btn">Technician</a>
									<a href="{{route('temps',['slug'=>'employees','type'=>'receptionist'])}}" class="Export_btn">Receptionist</a>
									<a href="{{route('temps',['slug'=>'employees','type'=>'sales'])}}" class="Export_btn">Sale Associate</a>
									<a href="{{route('temps',['slug'=>'employees','type'=>'manager'])}}" class="Export_btn">Manager</a>
									<a href="{{route('temps',['slug'=>'employees','type'=>'schedule'])}}" class="Export_btn">Schedule</a>
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
						     <div class="appointment_summary-table genrate_customerReport table-responsive" id="table_technician">
							 	@include('includes.employee_management_list')
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
   <script type="text/javascript">
	 			var token = $('meta[name=csrf-token]').attr("content");
				var baseurl = $('meta[name=baseurl]').attr("content");
				let user_type = '{{$user_type}}';

				$('body').on('click', '.pagination a', function(e) {
					e.preventDefault();
					$('.loading_').show();
					var url = $(this).attr('href');
					getEmployees(url);
					window.history.pushState("", "", url);
				});
				
				function getEmployees(url){
					    axios.post(url).then((response) => {
							let html = '';
							$('#table_technician').html(response.data.list_html);
							$('.loading_').hide();
						})
						.catch((error) => {
									
						})
				}
				</script>
@endsection
@endsection