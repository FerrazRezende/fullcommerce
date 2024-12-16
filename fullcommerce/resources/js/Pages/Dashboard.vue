<script setup lang='ts'>
import TabSideBar from '@/Components/Dashboard/TabSideBar.vue';
import Layout from '@/Layouts/IndexLayout.vue';

defineProps({
    user: {
        type: Object,
        required: true
    },
})

</script>


<script lang='ts'>
export default {
    layout: Layout
}
</script>

<template>
    <div class="sidebar-container">
        <TabSideBar :user="user" />
    </div>

</template>

<style scoped>
.sidebar-container {
    margin: 16px 0;
}
</style>
