import VueRouter from 'vue-router'
import Magistr from './pages/Magistr'
import Doc from './pages/Doc'
import Korgar from './pages/Korgar'
// import Php from './pages/php'
// import Kor from './pages/Kor'


export default new VueRouter({
    routes: [
        {
            path: '',
            component: Doc
        },
        {
            path: '/Magistr',
            component: Magistr
        },
        {
            path: '/Korgar',
            component: Korgar
        }
    ],
    mode: 'history'
})