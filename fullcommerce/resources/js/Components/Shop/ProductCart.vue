<script setup lang='ts'>

defineProps({
    title: {
        type: String,
        required: true
    },
    price: {
        type: String,
        required: true
    }
})


</script>

<template>
    <div class="product-card">
        <div class="photo-container">
            <img>
        </div>
        <div class="title-price-container">
            <p>{{ title }}</p>
            <p>R$ {{ price }}</p>
        </div>
        <div class="footer-container">
            <el-button type="primary">Abrir produto</el-button>
            <el-button type="info">Adicionar ao carrinho</el-button>
        </div>
    </div>
</template>

<style scoped>
.product-card {
    margin: 8px 29px;
    min-width: 234px;
    height: 380px;
    border: solid 1px var(--el-color-primary);
    padding: 0 8px;
}



.title-price-container {
    text-align: center;
}


.photo-container {
    margin: 8px auto;
    width: 80%;
    height: 60%;
    border: solid 1px grey
}

.footer-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-container>.el-button {
    width: 100%;
    margin: 4px 0;
}
</style>
