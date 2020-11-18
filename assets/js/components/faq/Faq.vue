<template>
	<div>
		<div class="p-6 mx-auto bg-white">
      <div  class=" mb-4" @click.prevent="active = !active">
        <div
            class="flex items-center justify-between w-full py-3 pl-3 pr-2 font-bold text-gray-600 bg-gray-200 rounded cursor-pointer hover:bg-gray-300">
          {{questions}}
          <span v-show="active" class="flex items-center justify-center w-6 h-6 text-teal-500">
						<svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469" xmlns="http://www.w3.org/2000/svg"><path d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0"/></svg>
					</span>

          <span v-show="!active" class="flex items-center justify-center w-6 h-6 text-teal-500">
					<svg class="w-3 h-3 fill-current" viewBox="0 0 469.33333 469.33333" xmlns="http://www.w3.org/2000/svg"><path d="m437.332031 192h-160v-160c0-17.664062-14.335937-32-32-32h-21.332031c-17.664062 0-32 14.335938-32 32v160h-160c-17.664062 0-32 14.335938-32 32v21.332031c0 17.664063 14.335938 32 32 32h160v160c0 17.664063 14.335938 32 32 32h21.332031c17.664063 0 32-14.335937 32-32v-160h160c17.664063 0 32-14.335937 32-32v-21.332031c0-17.664062-14.335937-32-32-32zm0 0"/></svg></span>
        </div>
        <div class="p-3" v-show="active">
          <!--<p class="mb-3 text-gray-600">{{answer}}</p>-->

        </div>
      </div>

      <ul id="example-1">
		<li v-for="question in questions" :key="question.question">
			{{ question}}
		</li>
		</ul>
		</div>
	</div>
</template>

<script>
	
export default {
    props: ['questions'],
    data() {
      return {
        active: false,
      }
    },
  }
</script>
<style>

</style>