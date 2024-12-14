<script setup lang='ts'>
import { defineEmits, } from 'vue';
import LogInOutComponent from './Header/LogInOutComponent.vue';
import SearchForAnything from '../SearchForAnything.vue';
import { usePage } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3'


const emit = defineEmits(['open-modal-header'])


const page = usePage();

const isLogged = page.props.auth?.user != null;

const openModal = () => {
    emit('open-modal-header');
}


const goToHome = () => {
    router.visit('/')
}

</script>


<template>
    <div class="header-container">
        <div class="logo-container" @click="goToHome">
            <h1>Logo</h1>
            <p>Aqui</p>
        </div>

        <div class="search-container">
            <SearchForAnything />
        </div>

        <div class="buttons-container">
            <a><v-icon name="bi-cart3" :scale="2" /></a>
            <a><v-icon name="hi-heart" :scale="2" /></a>

            <LogInOutComponent @open-modal="openModal" :is-logged="isLogged" />

        </div>
    </div>
</template>

<style scoped>
.header-container {
    height: 88px;
    width: 100vw;

    background-color: var(--el-color-primary);

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
