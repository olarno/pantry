<template>
	<div>
		<div class="p-6 mx-auto bg-white">
			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<p> ici faq {{ pseudo }} </p>
			<p> ici question test {{ questiontest }} </p>
			<p> ici question array `{{ questionarray.question }}` </p>
		<ul id="example-1">
		<li v-for="question in questionarray" :key="question.question">
			{{ question}}
		</li>
		</ul>
		</div>
	</div>
</template>

<script>
	
	import Qr from "./Qr";

	export default {
		components: {
			Qr,
		},
		props:['pseudo',
				'questiontest',
				'questionarray'
		]

}
</script>
<style>

</style>