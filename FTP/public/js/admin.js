
function resetStartEnd(start,end){

    return end = document.getElementById('S_departmentDate'),
     start = document.getElementById('S_arriveDate'); 

}

function resetResult(diff,result){
    return diff =0, result =0;
}

// Days of package operations ----------------------------------------------------------------------------

//Setting the input of day after it automatically
var Th_depart = document.getElementById('Th_departmentDate'),
    S_depart = document.getElementById('S_departmentDate');
    S_arrive = document.getElementById('S_arrivalDate'),
     Th_arrive = document.getElementById('Th_arrivalDate');
     diff = 0,
     days = 1000 * 60 * 60 * 24,
     result = 0 ;


Th_depart.addEventListener('change', ()=>{

    Th_depart = new Date(Th_depart.value);
    S_arrive = new Date(S_arrive.value);
    
    
    if (Th_depart != null){
        // add one day 
        S_arrive.value = Th_depart.setDate(Th_depart.getDate()+1);  
        // turn it into date then turn it into string
        S_arrive.value = new Date(S_arrive.value).toISOString().substring(0,10);
        
        //put the new value in the new input field
        document.getElementById('S_arrivalDate').value =  S_arrive.value;
        //Reset the Variables
        Th_depart = document.getElementById('Th_departmentDate');
        S_arrive = document.getElementById('S_arrivalDate');
        
    }
})

Th_depart.addEventListener('change', ()=>{
    start = new Date(S_arrive.value);
    end = new Date(S_depart.value);

if (start != null && end != null){

    diff = end.getTime() - start.getTime();
    result =  diff / days;
    document.getElementById('stayingDays').value = result;
   
    resetResult(diff,result);
    resetStartEnd(start,end); }
 })    

S_depart.addEventListener('change', ()=>{
         
         S_depart = new Date(S_depart.value);
         Th_arrive = new Date(Th_arrive.value);
  
         if (S_depart != null ){         
        //add one day
        Th_arrive.value  = S_depart.setDate(S_depart.getDate()+1);
        Th_arrive.value = new Date(Th_arrive.value).toISOString().substring(0,10);
        document.getElementById('Th_arrivalDate').value = Th_arrive.value;
        
           S_depart = document.getElementById('S_departmentDate');
           Th_arrive = document.getElementById('Th_arrivalDate');
        }
})

S_depart.addEventListener('change', ()=>{
    start = new Date(S_arrive.value);
    end = new Date(S_depart.value);

if (start != null && end != null){
    diff = end.getTime() - start.getTime();
    result =  diff / days;
    document.getElementById('stayingDays').value = result;
    resetResult(diff,result);
    resetStartEnd(start,end);
}
})

S_arrive.addEventListener('change', ()=>{
    start = new Date(S_arrive.value);
    end = new Date(S_depart.value);
    if (start != null && end != null){

        diff = end.getTime() - start.getTime();
        result =  diff / days;
        document.getElementById('stayingDays').value = result;
        
        resetResult(diff,result);
        resetStartEnd(start,end);
    }
    
})




//Package level depends on Package price -------------------------------------------------

var packPrice = document.getElementById('packagePrice'),
  packName = document.getElementById('PackageName');


    packPrice.addEventListener('change', ()=>{
         Price = packPrice.value;

        if (Price > 60000){
            packName.value = 'Deluxe';
        } 
        else if (Price <= 60000 && Price > 50000 ){
            packName.value = 'Golden';
        } 
        else if (Price <= 50000 && Price > 40000){
            packName.value = 'Silver'; 
        } 
        else if (Price <= 40000){
            packName.value = 'Saver';
        }
        Price = 0;
        return packName.value
    
    });





// -------------hotels custom or existed------------------

const hotels = document.getElementsByName('hotels'),
custom = document.getElementById('custom'),
existed = document.getElementById('existed'),

custom_inputs = document.getElementById('custom-inputs'),
existed_inputs = document.getElementById('existed-inputs');



custom.addEventListener('click', ()=>{

    custom_inputs.style.display = 'block';
    existed_inputs.style.display = 'none';

});

existed.addEventListener('click', ()=>{

    custom_inputs.style.display = 'none';
    existed_inputs.style.display = 'block';

});



// URL of the page 

var url = window.location.href; // getting URL for if statement
    url = url.split("admin/").pop(); // Deleting all string before "/" and keeping what's after
    url = url.replace(/\d+/g, ''); // remove all number within url string


//-------------------------------- Add button of package details field -------------------------

const addStep = document.getElementById('addStep'),
addedStep = document.getElementById('addedStep');



function deleteInput(){
    this.parentElement.remove();

}



stepIndex=1;
addStep.addEventListener("click",()=>{

    stepIndex = stepIndex+1;

    const rowDetails =document.createElement('div');
    rowDetails.classList.add('row');

    const colDetails = document.createElement('div');
    colDetails.classList.add('col-md-11','pb-2');

    const divDetails = document.createElement('div'); 
    divDetails.classList.add('form-floating' );

    const divDelete = document.createElement('div');
    divDelete.classList.add('col-1', 'pb-2');

    const newStep = document.createElement('textarea');
    newStep.setAttribute('type','text');
    newStep.setAttribute('name','packageDetails[]');
    newStep.classList.add( 'form-control');
    newStep.setAttribute('placeholder','Package details');
    newStep.style.height = '3cm';
    newStep.id = 'floatingInput'
    
    const label =document.createElement('label');
    label.setAttribute('for', 'floatingInput');
    label.innerHTML='Step details';
    

    const deleteStep = document.createElement('a');
    deleteStep.classList.add('btn','deletebtn');
    deleteStep.innerHTML = 'X';
    divDelete.addEventListener('click', deleteInput);

    addedStep.appendChild(rowDetails);
    rowDetails.appendChild(colDetails);
    colDetails.appendChild(divDetails);
    divDetails.appendChild(newStep);   
    divDetails.appendChild(label);
    rowDetails.appendChild(divDelete);
    divDelete.appendChild(deleteStep);

});






if (url == 'create_hajj' || url == 'hajjpackages/'){

//------------------------ add button of Mina details -------------------------------

const addMina = document.getElementById('addMina'),
addedMina = document.getElementById('addedMina');



function deleteInput(){
    this.parentElement.remove();
}


addMina.addEventListener("click",()=>{

    const rowDetails =document.createElement('div');
    rowDetails.classList.add('row');

    const colDetails = document.createElement('div');
    colDetails.classList.add('col-md-10','pb-2');

    const divDetails = document.createElement('div'); 
    divDetails.classList.add('form-floating' );

    const divDelete = document.createElement('div');
    divDelete.classList.add('col-1', 'pb-1');

    const newStep = document.createElement('input');
    newStep.setAttribute('type','text');
    newStep.setAttribute('name','minaDetails[]');
    newStep.classList.add( 'form-control');
    newStep.setAttribute('placeholder','Mina details');
    newStep.id = 'floatingInput'
    
    const label =document.createElement('label');
    label.setAttribute('for', 'floatingInput');
    label.innerHTML='Mina details';
    

    const deleteStep = document.createElement('a');
    deleteStep.classList.add('btn','deletebtn');
    deleteStep.innerHTML = 'X';
    divDelete.addEventListener('click', deleteInput);

    addedMina.appendChild(rowDetails);
    rowDetails.appendChild(colDetails);
    colDetails.appendChild(divDetails);
    divDetails.appendChild(newStep);   
    divDetails.appendChild(label);
    rowDetails.appendChild(divDelete);
    divDelete.appendChild(deleteStep);

});







// --------------------------- add button of Arafat details --------------------------

const addArafat = document.getElementById('addArafat'),
addedArafat = document.getElementById('addedArafat');


function deleteInput(){
    this.parentElement.remove();
}


addArafat.addEventListener("click",()=>{

    const rowDetails =document.createElement('div');
    rowDetails.classList.add('row');

    const colDetails = document.createElement('div');
    colDetails.classList.add('col-md-10','pb-2');

    const divDetails = document.createElement('div'); 
    divDetails.classList.add('form-floating' );

    const divDelete = document.createElement('div');
    divDelete.classList.add('col-1', 'pb-1');

    const newStep = document.createElement('input');
    newStep.setAttribute('type','text');
    newStep.setAttribute('name','arafatDetails[]');
    newStep.classList.add( 'form-control');
    newStep.setAttribute('placeholder','Arafat details');
    newStep.id = 'floatingInput'
    
    const label =document.createElement('label');
    label.setAttribute('for', 'floatingInput');
    label.innerHTML='Arafat details';
    

    const deleteStep = document.createElement('a');
    deleteStep.classList.add('btn','deletebtn');
    deleteStep.innerHTML = 'X';
    divDelete.addEventListener('click', deleteInput);

    addedArafat.appendChild(rowDetails);
    rowDetails.appendChild(colDetails);
    colDetails.appendChild(divDetails);
    divDetails.appendChild(newStep);   
    divDetails.appendChild(label);
    rowDetails.appendChild(divDelete);
    divDelete.appendChild(deleteStep);

});




}


// --------------------------- add button of Transport details --------------------------
addTrans = document.getElementById('addTrans'),
addedTrans = document.getElementById('addedTrans');


function deleteInput(){
    this.parentElement.remove();
}

addTrans.addEventListener("click",()=>{

   
    const rowDetails = document.createElement('div');
    rowDetails.classList.add('row');

    const colDetails = document.createElement('div');
    colDetails.classList.add('col-md-5','pb-2');

    const col2Details = document.createElement('div');
    col2Details.classList.add('col-md-6','pb-2');


    const col = document.createElement('div');
    col.classList.add(  'form-floating');

    const col2 = document.createElement('div');
    col2.classList.add( 'form-floating');

    const divDelete = document.createElement('div');
    divDelete.classList.add('col-1', 'pb-1');



    const newStep = document.createElement('select');
    newStep.setAttribute('type','text');
    newStep.setAttribute('name','car[]');
    newStep.classList.add( 'form-select');
    newStep.id = 'Vehicale'
    newStep.innerHTML+=`
    option>Van</option>
    <option>Train</option>
    <option>Bus</option>`
    
    const label =document.createElement('label');
    label.setAttribute('for', 'floatingInput');
    label.innerHTML='Package details';


    const newStep2 = document.createElement('select');
    newStep2.setAttribute('type','text');
    newStep2.setAttribute('name','destination[]');
    newStep2.classList.add( 'form-select');
    newStep2.id = 'floatingInput'
    newStep2.innerHTML+=`
    <option>within Makkah</option>
    <option>within Maddinah</option>
    <option>Makkah->Madinah</option>
    <option>Maddinah->Makkah</option>`
    
    const label2 =document.createElement('label');
    label2.setAttribute('for', 'floatingInput');
    label2.innerHTML='Destination';
    

    const deleteStep = document.createElement('a');
    deleteStep.classList.add('btn','deletebtn');
    deleteStep.innerHTML = 'X';
    divDelete.addEventListener('click', deleteInput);

    addedTrans.appendChild(rowDetails);
    rowDetails.appendChild(colDetails);
    rowDetails.appendChild(col2Details);

    colDetails.appendChild(col);
    col.appendChild(newStep);   
    col.appendChild(label);
    
    col2Details.appendChild(col2);
    col2.appendChild(newStep2);   
    col2.appendChild(label2);

    rowDetails.appendChild(divDelete);
    divDelete.appendChild(deleteStep);

});



//--------------------------- Showcasing the hotels depending on the select panel (passing variable from javascript to php) --------------------------


var madinaHotel = document.getElementById('madinaHotel'),
 makkaHotel = document.getElementById('makkaHotel');

var old_madinah_id, old_makkah_id;

existedMakkah = makkaHotel;
existedMadinah = madinaHotel;

existIdMakkah = existedMakkah.value;
existIdMadinah = existedMadinah.value;
i=0, c=0;

 madinaHotel.onchange= function imgViewer(){

    i++;
    if(existIdMadinah != 0){
        exist_img = document.getElementById(existIdMadinah);
        exist_img1 = document.getElementById('img1-'+existIdMadinah);
        exist_img2 = document.getElementById('img2-'+existIdMadinah);
        exist_img3 = document.getElementById('img3-'+existIdMadinah);
        exist_img.style.display = 'none';
        exist_img1.style.display = 'none';
        exist_img2.style.display = 'none';
        exist_img3.style.display = 'none';
    }

     if(madinaHotel.value == 0){
         old_madinah_img.style.display ="none";
         old_madinah_img1.style.display ="none";
         old_madinah_img2.style.display ="none";
         old_madinah_img3.style.display ="none";
         old_madinah_id = null;
      }

  
    madinah_img = document.getElementById(madinaHotel.value);
    madinah_img1 = document.getElementById('img1-'+madinaHotel.value);
    madinah_img2 = document.getElementById('img2-'+madinaHotel.value);
    madinah_img3 = document.getElementById('img3-'+madinaHotel.value);

    
        madinah_img.style.display ="block";
        madinah_img1.style.display ="inline-block";
        madinah_img2.style.display ="inline-block";
        madinah_img3.style.display ="inline-block";
     

     if(old_madinah_id != null){
        old_madinah_img.style.display ="none";
        old_madinah_img1.style.display ="none";
        old_madinah_img2.style.display ="none";
        old_madinah_img3.style.display ="none";
     }

     old_madinah_id = madinaHotel.value;
     old_madinah_img = document.getElementById(old_madinah_id);
     old_madinah_img1 = document.getElementById('img1-'+old_madinah_id);
     old_madinah_img2 = document.getElementById('img2-'+old_madinah_id);
     old_madinah_img3 = document.getElementById('img3-'+old_madinah_id); 

 }


 makkaHotel.onchange = function imgViewer(){
    c++;
    if(existIdMakkah != 0){
        exist_img = document.getElementById(existIdMakkah);
        exist_img1 = document.getElementById('img1-'+existIdMakkah);
        exist_img2 = document.getElementById('img2-'+existIdMakkah);
        exist_img3 = document.getElementById('img3-'+existIdMakkah);
        exist_img.style.display = 'none';
        exist_img1.style.display = 'none';
        exist_img2.style.display = 'none';
        exist_img3.style.display = 'none';
    }


    if(makkaHotel.value == 0){
        old_makkah_img.style.display ="none";
        old_makkah_img1.style.display ="none";
        old_makkah_img2.style.display ="none";
        old_makkah_img3.style.display ="none";
        old_makkah_id = null;
     }

    makkah_img = document.getElementById(makkaHotel.value);
    makkah_img1 = document.getElementById('img1-'+makkaHotel.value);
    makkah_img2 = document.getElementById('img2-'+makkaHotel.value);
    makkah_img3 = document.getElementById('img3-'+makkaHotel.value);        

    makkah_img.style.display ="block";
    makkah_img1.style.display ="inline-block";
    makkah_img2.style.display ="inline-block";
    makkah_img3.style.display ="inline-block";

    if(old_makkah_id != null){
        old_makkah_img.style.display ="none";
        old_makkah_img1.style.display ="none";
        old_makkah_img2.style.display ="none";
        old_makkah_img3.style.display ="none";
     }
     
     old_makkah_id = makkaHotel.value;
     old_makkah_img = document.getElementById(old_makkah_id);
     old_makkah_img1 = document.getElementById('img1-'+old_makkah_id);
     old_makkah_img2 = document.getElementById('img2-'+old_makkah_id);
     old_makkah_img3 = document.getElementById('img3-'+old_makkah_id); 
   
 }

  /* banner setting change */

  /* banner setting change end */
