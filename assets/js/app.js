
import '../styles/tailwind.css';

import Vue from 'vue';
import Faq from './components/faq/Faq.vue';


  new Vue ({
	  el:'#faq',
	  render(h) {
		  return h(Faq, {
			  props: {
				pseudo: this.$el.getAttribute('data-pseudo'),
				questiontest: this.$el.getAttribute('data-questiontest'),
				questionarray: this.$el.getAttribute('data-questionarray'),
			  }
		  })

	  },
  })

 
