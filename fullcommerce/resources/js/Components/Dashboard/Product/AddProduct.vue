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

    <section>

        <el-form style="margin: 8px 0" label-position="top">

            <el-form-item label="Fotos do produto">
                <el-upload v-model:file-list="fileList" list-type="picture-card" :on-preview="handlePictureCardPreview"
                    :on-remove="handleRemove">
                    <v-icon name="hi-solid-plus" />
                </el-upload>
            </el-form-item>

            <el-form-item label="Nome do produto">
                <el-input />
            </el-form-item>

            <el-form-item label="Descrição do produto">

                <el-input type="textarea" />

            </el-form-item>


            <el-row :gutter="10">
                <el-col :span="5">
                    <el-form-item label="Categoria">
                        <el-select>
                            <el-option />
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="10">
                    <el-form-item label="Quantidade">
                        <el-input-number />
                    </el-form-item>
                </el-col>
            </el-row>


            <el-form-item>
                <el-button type="primary">
                    Salvar produto
                </el-button>
            </el-form-item>



        </el-form>



    </section>

</template>

<style scoped>
.el-form-item {
    max-width: 420px;
}
</style>
