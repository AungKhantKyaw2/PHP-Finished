

$(document).ready(function(){

 //Start Back to Top
 $('.btn-backtotops').hide();
 $(window).scroll(topscroll);

//  $(window).scroll(function(){
//     // 
// let getscrolltop= $(this).scrollTop();
    // if(getscrolltop>=370){
    //     $('.btn-backtotops').fadeIn(1000);
    // }
    // else{
    //     $('.btn-backtotops').fadeOut(1000);
    // }
//  });

function topscroll(){
    let getscrolltop= $(this).scrollTop();
    if(getscrolltop>=370){
           $('.btn-backtotops').fadeIn(1000);
       }
       else{
           $('.btn-backtotops').fadeOut(1000);
       }
    }
//End Back to Top


    // console.log("hi");
    // start Navbar
    $(window).scroll(function(){
        // console.log(this);
     let getscrolltop= $(this).scrollTop();
    //  console.log(getscrolltop);
     if(getscrolltop >=200 ){
     $(".navbar").addClass("navmenus");
     }
     else{
        $(".navbar").removeClass("navmenus");
     }
    });
    // End Navbar

    $(".navbuttons").click(function(e){
        console.log(e.target);
     $(this).toggleClass('crossxs');
    });


    // <!-- start Property section  -->
$(".propertylists").click(function(){
          $(this).addClass("activeitems").siblings().removeClass("activeitems");

    //    const filtervalue= $(this).attr("data-filter");
    const filtervalue=$(this).data('filter');
    // console.log(filtervalue);

    if(filtervalue==="all"){
        $(".filters").show("slide",500);
    }else{
        //Method1 
        // $('.filters').hide();
        //   $('.filters').filter('.'+filtervalue).show();


        // Method2
        $('.filters').not('.'+filtervalue).hide("slide",500);
        $('.filters').filter('.'+filtervalue).show("slide",500);
    }

        });


    // <!-- End Property section  -->
    

    // <!-- Start Adv section  -->
    $(window).scroll(function(){
        // console.log(this);
     let getscrolltop= $(this).scrollTop();
    //  console.log(getscrolltop);
     if(getscrolltop >=1200 ){
     $(".advimages").addClass("fromlefts");
     $(".advtexts").addClass("fromrights");
     }
     else{
        $(".advimages").removeClass("fromlefts");
        $(".advtexts").removeClass("fromrights");
     }
    });

    // <!-- End Adv section  -->


    // <!-- start Footer section  -->
   
      const getyear=document.getElementById('getyear');
    const getfullyear= new Date().getFullYear();
    getyear.textContent=getfullyear;
// <!-- End Footer section  -->
});




