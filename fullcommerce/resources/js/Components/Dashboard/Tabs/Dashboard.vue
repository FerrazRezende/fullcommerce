<script setup lang='ts'>
import { ref } from 'vue';
import AccountInfo from '../User/AccountInfo.vue';
import ShippingInfo from '../User/ShippingInfo.vue';

const nome = ref<string>("Matheus Ferraz")
const email = ref<string>("mtsferraz.rezende@gmail.com")
const phone = ref<string>("11978631492")
const shippingAddress = ref<string>("Rua Cerquilo, 88, Vl Clarice, Santo André, São Paulo - 09250-780")

const addressInfo = ref<string>("Casa de muro azul. Deixar entrega com Ana. Matheus e Mariana também podem receber")

</script>

<template>
    <div class="header-info">
        <h1>Olá {{ nome }}</h1>
        <p>Esse é o seu dashboard. Você pode facilmente checar qualquer informação da sua conta, como também visualizar
            seus últimos pedidos, gerenciar seus endereços de entrega e sua carteira</p>
    </div>
    <div class="account-ship-container">
        <div class="account-info">
            <AccountInfo :nome="nome" :email="email" :phone="phone" />
        </div>

        <div class="shipping-info">
            <ShippingInfo :shipping-address="shippingAddress" :address-info="addressInfo" :phone="phone" :email="email"
                :nome="nome" />
        </div>
    </div>
</template>


<style scoped>
h1 {
    font-size: 1.5rem;
    font-family: bold;
}

.header-info>p {
    font-size: 0.8rem;
    color: grey;
}

.header-info {
    width: 40%;
}

.account-ship-container {
    margin: 8px 0;
    display: flex;
}

.account-ship-container>div {
    margin: 8px 16px 8px 0;
}
</style>
