/*
Copyright 2023 UUP dump authors

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

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

$('.ui.dropdown').dropdown();
$('.ui.checkbox').checkbox();
$('.ui.radio.checkbox').checkbox();
$('.ui.accordion').accordion();