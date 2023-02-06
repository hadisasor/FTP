<section class="reg-sec" style="background-color:#f3f5fa">



    <div class="row" style="margin-top:7%; margin-left:30%; margin-bottom:2%;">
    
    <div class="col-ms-5 px-3 col-md-6">
    <form class="container-reg register"  action="store" method="post" >
            <div class="row mb-3 mt-2 col-9 centering">
              <label for="email" class="form-label text-start">ID Number:</label>
              <input type="email" class="form-control" id="email" placeholder="ID Number" value="" >
              <span style="color: #e34646;"></span>
            </div>
            
            <div class="row mb-3 centering text-start">
              <div class="col-9">
                  <label for="fstname" class="form-label text-start">first name</label>
                  <input type="text" class="form-control" id="fstname" placeholder="Enter your firstname" name="fstname" value="" style="width:50%;" >
                  <span style="color: #e34646;"></span>
              </div>
              
              <div class="col-9 mt-2" >
                  <label for="lstname" class="form-label text-start">last name</label>
                  <input type="text" class="form-control" id="lstname" placeholder="Enter your lastname" name="lstname" value="" style="width:50%;" >
                  <span style="color: #e34646;"></span>
              </div>
            </div>

            <div class="row mb-3 col-9 centering">
              <label for="password" class="form-label text-start">Passport:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Passport" name="password" pattern="(?=.*\d).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
              <span style="color: #e34646;"></span>

            </div>

            <div class="row mb-3 col-9 centering">
            <label for="confirm_password" class="form-label text-start">Reason</label>
            <input type="password" class="form-control" id="confirm_pwd" placeholder="Reason" name="confirm_password">
            <span style="color: #e34646;"></span>
            </div>    
            

            <div class="row mb-3 col-9 centering">
                <label for="phone" class="form-label text-start">phone number:</label>
                <input type="number" class="form-control" id="phone" placeholder="enter phone number" name="phone" value="">
                <span style="color: #e34646;"></span>
              </div>
            <br>
            <button type="submit" class="btn-get-started mb-4">Confirm</button>
    </form>  
    </div>  
   </div>
</section>