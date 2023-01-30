<template>
    <div>
        <h1>Listagem das categorias</h1>

        <router-link :to="{name: 'admin.categories.create'}" class="btn btn-success">Cadastrar</router-link>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th width="200">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(category, index) in categories.data" :key="index">
                    <td>{{ category.id }}</td>
                    <td v-text="category.name"></td>
                    <td>
                        <router-link :to="{name: 'admin.categories.edit', params:{id: category.id}}" class="btn btn-info">
                            Editar
                        </router-link>
                        <a href="#" class="btn btn-danger" @click.prevent="confirmDestroy(category)">
                            Remover
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    import axios from 'axios'

    export default{

        created(){
            this.loadCategories()
        },

        computed: {
            categories (){
                return this.$store.state.categories.items
            }
        },

        methods: {

            loadCategories(){
                this.$store.dispatch('loadCategories')
            },

            confirmDestroy(category){
              this.$snotify.error(`Deseja realmente deletar a categoria: ${category.name}`, 'Deletar?', {
                timout: 10000,
                showProgressBar: true,
                closeOnClick: true,
                buttons:[
                    {text: 'Não', action: () => console.log('Não deletou...')},
                    {text: 'Não', action: () => this.destroy(category)}
                ]
              })   
            },

            destroy(category){
                this.$store.dispatch('destroyCategory', category.id)
                        .then(() => {
                            this.$snotify.success(`Sucesso ao deletar a categoria: ${category.name}`)
                            this.loadCategories()
                        })
                        .catch(error => {
                            console.log(error)
                            this.$snotify.error('Error ao deletar a categoria', 'Error')
                        })
            }  
        },
    }

</script>

<style>
</style>
