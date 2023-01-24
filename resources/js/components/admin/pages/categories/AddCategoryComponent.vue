<template>
    <div>
        <h1>Adicionar nova categoria</h1>

       <form-cat></form-cat>
        
    </div>
</template>

<script>

import FormCategoryComponent from './partials/FormCategoryComponent.vue';

export default{
    components: {
        formCat: FormCategoryComponent
    }
}
</script>

<style scoped>

</style>