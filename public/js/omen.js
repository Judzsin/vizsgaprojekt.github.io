
document.addEventListener('DOMContentLoaded', function() {
    const cardImages = document.querySelectorAll('.card-img');

    cardImages.forEach(function(cardImage) {
        cardImage.addEventListener('click', function() {
            
            this.style.transition = 'filter 0.5s ease'; 
            this.style.filter = 'brightness(100%)'; 
        });
    });
});


















