@include('admin.includes.header')

    @include('admin.includes.sidebar')
    <div class="content">
    @include('admin.includes.navbar')

    <form action="/edit_umrah/{{$umrahpackage['id']}}" method="POST">
                {{csrf_field()}}
  
            <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4">({{$umrahpackage['id']}}) Umrah Package information</h1>
 
        @include('admin.package_page.includes.headerinfo')
            
         <livewire:hotel-crud
         :webPath='$webPath'
         :umrahpackage='$umrahpackage'
         :hotels='$hotels'
         />

        @include('admin.package_page.includes.package_details')

            <div class="col">
                <button class="editbtn btn" type="submit">Update</button>
                <a href="{{route('umrahpackages')}}" class="deletebtn btn">cancel </a>
            </div>

        </div>       
    </form>
 
@include('admin.includes.footer')