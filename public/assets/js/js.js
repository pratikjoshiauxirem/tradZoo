window.onload=setInterval(plus(), 5000);

function plus(){
   var aci= document.getElementById('aci');
   if(aci.scrollLeft>1280){
    aci.scrollLeft=0;   
   }
   aci.scrollLeft=aci.scrollLeft+document.getElementById('pratik').clientWidth;
   
 
}
function minus(){
   
   if(aci.scrollLeft<320){
    plus();
   }
   aci.scrollLeft=aci.scrollLeft - document.getElementById('pratik').clientWidth;
 }
//
 function plus1(){
    var aci= document.getElementById('r1');
    if(aci.scrollLeft>1280){
     aci.scrollLeft=0;   
    }
    aci.scrollLeft=aci.scrollLeft+document.getElementById('r2').clientWidth;
    
  
 }
 function minus1(){
    
    if(aci.scrollLeft<320){
     plus();
    }
    aci.scrollLeft=aci.scrollLeft - document.getElementById('pratik').clientWidth;
  }
 