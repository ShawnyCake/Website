require('./bootstrap');
import { createApp } from 'vue';  
import Banner from './components/Banner.vue';
import ServiceCard from './components/ServiceCard.vue';

createApp({
  components: {
    Banner,
    ServiceCard
  }
}).mount('#app');

