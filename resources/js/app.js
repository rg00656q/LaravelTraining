require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue';
//import CheckLogin from './components/CheckLogin.vue';

window.Alpine = Alpine;
Alpine.start();

const app = createApp();

//app.component('CheckLogin', CheckLogin);

//app.mount('#root');
