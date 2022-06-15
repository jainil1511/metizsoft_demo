<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
	body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 700px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=text] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type=password] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.error{
    color: red;
}
select.form-control:not([size]):not([multiple]) {
    height: calc(3.2em + 2px);
}
</style>
</head>
<body>

  <div class="wrapper">
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
     <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
 @endif
@endforeach
    <form class="form-signin" enctype="multipart/form-data" name="frm1" id="frm1" action="{{route('register_process')}}" method="post"> 
    @csrf      
      <h2 class="form-signin-heading">Register</h2>
   

         <div class="form-group">
  <label for="demo_overview">Firstname</label>
  
      <input type="text" style="margin-bottom: 0px;" class="form-control" name="firstname" placeholder="First name" required=""/> 
  </select>
</div>

 <div class="form-group">
  <label for="demo_overview">Lastname</label>
  
      <input type="text" style="margin-bottom: 0px;" class="form-control" name="lastname" placeholder="Last name" required=""/> 
  </select>
</div>




         <div class="form-group">
  <label for="demo_overview">Email</label>
  
      <input type="email" style="margin-bottom: 0px;" class="form-control" name="email" placeholder="Email Address" required=""/> 
  </select>
</div>




         <div class="form-group">
  <label for="demo_overview">Password</label>
  
      <input type="password" style="margin-bottom: 0px;" class="form-control" name="password" placeholder="Password" required=""/> 
  </select>
</div>




   <div class="form-group">
  <label for="demo_overview">Confirm Password</label>
  <input type="password" style="margin-bottom: 0px;" class="form-control" name="confirmpassword" placeholder="Confirm Password" required=""/>
  </select>
</div>




     <div class="form-group">
    <label for="demo_overview">Phone no</label>
     <input type="number" maxlength="10" style="margin-bottom: 0px;" class="form-control" name="phone" placeholder="phone Number" required=""/>
    </select>
  </div>




  <div class="form-group">
  <label for="demo_overview">Address</label>
   <textarea name="address" class="form-control" id="address" cols="6" rows="6" placeholder="Address"required=""></textarea>
  </select>
</div>



     <div class="form-group">
  <label for="demo_overview">Country</label>
    <select id="country" name="country" class="form-control" data-role="select-dropdown" required>
   <option value="" selected>select</option>
   <option>India</option>
   <option>Pakistan</option>
   <option>Bangladesh</option>
  </select>
</div>
   <div class="form-group">
  <label for="demo_overview">State</label>
    <select id="state" name="state" class="form-control" data-role="select-dropdown" required>
   <option value="" selected>select</option>
   <option>Gujrat</option>
   <option>Lahor</option>
   <option>dhaka<option>

  </select>
</div>
    <div class="form-group">
  <label for="demo_overview">City</label>
    <select id="city" name="city" class="form-control" data-role="select-dropdown" required>
   <option value="" selected>select</option>
   <option>Ahmedabad</option>
   <option>Surat</option>
   <option>Vadodara</option>
  </select>
</div>
    
  
      <div class="form-group">
  <label for="demo_overview">Zipcode</label>
    <input type="number" class="form-control" maxlength="6" name="zipcode" id="zipcode" placeholder="Zipcode" required>
</div>
<div class="form-group">
  <label for='Color'>Gender</label>
 <p class='container'>
<label><input type='radio' name='gender' value='Male' required />&nbsp;&nbsp;&nbsp;Male</label>
<label><input type='radio' name='gender' value='Other' required/>&nbsp;&nbsp;Female</label>
<label><input type='radio' name='gender' value='Other' required/>&nbsp;&nbsp;Other</label><br>
  </p>
</div>
<div class="form-group">
  <label for='Hobbies'>Hobbies</label><br>
 
<label><input type='checkbox' name='hobbies[]' value='Games'  />&nbsp;&nbsp;&nbsp;Games</label>
<label><input type='checkbox' name='hobbies[]' value='Travelling' />&nbsp;&nbsp;Travelling</label>
<label><input type='checkbox' name='hobbies[]' value='Music' />&nbsp;&nbsp;Music</label><br>
 <label></label>
  
</div>


    <div class="form-group">
  <label for="demo_overview">Image</label>
    <input type="file" name="image" class="form-control image" id="image" required     onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
    <img id="blah" alt="your image" width="100" height="100" />
</div>
    
<button class="btn btn-lg btn-primary btn-block" type="submit"style="margin-top:20px;">Login</button>   
    </form>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
     $(document).ready(function($) {
        
                $("#frm1").validate({
                   errorPlacement: function(error, element) 
        {
             
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.container') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }

         },
              
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
    });
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</html>