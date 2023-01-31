@include('admin.includes.header')

    @include('admin.includes.sidebar')
    <div class="content">
    @include('admin.includes.navbar')
<div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4">Image edit</h1>


            @include('admin.settings.includes.gallery_detail')

<div class="col">
                <button class="editbtn btn" type="submit">Update</button>
                <a href="#" class="deletebtn btn">cancel </a>
            </div>

        </div>       
    </form>
 
@include('admin.includes.footer')