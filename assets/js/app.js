import '../styles/tailwind.css';

import Vue from 'vue';
import Faq from './components/faq/Faq.vue';
import ButtonLogin from './components/login/ButtonLogin.vue';

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
					el:'#ButtonLogin',
					render(h) {
							return h(ButtonLogin, {
									props: {

									},

							})

					},
			})
 
