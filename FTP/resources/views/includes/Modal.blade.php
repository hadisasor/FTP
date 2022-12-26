@php 
$url = URL::current();
$url = strstr($url,'hajj');
$url =preg_replace('/[^a-zA-Z\']/', "", $url );
//  return dd($route);
@endphp 

<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog centering">
      <div class="modal-content px-3">
        <div class="modal-header">
          @if (auth()->user())
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Re-confirm your data</h1>
          <button type="button" class=" btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
       
        <form class="px-5" action="/create-checkout-session" method="post">
          @csrf
          <div class="modal-body">
            
            <div class="row">  
           <div class="col-xl-6">
              <div class="form-floating mb-3">
              <input type="text" class=" form-control" id="firstname" name="firstname" value="{{auth()->user()->fstname}}" placeholder="first name">
              <label for="firstname" style="color: gray">  first name</label>
              </div>
            </div>

            <div class="col-xl-6"> 
              <div class="form-floating mb-3">
              <input type="text" class=" form-control" id="lastname" name="lastname" value="{{auth()->user()->lstname}}" placeholder="last name">
              <label for="lastname" style="color: gray">  last name</label>
              </div>
            </div> 
          </div>
  
          <div class="row"> 
            <div class="col-xl-6">
              <div class="form-floating mb-3">
              <input type="text" class=" form-control" id="phone" name="phone" value="{{auth()->user()->phone}}" placeholder="Phone number">
              <label for="phone" style="color: gray">  Phone number</label>
              </div>
            </div>
              <div class="col-xl-6">
                <div class="form-floating mb-3">
                <input type="email" class=" form-control" id="email" name="email" value="{{auth()->user()->email}}" placeholder="email">
                <label for="email" style="color: gray">  email</label>
                </div>
              </div>
  
          </div>
  
          <div class="row"> 
  
          <div class="col-xl-12">  
            <div class="form-floating mb-3 ">
              <input type="text" class=" form-control" id="ID_card" name="ID_card" placeholder="ID card number" value="{{auth()->user()->citizen_id}}">
              <label for="ID_card" style="color: gray"> ID card number</label>
              </div>
            </div>
          </div>
          
          <div class="row centering pb-2">
            <span class="col-6">
              cost per person: @if($url == 'hajjpackage') {{$hajjpackage['packagePrice']}}฿ @else {{$umrahpackage['packagePrice']}}฿ @endif
            </span>
            <span class="col-6">
              cost per child: @if($url == 'hajjpackage') {{$hajjpackage['packagePrice']*0.5}}฿ @else {{$umrahpackage['packagePrice']*0.5}}฿ @endif
              </span>
          </div>

          <div class="row"> 
              <div class="col-6">  
                    <div class="form-floating mb-3">
                      <select type="text" class=" form-select" id="adults">
                      <option> 1 Adult</option>
                      <option> 2 Adults</option>
                      <option> 3 Adults</option>
                      <option> 4 Adults</option>
                      <option> 5 Adults</option>
                      </select>
                      <label for="ID_card" style="color: gray"> Number of adults</label>
                    </div>
                </div>  
      
              <div class="col-6">          
                <div class="form-floating mb-3">
                  <select type="text" class=" form-select" id="childs">
                    <option> no child</option>
                    <option> 1 child</option>
                    <option> 2 child</option>
                    <option> 3 child</option>
                    <option> 4 child</option>
                    <option> 5 child</option>
                  </select>
                    <label for="ID_card" style="color: gray"> Number of childrens</label>
                  </div>
              </div>
          </div>

         
  
          <div class="row">
              <div class="col-6" id="newRow1">
              </div>
  
              <div class="col-6" id="newRow">
              </div>
          </div>
  
        </div>
        <div class="modal-footer">

          <div class="col-12">  
            <div class="row">
              <span>
                <input id="full_price" name="full_price" class="form-control text-center" style="border: none; background-color:white; height:40px;" value="Full price: @if($url == 'hajjpackage') {{$hajjpackage['packagePrice']}}฿ @else {{$umrahpackage['packagePrice']}}฿ @endif" readonly >
              </span>
            </div>
        <center>
          <input type="radio" class="btn-check px-4" name="payment_stat" id="quarter_pay" value="Quarter_pay" autocomplete="off">
          <label class="btn btn-outline-primary" for="quarter_pay">Pay 30%</label>

          <input type="radio" class="btn-check px-4" name="payment_stat" id="half_pay" value="Half_pay" autocomplete="off">
          <label class="btn btn-outline-primary" for="half_pay">Pay 50%</label>

          <input type="radio" class="btn-check px-4" name="payment_stat" id="full_pay" value="Full_pay"  autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="full_pay">Full payment</label>
          </div>
        </center>

          <div class="row ">
          <div class="col-2 mt-4">
          <i class="bi bi-people-fill"> <input value=":1" id="group" name="group" style="border: none; background-color:white; width:25px;" readonly> </i>          
          </div>

            <div class="col-7 mt-3">
                <h1>
                <input class="form-control" style="border: none; background-color:white; font-size:25px; height:40px;" name="PriceElement" id="PriceElement" value="Total: @if($url == 'hajjpackage') {{$hajjpackage['packagePrice']}}฿ @else {{$umrahpackage['packagePrice']}}฿ @endif" readonly >
                </h1>
            </div>
        
            @if ($url == 'hajjpackage')
            <div class="col-2">
            <button type="submit" id="checkout" class="btn btn-get-started">book</button>
            </div>
            @else
            <div class="col-2">
              <button type="submit" id="checkout" class="btn btn-get-started">book</button>
            </div>
            @endif

           

          </div>

        </div>
      </form>

      @elseif(!auth()->user())
  
      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">You must login first</h1>
      <button type="button" class=" btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
  
    <form class="px-5" action="/checkFromPackage" method="GET">
      @csrf
    <div class="modal-body">
      
    
  
      <div class="px-5">
      <div class="form-floating mb-3 row">
      <input type="text" class=" form-control" id="floatingInput" name="email" placeholder="Email" >
      <label for="floatingInput" style="color: gray">Your Email</label>
      </div>
    
    
      <div class="form-floating mb-3 row">
      <input type="password" class=" form-control" id="floatingInput" name="password" placeholder="Password" >
      <label for="floatingInput" style="color: gray">Your password</label>
      </div>
      </div>
  
      <div class="modal-footer">
        <a href="signup"> you don't have an account?!</a>
        <button type="submit" class="btn btn-get-started pl-2">Login</button>
      </div>
      </form>
  
    @endif
  
  
      </div>
    </div>