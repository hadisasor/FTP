@include('admin.includes.header')

    @include('admin.includes.sidebar')

  <div class="content">
    @include('admin.includes.navbar')
    <div class=" rounded h-100 p-4">
      
      <h3 class="mb-4">banner Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>test</td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>

                <br>
                <h3 class="mb-4">images Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>test</td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                      </tr>
          </tbody>
                </table>
                
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>
                
                <br>
                <h3 class="mb-4">Hajj Package Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>test</td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>
                <br>
                <h3 class="mb-4">Umrah Package Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>test</td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>

                <br>
                <h3 class="mb-4">Hotel Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>test</td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>

    </div>
    
@include('admin/includes/footer')
