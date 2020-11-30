<template>
  <div>
    <router-view></router-view>
  </div>


</template>

<script>
import router from './router';
export default {
name: "App",
  beforeMount () {
    let vueRouting = this.$parent.$el.attributes['data-vue-routing'].value,
        queryParameters = JSON.parse(this.$parent.$el.attributes['data-query-parameters'].value);

    router.push({path: vueRouting, query: queryParameters});
  },


}
</script>

<style scoped>

</style>