function a(){
    if(document.f.reclamation.value=="") {
    alert ("veuillez ajouter un text dans la zone de reclamation") ;
    return false; 
}
    
}  
function b(){
    var x1= document.getElementById("course1").value;  
    var select1=document.getElementById("s1");   
    if(select1.selectedIndex==false) {
        alert("veuiller selectioner le type de cours à ajouter"); 
        return false;
    }
    
      if(x1==""){ alert("tapez le nom de cours à ajouter"); return false;}
       
} 
function c(){ 
    var select2=document.getElementById("s2"); 
        if(select2.selectedIndex==false){ 
        alert("veuiller selectioner le type de cours à rechercher") 
        return false;
    }
    
    x2= document.getElementById("course2").value;   
     if(x2==""){ 
        alert("ajouter le nom de cours à chercher"); 
     return false;
     }
} 
