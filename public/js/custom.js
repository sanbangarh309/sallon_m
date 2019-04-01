var token = $('#csrf_token').val();
var url =  $('#ajax_url').val();
/* Login Form Submission */
$('form#login_form').on('submit', function(e){
  e.preventDefault();
  var data = $(this).serialize();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    type : "POST",
    url  : $('#ajax_url').val()+'/login',
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
/* Provider Form Submission */
$('form#add_provider').on('submit', function(e){
  e.preventDefault();
  $('.buttonload').show();
  $('#add_btn_provider').hide();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    type : "POST",
    url  : $('#ajax_url').val()+'/providers',
    data : new FormData(this),
    cache : false,
    contentType: false,
    processData: false,
    success  : function(data) {
      $(".modal-content").scrollTop(0);
      $('#reg_msg_block_success').show();
      $('#reg_msg_block_success').text(data.message);
      $('.buttonload').hide();
      $('#add_btn_provider').show();
      $('table#provider_list tbody').append('<tr><td><img src="'+data.detail.avatar+'" style="width:100px" alt="No Image"></td><td>'+data.detail.name+'</td><td>'+data.detail.email+'</td><td>'+data.detail.address+'</td><td><a href="javascript:void(0)" id="'+data.detail.id+'" class="edit_provider"><i class="fa fa-circle-o-notch fa-spin"></i><i class="fa fa-edit"></i></a><a href="'+url+'/providers/del/'+data.detail.id+'" id="'+data.detail.id+'" class="delete_provider"><i class="fa fa-trash" aria-hidden="true"></i></a><a href="'+url+'/dashboard/'+data.detail.id+'" target="_blank" class="delete_provider"><i class="fa fa-eye"></i></i></a></td></tr>')
      $('#add_provider_modal').modal('hide');
    }
  })
  return false;
});

$('form').on('submit','#edit_provider', function(e){
  e.preventDefault();
  $('.buttonload').show();
  $('#submit_btn').hide();
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    type : "POST",
    url  : $('#ajax_url').val()+'/providers/update',
    data : new FormData(this),
    cache : false,
    contentType: false,
    processData: false,
    success  : function(data) {
      $(".modal-content").scrollTop(0);
      $('#reg_msg_block_success').show();
      $('.buttonload').hide();
      $('#submit_btn').show();
      $('#reg_msg_block_success').text(data.message);
      $('#edit_provider_modal').modal('hide');
    }
  })
  return false;
});

$('#provider_list').on('click','.edit_provider',function(e){
  e.preventDefault();
  var crnt = this;
  $(this).find('.fa-circle-o-notch').show();
  $(this).find('.fa-edit').hide();
  var id = $(this).attr('id');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': token
    },
    type : "GET",
    url  : $('#ajax_url').val()+'/providers/'+id,
    cache : false,
    success  : function(data) {
      $('body.provider').find('#edit_provider_modal').remove();
      $('body.provider #bootstrap_models').append(data.provider_html);
      $('#edit_provider_modal').modal('show');
      $(crnt).find('.fa-circle-o-notch').hide();
      $(crnt).find('.fa-edit').show();
      
      // $('#reg_msg_block_success').show();
      // $('#reg_msg_block_success').text(data.message);
      // $('table#provider_list tbody').append('<tr><td>'+data.detail.name+'</td><td>'+data.detail.email+'</td><td>'+data.detail.address+'</td><td>Actions</td></tr>')
    }
  })
});