@include('admin.includes.header')

        @include('admin.includes.sidebar')
        <div class="content"> 
        @include('admin.includes.navbar')
  
 <!-- Hajj package start -->
        <form action="/edit_hajj/{{$hajjpackage['id']}}" method="POST">
                {{csrf_field()}}
                {{-- {{method_field('PUT')}}  --}}
                
                <div class="bg-light rounded h-100 p-4">
                <h1 class="mb-4">({{$hajjpackage['id']}}) Hajj package information </h1>
                
                @include('admin.package_page.includes.headerinfo')

                <livewire:hotel-crud
                :webPath='$webPath'
                :hajjpackage='$hajjpackage'
                :hotels='$hotels'
                />

                @include('admin.package_page.includes.package_details')
        
                        <div class="col">
                                <button class="editbtn btn" type="submit">Update</button>
                                <a href="{{route('hajjpackages')}}" class="deletebtn btn">cancel </a>
                        </div>
                </div>  
        </form>

@include('admin.includes.footer')
     