@include('admin.includes.header')

    @include('admin.includes.sidebar')

        @php  
        $id = auth()->user()->id;
        @endphp
        <div class="content">
    @include('admin.includes.navbar')
    <form action="/createHajj" method="POST">
        
        {{-- {{method_field('PUT')}}  --}}
        <div class="bg-light rounded h-100 p-4">
        <h1 class="mb-4"> Create new Hajj Package information </h1>
                               
    {{-- @include('admin.package_page.includes.headerinfo')

        
    @include('admin.package_page.includes.package_details') --}}

            <div class="col">
                <button class="editbtn btn-primary" type="submit">Create</button>
                <a href="/admin/hajjpackages" class="deletebtn btn-primary">cancel </a>
            </div>
        </div>
    </form>

@include('admin.includes.footer')