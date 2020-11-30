<template>
  <header id="navbarIndex" class=" bg-cover border-t-2 border-blue-600 h-full" style="background-image: url('https://previews.123rf.com/images/galitskaya/galitskaya1711/galitskaya171100360/90625423-banni%C3%88re-r%C3%A9frig%C3%A9rateur-ouvert-de-long-format-rempli-de-fruits-et-de-l%C3%A9gumes-frais-concept-de-nourriture-cru.jpg');">
    <div class="content px-8 py-2">
      <nav class="flex items-center justify-between">
        <h2 class="text-gray-200 font-bold text-2xl ">Accueil</h2>
        <div class="auth flex items-center">
          <div id="Login"></div>

          <a href=""><button class="bg-gray-900 text-gray-200  py-2 px-3 rounded  hover:bg-gray-800 hover:text-gray-100">Créer un compte gratuitement</button></a>
        </div>
      </nav>
      <div class="body mt-20 mx-8">
        <div class="md:flex items-center justify-between">
          <div class="w-full md:w-1/2 mr-auto" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
            <h1 class="text-4xl font-bold text-white tracking-wide">Gérer son frigo, congèle et placard devient un jeu d'enfant</h1>

            <p class="text-gray-300">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <span class="text-white">Créer un compte ?<a href="/login" class="text-gray-900 text-lg ml-2 font-bold">Se connecter</a></span>
          </div>

        </div>
      </div>
    </div>
    <router-view></router-view>
  </header>
</template>

<script>
export default {
name: "Navbar"
}
</script>

<style scoped>

</style>