const moreAbout = document.querySelector('.toggle-more-about');
const aboutLeft = document.querySelector('.about-left');
const aboutRight = document.querySelector('.about-right');


const toggle_more_about = () =>{
    moreAbout.classList.toggle("no-display");
    aboutLeft.classList.toggle("no-display");
    aboutRight.classList.toggle("no-display");
}