document.addEventListener('DOMContentLoaded', () => {
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
});
