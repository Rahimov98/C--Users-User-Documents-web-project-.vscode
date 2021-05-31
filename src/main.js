import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import router from './router'

// import ApiPlugins from './plugins/api'

Vue.use(VueRouter)

Vue.use(VueResource)
// Vue.use(ApiPlugins)

new Vue({
  render: h => h(App),
  router,
}).$mount('#app')