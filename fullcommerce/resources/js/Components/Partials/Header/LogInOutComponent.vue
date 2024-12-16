<script setup lang="ts">
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';


const emit = defineEmits(['open-modal']);

const drawer = ref<boolean>(false)

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

const goToDashboard = () => {
    router.visit('/dashboard')
}

const logout = () => {
    router.post('/logout')

}

</script>

<template>
    <div>
        <el-dropdown placement="bottom" v-if="!isLogged">
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

            </template>
        </el-dropdown>

        <div @click="drawer = true">
            <el-avatar style="outline: 2px solid var(--el-color-info);"
                src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png" />
        </div>

        <el-drawer v-model="drawer" :show-close="false" size="20%">
            <template #header="{ close, titleId, titleClass }">

                <div class="menu-container">
                    <v-icon name="md-close" @click="close" />

                    <h4 :class="titleClass" :id="titleId">Menu</h4>

                    <el-button link>Sair</el-button>
                </div>



            </template>
        </el-drawer>


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

.logout-container {
    display: flex;
    flex-direction: column;
}

.menu-container {
    display: flex;
    justify-content: space-between;
    align-items: center;

    text-align: center;
}

.menu-container>svg {
    cursor: pointer;
}
</style>
