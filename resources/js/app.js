require('./bootstrap');

import Alpine from 'alpinejs';
import {CodeJar} from 'codejar';
import Prism from 'prismjs';

window.Alpine = Alpine;

Alpine.start();



let jar = CodeJar(document.querySelector('.editor'), Prism.highlightElement);
let select =  document.querySelector('.exercise');
let language =  document.querySelector('.language');

if (language.getAttribute('value')==''){
    language.setAttribute('disabled','disabled');
}else {
    language.removeAttribute('disabled')
};



