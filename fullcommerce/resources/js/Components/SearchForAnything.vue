<script setup lang='ts'>
import { ref } from 'vue';

const search = ref<string>("")


</script>

<template>
    <el-input v-model="search" placeholder="Search for anything">
        <template #prepend>
            <v-icon name="io-search-outline" />
        </template>
    </el-input>
</template>

<style scoped></style>
