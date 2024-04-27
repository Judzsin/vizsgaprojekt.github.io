
document.addEventListener('DOMContentLoaded', function() {
    const cardImages = document.querySelectorAll('.card-img');

    cardImages.forEach(function(cardImage) {
        cardImage.addEventListener('click', function() {
            
            this.style.transition = 'filter 0.5s ease'; 
            this.style.filter = 'brightness(100%)'; 
        });
    });
});


function farkasdavidgithub(){
    window.open('https://github.com/Judzsin', '_blank');

}

function semenckidavidgithub(){
    window.open('https://github.com/davidvok-coder', '_blank');
}

function tiszatiborgithub(){
    window.open('https://github.com/666Dracula999', '_blank');
}















