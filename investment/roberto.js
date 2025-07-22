const names = document.querySelector("#form-username");
const email = document.querySelector("#form-email");
const phone_number = document.querySelector("#form-phone");
const country = document.querySelector("#form-countries");
const referral = document.querySelector("#form-refs");
const pcode = document.querySelector("#postalcode");
const password = document.querySelector("#first_pass");
const confirm_password = document.querySelector("#confirm_pass");
const form = document.querySelector("#forms_submit");

class roberto{

    setvalid(invalid_element){
        if(invalid_element.className == "invalid"){
            invalid_element.nextElementSibling.innerHTML = "";
            invalid_element.className = "valid";
        }
        return;
    }

    setinvalid(invalid_element, error_message){
        invalid_element.nextElementSibling.innerText = error_message;
        invalid_element.className = "invalid";
    }

    isempty(va){
        // if it is empty, return true, else false. 
        let v = va.value;
        if(v.trim() === ""){
            this.setinvalid(va, `Enter your ${va.name}`);
            return true;
        }else{
            this.setvalid(va);
            return false;
        }
    }
    contain_only_letters(va){
        let regex = /^[a-zA-Z]{2,100}$/;
        if(regex.test(va.value)){
            this.setvalid(va);
            return false;
        }else if(va.value.length < 2){
            this.setinvalid(va, `Enter a valid ${va.name}`);
            return true;
        }
        else{
            this.setinvalid(va, `${va.name} must contain only letters`);
            return true;
        }
    }
    check_length(pass, min, max){
        if(pass.value.length >= min && pass.value.length <= max){
            this.setvalid(pass);
            return false;
        }else if(pass.value.length < min){
            this.setinvalid(pass, `${pass.name} must be at least ${min} characters long`);
            return true;
        }else{
            this.setinvalid(pass, `${pass.name} must be less than ${max} characters`);
            return true;
        }
    }
    password_characters(pass){
        const hasLowerCase = /[a-z]/;
        const hasUpperCase = /[A-Z]/;
        const hasDigit = /\d/;
        const hasSymbol = /[^a-zA-Z0-9]/;
        let tmessage = " must contain small, capital letters, number and symbols"

        if(!hasLowerCase.test(pass.value)){
            this.setinvalid(pass, `${pass.name} ${tmessage}`);
            return true;
        }else if(!hasUpperCase.test(pass.value)){
            this.setinvalid(pass, `${pass.name} ${tmessage}`);
            return true;
        }else if(!hasDigit.test(pass.value)){
            this.setinvalid(pass, `${pass.name} ${tmessage}`);
            return true;
        }else if(!hasSymbol.test(pass.value)){
            this.setinvalid(pass, `${pass.name} ${tmessage}`);
            return true;
        }else{
            this.setvalid(pass);
            return false;
        }
    }
    password_compare(pass1, pass2){
        if(pass1.value === pass2.value){
            this.setvalid(pass2);
            return false;
        }else{
            this.setinvalid(pass2, `Passwords don't match`);
            return true;
        }
    }
    onlynumbers(element){
        let regex = /^[0-9]+$/
        if(regex.test(element.value)){
            this.setvalid(element);
            return false;
        }else{
            this.setinvalid(element, `Enter a valid ${element.name}`);
            return true;
        }
    }
    check_no_length(no){
       if(no.value.length < 7){
            this.setinvalid(no, `Enter a valid ${no.name}`);
            return true;
       }else{
            this.setvalid(no);
            return false;
       }
        
    }
    email_verified(email){
        let regex = /^([a-z A-Z 0-9 \. _]+)@([a-z A-Z]+).([a-z A-Z]{2,6})$/

        if(!regex.test(email.value)){
            this.setinvalid(email, `Invalid ${email.name}`);
            return true;
        }else{
            this.setvalid(email);
            return false;
        }
    }
}

var d = new roberto();

names.addEventListener("focusout", validate);
phone_number.addEventListener("focusout", validate_numbers)
password.addEventListener("focusout", pass_validate);
confirm_password.addEventListener("focusout", p_compare);
email.addEventListener("focusout", email_validation);
form.addEventListener("click", (e)=>{ forming(e)});

function validate(){
    if(d.isempty(names)) return;
    if(d.contain_only_letters(names)) return;
    return true;
}

function pass_validate(){
    if(d.isempty(password)) return;
    if(d.check_length(password, 8, 100)) return;
    if(d.password_characters(password)) return;
    return true;
}

function validate_numbers(){
    if(d.isempty(phone_number)) return;
    if(d.onlynumbers(phone_number)) return;
    if(d.check_no_length(phone_number)) return;
    return true
}

function email_validation(){
    if(d.isempty(email)) return;
    if(d.email_verified(email)) return;
    return true;
}

function p_compare(){
    if(d.password_compare(password, confirm_password)) return;
    return true;
}

function forming(e){
    e.preventDefault();
    if(validate() && email_validation() && validate_numbers() && pass_validate() && p_compare()){
       document.querySelector("form").style.display = "none";
       document.querySelector(".containering112").style.display = "block";
    }
}

// the loading icon tobe at the end of the registration 
