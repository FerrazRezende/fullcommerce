<script setup lang='ts'>

const emit = defineEmits()



const goBack = () => {
    emit('back')
}



</script>

<template>
    <el-page-header @back="goBack">
        <template #content>
            <span class="text-large font-600 mr-3">Cadastrar produto</span>
        </template>
    </el-page-header>
</template>

<style scoped></style>
