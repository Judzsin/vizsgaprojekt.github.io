
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



/*----------------------------------------------------*/

document.addEventListener('DOMContentLoaded', function() {
    const inosuke = document.getElementById('inosuke');
    const screenWidth = window.innerWidth;

    function animate() {
        // Balról jobbra mozgatás
        inosuke.animate([
            { left: '-10%', transform: 'scaleX(1)' },
            { left: `${screenWidth}px`, transform: 'scaleX(1)' }
        ], {
            duration: 2000, // Az animáció időtartama 2 másodperc
            easing: 'linear'
        }).onfinish = function() {
            // Gyors flip jobbra-balra
            inosuke.style.transform = 'scaleX(-1)';

            // Jobbról balra mozgatás
            inosuke.animate([
                { left: `${screenWidth}px`, transform: 'scaleX(-1)' },
                { left: '-10%', transform: 'scaleX(-1)' }
            ], {
                duration: 2000, // Az animáció időtartama 2 másodperc
                easing: 'linear'
            }).onfinish = function() {
                // Gyors flip vissza balra-jobbra
                inosuke.style.transform = 'scaleX(1)';

                // Újraindítja az animációs ciklust
                animate();
            };
        };
    }

    // Animáció elindítása
    animate();
});














