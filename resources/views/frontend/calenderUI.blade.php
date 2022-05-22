<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/teacherClass2.css') }}">


</head>
<body>
  <div class="context">
      <div class="big-back-class-container">
           <div class="back-class-container">
           <a href="teacherUI.html"><i class="fa-solid fa-circle-arrow-left"></i></a>
               <h1>Class Schedule</h1></div></div>
      <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
               <form>
                   <input type="text" name="search" placeholder="Search..">
                         <select name="classDetail" id="classDetail">
                            <option value="className">Class Name</option>
                         </select>
                        <input type="submit" name="searchBtn" id="searchBtn" value="Search">
                   
                </form>
               <br/>
                    <!-- Trigger/Open The Modal -->
                    <form method="get" action="/firstreservtion">
                  <button  id="myBtn" class="addbtn">First Class</button> 
                </form>
            </form>
            <!-- Trigger/Open The Modal -->
            <form method="get" action="/secondreservtion">
          <button  id="myBtn" class="addbtn">Second Class</button> 
        </form>
                
                   </div>
                   
               </div>
                       
      
      
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        @foreach ($data as $i )
        <button class="button1">
            <div class="className-dropdownIcon-container">
                <div class="className">{{ $i -> title }}</div>
                <div class="dropdown">
                <div class="dropdownIcon">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <div class="dropdown-content">
                        <a href="">Export Class Information</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="big-date-time-container">
                <div class="date-time-container">
                    <div class="class-date">Saturday, 29/1/22</div>
                    <div class="class-time">7am - 9pm</div>
                </div>
                <div class="seat">10/30 seat</div>
            </div>
        </button>
        
        
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
<script src="newClassForm.js"></script>