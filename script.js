console.log("coucou")

/*titres Ok*/
const ratio = 0.5
const options = {
    root: null, /* zone affichage*/
    rootMargin: '0px',
    threshold : ratio/*s'activera quand l élement entier sera visible*/
}
const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio)
        {
    entry.target.classList.add('reveal-visible')
    observer.unobserve(entry.target)}
})
}
const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(function (r)
{observer.observe (r)})

/* parallax*/

/*
function parallax(){
const video = document.getElementById('.parallax');
video.style.top = -(window.pageYOffset / 4)+ "px";
}

window.addEventListener("scroll", parallax , false );
*/
