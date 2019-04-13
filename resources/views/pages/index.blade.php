@php($page = 'home')
@extends('layouts.app')
@section('main-content')
     <div class="Saloon_web_wrapper landing-screen" data-parallax="scroll" style="background:url({{url('public/provider/images/salon_bg2.png')}});">
       <header> <!--HEADER-START-HERE--> 
	      <div class="app_navbar navbar_light">
		      <div class="container">
			     <div class="row">
				    <div class="col-md-3">
					   <div class="brand_logo">
					     <a href=""><img src="{{url('public/provider/images/saloon_logo.png')}}" alt="brand_name" style=""></a>
					   </div>
					</div>
					 <div class="col-md-9">
					   <div class="salon_adress">
					     <ul class="float-right">
						   <li class="list-inline-item">
						     <div class="adress_line">
							    <h4>3157 Farnam St #7110</h4>
								<h4>Omaha,NE 68131</h4>
								<h4>(402)991-7676</h4>
							 </div>
						   </li>
						   <li class="list-inline-item">
						      <div class="adress_line">
							    <h4>Total  Customers: 3500</h4>
								<h4>Total  Employees:</h4>
								<h4>(402)991-7676</h4>
							 </div>
						   </li>
						   <li class="list-inline-item">
						   <a href="{{route('providerlogout')}}">
                                <p>Log out</p>
                            </a>
						   </li>
						   </ul>
					   </div>
					</div>
				 </div>
			  </div>
		  </div>
       </header><!--HEADER-CLOSE-HERE-->  
	   
	   <div class="sallon_body_content"><!--SALLON-BODY-CONTENT-START-HERE-->  
	       <div class="container">
		         <div class="row">
			        <div class="col col-md-12 col-lg-12">
					    <ul class="sallon_feature_list">
							@foreach($modules as $module)
								@if(in_array($module['name'],$ownmodules))
								@php($name = $module['label'])
								@php($img = $module['image'])
									<li><a href="{{route('template',$module['name'])}}">
										<span class="appont_img"><img src="{{url('public/provider/images/'.trim($img))}}" alt="{{$name}}"></span>
										<h2>{{$name}}</h2>
										</a>
									</li>
								@endif
							@endforeach
						</ul>
					</div>
			     </div>
		   </div>
	   </div><!--SALLON-BODY-CONTENT-CLOSE-HERE--> 
    </div>
	@endsection