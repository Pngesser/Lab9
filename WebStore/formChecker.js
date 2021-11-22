function validate()
{
  if(Mango()==true && IPhone()==true && waterBottle()==true)
  { 
    returnToPreviousPage();
    return false;
  }
  else{
    return true;
  }
  
}

function Mango(){
    if(document.getElementById('mangoQuanity') < 0 && document.getElementById('mangoQuanity')==""){ 
        return true;
    }
    else{
        return false
    }
}

function IPhone(){
    if(document.getElementById('IPhoneQuanity') < 0 && document.getElementById('IPhoneQuanity')==""){ 
        return true;
    }
    else{
        return false
    }
}

function waterBottle(){
    if(document.getElementById('bottleQuanity') < 0 && document.getElementById('bottleQuanity')==""){ 
        return true;
    }
    else{
        return false
    }
}

function email(){
    if(document.getElementById('email') == ""){
        alert("Must fill out email");
        return false;
    }
}