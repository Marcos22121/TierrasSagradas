// scripts/app.js
document.addEventListener("DOMContentLoaded", () => {
    // Tilt/parallax en cards
    const cards = document.querySelectorAll(".card-skewed");
    if(cards.length){
        cards.forEach(card => {
            card.addEventListener("mousemove", e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const deltaX = (x - centerX) / centerX;
                const deltaY = (y - centerY) / centerY;
                card.style.transform = `skewX(-12deg) rotateY(${deltaX*5}deg) rotateX(${-deltaY*5}deg) scale(1.03)`;
            });
            card.addEventListener("mouseleave", () => {
                card.style.transform = "skewX(-12deg) rotateY(0deg) rotateX(0deg) scale(1)";
            });
        });
    }

    // Smooth scroll links internos
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute("href"));
            if(target){
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});
