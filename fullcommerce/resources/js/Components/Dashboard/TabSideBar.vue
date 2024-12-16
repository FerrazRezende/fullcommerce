<script setup lang='ts'>
import Dashboard from '@/Components/Dashboard/Tabs/Dashboard.vue';
import Produtos from '@/Components/Dashboard/Tabs/Produtos.vue';


defineProps({
    user: {
        type: Object,
        required: true
    }
})

</script>

<template>
    <el-tabs tab-position="left" type="border-card" class="dashboard-tabs">

        <el-tab-pane>
            <template #label>
                <span class="custom-tabs-icon">
                    <v-icon name="md-spacedashboard-outlined" />
                    <span>Dashboard</span>
                </span>
            </template>

            <Dashboard :user="user" />

        </el-tab-pane>

        <el-tab-pane>
            <template #label>
                <span class="custom-tabs-icon">
                    <v-icon name="co-screen-smartphone" />
                    <span>Produtos</span>
                </span>
            </template>

            <Produtos />

        </el-tab-pane>

        <el-tab-pane>
            <template #label>
                <span class="custom-tabs-icon">
                    <v-icon name="md-requestpage-outlined" />
                    <span>Pedidos</span>
                </span>
            </template>

            <h1>Pedidos</h1>

        </el-tab-pane>

        <el-tab-pane>
            <template #label>
                <span class="custom-tabs-icon">
                    <v-icon name="md-localshipping" />
                    <span>Entregas</span>
                </span>
            </template>

            <h1>Entregas</h1>

        </el-tab-pane>

        <el-tab-pane>
            <template #label>
                <span class="custom-tabs-icon">
                    <v-icon name="bi-bag-heart-fill" />
                    <span>Lista de desejos</span>
                </span>
            </template>
        </el-tab-pane>
    </el-tabs>
</template>

<style scoped>
.custom-tabs-icon {
    display: flex;
    align-items: center;
    width: 100%;
}


.custom-tabs-icon>span {
    margin: 0 4px;

}


.dashboard-tabs {
    height: 100vh;
}
</style>
