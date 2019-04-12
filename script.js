function loadAjax() {
    var xhr = null;

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
    var email = document.getElementsByClassName('email')[0].value;
    var xhr = loadAjax();
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
            } else if (xhr.status === 429) {
                openAlert('error', l.alert.wait);
            }
        }

    };
    xhr.send('email=' + encodeURIComponent(email));
}

var alert = document.getElementsByClassName('alert')[0];
var alertText = document.getElementsByClassName('alert-text')[0];
var time_out = null;

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

var lang = {
    en: {
        alert: {
            congrats: 'Congrats! You have been successfully registered on our mailing list!',
            invalid: 'You have to enter a valid E-Mail address.',
            banned: 'You have been banned.',
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
            wait: 'Merci d\'attendre 5 secondes entre chaque enregistrement'
        },
        baseline: 'Connectez-vous partout sans même y penser. Prochainement...',
        question: 'Voudriez-vous être informé de notre lancement ?',
        placeholder: 'Entrez simplement votre E-Mail',
        submit: 'Tenez-moi informé !'
    }
};

var langToUse = user_lang === 'fr' ? 'fr' : 'en';
var l = lang[langToUse];
document.getElementsByClassName('text')[0].innerHTML = l.baseline;
document.getElementsByClassName('question')[0].innerHTML = l.question;
document.getElementsByClassName('email')[0].placeholder = l.placeholder;
document.getElementsByClassName('submit')[0].innerHTML = l.submit;
