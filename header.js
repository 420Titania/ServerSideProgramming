document.addEventListener('DOMContentLoaded', () => {
    const divs = document.querySelectorAll('.home, .about, .popular');
    const navbar = document.getElementById('topnav');

    function updateActive() {
        const scrollPos = window.scrollY;

        divs.forEach((div) => {
            const divTop = div.offsetTop;
            const divHeight = div.clientHeight;

            //offset by 20 because navbar
            if (scrollPos + 20 >= divTop && scrollPos < divTop + divHeight) {
            navbar.querySelectorAll('a').forEach((link) => {
            link.classList.remove('active');
            });

            const correspondingLink = navbar.querySelector(`a[href="#${div.id}"]`);

            if (correspondingLink) {
                correspondingLink.classList.add('active');
            }
        }
    });
    }
        window.addEventListener('scroll', updateActive);
        window.addEventListener('load', updateActive);
    });