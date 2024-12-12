<script setup lang='ts'>
import SignUpModal from '@/Components/Auth/SignUpModal.vue';
import IndexHeader from '@/Components/Partials/IndexHeader.vue';
import { ref } from 'vue';

const modalOpen = ref<boolean>(false)


const openModal = () => {
    modalOpen.value = true
}

const closeModal = () => {
    modalOpen.value = false
}
</script>

<template>
    <div>
        <SignUpModal :modalOpen="modalOpen" @close-modal="closeModal" />
        <header>
            <IndexHeader @open-modal-header="openModal" />
        </header>

        <main>
            <slot />
        </main>

        <footer>

        </footer>
    </div>
</template>

<style></style>
