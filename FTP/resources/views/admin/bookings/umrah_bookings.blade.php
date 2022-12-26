@include('admin/includes.header')

        @include('admin/includes/sidebar')
 
        <!-- Content Start -->
        <div class="content">
            
           <!-- Navbar Start -->
           @include('admin/includes/navbar')
           <!-- Navbar End -->
            <div class=" rounded h-100 p-4">


           <h3 class="mb-4">Umrah packages Table</h3>
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Customer</th>
                       <th scope="col">Package ID</th>
                       <th scope="col">Payment type</th>
                       <th scope="col">Payment status</th>
                       <th scope="col">Required cost</th>
                       <th scope="col">Amount paid</th>
                       <th scope="col">Amount left</th>
                       <th scope="col">Edit</th>
                   </tr>
               </thead>
               <tbody>
                
       
                @foreach($bookings as $booking)
                @foreach($umrahpackages as $umrah)
                @foreach($users as $user)
                @if($umrah->user_id == auth()->user()->id)
                @if($umrah->id == $booking->umrah_package_id)
                @if($user->id == $booking->booker_id) 
                <tr>
                    <th scope="row"></th>
                    <td>{{$user['fstname'].' '.$user['lstname']}}</td>
                    <td>{{$umrah['id']}}</td>
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