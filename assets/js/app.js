
import '../styles/tailwind.css';

import Vue from 'vue';
import Faq from './components/faq/Faq.vue';


  new Vue ({
	  el:'#faq',
	  render(h) {
				console.log(this.$el.getAttribute('data-questions'))
		  return h(Faq, {
			  props: {
			  		questions: this.$el.getAttribute('data-questions'),
				}
		  })

	  },
  })

 
