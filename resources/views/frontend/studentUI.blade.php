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
               <h1>Course Listing</h1>
           <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
               <form action="/search" method="GET">
                    <input type="text" name="search" placeholder="Search..">
                         <input type="submit" class="searchBtn" id="searchBtn" value="Search">
                 </form>
                   </div>
               </div>
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        
        @foreach ($files as $i )
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
