<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>


</head>

<body>
<center>
  
  <h1>Laravel select dropbox using select2</h1>

  <span>Name: </span>

    <select style="width: 200px" id="nameid">
      <option></option>
      
      @foreach($datas as $d)
      <option>{{$d->title}}</option>
    @endforeach
    
    </select>
</center>


    



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#nameid").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>


</body>
</html>