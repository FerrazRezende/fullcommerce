<script setup lang='ts'>


interface Products {

    photo: string,
    title: string,
    price: string

}

const tableData: Products[] = [
    {
        photo: "https://http2.mlstatic.com/D_NQ_NP_958475-MLA79694009423_102024-O.webp",
        title: "aa",
        price: "aa"
    },
    {
        photo: "https://http2.mlstatic.com/D_NQ_NP_954966-MLU75766932166_042024-O.webp",
        title: "teste2",
        price: "200"
    }
]


</script>

<template>
    <el-table border stripe :data="tableData">


        <el-table-column type="selection" width="55" />

        <el-table-column label="Foto" width="120">
            <template #default="scope">
                <div style="max-width: 64px;">
                    <el-image :src="scope.row.photo" />
                </div>
            </template>
        </el-table-column>

        <el-table-column label="Titulo">
            <template #default="scope">
                {{ scope.row.title }}
            </template>
        </el-table-column>

        <el-table-column label="Preço">
            <template #default="scope">
                {{ scope.row.price }}
            </template>
        </el-table-column>

        <el-table-column label="Ações" width="150">

        </el-table-column>

    </el-table>

</template>

<style scoped></style>
