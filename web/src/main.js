import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import App from './App.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import CreateEmailTask from "./components/CreateEmailTask.vue"
import Dashboard from "./components/Dashboard.vue"

Vue.use(VueRouter);
Vue.use(BootstrapVue);

Vue.config.productionTip = false;

const routes = [
	{path: '/', redirect: '/create'},
  { path: '/create', component: CreateEmailTask },
  { path: '/dashboard', component: Dashboard }
]

const router = new VueRouter({
  routes
})

new Vue({
	router,
  render: h => h(App)
}).$mount('#app')
