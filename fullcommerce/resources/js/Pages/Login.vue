<script setup lang='ts'>
import Layout from '@/Layouts/IndexLayout.vue';
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    email: '',
    password: ''
})


const submitLogin = () => {
    form.post('/login', {
        onFinish: () => form.reset('password')
    });
}

</script>

<script lang="ts">

export default {
    layout: Layout
}
</script>


<template>
    <div>
        <div class="card-container">
            <el-card>
                <h1>Entre com suas credenciais</h1>

                <div class="form-container">
                    <el-form label-position="left" label-width="50px" @submit.prevent="submitLogin">
                        <el-form-item label="Email">
                            <el-input v-model="form.email" placeholder="Digite seu e-mail!" type="email" required />
                        </el-form-item>

                        <el-form-item label="Senha">
                            <el-input v-model="form.password" placeholder="Digite sua senha" type="password" required />
                        </el-form-item>


                        <el-form-item>
                            <div class="button-container">
                                <el-button type="primary" :loading="form.processing" @click="submitLogin">
                                    Entrar
                                </el-button>

                                <el-button link>Esqueci minha senha</el-button>
                            </div>
                        </el-form-item>
                    </el-form>
                </div>
            </el-card>
        </div>
    </div>
</template>

<style scoped>
h1 {
    font-size: 1.5rem;
    font-weight: bold;
}

.card-container {
    margin: 56px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-container>.el-card {
    max-width: 480px;
}

.form-container {
    margin: 32px 0;
}

.button-container {

    width: 100%;
    display: flex;
    justify-content: space-between;
}
</style>
