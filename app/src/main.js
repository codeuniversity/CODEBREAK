// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import headerView from '@/components/views/headerView'
import footerView from '@/components/views/footerView'
import axios from 'axios'
import VueAxios from 'vue-axios'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueAxios, axios)

Vue.config.productionTip = false

Vue.component('headerView', headerView);
Vue.component('footerView', footerView);


Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyBvWE_sIwKbWkiuJQOf8gSk9qzpO96fhfY',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)
    }
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
