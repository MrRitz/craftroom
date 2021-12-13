const redShirt = document.getElementById('red');
const whiteShirt = document.getElementById('white')
const shirt = document.getElementById('shirt');


redShirt.addEventListener('click', () => {
    shirt.src = "img/shirtRed.jpg"
})



whiteShirt.addEventListener('click', () => {
    shirt.src = "img/shirtWhite.png"
})