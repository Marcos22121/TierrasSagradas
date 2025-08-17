window.addEventListener('load', () => {
    const title = document.getElementById('hero-title');
    const subtitle = document.getElementById('hero-subtitle');
    const btn = document.getElementById('exploreBtn');

    function typeText(element, text, delay = 150, callback) {
        element.textContent = '';
        const words = text.split(' ');
        let i = 0;

        function nextWord() {
            if (i < words.length) {
                element.textContent += (i === 0 ? '' : ' ') + words[i];
                i++;
                setTimeout(nextWord, delay);
            } else if (callback) {
                callback();
            }
        }
        nextWord();
    }

    // Animación hero
    typeText(title, "Bienvenido a Tierras Sagradas", 200, () => {
        subtitle.style.opacity = 1;
        typeText(subtitle, "Explora la mitología de Tierras Sagradas y sus figuras, mitos y diversos paisajes.", 50, () => {
            btn.style.opacity = 1;
        });
    });

    // Scroll al lore
    btn.addEventListener('click', () => {
        document.getElementById('lore-section').scrollIntoView({ behavior: 'smooth' });
    });
});
