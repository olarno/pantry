import NavbarIndex from './components/NavbarIndex.vue';
import Footer from './components/Footer.vue';
import '../styles/tailwind.css';
import Vue from 'vue';

	new Vue({
		el: '#navbarIndex',
		render: h => h(NavbarIndex)
	  });

	  new Vue({
		el: '#footer',
		render: h => h(Footer)
	  });