<template>
	<div>
    <div class="p-6 mx-auto bg-white" v-for="data in faqData" :key="data.question">
			<qr :dataQr = "data.question" :answer= "data.answer">  </qr>
    </div>

	</div>
		
</template>

<script>
	import Qr from "./Qr";
export default {
    props: ['faqData'],
    components: {
			Qr
		},
}
</script>
<style>

</style>