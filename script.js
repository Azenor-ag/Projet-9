console.log("coucou")

/*vidéo banner*/
const addVideo = document.querySelector(".banner");
    if addVideoListener('DOMContentLoaded',true){

else

    }
/*banner.innerHTML = <video auto play muted loop class="banner"><source src="<?php echo get_template_directory_uri() . 'foce-child/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'" type="video/mp4"></video>';
*/
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