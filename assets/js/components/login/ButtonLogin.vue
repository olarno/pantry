<template>
  <div>
    <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" v-on:click.prevent="showModal = true">
      Se connecter
    </button>

  <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex" id="login">
      <div class="relative w-auto my-6 mx-auto max-w-6xl">
        
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
         
          <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            <h3 class="text-3xl font-semibold">
              Connexion
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click="showModal = false">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          
          <div class="relative p-6 flex-auto">
            <h1 class="text-center text-2xl text-green-dark">Login</h1>

            <form class="pt-6 pb-2 my-2">
              <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="inputEmail">
                  Email 
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="inputEmail" type="email" v-model="email" placeholder="Email ">
              </div>
              <div class="mb-6">
                <label class="block text-sm font-bold mb-2" for="inputPassword">
                  Mot de passe
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="inputPassword" @keyup.enter="performLogin" v-model="password"  type="password" placeholder="Mot de passe">
              </div>
              <div class="block md:flex items-center justify-between">
                <div>
                  <button class="bg-green hover:bg-green-dark text-black font-bold py-2 px-4 rounded border-b-4 border-green-darkest" @click.prevent="performLogin()" type="submit">
                   Se connecter
                  </button>
                </div>

                <div class="mt-4 md:mt-0">
                  <a href="#" class="text-green no-underline">Mot de passe oublié?</a>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div> 
  </div>
</template>

<script>
import * as res from "autoprefixer";

export default {
  name: "Login",
  data() {
    return {
      showModal: false,
      email: '',
      password: ''
    }
  },
  login (email, password) {
    return axios.post(
        'https://127.0.0.1:8000/login',
        {
          username: email,
          password: password,
        }
    );
  },
}
</script>