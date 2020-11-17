<template>
	<div>
		<div class="p-6 mx-auto bg-white">

			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<qr question= "combien de temps prends la livraison?" answer="lololo"> </qr>
			<p> ici  faq {{ pseudo }}</p>


		</div>
	</div>
</template>

<script>
	
	import Qr from "./Qr";

	export default {
		components: {
			Qr,
		},
		props:['pseudo']

}
</script>
<style>

</style>