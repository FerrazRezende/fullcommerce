<script setup lang='ts'>
import AddProduct from '../Product/AddProduct.vue';
import ProductTable from '../Product/ProductTable.vue';
import { ref } from 'vue';


const tableShow = ref<boolean>(true)

const showTable = () => {

    tableShow.value = false

}

</script>

<template>

    <div class="add-product-container" v-if="!tableShow">
        <AddProduct @back="tableShow = true" />
    </div>

    <div class="table-container" v-if="tableShow">
        <el-button @click="showTable" size="small" plain type="info">Adicionar produto</el-button>
        <ProductTable />
    </div>
</template>

<style scoped>
.el-button {
    margin-bottom: 8px;
}
</style>
