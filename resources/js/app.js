require('./bootstrap');

window.Vue = require('vue');

import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
Vue.use(Loading);

import Vuex from 'vuex';
import vuexI18n from 'vuex-i18n';
import Locales from './vue-i18n-locales.generated.js';
const store = new Vuex.Store();
Vue.use(vuexI18n.plugin, store);
Vue.i18n.add('en', Locales.en);
Vue.i18n.add('es', Locales.es);
Vue.i18n.add('fr', Locales.fr);
Vue.i18n.add('pt', Locales.pt);

Vue.i18n.set(document.documentElement.lang.substr(0, 2));
// or however you determine your current app locale




Vue.component('corona-virus-quiz', require('./components/CoronaVirusQuiz.vue').default);
const app = new Vue({
    el: '#app',
    store,
});