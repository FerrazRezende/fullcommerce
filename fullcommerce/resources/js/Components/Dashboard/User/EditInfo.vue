<script setup lang='ts'>
import { ref, reactive } from 'vue';
import { ElNotification, FormRules } from 'element-plus';
import { useForm } from '@inertiajs/vue3';


const emit = defineEmits()

const { user } = defineProps({
    user: {
        type: Object,
        required: true
    }
})


const formRef = ref<any>(null)
const loading = ref<boolean>(false)
const rules = reactive<FormRules>({
    name: [{ required: true, message: "O nome não pode ficar em branco", trigger: "blur" }],
    email: [
        { required: true, message: "O e-mail não pode ficar em branco", trigger: "blur" },
        { type: 'email', message: "Insira um e-mail válido", trigger: "blur" }
    ]
})


const showOverlay = ref<boolean>(false)

const goBack = () => {
    emit('edit-info')

}

const submitForm = async () => {
    const form = useForm({
        name: ref(user.name),
        email: ref(user.email)

    })

    loading.value = true

    if (!formRef.value) return

    await formRef.value.validate(async (valid: any) => {
        if (valid) {
            form.put('/profile', {
                onSuccess: () => {
                    ElNotification.success({
                        title: "Ok",
                        message: "Dados editados com sucesso!",
                        duration: 1500
                    })
                },
                onError: () => {
                    ElNotification.error({
                        title: "Erro",
                        message: "Erro ao editar os dados",
                        duration: 2000
                    })
                }
            })
            loading.value = false
        }
    })
}

const beforeAvatarUpload = () => {
    console.log("?")
}

const handleAvatarSuccess = () => {

    console.log("?")
}

</script>

<template>
    <el-page-header @back="goBack">
        <template #content>
            <span class="text-large font-600 mr-3">Editar informações de <b>{{ user.name }}</b></span>
        </template>
        <template #extra>

            <div class="buttons-container">
                <el-button link type="danger">Excluir conta</el-button>

                <el-divider direction="vertical" />

                <el-button link type="danger">
                    Redefinir senha
                </el-button>
            </div>



        </template>
    </el-page-header>

    <el-form label-position="top" ref="formRef" :rules="rules" :model="user">

        <el-form-item label="Foto de perfil">
            <el-upload class="avatar-uploader" action="https://run.mocky.io/v3/9d059bf9-4660-45f2-925d-ce80ad6c4d151"
                :show-file-list="false" :on-success="handleAvatarSuccess" :before-upload="beforeAvatarUpload"
                @mouseover="showOverlay = true" @mouseleave="showOverlay = false">
                <div class="img-container">
                    <div class="img-overlay" v-if="showOverlay">
                    </div>
                    <v-icon style="position: absolute; color: white;" :scale="2" name="hi-solid-plus"
                        v-if="showOverlay" />
                    <img class="avatar" src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png" />
                </div>
            </el-upload>
        </el-form-item>
        <el-form-item label="Nome" prop="name">
            <el-input v-model="user.name" />
        </el-form-item>


        <el-form-item label="E-mail" prop="email">
            <el-input v-model="user.email" />
        </el-form-item>
        <el-form-item class="buttons-item">
            <el-button type="primary" @click="submitForm">Enviar</el-button>
        </el-form-item>
    </el-form>

</template>

<style scoped>
.img-overlay {
    position: absolute;
    width: 180px;
    border-radius: 16px;

    opacity: 0.5;

    height: 100%;
    background-color: black !important;

}



.img-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

.el-form-item {
    width: 40%;
    margin: 16px 0;
}

.buttons-container {
    display: flex;
}
</style>
