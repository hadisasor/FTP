@include('includes.header')
 
<section class="reg-sec" style="background-color:#ffffff; height:100vh; overflow-y:scroll">



    <div class="row" style="margin-top:7%; margin-left:30%; margin-bottom:2%;">
    {{-- <div class="col-xl-6">
      <div><img class="centering" src="{{asset('../../img/Yosr-02.png')}}" style="width:10cm"></div>
    </div> --}}
    <div class="col-ms-5 px-3 col-md-6">
    <form class="container-reg register"  action="store" method="post" >

        
       @if (Session::get('fail'))
        <div class="alert alert-danger">
          {{Session::get('fail')}}
        </div>

        @endif


        @csrf
     
       
 
            <div class="row mb-3 mt-2 col-9 centering">
              <label for="email" class="form-label text-start">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" >
              <span style="color: #e34646;">@error ('email') {{$message}} @enderror</span>
            </div>
            
            <div class="row mb-3 centering text-start">
              <div class="col-9">
                  <label for="fstname" class="form-label text-start">first name</label>
                  <input type="text" class="form-control" id="fstname" placeholder="Enter your firstname" name="fstname" value="{{old('fstname')}}" style="width:50%;" >
                  <span style="color: #e34646;">@error ('fstname') {{$message}} @enderror</span>
              </div>
              
              <div class="col-9 mt-2" >
                  <label for="lstname" class="form-label text-start">last name</label>
                  <input type="text" class="form-control" id="lstname" placeholder="Enter your lastname" name="lstname" value="{{old('lstname')}}" style="width:50%;" >
                  <span style="color: #e34646;">@error ('lstname') {{$message}} @enderror</span>
              </div>
            </div>

            <div class="row mb-3 col-9 centering">
              <label for="password" class="form-label text-start">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="(?=.*\d).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
              <span style="color: #e34646;">@error ('password') {{$message}} @enderror</span>

            </div>

            <div class="row mb-3 col-9 centering">
            <label for="confirm_password" class="form-label text-start">Confirm password:</label>
            <input type="password" class="form-control" id="confirm_pwd" placeholder="Confirm password" name="confirm_password">
            <span style="color: #e34646;">@error ('password'){{'password conformation is required'}} @enderror</span>
            </div>    
            

            <div class="row mb-3 col-9 centering">
                <label for="phone" class="form-label text-start">phone number:</label>
                <input type="number" class="form-control" id="phone" placeholder="enter phone number" name="phone" value="{{old('phone')}}">
                <span style="color: #e34646;">@error ('phone') {{$message}} @enderror</span>
              </div>

          <div class="row" style="margin-left: auto; margin-right:auto; align-content:center;">
            <div class="col-lg-3" style=" margin-left: auto; margin-right:auto; align-content:center;" >
              <input  class="form-check-input" type="radio" name="userType" value="Pilgrim">
              <label>Pilgrim</label>
            </div>
            <div class="col-lg-3" style=" margin-left: auto; margin-right:auto; align-content:center;">
              <input class="form-check-input" type="radio" name="userType" value="Tokseh">
              <label>Tokseh</label>
            </div>
            <div class="col-lg-3" style=" margin-left: auto; margin-right:auto; align-content:center;">
              <input class="form-check-input" type="radio" name="userType" value="Admin">
              <label>Admin</label>
            </div>
          </div>

            <br>
            <button type="submit" class="btn-get-started mb-2">signup</button>
            <a href="/login">already have an account?</a>
        
    </form>  
    </div>  
   </div>
   
    <script>


        var password = document.getElementById("password");
   var confirm_password = document.getElementById("confirm_pwd");
  phonenum = document.getElementById("phone");


function validatePassword(){
//pass conformation -------------------------------
  if(password.value == confirm_password.value) {
    confirm_password.setCustomValidity('');
  } else {
    confirm_password.setCustomValidity("Passwords Don't Match");
   
}



if(phonenum.length == 10){
  
} else if (phonenum.value.length != 10) {
  
phonenum.setCustomValidity("Not 10 digit");
}

phonenum.onchange= validateNumber;
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

// //pass length -------------------------------
//     if(password.value.length < 8){
//     password.setCustomValidity("password at least should be 8 character or more");
// }else if(password.value.length > 8){  
//     confirm_password.setCustomValidity('');
//  }

 
//10 phone number digit -------------------------------
}




    </script>


</section>