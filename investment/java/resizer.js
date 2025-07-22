var s_po = document.querySelector(".slide-in-one");
const scklp = document.querySelector(".lin");

function close_tracks(){
    if(window.innerWidth > 720){
        if(s_po.classList.contains("show-pane")){
            s_po.classList.remove("show-pane");
            scklp.classList.remove("show-pane");
        }
    }
}