<template>
  <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
        <div
          class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
        >

          <div class="flex-auto pt-10 px-4 px-6 py-10 ">
            <div class="text-gray-500 text-center mb-3 font-bold">
              <small>Sign in with credentials</small>
            </div>
            <form method="post">
              <div class="relative w-full mb-3">
                <label
                  class="block uppercase text-gray-700 text-xs font-bold mb-2"
                  htmlFor="grid-password"
                >
                  Email
                </label>
                <input
                  type="email"
                  name="email"
                  required
                  autofocus
                  class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                  placeholder="Email"
                />
              </div>

              <div class="relative w-full mb-3">
                <label
                  class="block uppercase text-gray-700 text-xs font-bold mb-2"
                  htmlFor="grid-password"
                >
                  Password
                </label>
                <input
                  type="password"
                  name="password"
                  class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                  placeholder="Password"
                />
              </div>
              <div>
                <label class="inline-flex items-center cursor-pointer">
                  <input
                    id="customCheckLogin"
                    type="checkbox"
                    class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                    name="_remember_me"
                  />
                  <span class="ml-2 text-sm font-semibold text-gray-700">
                    Remember me
                  </span>
                </label>
              </div>

              <div class="text-center mt-6">
                <button
                  class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                  type="submit"
                >
                  Sign In
                </button>
              </div>

                <input type="hidden" name="_csrf_token"
                       :value="csrfToken"
                >
            </form>
          </div>
        </div>
        <div class="flex flex-wrap mt-6 relative">
          <div class="w-full text-center">
            <a href="javascript:void(0)" class="text-gray-300">
              <small>Forgot password?</small>
            </a>
          </div>
<!--          <div class="w-1/2 text-right">-->
<!--            <router-link to="/auth/register" class="text-gray-300">-->
<!--              <small>Create new account</small>-->
<!--            </router-link>-->
<!--          </div>-->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import github from "../../assets/img/github.svg";
import google from "../../assets/img/google.svg";

export default {
  data() {
    return {
      github,
      google,
    };
  },
    props: ['urlForgotPassword', 'csrfToken', 'lastUsername']
};
</script>
