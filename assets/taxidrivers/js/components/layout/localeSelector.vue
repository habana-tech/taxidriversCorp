<template>
    <div class="lang locale-selector" v-on-clickaway="hideLanguageSelector">
        <button
             @click="isMenuOpen = !isMenuOpen"

            class=" text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
            {{CurrentLang}}
        </button>
        <ul class="locale-selector-list bg-gray-800" v-show="isMenuOpen">
            <li v-for="lang in availableLang" class="country-flag">
<!--                {{  source('shared/inlineSvg/'~ locale ~'-flag.svg') }}-->
                <a v-if="lang !== CurrentLang" :href="'?setLang=' + lang" class="uppercase text-white p-2 w-auto">{{ lang }}</a>
            </li>

        </ul>
    </div>
</template>

<script>
import { directive as onClickaway } from 'vue-clickaway';

    export default {
        name: "localeSelector",
        directives: {
            onClickaway: onClickaway,
        },
        methods: {
            hideLanguageSelector: function (e) {
                this.$data.isMenuOpen = false;
            },
        },
        props: {
            CurrentLang: {
                type: String,
                default: 'en'
            },
        },
        data: () => ({
            isMenuOpen: false,
            availableLang: ['en', 'es', 'fr', 'de'],
        })
    }
</script>

<style scoped>

</style>
