function Validate(){
    var name=document.final.name.value;
    var email=document.final.email.value;
    var gender=document.final.gender.value;
    var city=document.final.city.value;
    if(name==null||name==" "){
        alert("Name cant be blank");
        return false;
    }
    
    const domain=email.indexOf("@");
    if(gender==null){
        alert("please select your gender");
        return false;
    }
    if(city=="NULL"){
        alert("Please select the destination");
        return false;
    }
    const ans=email.includes("@rknec.edu",domain)
    if(ans==false){
       alert("Enter valid email");
        return false;
    }
    
}