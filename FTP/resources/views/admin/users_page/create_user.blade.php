@include('admin/includes.header')


        @include('admin/includes/sidebar')


        <!-- Content Start -->
        <div class="content">
            
           <!-- Navbar Start -->
           @include('admin/includes/navbar')


       

           <div class="bg-light rounded h-100 p-4">
            <form action="/createUser" method="POST">
               {{ csrf_field() }}

            <h1 class="mb-4">Create new User</h1>
            
            {{-- profile photo row start--}}
            <div class="profile-container mb-5">
               <img src="{{asset('../../img/user.jpg')}}" class="rounded-circle" style="width:190px;  display:block; margin-left:auto; margin-right:auto; ">
            </div>
            {{-- profile photo row end--}}

            {{-- 1st row start --}}
           <div class="row">
                  <div class="col-xl-6">
                        <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="floatingInput"
                              name="fstname" value="{{old('fstname')}}">
                           <label for="floatingInput">First name @error ('fstname') <span style="color:red">{{'Required'}}</span> @enderror</label>            
                        </div>
               </div>
               
               <div class="col-xl-6">
                     <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                           name="lstname" value="{{old('lstname')}}">
                        <label for="floatingInput">last name @error ('lstname') <span style="color:red">{{'Required'}}</span> @enderror</label>            
                     </div>
               </div>
           </div>
           {{-- 1st row end --}}
            
           {{-- 2nd row start --}}
           <div class="row">
                  <div class="col-xl-6">
                        <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="floatingInput"
                              name="email">
                           <label for="floatingInput">email @error ('email') <span style="color:red">{{'Required'}}</span> @enderror</label>            
                        </div>
               </div>

               <div class="col-xl-6">
                  <div class="form-floating mb-3">
                     <input type="phone" class="form-control" id="floatingInput"
                        name="phone" {{old('phone')}}>
                     <label for="floatingInput">phone @error ('phone') <span style="color:red">{{'Required'}}</span> @enderror</label>            
                  </div>
         </div>
           </div>
           {{-- 2nd row end --}}


               {{-- 3rd row start --}}
               <div class="row">
                  <div class="col-xl-6">
                        <div class="form-floating mb-3">
                           <input type="password" class="form-control" id="floatingInput"
                              name="password">
                           <label for="floatingInput">password @error ('password') <span style="color:red">{{'Required'}}</span> @enderror</label>            
                        </div>
               </div>

                  <div class="col-xl-6">
                     <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect"
                           name="userType" aria-label="Floating label select example">
                           <option >Open this select menu</option>
                           <option value="Admin" >Admin</option>
                           <option value="Tokseh">Tokseh</option>
                           <option value="Pilgrim">Pilgrim</option>
                        </select>
                        <label for="floatingSelect">User type @error ('userType') <span style="color:red">{{'Required'}}</span> @enderror </label>
                     </div>
               </div>
           </div>
           {{-- 3rd row end --}}

           <div class="col">
            <button class="editbtn btn-primary" type="submit">Update</button>
            <a href="{{route('dash')}}" class="deletebtn btn-primary">cancel </a>
            </div>


         </form>
         </div>

        {{-- footer --}}
           @include('admin/includes/footer')