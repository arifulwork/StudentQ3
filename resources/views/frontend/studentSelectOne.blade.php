<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/selectCourse.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    
</head>
    
<body>
    
  
    <div class="d-flex flex-column justify-content-center w-100 h-100">
	<div class="d-flex flex-column justify-content-center align-items-center">
    
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
		<div class="bigContainer">
            <form action="{{ url('class-reservation') }}" class="form-container" method="POST">
    @csrf
     <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label form-label">Student Name:</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control-plaintext form-label" name="sname" id="staticEmail" style="border:1px solid white; color:white;" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label form-label">Student Email:</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control-plaintext form-label" name="email" id="email" style="border:1px solid white; color:white;" value="">
    </div>
  </div>
    
    <div class="form-group row">
        <label for="Course1" class="col-sm-3 col-form-label form-label">Class Selection:</label>
        <div class="col-sm-9">
            <div class="course">
                <select style="width: 80%; margin-top:2%;" name="courseone" id="nameid" id="class-date">
                    <option></option>

                    @foreach($datas as $d)
      <option>{{$d->title}}</option>
    @endforeach
                    
                </select>
            </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label form-label">Group Name:</label>
        <div class="col-sm-9">
          <input type="number"  class="form-control-plaintext form-label" name="subject_id" id="staticEmail" style="border:1px solid white; color:white;" value="">
        </div>
      </div>

      
    
    <div class="btn-container">
    <a href="/" class="cancel-Btn" style="text-decoration: none; text-align: center;">Cancel</a>
    <button type="submit" id="register"  class="edit-Btn">Confirm Select</button>
    </div>
</form>
    </div>
	</div>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
      $("#nameid").select2({
            placeholder: "Select Your Subject",
            allowClear: true
        });
</script>

<script>
  $(document).ready(function(){
  
   $('#email').blur(function(){
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(email))
    {    
     $('#error_email').html('<label class="text-danger">Invalid Email</label>');
     $('#email').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
    }
    else
    {
     $.ajax({
      url:"{{ route('available.check') }}",
      method:"POST",
      data:{email:email, _token:_token},
      success:function(result)
      {
       if(result == 'unique')
       {
        $('#error_email').html('<label class="text-success">Email Available</label>');
        $('#email').removeClass('has-error');
        $('#register').attr('disabled', false);
       }
       else
       {
        $('#error_email').html('<label class="text-danger">Email not Available</label>');
        $('#email').addClass('has-error');
        $('#register').attr('disabled', 'disabled');
       }
      }
     })
    }
   });
   
  });
  </script>
</body>
</html> 