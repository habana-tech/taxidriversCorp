<template>
  <div
    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
  >
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative">
            <img
              alt="userEmail"
              :src="userAvatar"
              class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
            />
          </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-4">

          </div>
        </div>
      </div>
      <div class="text-center mt-8">
        <h3
          class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
        >
            {{ userEmail }}
        </h3>
        <div
          class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
        >
          <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
          Los Angeles, California
        </div>
        <div class="mb-2 text-gray-700 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>
          Solution Manager - Creative Tim Officer
        </div>
        <div class="mb-2 text-gray-700">
          <i class="fas fa-university mr-2 text-lg text-gray-500"></i>
          University of Computer Science
        </div>
      </div>
      <div class="mt-10 py-10 border-t border-gray-300 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-gray-800">
              An artist of considerable range, Jenna the name taken by
              Melbourne-raised, Brooklyn-based Nick Murphy writes, performs and
              records all of his own music, giving it a warm, intimate feel with
              a solid groove structure. An artist of considerable range.
            </p>
            <a href="javascript:void(0);" class="font-normal text-green-500">
              Show more
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>

export default {
  data() {
    return {
        userAvatar: sessionStorage.getItem('userAvatar'),
        userEmail: sessionStorage.getItem('userEmail'),
    };
  },
};
</script>
