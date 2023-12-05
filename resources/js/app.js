require('./bootstrap');


import { createApp } from 'vue';
import App from './components/App.vue'
// import Login from './components/Page/Autenticacion/Login.vue'
import router from './router'
createApp(App)
    .use(router).mount('#app');
