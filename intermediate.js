
function template(ele){

    // display_list();

    var name=ele.id;
    console.log(name);
    switch(name){
      case 'btn-bolly':document.getElementsByClassName('templates')[0].style.display="block";
                       document.getElementsByClassName('btn')[0].style.display="none";
                       document.getElementsByClassName('btn')[1].style.display="block";
                       document.getElementsByClassName('btn')[2].style.display="block";
                       document.getElementsByClassName('btn')[3].style.display="block";
                       document.getElementsByClassName('templates')[1].style.display="none";
                       document.getElementsByClassName('templates')[2].style.display="none";
                       document.getElementsByClassName('templates')[3].style.display="none";
                       break;
      case 'btn-holly':document.getElementsByClassName('templates')[1].style.display="block";
                      //  document.getElementsByClassName('templates')[1].style.marginLeft="3rem";
    
                        document.getElementsByClassName('btn')[1].style.display="none";
                        document.getElementsByClassName('btn')[0].style.display="block";
                        document.getElementsByClassName('btn')[2].style.display="block";
                        document.getElementsByClassName('btn')[3].style.display="block";
                        document.getElementsByClassName('templates')[0].style.display="none";
                       document.getElementsByClassName('templates')[2].style.display="none";
                       document.getElementsByClassName('templates')[3].style.display="none";
                        break;
      case 'btn-h-series':document.getElementsByClassName('templates')[2].style.display="block";
                          document.getElementsByClassName('btn')[2].style.display="none";
                          document.getElementsByClassName('btn')[0].style.display="block";
                          document.getElementsByClassName('btn')[1].style.display="block";
                          document.getElementsByClassName('btn')[3].style.display="block";
                          document.getElementsByClassName('templates')[1].style.display="none";
                       document.getElementsByClassName('templates')[3].style.display="none";
                       document.getElementsByClassName('templates')[0].style.display="none";
                        break;
      case 'btn-e-series':document.getElementsByClassName('templates')[3].style.display="block";
                           document.getElementsByClassName('btn')[3].style.display="none";
                           document.getElementsByClassName('btn')[0].style.display="block";
                          document.getElementsByClassName('btn')[1].style.display="block";
                          document.getElementsByClassName('btn')[2].style.display="block";
                           document.getElementsByClassName('templates')[1].style.display="none";
                       document.getElementsByClassName('templates')[2].style.display="none";
                       document.getElementsByClassName('templates')[0].style.display="none";
                          break;
    }
};

 for(i=0;i<24;i++){

 
document.getElementsByClassName('quiz_list')[i].addEventListener("click",function(){
    
    window.location.href ="intermediate.html";
      
  })};

  
    
     
    