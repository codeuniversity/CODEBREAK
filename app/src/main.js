// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import headerView from '@/components/views/headerView'
import footerView from '@/components/views/footerView'

Vue.config.productionTip = false

Vue.component('headerView', headerView);
Vue.component('footerView', footerView);

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
