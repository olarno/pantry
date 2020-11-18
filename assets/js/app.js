
import '../styles/tailwind.css';

import Vue from 'vue';
import Faq from './components/faq/Faq.vue';
import Qr from  './components/faq/Qr.vue';


  new Vue ({
	  el:'#faq',
	  render(h) {
			return h(Faq, {
			  props: {
			  		faqData: JSON.parse(this.$el.getAttribute('faqData')),
				},
				
		  })

	  },
  })


 
