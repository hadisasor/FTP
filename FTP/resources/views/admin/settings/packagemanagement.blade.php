@include('admin.includes.header')

    @include('admin.includes.sidebar')

  <div class="content">
    @include('admin.includes.navbar')
    <div class=" rounded h-100 p-4">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
          <label class="editbtn btn-primary" for="upload">Add new Image</label>
          <input id="upload" type="file">
      </form>
      <h3 class="mb-4">Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                </table>
    </div>
    


@include('admin/includes/footer')
