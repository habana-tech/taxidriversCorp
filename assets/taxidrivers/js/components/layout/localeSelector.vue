<template>
    <div class="lang locale-selector">
        <button
            v-on:hover="showLanguageSelector($event)"
            v-on:click="showLanguageSelector($event)"
            v-on:focusout="hideLanguageSelector($event)"

            class=" text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
            {{  source('shared/inlineSvg/langs.svg') }}
        </button>
        <ul class="locale-selector-list">
            {% for locale in locales %}
            <li class="{% if current == locale %}selected{% endif %} {{ locale }} country-flag">
                {{  source('shared/inlineSvg/'~ locale ~'-flag.svg') }}
                <a href="?setLang={{ locale }}">{{ locale | upper }}</a>
            </li>
            {% endfor %}
        </ul>
    </div>
</template>

<script>
    export default {
        name: "localeSelector",
        methods: {
            showLanguageSelector: function (e) {
                const button = e.target;
                // button.classList.toggle('rounded-full')
                console.log(button);
                // console.log('blackBtn');
            },
            hideLanguageSelector: function (e) {
                console.log('hideLanguageSelector');
            }
        }
    }
</script>

<style scoped>

</style>
