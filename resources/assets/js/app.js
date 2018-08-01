
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));



const app = new Vue({
    el:'#app',
    data() {
      return {
        step:1,
        characterCreation:{
          character_name: '',
          race:null,
          class:null,
          str_score:'',
          dex_score:'',
          con_score:'',
          int_score:'',
          wis_score:'',
          cha_score:'',
          background:null,
          alignment:null

        }
      }
    },
    methods:{
      prev() {
        this.step--;
      },
      next() {
        this.step++;
      }
    }
  });
  
  

