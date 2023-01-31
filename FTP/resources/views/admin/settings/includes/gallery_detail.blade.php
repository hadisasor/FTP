<section class="border p-3">
    <h5>Image</h5>
    <div class="row">
        <div class="col-xl-4">
               <div class="form-floating mb-3">
                <div class="image-container"><img src="{{asset('img/FLogo.png')}}" alt=""></div>
               </div>
       </div>
<div class="col-xl-3">
               <div class="form-floating mb-3">
                   <input type="text" class="form-control" placeholder="Group number">
                   <label>
                    <span style="color:red">Image location{{'*'}}</span>
                    </label>
                    </div>
           </div>
<div class="col-xl-5">
                <div class="form-floating mb-3">
                    <select class="form-select" id="PackageName" readonly
                        name="PackageName" aria-label="Floating label select example">
                        <option>Open this select menu</option>
                        <option
                        >Banner</option>
                        <option
                        >Gallery</option>
                        <option>Company Board 1</option>
                                <option>Company Board 2</option>
                        </select>
                        <label>Image type
                        <span style="color:red">{{'required'}}</span>
                        </label>
                </div>
            </div>
       </div>
</section>