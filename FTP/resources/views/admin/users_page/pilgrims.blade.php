@include('admin/includes.header')


        @include('admin/includes/sidebar')


        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            @include('admin/includes/navbar')
            <!-- Navbar End -->

            <!-- Pilgrims table start -->
            <div class=" rounded h-100 p-4">
                @if (Session::get('edited'))
                <div class="alert alert-success">
                    {{(Session::get('edited'))}}
                </div> 
                @endif

                @if (Session::get('deleted'))
                <div class="alert alert-danger">
                    {{(Session::get('deleted'))}}
                </div> 
                @endif

                @if (Session::get('added'))
                <div class="alert alert-success">
                    {{(Session::get('added'))}}
                </div> 
                @endif

                <h3 class="mb-4">Pilgrims Users Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <!-- <th scope="col">check</th> -->
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    @if ($user['userType'] == 'Pilgrim')
                    
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>{{$user['fstname']}}</td>
                            <td>{{$user['lstname']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>{{$user['mobile']}}</td>
                            <td><a href="/admin/pilgrims/{{$user['id']}}" class="editbtn btn-primary" type="submit">Edit</a></td>
                            <td><a class="deletebtn btn-primary" href="/delete_pilgrim/{{$user['id']}}">Delete</a></td>
                            <!-- <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td> -->
                        </tr>
                    </tbody>
                    
                    @endif
                    @endforeach
                </table>
                <a href="create_user" class="editbtn btn-primary" type="submit">Create new user </a>
                <a class="deletebtn btn-primary" type="submit">Delete selected </a>
            </div>
            <!-- Pilgrims table End -->

            @include('admin/includes/footer')