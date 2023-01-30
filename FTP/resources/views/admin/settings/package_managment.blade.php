@include('admin.includes.header')

    @include('admin.includes.sidebar')

  <div class="content">
    @include('admin.includes.navbar')
    <div class=" rounded h-100 p-4">
      
      <h3 class="mb-4">Hajj Package settings Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Package Level</th>
                            <th scope="col">Package Name</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
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
                          
                      </tr>
          </tbody>
          
                </table>
                <a class="editbtn btn" type="submit" href="/admin/settings/create_hajj_lvl">Create new level </a>
<br>
<br>
<br>
                <h3 class="mb-4">Umrah Package settings Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Package Level</th>
                            <th scope="col">Package Name</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
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
                          
                      </tr>
          </tbody>
          
                </table>
                <a class="editbtn btn" type="submit" href="create_hajj">Create new level </a>
<br>
<br>
<br>
                <h3 class="mb-4">Travel Package settings Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Package Level</th>
                            <th scope="col">Package Name</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
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
                          
                      </tr>
          </tbody>
          
                </table>
                <a class="editbtn btn" type="submit" href="create_hajj">Create new level </a>
    </div>
    


@include('admin/includes/footer')
