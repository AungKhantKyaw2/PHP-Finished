//UI
var getdots = document.getElementsByClassName('dot'); //HTMLCollection
var getpages =document.getElementsByClassName('page');
console.log(getpages);
console.log(getdots);

var getform =document.getElementById('form');
// console.log(getform);
var getprevbtn =document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcontainer =document.getElementById('result-container');
var pagekeys = [
    ["email","password","newsletter"], //Page 1 Security
    ["firstname","lastname","profile"],  //Page 2 : Personal Info 
    ["dob"],                    //Page3 :Date of Birth
    ["phone","address","documents","documents"], //Page4 :Contact Info
];



var datas=[];


let curridx = 0;//0 1 2



showpage(curridx);

//currentidx = 0 1 2 3
//gonow or next =1 2 3 4

function showpage(num){
    
    // console.log(num);
    // getpages[num].style.display= "block";

    const pages = document.querySelectorAll('.page');

    pages.forEach((page,index)=>{
        page.style.display = index ===num ? "block" : "none";
    });

    num ===0 ?getprevbtn.style.display="none" :getprevbtn.style.display="inline-block";

    num ===(getpages.length-1) ? getnextbtn.innerHTML="Submit" : getnextbtn.textContent ="Next";

    
    dotindicator(num);
 
    

}



function* genfun(){
    var index =0;
            // 0   < 7
    while(index < objkeys.length){
        yield index++; //0 to 6
    }
}


let  gen =genfun();
// console.log(genfun().next().value);





// console.log(gen.next().value);//0
// console.log(gen.next().value);//1



function result(data){

    console.log(data);
    const documentlist = data[3].documents.length > 0 ? data[3].documents.join(',') : "No Data";
    
    getresultcontainer.innerHTML =`
      <ul>
                      <li>Name : ${data[1].firstname} ${data[1].lastname}</li>
                    <li>Agree : ${data[0].newsletter === "1" ? "Yes" : "No"} </li>
                     <li>EMail : ${data[0].email}</li>
                     <li>Profile : ${data[1].profile}</li>
                     <li>Date of Birth :${data[2].dob}</li>
                     <li>Phone Number :${data[3].phone}</li>
                     <li>Address : ${data[3].address} </li>
                     <li>Documents : ${documentlist} </li>
        </ul>

        <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Name</button>
    `;
}

function submitbtn(){
    getform.submit();
}

function dotindicator(num){
    // console.log(num);//

    for(var x=0; x<getdots.length; x++){
        getdots[x].classList.remove('active');
    }
    getdots[num].className +=" active";
}


function formvalidation(){
    var valid = true;

    var getcurrentinput = getpages[curridx].getElementsByTagName('input');

    // console.log(getcurrentinput);
    // console.log(getcurrentinput[0].value);


    // datas=[

    //     {
    //         email:"root@gmail.com",
    //         password:"123456",
    //         newsletter:1
    //     },
    //     {
    //         firstname:"aung",
    //         lastname:"kyaw"
    //     }
    // ]

        if(!datas[curridx]){
            datas[curridx]={};
        }
        
        let currpagekeys = pagekeys[curridx];    



    for(let x=0; x<getcurrentinput.length; x++){
        //x= 0 to 3
     console.log(getcurrentinput.length);
    //    console.log(getcurrentinput[x].value);

    let input =getcurrentinput[x];
    let key = currpagekeys[x];

    if(input.type === "radio"){
        
        if(input.checked){
            datas[curridx][key] = input.value;
        }


    }else if(input.type==="checkbox"){
    
         if(!datas[curridx][key]){
            datas[curridx][key]= [];

         }
         if(input.checked){
            datas[curridx][key].push(input.value);
        
        }


       

        // [{
        //      phone:"012345",
        //      address:"mandalay",
        //      document:['nrc','passport']
        // }]

         
    }else if((input.value).trim() ===''){
             input.classList.add('error');
            valid=false;
    }else {
        //   console.log('x value is = ',x);
        //     console.log(objkeys[x]);
        //     console.log(getcurrentinput[x].value);

            // console.log("gen value is =", gen.next().value);


            //method 1
            // const keys = objkeys[gen.next().value];
            // console.log(keys);
            // const values = getcurrentinput[x].value;
            // console.log(values);

            // const obj = {
            //     [keys]:values  
            // };

            // datas.push(obj);

             //Method 2
            // const keys = objkeys[gen.next().value];
           
            // const values = getcurrentinput[x].value;
         
            // const obj = {};
            // obj[keys] = values;
            // datas.push(obj);

            // Method 3
            //  const keys = pagekeys[gen.next().value];
            // const values = input.value;
            // datas.push({[keys]:values});
            input.classList.remove('error');
         
            datas[curridx][key] = input.value;
         

        
    }
    }
        console.log(datas);
    if(valid){
         getdots[curridx].className +=" done";
    }
    //    console.log(valid);
    return valid;
  
}
function gonow(num){

    // console.log(num);
    // console.log(curridx);

//    getpages[curridx].style.display="none";

//    curridx=curridx+num;
//     console.log(curridx);

//     if(curridx >= getpages.length){
//         getform.submit();
//     }

    // showpage(curridx);
    // console.log(formvalidation());

    // if(num ==1 && formvalidation()){
        
    //     getpages[curridx].style.display ="none";
    //     curridx=curridx+num;   

    //     if(curridx >= getpages.length){
    //                 // getform.submit();

    //                 getform.style.display ="none";
    //                 getresultcontainer.style.display="block";

    //                 result(datas);

    //                 return false;
    //             }
                
    //             showpage(curridx);
    // }

    if(num ==1 && !formvalidation()) return false
    

    getpages[curridx].style.display ="none";
        curridx=curridx+num;   

        if(curridx >= getpages.length){
                    // getform.submit();

                    getform.style.display ="none";
                    getresultcontainer.style.display="block";

                    result(datas);

                    return false;
                }
                showpage(curridx);
    



}
