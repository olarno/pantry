<template>
	<header id="navbarIndex" class=" bg-cover border-t-2 border-blue-600 h-full" style="background-image: url('https://previews.123rf.com/images/galitskaya/galitskaya1711/galitskaya171100360/90625423-banni%C3%88re-r%C3%A9frig%C3%A9rateur-ouvert-de-long-format-rempli-de-fruits-et-de-l%C3%A9gumes-frais-concept-de-nourriture-cru.jpg');">
		<div class="content px-8 py-2">
			<nav class="flex items-center justify-between">
				<h2 class="text-gray-200 font-bold text-2xl ">Accueil</h2>
				<div class="auth flex items-center">
					<button class="bg-transparent text-gray-200  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700"> <router-link to="/admin">Se connecter</router-link></button>
					<button class="bg-gray-900 text-gray-200  py-2 px-3 rounded  hover:bg-gray-800 hover:text-gray-100">Créer un compte gratuitement</button>
				</div>
			</nav>
			<div class="body mt-20 mx-8">
				<div class="md:flex items-center justify-between">
					<div class="w-full md:w-1/2 mr-auto" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
						<h1 class="text-4xl font-bold text-white tracking-wide">Gérer son frigo, congèle et placard devient un jeu d'enfant</h1>

						<p class="text-gray-300">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
						</p>
						<span class="text-white">Créer un compte ?<a href="#" class="text-gray-900 text-lg ml-2 font-bold">Se connecter</a></span>
					</div>
					<div class="w-full md:max-w-md mt-6">
						<div class="card bg-white shadow-md rounded-lg px-4 py-4 mb-6 ">
							<form action="#">
								<div class="flex items-center justify-center">
									<h2 class="text-2xl font-bold tracking-wide">
										Bienvenue
									</h2>
								</div>
								<h2 class="text-xl text-center font-semibold text-gray-800 mb-2">
									Se connecter
								</h2>
								<input aria-label="" type="text" class="rounded px-4 w-full py-1 bg-gray-200  border border-gray-400 mb-6 text-gray-700 placeholder-gray-700 focus:bg-white focus:outline-none" placeholder="Email Address">
								<input aria-label="" type="password" class="rounded px-4 w-full py-1 bg-gray-200  border border-gray-400 mb-4 text-gray-700 placeholder-gray-700 focus:bg-white focus:outline-none" placeholder="Password">
								<div class="flex items-center justify-between">
									<a href="#" class="text-gray-600">Mot de passe oublié?</a>
									<button class="bg-gray-800 text-gray-200  px-2 py-1 rounded">S'enregistrer</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</header>
</template>

<script>
	export default {
		name: "NavbarIndex"
	}
</script>

<style scoped>

</style>