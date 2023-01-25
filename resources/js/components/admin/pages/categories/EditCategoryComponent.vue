<template>
    <div>
        <h1>Editar Categoria</h1>

        <form-cat 
            :category="category"
            :updating="true">
        </form-cat>
    </div>
</template>

<script>

    import FormCategoryComponent from './partials/FormCategoryComponent.vue'

    export default{
        props:{
            id: {
                require: true
            }
        },

        created(){
           this.loadCategory()
        },

        data(){
            return{
                category: {}
            }
        },

        methods:{
            loadCategory(){
                this.$store.dispatch('loadCategory', this.id)
                        .then(response => this.category = response)
                        .catch(error => {
                            this.$snotify.error('Categoria não encontrada', '404')

                            this.$route.push({name: 'admin.categories'})

                            console.log(error)
                        })
            }
        },
        
        components: {
            formCat: FormCategoryComponent
        }
        
    }
</script>

<style scoped>
</style>