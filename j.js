let cross = document.getElementById('cross')
let cross1 = document.getElementById('cross-1')
let cross2 = document.getElementById('cross-2')
cross.addEventListener('click', () =>{
    cross1.classList.toggle('out-top')
    cross2.classList.toggle('out-bottom')
    document.getElementsByClassName('timer')[0].style.display = none
})

array.forEach(element => {
    
});