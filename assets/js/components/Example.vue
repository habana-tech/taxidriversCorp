    <template>
       <div>
           <p>This is an example of a new components in VueJs</p>
           <span>{{ year }}</span>
       </div>
    </template>
    <script>
       export default {
           name: "example",
           data() {
               return {
                   year: new Date().getFullYear()
               }
           }
       }
    </script>
    <style scoped>
    </style>