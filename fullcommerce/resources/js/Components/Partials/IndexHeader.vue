<script setup lang='ts'>
import { defineEmits, ref } from 'vue';
import LogInOutComponent from './Header/LogInOutComponent.vue';

const emit = defineEmits(['open-modal-header'])

const search = ref<String>("");

const openModal = () => {
    emit('open-modal-header');
}

</script>


<template>
    <div class="header-container">
        <div class="logo-container">
            <h1>Logo</h1>
            <p>Aqui</p>
        </div>

        <div class="search-container">
            <el-input v-model="search" placeholder="Search for anything">
                <template #prepend>
                    <v-icon name="io-search-outline" />
                </template>
            </el-input>
        </div>


        <div class="buttons-container">
            <a><v-icon name="bi-cart3" :scale="2" /></a>
            <a><v-icon name="hi-heart" :scale="2" /></a>

            <LogInOutComponent @open-modal="openModal" />

        </div>
    </div>
</template>

<style scoped>
.header-container {
    height: 88px;
    width: 100vw;

    background-color: #206535;

    display: flex;

    justify-content: space-around;
    align-items: center;
}

.search-container {
    width: 35%;
}

.buttons-container {
    display: flex;
}

.buttons-container>a {
    margin: 0 4px;
}
</style>
