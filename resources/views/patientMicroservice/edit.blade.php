<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form class="form-horizontal" id="edit_form" action="" method="get">
<fieldset>
<input type="hidden" name="_method" value="PUT">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="_token" class="id" value="{{ $patient->id or "" }}">
<!-- Form Name -->
{{ $patient->error or "null"}}
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="first_name">First Name</label>  
  <div class="col-md-5">
  <input id="first_name" name="first_name" type="text" placeholder="first name. . . " class="form-control input-md" value="{{ $patient->first_name or "" }}" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="last_name">Last Name</label>  
  <div class="col-md-5">
  <input id="last_name" name="last_name" type="text" placeholder="last name. . . " class="form-control input-md" value="{{ $patient->last_name or "" }}" required="">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-5">
    <input id="address" name="address" type="text" placeholder="address . . ."  value="{{ $patient->address or "" }}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="age">Age</label>  
  <div class="col-md-5">
  <input id="age" name="age" type="text" placeholder="email . . ." value="{{ $patient->age or ""}}" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>  
  <div class="col-md-5">
  <input id="gender" name="gender" type="text" placeholder="gender . . ." value="{{ $patient->gender or ""}}" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone_number">Phone Number</label>  
  <div class="col-md-5">
  <input id="phone_number" name="phone_number" type="text" placeholder="phone_number . . ." value="{{ $patient->phone_number or ""}}" class="form-control input-md" required="">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="place_of_birth">Place Of Birth</label>  
  <div class="col-md-5">
  <input id="place_of_birth" name="place_of_birth" type="text" placeholder="place_of_birth . . ." value="{{ $patient->place_of_birth or ""}}" class="form-control input-md" required="">
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save"></label>
  <div class="col-md-8">
    <button  type="submit" class="btn btn-success save">Save</button>
    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
            $(document).ready(function(){
                $(".save").click(function(e) {
                    var $row = $('.id').val();
                    console.log($row);
                    var route = "/user/" + $row;
                    console.log("route" + route);
                    $('#edit_form').attr("action",route);
                    // Let's test it out
                    $('.save').submit();
            });
            });
        </script>
</body>
</html>