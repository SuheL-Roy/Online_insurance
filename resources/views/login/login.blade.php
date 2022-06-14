<!doctype html>
<html class="no-js" lang="zxx">



<body>
   
@include('parts.header');

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>

     <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Log In</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="login">




    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                @if(Session::has('message'))
                    <p class="alert alert-danger">{{ Session::get('message') }}</p>
                @endif
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('logindo')}}" method="post">
                        @csrf()
                      <br><br><br><br>
                        <div class="form-group">
                            <label for="email" class="text-info">User Email:</label><br>
                            <input placeholder="Enter Email" required type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input placeholder="Enter Password" required type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <div id="register-link" class="text-right">
                            <a href="{{route('serviceroute')}}" class="text-info">Take your policy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('parts.footer');
  
  
</body>

</html>