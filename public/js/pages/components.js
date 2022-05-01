
// scroll up
document.getElementById("button-up").addEventListener("click", scrollup);

function scrollup(){
    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
    if(currentScroll > 0){
        window.requestAnimationFrame(scrollup);
        window.scrollTo (0, currentScroll - (currentScroll / 25));
        buttonUp.style.transform = "scale(0)";
    }
}

buttonUp = document.getElementById("button-up");
window.onscroll = function(){
    var scroll = document.documentElement.scrollTop;
    if(scroll > 400){
        buttonUp.style.transform = "scale(1)";
    }
    else if(scroll < 400){
        buttonUp.style.transform = "scale(0)";
    }
}


// Loader

window.addEventListener('load', () => {
    const contentloader = document.querySelector('.content-loader');
    contentloader.style.opacity = 0
    contentloader.style.visibility = 'hidden'
})


// Dark-mode
const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');

    // guardamos el modo en localstorage
    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-mode','true');
    } else {
        localStorage.setItem('dark-mode','false');
    }
});

// obtenemos el modo actual 
if (localStorage.getItem('dark-mode') === 'true') {
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
} else {
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}