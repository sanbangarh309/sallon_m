var token = $('meta[name=csrf-token]').attr("content");
var baseurl = $('meta[name=baseurl]').attr("content");
  //// selet-table and append edit update data js
  $('#select-table').on('click', 'tbody tr', function(event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
        });
		
///application datepicker js
 $(function () {
		  $(".datepicker").datepicker({ 
				autoclose: true, 
				// todayHighlight: true,
			});
			// .datepicker('update', new Date())
	  });	
	  
//// selet-table and append edit update data js 
	$('#select-table').on('click', 'tbody tr', function(event) {
		$(this).addClass('highlight').siblings().removeClass('highlight');
		$('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
	});

	$('form#login_form').on('submit', function(e){
		e.preventDefault();
		var data = $(this).serialize();
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': token
			},
			type : "POST",
			url  : baseurl+'/login',
			data : $(this).serialize(),
			cache : false,
			success  : function(data) {
				if (typeof data == 'string' || data instanceof String) {
					$('#reg_msg_block').hide();
					$('#reg_msg_block_success').show();
					$('#reg_msg_block_success').text('User Logged in Successfully..');
					setTimeout(function(){ window.location.href = data; }, 1000);
				}else{
					$('#reg_msg_block_success').hide();
					$('#reg_msg_block').show();
					$("#customer_register").animate({ scrollTop: 0 }, "slow");
					$('#reg_msg_block').text(data.message);
				}
			}
		})
		return false;
	});