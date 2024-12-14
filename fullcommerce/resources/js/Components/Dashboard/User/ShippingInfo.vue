<script setup lang='ts'>

defineProps({
    shippingAddress: {
        type: String,
        required: true
    },
    addressInfo: {
        type: String,
        required: true
    },
    nome: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true
    },
    phone: {
        type: String,
        required: true
    }


})


</script>

<template>
    <el-card style="max-width: 440px;">
        <template #header>
            <h3>Informações de entrega</h3>
        </template>

        <el-descriptions direction="vertical" column="1">
            <el-descriptions-item :label="nome">
                {{ shippingAddress }}
            </el-descriptions-item>

            <el-descriptions-item label="Informações sobre o endereço">
                <p>{{ addressInfo }}</p>
            </el-descriptions-item>

        </el-descriptions>

        <el-descriptions column="1">
            <el-descriptions-item label="Telefone">
                {{ phone }}
            </el-descriptions-item>

            <el-descriptions-item label="Email">
                {{ email }}
            </el-descriptions-item>
        </el-descriptions>

        <template #footer>
            <el-button type="primary">Editar informações de entrega</el-button>
        </template>
    </el-card>

</template>

<style scoped></style>
