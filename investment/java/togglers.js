const plus = document.querySelectorAll(".goups");
const act = document.querySelector(".accordion-c");

plus.forEach(s => {
s.addEventListener("click", ()=>{
    s.classList.toggle("srs");
    act.style.height = "auto";
})
});

// the second part 
const scp = document.querySelector(".slide-in-one");
const scllp = document.querySelector(".lin");

function doneitwer(){

    if(window.innerWidth <= 720){
        scllp.classList.toggle("show-pane");
        scp.classList.toggle("show-pane");
    }else{
        scp.style.display = "none";
    }
    
}