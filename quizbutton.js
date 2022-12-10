
function template(ele){

    // display_list();

    var name=ele.id;
    console.log(name);
    switch(name){
      case 'btn-bolly':
                       for(i=0;i<4;i++)
                       {
                          if(i==0)
                          {
                            document.getElementsByClassName('btn')[i].style.display="none";
                            document.getElementsByClassName('templates')[i].style.display="block";
                          }
                          else{
                            document.getElementsByClassName('btn')[i].style.display="block";
                            document.getElementsByClassName('templates')[i].style.display="none";

                          }   
                       }
                       break;
      case 'btn-holly':
                   for(i=0;i<4;i++)
                   {
                     if(i==1)
                     {
                         document.getElementsByClassName('btn')[i].style.display="none";
                         document.getElementsByClassName('templates')[i].style.display="block";
                     }
                    else{
                          document.getElementsByClassName('btn')[i].style.display="block";
                          document.getElementsByClassName('templates')[i].style.display="none";

                        }
                    }
        
      
      
                       break;
      case 'btn-h-series':
                      for(i=0;i<4;i++)
                      {
                       if(i==2)
                       {
                           document.getElementsByClassName('btn')[i].style.display="none";
                           document.getElementsByClassName('templates')[i].style.display="block";
                       }
                     else{
                            document.getElementsByClassName('btn')[i].style.display="block";
                            document.getElementsByClassName('templates')[i].style.display="none";

                         }
                      }
        
                     break;
      case 'btn-e-series':
                            for(i=0;i<4;i++)
                            {
                               if(i==3)
                                {
                                  document.getElementsByClassName('btn')[i].style.display="none";
                                  document.getElementsByClassName('templates')[i].style.display="block";
                                }
                               else{
                                   document.getElementsByClassName('btn')[i].style.display="block";
                                  document.getElementsByClassName('templates')[i].style.display="none";

                                }


                            }
                          break;
    }
};

function filmClick(e)
{
  document.cookie="category="+e;
  window.location.href ="intermediate.php";

}
// for(i=0;i<12;i++){

//   var temp=document.getElementsByClassName('quiz_list')[i];
  
//   temp.addEventListener("click",function(){
  
 
//  //document.cookie="category="+genere;

//       window.location.href ="intermediate.php";
      
//    })};
  
 
  
    
     
    