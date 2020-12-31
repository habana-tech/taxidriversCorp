<template>
  <nav
    class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
  >
    <div
      class="container px-4 mx-auto flex flex-wrap items-center justify-between"
    >
      <div
        class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
      >

        <button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button"
          v-on:click="setNavbarOpen"
        >
          <i class="text-white fas fa-bars"></i>
        </button>
      </div>
      <div
        class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none"
        :class="[navbarOpen ? 'block rounded shadow-lg' : 'hidden']"
        id="example-navbar-warning"
      >
        <ul class="flex flex-col lg:flex-row list-none mr-auto">
          <li class="flex items-center">
            <a
              class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="https://taxidriverscuba.com"
            >
              <i
                class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
              />
              Taxidrivers
            </a>
            <a
              class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="https://vinales.taxi"
              >
                <i
                  class="lg:text-gray-300 text-gray-500 far fa-file text-lg leading-lg mr-2"
                />
                  Vinales.taxi
              </a>
          </li>
        </ul>
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">

<!--            TODO: set links to instagram & facebook -->
          <li class="flex items-center">
            <a
              class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
              href="https://www.facebook.com/taxidriverscuba"
              target="_blank"
            >
              <i
                class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"
              />
              <span class="lg:hidden inline-block ml-2">Facebook</span>
            </a>
          </li>
            <li class="flex items-center">
                <a
                    class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                    href="https://www.instagram.com/taxidriverscuba"
                    target="_blank"
                >
                    <i
                        class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg"
                    />
                    <span class="lg:hidden inline-block ml-2">Instagram</span>
                </a>
            </li>


        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
import PagesDropdown from "../../components/Dropdowns/PagesDropdown.vue";
export default {
  data() {
    return {
      navbarOpen: false,
    };
  },
  methods: {
    setNavbarOpen: function () {
      this.navbarOpen = !this.navbarOpen;
    },
  },
  components: {
    PagesDropdown,
  },
};
</script>
