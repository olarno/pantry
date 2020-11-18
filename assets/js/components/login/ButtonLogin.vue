<template>
  <div>
    <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" v-on:click.prevent="toggleModal()">
      Se connecter
    </button>
    <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
      <div class="relative w-auto my-6 mx-auto max-w-6xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            <h3 class="text-3xl font-semibold">
              Connexion
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click.prevent="toggleModal()">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div>
          <!--body-->
          <div class="relative p-6 flex-auto">
            <h1 class="text-center text-2xl text-green-dark">Login</h1>

            <form class="pt-6 pb-2 my-2">
              <div class="mb-4">
                <label class="block text-sm font-bold mb-2" for="email">
                  Email Address
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="text" placeholder="Email Address">
              </div>
              <div class="mb-6">
                <label class="block text-sm font-bold mb-2" for="password">
                  Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="Password">
              </div>
              <div class="block md:flex items-center justify-between">
                <div>
                  <button class="bg-green hover:bg-green-dark text-black font-bold py-2 px-4 rounded border-b-4 border-green-darkest" type="button">
                    Sign In
                  </button>
                </div>

                <div class="mt-4 md:mt-0">
                  <a href="#" class="text-green no-underline">Forget Password?</a>
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
export default {
  name: "large-modal",
  data() {
    return {
      showModal: false
    }
  },
  methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    }
  }
}
</script>