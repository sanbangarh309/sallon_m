<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <style type="text/css">
    .body-wrap{max-width:600px; margin:0 auto; font-family:"Helvetica", Arial, sans-serif; position:relative; border-collapse:collapse;}
    </style>
 </head>
<body style="width: 100% !important;height: 100%;background: #f8f8f8;margin: 0;padding: 0; " >
<table class="body-wrap" style=""  border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td class="container" style="margin:0 padding:0;">

            <!-- Message start -->
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">

<tr>
                    <td align="center" class="masthead" style="color:#000; background:#000 url({{ asset('images/top-banner.jpg') }}); background-size: cover; background-position:center center; position:relative;" border="0">
            <div style="width:100%;">
              <span style="text-align: left;  z-index: 1;  text-align: left;float: left;  width:100%;"><img src="{{ asset('images/logo.jpg') }}" class="logo-img" alt=""></span>
              <div style="width: 100%; padding: 80px 0px; position:relative;">
                <h2 style="margin: 0 auto !important;max-width: 90%;font-weight:400;letter-spacing:2px; text-transform:uppercase; color:#000;">Provider register Successfully.</h2>
              </div>
            </div>
          </td>
                </tr>
                <tr>
                    <td class="content" style="background: url({{ asset('images/main-bg.jpg') }}); background-size: cover; background-position:center center;  padding: 30px 35px;" border="0">
            <div class="inner-box" style="border: solid 1px #ccc;padding: 5%;background:url({{ asset('images/sml-icon.png') }}); background-repeat:no-repeat; background-position:right bottom;">
              <h4 style="color: #eee;">Hi,{{$data->name}}</h4>
              <p>Email:- <strong>{{$data->email}}</strong></p></br>
              <p>Password:- <strong>{{$data->password}}</strong></p></br>
<!-- <p style="color: #eee; font-style:italic;">Click on below link to activate your Account</p>
<p style="color: #eee; font-style:italic;"><a target="_blank" href="{{url($data->locale.'/activate_user/'.$data->user_id.'/'.$data->key)}}">Activate</a></p> -->
             
              <p style="margin:35px 0;color: #eee; ">
                Thanks<br>Sallon Team
              </p>
                        </div>        

                        

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr style="margin:0; padding:0;">
        <td class="container" style="width:100%;background:#000 url({{ asset('images/footer-bg.jpg') }}); background-size: cover; background-position:center center; padding:55px 35px 30px;" border="0" >

            <!-- Message start -->
            <table style="width:100%;"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="content footer" style="background:#transparent; font-size:13px; margin:0;" border="0">
            <h5 style="color:#7e7e7e; margin:12px 0;">ABOUT Sallon</h5>
                         <p style="color:#7e7e7e; margin:0; font-size:12px;">Sallon is the online destination for beauty & wellness professionals and clients. Professionals can showcase their work, connect with new and existing clients, & build their business. Clients can discover new services and providers, book appointments online, and get inspired.</p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
  <tr style="margin:0; padding:0;">
    <td class="container" style="background:#0e0e0e; border:none;">
      <div class="foot-panel" style="width: 100%;border-top: solid 1px #ccc;padding: 15px 0;float: left;">
        <p style="float: left;padding: 0;margin: 0 0 0 6%;color:#bc883f;font-size: 13px;">@test. All rights reserved.</p>
      </div>
    </td>
  </tr>
</table>
</body>
</html>