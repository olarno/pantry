import '../styles/tailwind.css';

import Vue from 'vue';
import Faq from './components/faq/Faq.vue';
import Login from './components/login/ButtonLogin.vue';
global.axios = require('axios');

	new Vue ({
	  el:'#faq',
	  render(h) {
			return h(Faq, {
			  props: {
			  		faqData: JSON.parse(this.$el.getAttribute('faqData')),
				},
				
		  })

	  },
  }),
			new Vue ({
					el:'#Login',
					render(h) {
							return h(Login, {
									props: {

									},

							})

					},
			})
 
