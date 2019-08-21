<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css') }}" />
<link href="{{ asset ('fonts/backend_fonts/css/font-awesome.css" rel="stylesheet') }}" />
<link rel="stylesheet" href="{{asset ('css/backend_css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  @include('layouts.adminlayout.admin_header')
@include('layouts.adminlayout.admin_sidebar')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Settings</a> </div>
    <h1>Admin Settings</h1>
     @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block ">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_error') !!}</strong>
            
        </div>

        @endif  
          @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block ">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_success') !!}</strong>
            
        </div>

        @endif  
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Update Password</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{url('/admin/update-pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate">
                 {{csrf_field()}}
                <div class="control-group">
                  <label class="control-label">Current Password</label>
                  <div class="controls">
                    <input type="password" name="current_pwd" id="current_pwd" />
                    <span id="chkPwd"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">New Nassword</label>
                  <div class="controls">
                    <input type="password" name="new_pwd" id="new_pwd" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Confirm Password</label>
                  <div class="controls">
                    <input type="password" name="confirm_pwd" id="confirm_pwd" />
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Update password" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!--end-Footer-part-->
<script src="{{asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{asset('js/backend_js/matrix.form_validation.js') }}"></script>
</body>
</html>
