class Inputs{
    // This class is to extract the inputs in the form and store them in a local storage.
    name; email; phone_number;

    constructor(name, email, phone_number){
        this.name = name;
        this.email = email;
        this.phone_number = phone_number;
    }
    setstoring(){
        localStorage.setItem("user_name", this.name);
        localStorage.setItem("user_email", this.email);
        localStorage.setItem("phone_no", this.phone_number);
    }
    getreturning(){
        var ename = localStorage.getItem("user_name");
        var eemail = localStorage.getItem("user_email");
        var ephone = localStorage.getItem("phone_no");
        
        return { name: ename, email: eemail, phone: ephone }
    }
}

function store_user_input(){
    let n = document.getElementById("form-username").value;
    let e = document.getElementById("form-email").value;
    let p = document.getElementById("form-phone").value;

    var d = new Inputs(n, e, p);

    d.setstoring();
}

function retrieve_user_input(){
    let n = document.getElementById("form-username");
    let e = document.getElementById("form-email");
    let p = document.getElementById("form-phone");

    var rd = new Inputs(null, null, null);

    const {name, email, phone} = rd.getreturning();
    n.value = name;
    e.value = email;
    p.value = phone;
}

var def = document.querySelector("form");
def.addEventListener("submit", store_user_input);
window.addEventListener("load", retrieve_user_input);