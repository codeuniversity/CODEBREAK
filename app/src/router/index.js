import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '@/components/sites/Dashboard'
import Login from '@/components/sites/Login'

Vue.use(Router)

var Auth = {
    loggedIn: true
};

var router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Dashboard',
      component: Dashboard,
      meta: { requiresAuth: true }
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    }
  ]
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth) && !Auth.loggedIn) {
        next({ path: '/login', });
    } else {
        next();
    }
});


export default router