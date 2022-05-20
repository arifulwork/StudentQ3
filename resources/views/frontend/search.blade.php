<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/studentClass.css') }}">
    
</head>
<body>
       <div class="context">
               <h1>Course Search Listing</h1>
           <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
               
                   </div>
               </div>
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        
        @foreach ($posts as $i )
        <a href="/classschedule/{{ $i['course_id'] }}" name="title" class="button1"><div class="className">{{ $i -> title }}</div></a>
        
        @endforeach
        
    </div>
    </div>
    </div>
    </div>
    
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div>
</body>
</html> 
