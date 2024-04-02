/*document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.wrapper');
    const gombbe = document.querySelector('.gombloginfel');
    const bezaras = document.querySelector('.bezaras');
    const elfelejtettJelszoLink = document.querySelector('.megjegyzelfelejt a');

    gombbe.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
    });

    bezaras.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
    });

    elfelejtettJelszoLink.addEventListener('click', (event) => {
        event.preventDefault();

        const bejelentkezesTab = document.querySelector('.bejelentkezes');
        bejelentkezesTab.remove();

        const newTab = document.createElement('div');
        newTab.classList.add('form-box', 'elfelejtett-jelszo');
        newTab.innerHTML = `
            <h2>Elfelejtett jelszó ?</h2>
            <p>Kérem adja meg az email címét amivel regisztrált és arra küldünk egy email amivel megváltoztathatja a jelszavát.</p>
            <br>
            <form action="#">
                <div class="bevitelimezo">
                    <span class="ikon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email cím</label>
                </div>
                <br>
                <button type="submit" class="gomb">Email küldése</button>
                <br>
                <br>
                <button class="gomb bejelentkezes-gomb">Bejelentkezés</button>
            </form>`;

        wrapper.appendChild(newTab);

        const bejelentkezesGomb = newTab.querySelector('.bejelentkezes-gomb');
        bejelentkezesGomb.addEventListener('click', () => {
            newTab.remove();
            wrapper.appendChild(bejelentkezesTab);
        });
    });
}); */



document.getElementById("cardContainer").addEventListener("mousemove", function(event) {
    var container = document.getElementById("cardContainer");
    var boundingRect = container.getBoundingClientRect();
    var mouseX = event.clientX - boundingRect.left;
    var mouseY = event.clientY - boundingRect.top;

    var cards = container.querySelectorAll(".interactive-card");
    cards.forEach(function(card) {
        var cardBoundingRect = card.getBoundingClientRect();
        var cardCenterX = cardBoundingRect.left + cardBoundingRect.width / 2;
        var cardCenterY = cardBoundingRect.top + cardBoundingRect.height / 2;

        var deltaX = mouseX - cardCenterX;
        var deltaY = mouseY - cardCenterY;

        var rotationX = deltaY / cardBoundingRect.height * -10;
        var rotationY = deltaX / cardBoundingRect.width * 10;

        card.style.transform = "rotateX(" + rotationX + "deg) rotateY(" + rotationY + "deg)";
    });
});



