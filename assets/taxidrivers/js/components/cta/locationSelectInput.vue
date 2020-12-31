<template>
    <vue-simple-suggest
        v-model="chosen"
        :list="simpleSuggestionList"
        :filter-by-query="true"
        :styles="autoCompleteStyle"
    >
        <!-- Filter by input text to only show the matching results -->
    </vue-simple-suggest>

</template>

<script>
    import VueSimpleSuggest from 'vue-simple-suggest'

    export default {
        name: "locationSelectInput",
        components: { VueSimpleSuggest},
        data() {
            return {
                chosen: '',
                autoCompleteStyle : {
                    vueSimpleSuggest: "flex w-full md:justify-start justify-center",
                    inputWrapper: "",
                    defaultInput : "bg-gray-100 rounded mr-4 border border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 lg:w-full xl:w-1/2 w-2/4 md:w-full",
                    suggestions: "position-absolute list-group z-1000",
                    suggestItem: "list-group-item"
                }
            }
        },
        methods: {
            simpleSuggestionList() {
                return [
                    'Vue.js',
                    'React.js',
                    'Angular.js'
                ]
            }
        }
    }
</script>
