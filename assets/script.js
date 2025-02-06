    // Obtener todos los enlaces del menú nav
    const navLinks = document.querySelectorAll('.nav-link');

    // Agregar evento de clic a cada enlace
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Eliminar la clase 'active' de todos los enlaces
            navLinks.forEach(nav => nav.classList.remove('active'));

            // Agregar la clase 'active' al enlace clicado
            this.classList.add('active');
        });
    });