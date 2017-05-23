import './bootstrap';
import Routes from './app/Routes';
import data from './app/State';
import components from './app/Components';

const app = new Vue({
  components,
  data,
  router: new VueRouter({Routes, activeLinkClass: 'is-active'}),
  el: '#app'
});