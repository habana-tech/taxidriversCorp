<template>
  <div>
    <navbar />
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-gray-900 bg-no-repeat bg-full"
          :style="`background-image: url('${registerBg2}');`"
        ></div>
        <login  :url-forgot-password="urlForgotPassword"
                :csrf-token="csrfToken"
                :last-username="lastUsername"/>
        <footer-small absolute />
      </section>
    </main>
  </div>
</template>
<script>
import Navbar from "../components/Navbars/AuthNavbar.vue";
import FooterSmall from "../components/Footers/FooterSmall.vue";
import Login from "../views/auth/Login.vue"

import registerBg2 from "../assets/img/register_bg_2.png";

export default {
  data() {
    return {
      registerBg2,
    };
  },
  components: {
    Navbar,
    FooterSmall,
    Login
  },
    props: ['urlForgotPassword', 'csrfToken', 'lastUsername']
};
</script>
