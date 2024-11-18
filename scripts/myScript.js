/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Scroll Up function

function scrollUp(){
    //window.scrollTo(0, 0);
    /*--window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });--*/
    $("html,body").animate({scrollTop: 0}, "slow");
}

//Scroll Into View Function

function scrollToGraduation() {
    let e = document.getElementById("graduation");
    e.scrollIntoView({
        block: 'start',
        behavior: 'smooth',
        inline: 'start'
    });
}

function scrollToPersonal() {
    let e = document.getElementById("personal");
    e.scrollIntoView({
        block: 'start',
        behavior: 'smooth',
        inline: 'start'
    });
}

function scrollToEvents() {
    let e = document.getElementById("events");
    e.scrollIntoView({
        block: 'start',
        behavior: 'smooth',
        inline: 'start'
    });
}

// This ends the block to the window 
// bottom and also aligns the view to the center 
function scrollFunction2() {
    let e = document.getElementById("personal");
    e.scrollIntoView({
        block: 'end',
        behavior: 'smooth',
        inline: 'center'
    });
}  

//Validation function

var errorMessage = "";
function validate(){
                
    errorMessage = "";
    var nameError = validateName();
    var phoneError = validatePhone();
    var emailError = validateEmail();
    var subjectError = validateSubject();
    var messageError = validateMessage();
                
    if(nameError && phoneError && emailError && subjectError && messageError){
        //alert("Every detail was entered correctly.");            
        document.frmDetails.submit();
        alert("Message Sent.");
    }else{
        alert(errorMessage);
    }
}
            
function validateName(){
                
    var firstName = document.frmDetails.name.value;
    var lastName = document.frmDetails.surname.value;
                
    if(firstName === "" || lastName === ""){
                    
        errorMessage += "Enter both Name and Surname. \n";
        document.getElementById("name").style.backgroundColor = "red";
        document.getElementById("surname").style.backgroundColor = "red";
        return false;
    }else{
        document.getElementById("name").style.backgroundColor = "";
        document.getElementById("surname").style.backgroundColor = "";
        return true;
    }
}
            
function validatePhone(){
                
    var pNumber = document.frmDetails.phone.value;
    if(pNumber === ""){
        errorMessage += "Enter your Phone Numbers. \n";
        document.getElementById("phone").style.backgroundColor = "red";
        return false;
    }else{
        document.getElementById("phone").style.backgroundColor = "";
        return true;
    }
}
            
function validateEmail(){
                
    var emailAddress = document.frmDetails.email.value;
    var valid = emailAddress.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if(valid !== 0){
                    
        errorMessage += "Invalid Email Address \n";
        document.getElementById("email").style.backgroundColor = "red";
        return false;
    } else{
        document.getElementById("email").style.backgroundColor = "";
        return true;
    }
}
            
function validateSubject(){
                
    var theSubject = "";
    var numOfOptions = document.frmDetails.subject.length;
    for(var index = 0; index < numOfOptions; index++){
                    
        if(document.frmDetails.subject[index].selected){

            theSubject = document.frmDetails.subject[index].value;
            break;
        }
    }
                
                
    if(theSubject === "SUBJECT"){
                    
        errorMessage += "Select a subject for your message. \n";
        document.getElementById("subject").style.backgroundColor = "red";
            return false;
    }else{
        document.getElementById("subject").style.backgroundColor = "";
        return true;
    }
}
            
function validateMessage(){
                
    var theMessage = document.frmDetails.message.value;
    if(theMessage === ""){
                    
        errorMessage += "Enter your Message. \n";
        document.getElementById("message").style.backgroundColor = "red";
        return false;
    }else{
        document.getElementById("message").style.backgroundColor = "";
        return true;
    }
}