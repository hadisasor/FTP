@include('admin.includes.header')

        @include('admin.includes.sidebar')
        <!-- Content Start -->
        <div class="content">
            
           <!-- Navbar Start -->
           @include('admin.includes.navbar')
           <!-- Navbar End -->


             <!-- Umrah packages table start -->
             <div class=" rounded h-100 p-4">
                @if (Session::get('success'))
                <div class="alert alert-success" style="position:sticky">
                    {{(Session::get('success'))}}
                </div>
                @endif

                @if (Session::get('added'))
                <div class="alert alert-success" style="position:sticky">
                    {{(Session::get('added'))}}
                </div>
                @endif

                @if (Session::get('deleted'))
                <div class="alert alert-danger" style="position:sticky">
                    {{(Session::get('deleted'))}}
                </div>
                @endif

                {{-- Umrah tabel starting point --}}
                @include('admin.package_page.includes.packages_viewer')


                <a class="editbtn btn" type="submit" href="create_umrah">Create new package </a>
                <a  class="deletebtn btn" type="submit" href="delete_umrah">Delete selected </a>
            
            </div>
            <!-- Umrah table End -->
            
           @include('admin.includes.footer')