@include('admin.includes.header')


        @include('admin.includes.sidebar')

        <!-- Content Start -->
        <div class="content">
            
           <!-- Navbar Start -->
           @include('admin.includes.navbar')
           <!-- Navbar End -->
               <!-- Hajj packages table start -->
               <div class=" rounded h-100 p-4">

                {{-- Crud messeges --}}
                    @if (Session::get('added'))
                    <div class="alert alert-success">
                    {{Session::get('added')}}
                    </div>
                    @endif

                    @if (Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}</div>
                    @endif
                       
                    @if (Session::get('deleted'))
                    <div class="alert alert-danger">
                    {{Session::get('deleted')}}
                    </div>
                    @endif

                {{-- Hajj tabel starting point --}}
                @include('admin.package_page.includes.packages_viewer')

          
                <a class="editbtn btn" type="submit" href="create_hajj">Create new package </a>
                <a  class="deletebtn btn" type="submit" href="delete_hajj">Delete selected </a>
                
            </div>
            <!-- Pilgrims table End -->

           @include('admin.includes.footer')
