<script setup lang='ts'>

import { ref } from 'vue';

const checked1 = ref<boolean>(false)
const checked2 = ref<boolean>(false)



</script>

<template>
    <aside class="aside-container">
        <h3>Categorias</h3>
        <ul>
            <el-checkbox v-model="checked1" label="Dispositivos eletrônicos" />
            <el-checkbox v-model="checked2" label="Notebooks e Laptops" />
            <el-checkbox v-model="checked2" label="Acesssórios de computador" />
            <el-checkbox v-model="checked2" label="Smartphones" />
            <el-checkbox v-model="checked2" label="Headphones" />
            <el-checkbox v-model="checked2" label="Acessórios de celular" />
            <el-checkbox v-model="checked2" label="Videogames" />
            <el-checkbox v-model="checked2" label="Cameras e Fotografia" />
        </ul>
    </aside>
</template>

<style scoped>
h3 {
    font-size: 1.5rem;
}

.aside-container {
    margin: 16px 32px;
    max-width: 15%;
}
</style>
