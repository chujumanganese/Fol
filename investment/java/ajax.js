// to get response only from the server
function q(){
    const w = document.getElementById("selectfromme");

    let variable = new XMLHttpRequest();
        variable.open("GET", "../documents-file/country.html");
        variable.send();

    variable.onreadystatechange = function() {
        if (variable.readyState == 4 && variable.status == 200) {
            console.log(variable.responseText)
            w.innerHTML = variable.responseText;
        }
    }
    
}

// to pick and load any error
function error_p(ids, file_to){
    const ife = document.getElementById(ids);

    let able = new XMLHttpRequest();
        able.open("GET", file_to + "?" + ids);
        able.send();

    able.onreadystatechange = function() {
        if (able.readyState == 4 && able.status == 200) {
            ife.innerHTML = able.responseText;
        }
    }
}

var send_name = document.getElementById("nsam");

send_name.addEventListener("mouseout", ()=>{
    if(send_name.value == "" || send_name.value == " "){
        error_p("i_name", "validate_input.php");
    }else{
        document.getElementById("i_name").style.display = "none";
    }
});
// const element = document.getElementById("content");
// element.scrollIntoView();