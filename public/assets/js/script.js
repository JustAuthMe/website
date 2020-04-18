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

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

const localStorageKey = 'cookieChoice';
const cookiesChoice = localStorage.getItem(localStorageKey);

function loadAnalytics() {
    const matomo = 'var _paq = window._paq || [];' +
        '_paq.push([\'trackPageView\']);' +
        '_paq.push([\'enableLinkTracking\']);' +
        '(function() {' +
        '    var u="//analytics.justauth.me/";' +
        '    _paq.push([\'setTrackerUrl\', u+\'matomo.php\']);' +
        '    _paq.push([\'setSiteId\', \'1\']);' +
        '    var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];' +
        '    g.type=\'text/javascript\'; g.async=true; g.defer=true; g.src=u+\'matomo.js\'; s.parentNode.insertBefore(g,s);' +
        '})();';

    const script = document.createElement('script');
    script.type = 'text/javascript';
    try {
        script.appendChild(document.createTextNode(matomo));
        document.body.appendChild(script);
    } catch (e) {
        script.text = matomo;
        document.body.appendChild(script);
    }
}

function setCookiesChoice(choice) {
    if (choice) {
        loadAnalytics();
    }

    localStorage.setItem(localStorageKey, choice ? 'ok' : 'ko');
    document.getElementById('cookies_prompt').style.display = 'none';
}

if (cookiesChoice === 'ok' || cookiesChoice === 'ko') {
    document.getElementById('cookies_prompt').style.display = 'none';
}

if (cookiesChoice === 'ok') {
    loadAnalytics();
}
