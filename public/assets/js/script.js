let activeItem = document.querySelector('.nav-item.active');
let currentSection = document.location.href.split('#')[1];

if (currentSection !== undefined && currentSection !== 'about') {
    const startItem = document.querySelector('.nav-item.' + currentSection);
    if (startItem !== null) {
        activeItem.classList.remove('active');
        startItem.classList.add('active');
        activeItem = startItem;
    }
}

const navItems = document.getElementsByClassName('nav-item');

for (let i = 0; i < navItems.length; i++) {
    navItems[i].onclick = e => {
        activeItem.classList.remove('active');
        e.target.parentNode.classList.add('active');
        activeItem = e.target.parentNode;
    }
}

$(function(){
    var navMain = $(".navbar-collapse"); // avoid dependency on #id
    // "a:not([data-toggle])" - to avoid issues caused
    // when you have dropdown inside navbar
    navMain.on("click", "a:not([data-toggle])", null, function () {
        navMain.collapse('hide');
    });
});

document.getElementsByClassName('chevron-link')[0].onclick = e => {
    activeItem.classList.remove('active');
    const solutionItem = document.querySelector('.nav-item.solution');
    solutionItem.classList.add('active');
    activeItem = solutionItem;
    return true;
};
