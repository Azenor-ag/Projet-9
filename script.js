console.log("coucou")

/*titres   Ok*/
document.addEventListener('DOMContentLoaded', (event) => {
 
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const titres = entry.target.querySelector("h1,h2,h3");
  
      if (entry.isIntersecting) {
        titres.classList.add('toAnim');
        return; 
      }
   
      titres.classList.remove('toAnim');
    });
  });
  
  observer.observe(document.querySelector('section'));
});


/*carrousel

   constructor (element, options = {}){
    this.element = element
this.options = Object.assign({},{
    slidesToScroll =  1,
    slidesVisible = 1},options) 
let root =querySelector('#characters')}
}
document.addEventListener('scroll', function (){
    new caroussel(document.querySelector('#characters'),
    carrousel.addclassList("main-character");
    let otherCharacters = document.querySelector('other-characters');
    otherCharacters.addclassList.remove('other-characters');
    {slideToScroll = 3,
    slideVisible = 3}
    )
})
*/