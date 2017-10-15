import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/sites/HelloWorld'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: HelloWorld
    },
    {
        path: '/test',
        name: 'HelloTest',
        component: HelloWorld
    }
  ]
})
