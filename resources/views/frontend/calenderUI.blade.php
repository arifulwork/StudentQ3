<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/calendarClass.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
       <div class="context">
           <div class="big-back-class-container">
           <div class="back-class-container">
           <a href="/"><i class="fa-solid fa-circle-arrow-left"></i></a>
               <h1>Class Schedule</h1></div></div>
           <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
                
               <form id="form">
                   <input type="text" name="search" placeholder="Search..">
                         <select name="classDetail" id="classDetail">
                            <option value="className">Class Name</option>
                            <option value="date">Date</option>
                            <option value="time">Time</option>
                         </select>
                        <input type="submit" name="searchBtn" id="searchBtn" value="Search">
                   
                </form>
                   
                   </div>
               </div>
           <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header">
                        <span class="close">&times;</span>
                        @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                        <form action="{{ url('class-reservation') }}" class="form-container" method="POST">
                            @csrf
                        <h1>Student Information</h1>

                        <label for="class-title" style="color:black;"><b>Student Name:</b></label>
                        <input type="text" placeholder="Enter Your Name.." name="sname" id="class-title" required><br>
                        <br >
                        <label for="class-title" style="color:black;"><b>Student Email:</b></label>
                        <input type="text" placeholder="Enter Your Email.." name="email" id="class-title" required>
                        <br >
                        <label for="class-title" style="color:black;"><b>Course 1:</b></label>
                        <input type="text" placeholder="Enter Your Email.." name="courseone" id="class-title" required>
                        <br >
                        <label for="class-title" style="color:black;"><b>Course 2</b></label>
                        <input type="text" placeholder="Enter Your Email.." name="coursetwo" id="class-title" required>
                        <div class="buttonAction" id="class-end-time">
                        <button type="submit" class="btn add" onclick="myFunction()">Confirm Select</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                        </div>
                        </form>
                        </div>
                        </div></div>
                        <!-- if successful added pop out this message -->
                        <div id="snackbar">Remember to fill up your Name and Email</div>
           
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        @foreach ($data as $i )
        <button class="button1">
            <div class="className-dropdownIcon-container">
                <div class="className">{{ $i -> title }}</div>
            </div>
            <div class="big-date-time-container">
                <div class="date-time-container">
                    <div class="class-date">{{ $i -> date }}</div>
                    <div class="class-time">{{ $i -> starttime }}- {{ $i -> endtime }}</div>
                </div>
                <div class="seat-select-container">
                    <div class="seat">10/30&nbsp;seat</div>
                    <input type="submit" id="myBtn" class="selectbtn" value="Select" onclick='modal.style.display = "block"'>
                    
                </div>
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
<script src="{{ asset('/assets/newClassForm.js') }}"></script>


