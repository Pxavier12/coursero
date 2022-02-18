require('./bootstrap');

import Alpine from 'alpinejs'
import {CodeJar} from 'codejar'
import Prism from 'prismjs'

window.Alpine = Alpine;

Alpine.start();

const api =  require('axios').default


async function retrieveExercises(){
    try {
        await axios.get('/api/exercises').then(r=>{
            localStorage.setItem('exercisesList',r.data)
        });

    } catch (error) {
        console.error(error);
    }

}
retrieveExercises()

let options = {tab: '\t'}

let jar = CodeJar(document.querySelector('.editor'), Prism.highlightElement,options)
let select =  document.querySelector('.exercise')
let language =  document.querySelector('.language')

if (language.getAttribute('value')==''){
    language.setAttribute('disabled','disabled')
}else {
    language.removeAttribute('disabled')
}



