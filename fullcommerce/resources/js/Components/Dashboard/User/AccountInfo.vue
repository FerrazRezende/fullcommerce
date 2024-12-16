<script setup lang='ts'>

defineProps({
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


const emit = defineEmits()


const editInfo = () => {
    emit('edit-info')
}

</script>


<template>
    <el-card>
        <template #header>
            <h3>Informações da conta</h3>
        </template>

        <el-descriptions direction="vertical" column="2">
            <el-descriptions-item width="140px">
                <el-avatar :size="100" src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png" />
            </el-descriptions-item>

            <el-descriptions-item>
                {{ nome }}
            </el-descriptions-item>
        </el-descriptions>

        <el-descriptions direction="vertical" column="1">
            <el-descriptions-item label="Email">
                {{ email }}
            </el-descriptions-item>

            <el-descriptions-item label="Email de segurança">
                {{ email }}
            </el-descriptions-item>

            <el-descriptions-item label="Telefone">
                {{ phone }}
            </el-descriptions-item>
        </el-descriptions>

        <template #footer>
            <el-button type="primary" @click="editInfo">Editar informações da conta</el-button>
        </template>
    </el-card>

</template>

<style scoped></style>
