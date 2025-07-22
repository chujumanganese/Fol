const plus_icon = document.querySelector("#accordion-button");
const a = document.querySelector(".children");
const search = document.querySelector(".search-container");
const search_text = document.querySelector("#searching_admin")
const search_closer = document.querySelector(".search-container .x");

class open_close{

    Toggler(key, classy){
        key.classList.toggle(classy);
    }
    Swap_icon(change){
        if(change.innerHTML == "+"){
            change.innerHTML = "-";
        }else{
            change.innerHTML = "+";
        }
    }
    Search_bar(field){

    } 
}

var obj = new open_close();

plus_icon.addEventListener("click", executed);
search_closer.addEventListener("click", exited);
search_text.addEventListener("click", exited);

function executed(){
    obj.Toggler(a,"accordion");
    obj.Swap_icon(plus_icon);
}

function exited(){
   obj.Toggler(search, "off_x");
}
