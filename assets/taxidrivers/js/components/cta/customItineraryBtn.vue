<template>
    <a :href="actionUrl" role="button" class="bg-gradient-to-br from-green-500 via-green-300 to-green-600 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-300 focus:outline-none">

        <svg  viewBox="0 0 58 58" fill="currentColor" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="012---Mobile-Map" fill-rule="nonzero"><rect id="Rectangle-path" fill="#62b8cd" height="58" rx="3" width="34" x="12"/><path id="Shape" d="m46 3v52c0 1.6568542-1.3431458 3-3 3h-28c-1.6568542 0-3-1.3431458-3-3v-7.32c11.73-4.19 29.08-15.82 24.81-47.68h6.19c1.6568542 0 3 1.34314575 3 3z" fill="#1ea7ce"/><path id="Shape" d="m39 0-2.861 3.052c-.5672653.60498515-1.3596648.94815313-2.189.948h-9.9c-.8293352.00015313-1.6217347-.34301485-2.189-.948l-2.861-3.052z" fill="#1d80bd"/><path id="Shape" d="m46 50v5c0 1.6568542-1.3431458 3-3 3h-28c-1.6568542 0-3-1.3431458-3-3v-5c0 1.6568542 1.3431458 3 3 3h28c1.6568542 0 3-1.3431458 3-3z" fill="#1d80bd"/><path id="Shape" d="m14 8.1v33c-.1501837.0008611-.2978518.0386367-.43.11l-12.12 6.06c-.31110936.1567797-.68138927.1403468-.97738725-.0433761s-.47504575-.508252-.47261275-.8566239v-30.76c-.00264567-.3801569.2104962-.7289345.55-.9l13.02-6.5c.1321482-.07136333.2798163-.1091389.43-.11z" fill="#f1c200"/><path id="Shape" d="m29 14.89v33.000002c-.1459325.0002989-.2898611-.0339698-.42-.100002l-14.14-6.6c-.1390608-.0594797-.2887527-.0900985-.44-.09v-33.00000024c.1512473-.00009824.3009392.03052055.44.09000024l14.14 6.6c.1301389.0660322.2740675.1003009.42.1z" fill="#f4d347"/><path id="Shape" d="m44 8.09999976v33.00000024c-.1512473-.0000985-.3009392.0305203-.44.09l-14.14 6.6c-.1301389.0660322-.2740675.1003009-.42.100002v-33.000002c.1459325.0003009.2898611-.0339678.42-.1l14.14-6.6c.1390608-.05947969.2887527-.09009848.44-.09000024z" fill="#f1c200"/><path id="Shape" d="m58 15.61v30.76c.002433.3483719-.1766148.672901-.4726128.8566239-.2959979.1837229-.6662778.2001558-.9773872.0433761l-12.12-6.06c-.1321482-.0713633-.2798163-.1091389-.43-.11v-33c.1501837.0008611.2978518.03863667.43.11l13.02 6.5c.3395038.1710655.5526457.5198431.55.9z" fill="#f4d347"/><path id="Shape" d="m29 27.88v4.11c-.2140313.0010239-.4268059-.0327499-.63-.1l-4.37-1.46v15.22l-4-1.86v-14.69l-5.96-1.99-.04.02v-4.1400686c.2140902-.0017356.4269914.0320583.63.1000686z" fill="#f49a00"/><path id="Shape" d="m13.3 23.12c.2227225-.0882226.4604527-.1323724.7-.1300908v4.1400908l-14 5.25v-4.28z" fill="#e77d00"/><path id="Shape" d="m44 22.99v4.14l-.04-.02-14.33 4.78c-.2031941.0672501-.4159687.1010239-.63.1000226v-4.1100226l5-1.67v-13.56l4-1.86v14.09l5.37-1.79c.2030086-.0680103.4159098-.1018042.63-.1z" fill="#e77d00"/><path id="Shape" d="m58 28.1v4.28l-14-5.25v-4.1400347c.2394663-.0014175.4770227.0427001.7.1300347z" fill="#f49a00"/></g></g></svg>
        <span class="ml-4 flex items-start flex-col leading-none custom-itinerary">
                <span class="text-xs text-gray-600 mb-1 ">{{ descriptionText }}</span>
                <span class="title-font font-medium capitalize">{{ actionText }}</span>
        </span>
    </a>
</template>

<script>
    export default {
        name: "customItineraryBtn",
        props: {
            descriptionText: {
                type: String,
                default: 'Request a quote for a'
            },
            actionText: {
                type: String,
                default: 'custom itinerary'
            },
            actionUrl: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
