PriceElement =document.getElementById('PriceElement');
group = document.getElementById('group');
totalPrice = PriceElement.value.match(/\d+/)[0];
totalPrice = parseInt(totalPrice); // changable package price
originalTotalPrice = parseInt(totalPrice); //Original constant package price
full_price = document.getElementById('full_price');

var totalAdults = 0, totalChilds = 0, childsNum=0, adultsNum=1, finalResult= PriceElement.value.match(/\d+/)[0];




function groupChanger(){

    group.value = 1 + childsNum  + adultsNum;

}






//Setting the adult input to listen to change events
var childs = document.getElementById('childs'); // child selector input
childs.addEventListener('change', ()=>{

const newRow = document.getElementById('newRow'); // identify row

if(childs.value == 'no child'){ 

        totalChilds = 0;
        childsNum = 0;
        group.value = adultsNum;
        //check if the adult input is activated or not while there is no child
    if(adultsNum > 0){
        PriceElement.value = originalTotalPrice + totalAdults; // sum the child input with adult input to effect the price
    }else{ // if there's no children input then do this
        PriceElement.value =  originalTotalPrice ;
    }

    PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

}

newRow.innerHTML = '';
if(childs.value == 'no child')
{
    childsNum = 0;
}else{

    childsNum = childs.value.match(/\d+/)[0];
}

childsNum = parseInt(childsNum),
childsNum = childsNum; //number of children

childs = document.getElementById('childs');
groupChanger();

//Input repeaters
for(let i=1; childsNum >= i ;i++){


if (childsNum == 1){ // if there's more child input do this
    
            if(totalAdults > 0){ // if there's adult then do this

            PriceElement.value  =  0.5*originalTotalPrice; // multiply number of children with the original price and effect the price 
            totalChilds = parseInt(PriceElement.value);
            PriceElement.value = totalAdults + totalChilds + originalTotalPrice;

            PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

            }else{ //else if there's no adult then do this

            PriceElement.value  =  0.5*originalTotalPrice; // multiply number of children with the original price and effect the price
            totalChilds = parseInt(PriceElement.value);
            PriceElement.value = totalAdults + totalChilds + originalTotalPrice;

            PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

            }
            
}

else if(childsNum > 1){


    if(totalAdults > 0){ // if there's adult then do this

        PriceElement.value  =  (0.5*originalTotalPrice)*(childsNum); // multiply number of children with the original price and effect the price 
        totalChilds = parseInt(PriceElement.value);
        PriceElement.value = totalAdults + totalChilds + originalTotalPrice;

        PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

        }else{ //else if there's no adult then do this

            PriceElement.value  = ((0.5*originalTotalPrice)*(childsNum)); // multiply number of children with the original price and effect the price
        totalChilds = parseInt(PriceElement.value);
        PriceElement.value = totalAdults + totalChilds + originalTotalPrice;

        PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

        }


}

// if(adultsNum > 0){
// PriceElement.value = totalAdults + totalChilds;
// }


//Making a new Div
newRow.innerHTML += `
         <div class="col-12" id="column">        
          </div>
`

//Inserting Inputs within the div
column = document.getElementById('column');
const formFloating = document.createElement('div');
formFloating.classList.add('form-floating','mb-3');
formFloating.id = 'form-floating';

const childInput = document.createElement('input');
childInput.classList.add('form-control');
childInput.setAttribute('type','text');
childInput.setAttribute('name','childs[]');
childInput.setAttribute('placeholder',`child's name`);
childInput.id = 'floatingInput';

const label = document.createElement('label');
label.setAttribute('for','floatingInput');
label.style.color = 'grey';
label.innerHTML += `Child's name `;

column.appendChild(formFloating);
formFloating.appendChild(childInput);
formFloating.appendChild(label);

}
    finalResult = PriceElement.value.match(/\d+/)[0];
    finalResult = parseInt(finalResult);
    full_price.value ='Full price:  '+finalResult+'฿';


    if(quarter.checked){
        finalResult2 = finalResult*0.3;
        PriceElement.value = `Quarter: ` +  finalResult2 + `฿`;
        finalResult2 = finalResult*0.3;
    }
       if(half.checked){
        finalResult2 = finalResult*0.5;
        PriceElement.value = `Half: ` +  finalResult2 + `฿`;
        finalResult2  = finalResult*0.5;
    }
        if(fullpay.checked){ 
        finalResult2 = finalResult;
        PriceElement.value = `Total: ` +  finalResult2 + `฿`;
        finalResult2 = finalResult;
    }
});




//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------


//Setting the adult input to listen to change events
adults = document.getElementById('adults'); // adult selector input
adults.addEventListener('change', ()=>{

    const newRow1 = document.getElementById('newRow1'); // identify row
    

    if(adults.value == '1 Adult'){ 

        totalAdults=0;
        adultsNum = 0;

          //check if the adult input is activated or not while there is no child
        if(childsNum > 0){
            PriceElement.value = originalTotalPrice + totalChilds; // sum the child input with adult input to effect the price
        }else{ // if there's no children input then do this
            PriceElement.value =  originalTotalPrice ;
        }

        PriceElement.value = `Total: ` +  PriceElement.value + `฿`;
    }




    newRow1.innerHTML = '';
    adultsNum = adults.value;
    if(adults.value == '1 Adult')
    {
        adultsNum = 0;
    }else{
    adultsNum = adults.value.match(/\d+/)[0];
    adultsNum = adultsNum-1;
    }


    adultsNum = parseInt(adultsNum),//number of children
    adults = document.getElementById('adults');
    groupChanger();
    
    //Input repeaters
    for(let i=1 ; adultsNum >= i ;i++){

        
   if (adultsNum == 1){ // if there's more adult input do this

            if(childsNum > 0){ // if there's children input then do this

                PriceElement.value =  originalTotalPrice;
                totalAdults = parseInt(PriceElement.value);
                PriceElement.value = totalAdults + totalChilds + originalTotalPrice;
                PriceElement.value = `Total: ` +  PriceElement.value + `฿`;

                }else{
                PriceElement.value =  originalTotalPrice;
                totalAdults = parseInt(PriceElement.value);
                PriceElement.value = totalAdults + totalChilds + originalTotalPrice;
                PriceElement.value = `Total: ` +  PriceElement.value + `฿`;
            }

        } else if (adultsNum > 1){


            if(childsNum > 0){ // if there's children input then do this

                PriceElement.value = (originalTotalPrice*(adultsNum));
                totalAdults = parseInt(PriceElement.value);
                PriceElement.value = totalAdults + totalChilds + originalTotalPrice;
                PriceElement.value = `Total: ` +  PriceElement.value + `฿`;
    
                }else{
                PriceElement.value = (originalTotalPrice*(adultsNum));
                totalAdults = parseInt(PriceElement.value);
                PriceElement.value = totalAdults + totalChilds + originalTotalPrice;
                PriceElement.value = `Total: ` +  PriceElement.value + `฿`;
            }

        }

        // if(childNum > 0){
        // PriceElement.value = totalAdults + totalChilds;
        // }

     //Making a new Div
        newRow1.innerHTML += `  
                 <div class="col-12" id="column1">
                  </div>    
        `
    
    //Inserting Inputs within the div
    column1 = document.getElementById('column1');    
    const formFloating = document.createElement('div');
    formFloating.classList.add('form-floating','mb-3');
    formFloating.id = 'form-floating';
    
    const childInput = document.createElement('input');
    childInput.classList.add('form-control');
    childInput.setAttribute('type','text');
    childInput.setAttribute('name','childs[]');
    childInput.setAttribute('placeholder',`child's name`)
    childInput.id = 'floatingInput';
    
    const label = document.createElement('label');
    label.setAttribute('for','floatingInput');
    label.style.color = 'grey';
    label.innerHTML += `Adult's name `;
    
    column1.appendChild(formFloating);
    formFloating.appendChild(childInput);
    formFloating.appendChild(label);
    
    
    }
  
    finalResult = PriceElement.value.match(/\d+/)[0];
    finalResult = parseInt(finalResult);
    full_price.value='Full price:  '+finalResult+'฿';

    if(quarter.checked){
        finalResult2 = finalResult*0.3;
        PriceElement.value = `Quarter: ` +  finalResult2 + `฿`;
        finalResult2 = finalResult*0.3;
    }
       if(half.checked){
        finalResult2 = finalResult*0.5;
        PriceElement.value = `Half: ` +  finalResult2 + `฿`;
        finalResult2  = finalResult*0.5;
    }
        if(fullpay.checked){ 
        finalResult2 = finalResult;
        PriceElement.value = `Total: ` +  finalResult2 + `฿`;
        finalResult2 = finalResult;
    }




    });









//--------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------
// Payment functions



quarter.addEventListener('click',()=>{
    if(quarter.checked){
    finalResult2 = finalResult*0.3;
    PriceElement.value = `Quarter: ` +  finalResult2 + `฿`;
    finalResult2 = finalResult*0.3;
}
});


half.addEventListener('click',()=>{
    if(half.checked){
    finalResult2 = finalResult*0.5;
    PriceElement.value = `Half: ` +  finalResult2 + `฿`;
    finalResult2  = finalResult*0.5;
}
});

fullpay.addEventListener('click',()=>{
    if(fullpay.checked){ 
    finalResult2 = finalResult;
    PriceElement.value = `Total: ` +  finalResult2 + `฿`;
    finalResult2 = finalResult;
}
});





{/* <input type="text" class=" form-control" id="firstname" name="firstname" value="{{auth()->user()->fstname}}" >
<label for="firstname" style="color: gray">  child name</label> */}