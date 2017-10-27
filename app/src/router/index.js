import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/sites/HelloWorld'
import Restaurants from '@/components/sites/Restaurants'

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
        name: 'HelloWorld',
        component: HelloWorld
    },
    {
      path: '/restaurants',
      name: 'Restaurants',
      component: Restaurants
    }
  ]
})
