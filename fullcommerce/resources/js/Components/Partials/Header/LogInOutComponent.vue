<script setup lang="ts">
import { defineEmits } from 'vue';
import { router } from '@inertiajs/vue3'


const emit = defineEmits(['open-modal']);


defineProps({
    isLogged: {
        type: Boolean,
        required: true
    }
})

const openModal = () => {
    emit('open-modal');
}

const goToLogin = () => {
    router.visit('/login')
}

</script>

<template>
    <div>
        <el-dropdown placement="bottom">
            <v-icon name="la-user-solid" :scale="2" />
            <template #dropdown>
                <div class="login-container" v-if="!isLogged">
                    <el-button @click="goToLogin" class="login button" style="width: 240px;" type="primary">
                        Fazer login
                    </el-button>

                    <el-divider content-position="center">ou</el-divider>

                    <el-button @click="openModal" class="register button" type="info">
                        Criar conta
                    </el-button>
                </div>

                <div v-else class="logout-container">
                    <el-button>Sair</el-button>

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
