let sections = document.querySelectorAll('section')
let navLinks = document.querySelectorAll('.navbarmenu a')

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop-150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('.navbarmenu a[href*=' + id + ']').classList.add
                ('active');
            });
        };
    });
};

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});

window.onload = function() {
    var body = document.body;
    var html = document.documentElement;
    var documentHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);

    if (documentHeight <= window.innerHeight) {
        body.style.overflowY = "hidden"; // Hide scrollbar if content fits within viewport
    }
};