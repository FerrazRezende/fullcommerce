<script setup lang="ts">
import { reactive, ref, watch } from 'vue';
import { IUser } from '@/Interfaces/IUser';
import axios from 'axios';
import { ElNotification, FormInstance, FormRules } from 'element-plus';


const emit = defineEmits(['closeModal'])

const formRef = ref<any>(null)

const loading = ref<Boolean>(false)

const { modalOpen } = defineProps({
    modalOpen: {
        type: Boolean,
        required: true
    }
})

const dialogFormVisible = ref<Boolean>(modalOpen)

const form = reactive<IUser>({
    name: '',
    email: '',
    password: '',
    confirmedPassword: '',
})


const rules = reactive<FormRules<IUser>>({
    name: [{ required: true, message: "O nome é obrigatório", trigger: "blur" }],
    email: [
        { required: true, message: "O e-mail é obrigatório", trigger: "blur" },
        { type: 'email', message: "Insira um e-mail válido", trigger: "blur" }
    ],
    password: [{ required: true, message: "A senha é obrigatória", trigger: "blur" }],
    confirmedPassword: [
        { required: true, message: "A confirmação de senha é obrigatória", trigger: "blur" },
        {
            validator: (rule: any, value: any, callback: any) => {
                if (value != form.password) {
                    callback(new Error('As senhas não coincidem'))
                } else {
                    callback();
                }
            },
            trigger: "blur"
        }
    ]

})

const handleCreateAccount = async () => {
    loading.value = true

    if (!formRef.value) return

    await formRef.value.validate(async (valid: any) => {
        if (valid) {

            const payload = {
                name: form.name,
                email: form.email,
                password: form.password,
                password_confirmation: form.confirmedPassword
            }

            const response = await axios.post('/register', payload)

            if (response.status === 201) {
                ElNotification({
                    title: "Ok",
                    message: "Conta criada com sucesso!"
                })
            }

            loading.value = false
            closeModal()

        } else {
            ElNotification({
                title: "Erro",
                message: "Impossível criar a conta!"
            })
        }
    })

}

watch(() => modalOpen, (newVal) => {
    dialogFormVisible.value = newVal
})

const closeModal = () => {
    dialogFormVisible.value = false
    emit('closeModal')

}


</script>

<template>
    <div>
        <el-dialog :show-close="false" v-model="dialogFormVisible" title="Criar conta" width="500">

            <el-form ref="formRef" label-position="top" :rules="rules" :model="form">
                <el-form-item label="Insira seu nome" prop="name">
                    <el-input v-model="form.name" />
                </el-form-item>

                <el-form-item label="Insira seu e-mail" prop="email">
                    <el-input v-model="form.email" />
                </el-form-item>

                <el-form-item label="Escolha uma senha" prop="password">
                    <el-input type="password" v-model="form.password" />
                </el-form-item>

                <el-form-item label="Confirme sua senha" prop="confirmedPassword">
                    <el-input type="password" v-model="form.confirmedPassword" />
                </el-form-item>
            </el-form>

            <template #footer>
                <div class="dialog-footer">
                    <el-button type="primary" @click="handleCreateAccount" :loading="loading">Criar conta</el-button>
                    <el-button @click="closeModal">Cancelar</el-button>
                </div>
            </template>

        </el-dialog>
    </div>
</template>

<style scoped>
.dialog-footer {
    display: flex;
    align-items: flex-start;
}
</style>
