/*
* UUP dump Common JavaScript
* https://uupdump.net/
* 
* Copyright (C) 2023 UUP dump authors. All rights reserved.
*/

function setCookie(name, value) {
    const expires = 60 * 60 * 24 * 30;
    const date = new Date(Date.now() + expires).toUTCString();

    const cookie = [
        `${name}=${value}; `,
        `expires=${date}; `,
        `Max-Age=${expires}; `,
        'path=/; ',
        `domain=${location.hostname}; `,
        location.protocol == 'https:' ? 'Secure; ' : '',
        'SameSite=Strict'
    ].join('');

    document.cookie = cookie;
    location.reload();
}

function handleConfigurationChange(e, dataName, cookieName) {
    e.preventDefault();
    let element = e.target;

    if(!(dataName in e.target.attributes))
        element = e.target.parentElement;

    setCookie(cookieName, element.attributes[dataName].value);
}

$('.language-selector-btn').on('click', function() {
    $('.ui.modal.select-language').modal('show');
    $('.ui.sidebar').sidebar('hide');
});

$('.theme-selector-btn').on('click', function() {
    $('.ui.modal.select-theme').modal('show');
    $('.ui.sidebar').sidebar('hide');
});

$('.sidebar-open-btn').on('click', function() {
    $('.ui.sidebar').sidebar('setting', 'transition', 'overlay');
    $('.ui.sidebar').sidebar('setting', 'mobileTransition', 'overlay');
    $('.ui.sidebar').sidebar('toggle');
});

$('.change-language').on('click', function(e) {
    handleConfigurationChange(e, 'lang-select', 'Page-Language');
});

$('.change-theme').on('click', function(e) {
    handleConfigurationChange(e, 'theme-select', 'Website-Theme');
});

$('.ui.dropdown').dropdown();
$('.ui.checkbox').checkbox();
$('.ui.accordion').accordion();