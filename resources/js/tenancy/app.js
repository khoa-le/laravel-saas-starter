require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

if(document.getElementById('switch-plan-btn')){
    document.getElementById('switch-plan-btn').addEventListener('click', function () {
        document.getElementById('switch-plans-modal').style.display = 'block';
    });
}

if(document.getElementById('switch-plans-close')){
    document.getElementById('switch-plans-close').addEventListener('click', function () {
        document.getElementById('switch-plans-modal').style.display = 'none';
    });
}
