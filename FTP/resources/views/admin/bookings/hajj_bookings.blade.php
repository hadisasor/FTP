@include('admin/includes.header')

        @include('admin/includes/sidebar')
 
        <!-- Content Start -->
        <div class="content">
            
           <!-- Navbar Start -->
           @include('admin/includes/navbar')
           <!-- Navbar End -->

           <div class=" rounded h-100 p-4">

           
           <h3 class="mb-4">Hajj packages Table</h3>
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Customer</th>
                       <th scope="col">Package ID</th>
                       <th scope="col">Payment type</th>
                       <th scope="col">Payment status</th>
                       <th scope="col">Required cost</th>
                       <th scope="col">Paid</th>
                       <th scope="col">Left</th>
                       <th scope="col">Edit</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($bookings as $booking)
                   @foreach($hajjpackages as $hajj)
                   @foreach($users as $user)
                   @if($hajj->id == $booking->hajj_package_id) 
                   @if($hajj->user_id == auth()->user()->id)
                    @if($user->id == $booking->booker_id) 
                   <tr>
                       <th scope="row"></th>
                       <td>{{$user['fstname'].' '.$user['lstname']}}</td>
                       <td>{{$hajj['id']}}</td>
                       <td>{{$booking['payment_type']}}</td>
                       <td>{{$booking['payment_status']}}</td>
                       <td>{{$booking['total']}}฿</td>
                       <td>{{$booking['paid_amount']}}฿</td>
                       <td>{{$booking['left_amount']}}฿</td>
                       <td><a href=""class="editbtn btn">Edit</a></td>
                   </tr>

                   @endif
                   @endif
                   @endif
                   @endforeach
                   @endforeach
                   @endforeach
               </tbody>
           </table>
       

           </div>
      @include('admin/includes/footer')