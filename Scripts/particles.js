// scripts/particles.js
document.addEventListener("DOMContentLoaded", () => {
    // Solo inicializa si existe el contenedor
    const heroParticles = document.getElementById("hero-particles");
    if(heroParticles){
        tsParticles.load("hero-particles", {
            fpsLimit: 30,
            particles: {
                number: { value: 25, density: { enable: true, area: 800 } },
                color: { value: ["#F5D38A", "#C9952E"] },
                shape: { type: "circle" },
                opacity: { value: 0.6, random: true },
                size: { value: 2, random: true },
                move: { enable: true, speed: 0.3, direction: "none", random: true, straight: false, outModes: "out" }
            },
            detectRetina: true,
            interactivity: {
                events: {
                    onhover: { enable: false }
                }
            }
        });
    }
});
