<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/teacherClass2.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    
    
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
                            <option value="date">Date</option>
                            <option value="time">Time</option>
                         </select>
                        <input type="submit" name="searchBtn" id="searchBtn" value="Search">

                        @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                   
                </form>
                    <!-- Trigger/Open The Modal -->
                   <button id="myBtn" class="addbtn">First Course Reservation</button>
                   </div>
               </div>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header">
                        <span class="close">&times;</span>
                        <form action="{{ url('class-reservation') }}" class="form-container" method="POST">

                            @csrf
                        <h1>Add New Classes</h1>

                        <label for="class-title" style="color:black;"><b>Class Title:</b></label>
                        <input type="text" name="sname" placeholder="Enter the class title.." id="class-title" required><br>

                        <label for="class-title" style="color:black;"><b>Email:</b></label>
                        <input type="email" name="email" placeholder="Enter the Email" id="class-title" required><br>

                        <label for="class-seat" style="color:black;"><b> Course Name 1:</b></label>
                        <select style="width: 200px" name="courseone"  id="nameid">
                          <option></option>

                          
                          
                            <option>Name</option>

                           
                        
                        </select>

                        
  <br>
  <br>
  

                       

                        <label for="class-seat" style="color:black;"><b> Class ID:</b></label>
                        <input type="number" name ="subject_id" placeholder="Enter Class ID" id="class-seat" ><br>

                        <div class="buttonAction" id="class-end-time">
                        <button type="submit" class="btn add" onclick="myFunction()">Add</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                        </div>
                        </form>
                        </div>
                        </div></div>
                        <!-- if successful added pop out this message -->
                        <div id="snackbar">Class has been successfully added.</div>


                        
      
      
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        @foreach ($data as $i )
        <button class="button1">
            <div class="className-dropdownIcon-container">
                <div class="className">{{ $i -> title }}</div>
                <div class="dropdown">
                
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

<script type="text/javascript">

    $("#nameid").select2({
          placeholder: "Select a Name",
          allowClear: true
      });

      
</script>

</body>
</html> 
<script src="{{ asset('/assets/newClassForm.js') }}"></script>

