
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

// result visual
var editFind = document.getElementById('editFind');
var arrowIcon = document.getElementById('arrowIcon');

editFind.onclick = function() {
    arrowIcon.classList.toggle("rotate");
}


// const rangeInput = document.querySelectorAll(".range-input input"),
// priceInput = document.querySelectorAll(".price-input input"),
// progress = document.querySelector(".slider .progress");
// let priceGab = 1000;
// priceInput.forEach(input => {
//     input.addEventListener("input", e =>{
//         let minVal = parseInt(priceInput[0].value),
//         maxVal = parseInt(priceInput[1].value);

//         if ((maxVal - minVal >= priceGab) && maxVal <= 10000) {
//             if (e.target.className === "input-min") {
//                 rangeInput[0].value = minVal;
//                 progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
//             }else{
//                 rangeInput[1].value = maxVal;
//                 progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
//             }
            
//         }
//     });
// });

// rangeInput.forEach(input => {
//     input.addEventListener("input", e =>{
//         let minVal = parseInt(rangeInput[0].value),
//         maxVal = parseInt(rangeInput[1].value);

//         if (maxVal - minVal < priceGab) {
//             if (e.target.className === "range-min") {
//                 rangeInput[0].value = maxVal - priceGab;
//             }else{
//                 rangeInput[1].value = minVal + priceGab;
//             }
            
//         }else{
//             priceInput[0].value = minVal;
//             priceInput[1].value = maxVal;
//             progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
//             progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
//         }
//     });
// });