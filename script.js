console.log("coucou");

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
{observer.observe (r)});

/*carrousel*/

 let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    initialSlide: 1,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });

/*nuages*/

const cloudIntersect = function (entries, observer) {
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio)
        {
    entry.target.classList.add('translatecloud')
    observer.unobserve(entry.target)}
})
}
const cloudObserver = new IntersectionObserver(cloudIntersect, options);
document.querySelectorAll('.clouds').forEach(function (r)
{cloudObserver.observe (r)});