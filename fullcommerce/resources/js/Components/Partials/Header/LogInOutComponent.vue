<script setup lang="ts">
import { defineEmits } from 'vue';


const emit = defineEmits(['open-modal']);


const openModal = () => {
    emit('open-modal');
}
</script>

<template>
    <div>
        <el-dropdown placement="bottom">
            <v-icon name="la-user-solid" :scale="2" />
            <template #dropdown>
                <div class="login-container">
                    <el-button class="login button" style="width: 240px;" type="primary">
                        Fazer login
                    </el-button>

                    <el-divider content-position="center">ou</el-divider>

                    <el-button @click="openModal" class="register button" type="info">
                        Criar conta
                    </el-button>
                </div>
            </template>
        </el-dropdown>
    </div>
</template>

<style scoped>
.el-dropdown {
    color: black;
    line-height: none;
}


.button {
    margin: 8px;

}

.el-divider {
    margin: 4px 0;

}

.login-container {
    display: flex;
    flex-direction: column;
}
</style>
