<script setup lang='ts'>
import OrderBy from '@/Components/OrderBy.vue';
import SearchForAnything from '@/Components/SearchForAnything.vue';

</script>

<template>
    <div class="header-container">
        <SearchForAnything style="width: 40%;" />
        <OrderBy style="width: 40%;" />
    </div>
</template>

<style scoped>
 .header-container {
     display: flex;
     justify-content: space-between;
 }
</style>
