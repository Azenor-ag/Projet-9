console.log("coucou")
//ajout nominations//
function nominations(){
let nomination = document.querySelector("main");
let oscar = document.createElement("section");
nomination.appendChild(oscar);
const imageElement = document.createElement("img");
imageElement.src = "foce-child/section_finale.png";
oscar.appendChild(imageElement);
}
nominations();

/*vidéo banner*/
function insertVideo()
{const banner = document.querySelector(".banner");
banner.innerHTML = '<video auto play muted loop class="banner"><source src="foce-child/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4"></video>';
}
insertVideo();

/*titres*/

const scroll = document.querySelector("h1,h2,h3");
window.addEventListener("scroll", function () {
    window.classList.add('swipe');/*keyframes swipe*/
})

/*carrousel*/

let newCaroussel