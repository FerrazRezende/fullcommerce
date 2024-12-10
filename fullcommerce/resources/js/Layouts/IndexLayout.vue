<script setup lang='ts'>
import IndexHeader from '@/Components/Partials/IndexHeader.vue';

</script>

<template>
    <div>
        <header>
            <IndexHeader />
        </header>

        <main>
            <slot />
        </main>

        <footer>

        </footer>
    </div>
</template>

<style></style>
