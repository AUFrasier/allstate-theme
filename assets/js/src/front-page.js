//click events
document.querySelector('.roofing').addEventListener('click', function() {
    location.assign(window.location.href + "/residential-repair");
})
document.querySelector('.siding').addEventListener('click', function() {
    location.assign(window.location.href + "/siding");
})
document.querySelector('.windows').addEventListener('click', function() {
    location.assign(window.location.href + "/skylights");
})
document.querySelector('.gutter').addEventListener('click', function() {
    location.assign(window.location.href + "/gutters");
})
document.querySelector('.doors').addEventListener('click', function() {
    location.assign(window.location.href + "/doors");
})

//hover events
document.querySelector('.roofing').addEventListener('mouseover', function() {
    this.style.background = "#AAABAB";
})
document.querySelector('.siding').addEventListener('mouseover', function() {
    this.style.background = "#AAABAB";
})
document.querySelector('.windows').addEventListener('mouseover', function() {
    this.style.background = "#AAABAB";
})
document.querySelector('.gutter').addEventListener('mouseover', function() {
    this.style.background = "#AAABAB";
})
document.querySelector('.doors').addEventListener('mouseover', function() {
    this.style.background = "#AAABAB";
})

document.querySelector('.roofing').addEventListener('mouseout', function() {
    this.style.background = "white";
})
document.querySelector('.siding').addEventListener('mouseout', function() {
    this.style.background = "white";
})
document.querySelector('.windows').addEventListener('mouseout', function() {
    this.style.background = "white";
})
document.querySelector('.gutter').addEventListener('mouseout', function() {
    this.style.background = "white";
})
document.querySelector('.doors').addEventListener('mouseout', function() {
    this.style.background = "white";
})
