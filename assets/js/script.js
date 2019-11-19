function loadAjax() {
    let xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject)
    {
        if (window.ActiveXObject)
        {
            try
            {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch(e)
            {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        else
        {
            xhr = new XMLHttpRequest();
        }
    }
    else
    {
        alert("Votre navigateur ne supporte pas l'objet XMLHttpRequest");
        return null;
    }

    return xhr;
}

function submitForm() {
    const email = document.getElementsByClassName('email')[0].value;
    const xhr = loadAjax();
    xhr.open('POST', 'customer.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function()
    {
        if (xhr.readyState === 4) {
            if (xhr.status === 200 || xhr.status === 0) {
                openAlert('success', l.alert.congrats)
            } else if (xhr.status === 400) {
                openAlert('error', l.alert.invalid);
            } else if (xhr.status === 403) {
                openAlert('error', l.alert.banned);
            } else if (xhr.status === 409) {
                openAlert('error', l.alert.exists);
            } else if (xhr.status === 429) {
                openAlert('error', l.alert.wait);
            }
        }

    };
    xhr.send('email=' + encodeURIComponent(email));
}

const alert = document.getElementsByClassName('my-alert')[0];
const alertText = document.getElementsByClassName('alert-text')[0];
let time_out = null;

function openAlert(type, text) {
    window.clearTimeout(time_out);
    alert.style.background = type === 'success' ? '#2ecc71' : '#e74c3c';
    alertText.innerHTML = text;
    window.setTimeout(function() {
        alert.style.top = '0';
    }, 100);
    time_out = window.setTimeout(closeAlert, 10000);
}

function closeAlert() {
    alert.style.top = '-200px';
}

const lang = {
    en: {
        alert: {
            congrats: 'Congrats! You have been successfully registered on our mailing list!',
            invalid: 'You have to enter a valid E-Mail address.',
            banned: 'You have been banned.',
            exists: 'This E-Mail address already exists on our mailing list.',
            wait: 'Please wait 5 seconds between every registration.'
        },
        baseline: 'Login everywhere without even thinking about it. Coming soon...',
        question: 'Would you want updates from us regarding our launch?',
        placeholder: 'Just enter your E-Mail address',
        submit: 'Keep me in touch!'
    },
    fr: {
        alert: {
            congrats: 'Félicitations ! Vous êtes bien enregistré sur nos listes de diffusion !',
            invalid: 'Merci d\'entrer une addresse E-Mail valide.',
            banned: 'Vous avez été banni.',
            exists: 'Cette adresse E-Mail est déjà inscrite dans nos listes de diffusion.',
            wait: 'Merci d\'attendre 5 secondes entre chaque enregistrement.'
        },
        baseline: 'Connectez-vous partout sans même y penser. Prochainement...',
        question: 'Voudriez-vous être informé de notre lancement ?',
        placeholder: 'Entrez simplement votre E-Mail',
        submit: 'Tenez-moi informé !'
    }
};

const langToUse = user_lang === 'fr' ? 'fr' : 'en';
const l = lang[langToUse];
/*document.getElementsByClassName('text')[0].innerHTML = l.baseline;
document.getElementsByClassName('question')[0].innerHTML = l.question;
document.getElementsByClassName('email')[0].placeholder = l.placeholder;
document.getElementsByClassName('submit')[0].innerHTML = l.submit;*/


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
        '})();' +
        'console.log("Analytics loaded");';

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