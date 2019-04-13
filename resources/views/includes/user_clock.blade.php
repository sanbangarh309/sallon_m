@php($page = 'Clock In')
@extends('layouts.app')
@section('main-content')
<div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
     <div class="employeclock-in">
        <div class="container">
		   <div class="row">
		       <div class="col-md-12">
			       <div class="dialing-padd">
								<h2>{{ucfirst($user_type)}} Clock In/Out</h2>
								<span id="block_msgs" style="display:none;"><h2></h2></span>
						<form method="post" class="dila-keyword">
						    <div class="form-group">
							   <label>Please Enter your phone Number</label>
							   <input type="text" placeholder="(xxx)-xxx-xxxx" id="mobile_pad">
							</div>
							
							<ul class="input-key">
							   <li>
							    <div class="input-key-list">
								  <input type="button" value="1" class="fill_number">
								  <label class="check-value">1</label>
								</div>
								</li>
								 <li>
							    <div class="input-key-list">
								  <input type="button" value="2" class="fill_number">
								  <label class="check-value">2</label>
								</div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="3" class="fill_number">
								   <label class="check-value">3</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="4" class="fill_number">
								   <label class="check-value">4</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="5" class="fill_number">
								   <label class="check-value">5</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="6" class="fill_number">
								   <label class="check-value">6</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="7" class="fill_number">
								   <label class="check-value">7</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="8" class="fill_number">
								   <label class="check-value">8</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="9" class="fill_number">
								   <label class="check-value">9</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								 <input type="button" value="+" class="fill_number">
								  <label class="check-value">+</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <input type="button" value="0">
								   <label class="check-value">0</label>
								 </div>
								</li>
								<li>
								 <div class="input-key-list">
								   <button type="button" class="dial-keypadsbmit" id="submit_btn_"><span class="dial-kicn"><i class="fas fa-check"></i></span></button>
								 </div>
								</li>
							</ul>
						</form>
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
let mobile_pad  = '';
$('#submit_btn_').on('click',function(){
	$('.loading_').show();
	let mobile_no = $('#mobile_pad').val();
	axios.post("{{route('chk_mobile')}}", {'mobile':mobile_no,'type':'{{$user_type}}'}, {
		headers: {
			'X-CSRF-TOKEN': token
		}
	}).then((response) => {
			if(response.data.success){
				$('#block_msgs').show();
				$('#block_msgs h2').css('color','green');
				$('#block_msgs h2').text(response.data.message);
				$('.loading_').hide();
				setTimeout(function(){ window.location.href = response.data.redirect_uri; }, 3000);
			}else{
				$('#block_msgs').show();
				$('#block_msgs h2').css('color','red');
				$('#block_msgs h2').text(response.data.message);
				$('.loading_').hide();
			}
	})
	.catch((error) => {

	});

	// $('.fill_number').each(function( index ) {
	// 	if($(this).prop("checked") == true){
	// 		  mobile_pad += $( this ).val();
	// 	}
	// });
});
$('.fill_number').on('click',function(){
	mobile_pad += $( this ).val();
	$('#mobile_pad').val(mobile_pad);
});

</script>
@endsection
@endsection