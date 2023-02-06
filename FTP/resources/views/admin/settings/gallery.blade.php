@include('admin.includes.header')

    @include('admin.includes.sidebar')

  <div class="content">
    @include('admin.includes.navbar')
    <div class=" rounded h-100 p-4">
      
      <h3 class="mb-4">banner Table</h3>
   
                          <div class="m-4 border border-2">
                            <img style="height:80vh; width:100%; object-fit: cover;" id="img_edit"src="{{asset('img/FLogo.png')}}" alt=""></div>
                          </td>                          
        

                <form action="upload_banner" method="post" enctype="multipart/form-data">
                  @csrf
                  Select image to upload:
                    <label class="btn btn-primary" for="upload">Select Image</label>
                    <input id="upload" name="upload" type="file">
                    
                    
                    <button type="submit" class="btn btn-primary"> Upload image </button>
                    {{-- <a  href="#" class="pt-1 deletebtn btn">Delete</a> --}}
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
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container" >
                              <img id="img_edit" src="img/FTimage/B-FTLP.png" alt="">
                            </div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
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
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
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
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
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
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>

                
<br>
                <h3 class="mb-4">Hajj Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>
    
                <br>
                <h3 class="mb-4">Umrah Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>
                    
<br>
<h3 class="mb-4">Travel Image Table</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Image type</th>
            <th scope="col">Image location</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
        </tr>
    </thead>
    <tbody>
      
      <tr>
          <th scope="row"></th>
          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
          <td>banner</td>
          <td>test</td>
          <td><a href="#"class="editbtn btn">Edit</a></td>
          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
          
      </tr>
</tbody>
</table>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
    <label class="editbtn btn-primary" for="upload">Add new Image</label>
    <input id="upload" type="file">
</form>
    
<br>
                <h3 class="mb-4">Company Board 1 Image Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image type</th>
                            <th scope="col">Image location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                          <th scope="row"></th>
                          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
                          <td>banner</td>
                          <td>test</td>
                          <td><a href="#"class="editbtn btn">Edit</a></td>
                          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
                          
                      </tr>
          </tbody>
                </table>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                  Select image to upload:
                    <label class="editbtn btn-primary" for="upload">Add new Image</label>
                    <input id="upload" type="file">
                </form>
                    
<br>
<h3 class="mb-4">Company Board 2 Image Table</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Image type</th>
            <th scope="col">Image location</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
        </tr>
    </thead>
    <tbody>
      
      <tr>
          <th scope="row"></th>
          <td>
                            <div class="image-container"><img id="img_edit" src="img/FTimage/B-FTLP.png" alt=""></div>
                          </td>
          <td>banner</td>
          <td>test</td>
          <td><a href="#"class="editbtn btn">Edit</a></td>
          <td><a  href="#" class="pt-1 deletebtn btn">Delete</a></td>
          
      </tr>
</tbody>
</table>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
    <label class="editbtn btn-primary" for="upload">Add new Image</label>
    <input id="upload" type="file">
</form>
    </div>

    <script type="text/JavaScript">


      uploadbtns = document.querySelectorAll('input[type="file"]');
      edit_imgs = document.querySelectorAll('#img_edit');

      uploadbtns.forEach((btn,ix) => {
        
          btn.addEventListener('change',()=>{

            // console.log(btn.files[0].name);

            const file = btn.files[0];
            const reader = new FileReader();

              reader.addEventListener('load', function () {
              
                  edit_imgs[ix].src = reader.result;

              });

              reader.readAsDataURL(file);

          });

        
      });


    </script>
    
@include('admin/includes/footer')
