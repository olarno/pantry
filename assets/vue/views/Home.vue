<template>
  <div>
    <navbar></navbar>
    <bottom></bottom>
  </div>
</template>

<script>
import Navbar from "./Navbar"
import Bottom from "./Footer"

export default {
name: "home",
  components:{
    Navbar,
    Bottom
  }
}
</script>

<style scoped>

</style>