<section class="border p-3">
    <h5>About group</h5>
    <div class="row">
        <div class="col-xl-4">
               <div class="form-floating mb-3">
                   <input type="text" class="form-control" id="groupLeader"
                      name="groupLeader" placeholder="Group leader"
>
<label for="groupLeader">Group leader @error('groupLeader')<span style="color:red">{{'required'}}</span>@enderror</label>            
               </div>
       </div>
<div class="col-xl-3">
               <div class="form-floating mb-3">
                   <input type="number" class="form-control" id="groupNumber"
                   name="groupNumber"  placeholder="Group number"
<span style="color:red">{{'*'}}</span>
</label>
</div>
           </div>
<div class="col-xl-5">
                <div class="form-floating mb-3">
                    <select class="form-select" id="PackageName" readonly
                        name="PackageName" aria-label="Floating label select example">
                        <option>Open this select menu</option>
<option
>Economy</option>
<option
>Premium</option>
<option value="Economy" >Economy</option>
                                <option value="Ramadan">Ramadan</option>
</select>
                    <label
>Package lvl
<span style="color:red">{{'required'}}</span>
/label>
                </div>
            </div>
       </div>
</section>