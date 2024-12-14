<script setup lang='ts'>
import CatalogHeader from '@/Components/Shop/CatalogHeader.vue';
import FiltroCategoria from '@/Components/Shop/FiltroCategoria.vue';
import ProductCart from '@/Components/Shop/ProductCart.vue';
import Layout from '@/Layouts/IndexLayout.vue';


const products = [
    {
        title: "Teste produto 1",
        price: "10"
    },
    {
        title: "Teste produto 2",
        price: "20"
    },
    {
        title: "Teste produto 3",
        price: "30"
    },
    {
        title: "Teste produto 4",
        price: "40"
    },
    {
        title: "Teste produto 5",
        price: "50"
    },
    {
        title: "Teste produto 6",
        price: "60"
    },
    {
        title: "Teste produto 7",
        price: "70"
    },
    {
        title: "Teste produto 8",
        price: "80"
    }



]


</script>

<script lang='ts'>

export default {
    layout: Layout
}
</script>

<template>
    <div class="shop-container">
        <FiltroCategoria />

        <div class="catalogo-container">
            <CatalogHeader />

            <div class="products-container">

                <template v-for="i in products">
                    <ProductCart :title="i.title" :price="i.price" />
                </template>
            </div>
        </div>
    </div>
</template>

<style scoped>
.shop-container {
    display: flex;
}

.catalogo-container {
    margin: 16px 0;
    width: 100%;

}

.products-container {
    margin: 16px 0;
    display: flex;
    flex-wrap: wrap;

    justify-content: start;
}
</style>
