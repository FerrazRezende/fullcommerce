<script setup lang='ts'>
import { ref } from 'vue';
import UserInfo from '../User/UserInfo.vue';
import EditInfo from '../User/EditInfo.vue';



defineProps({
    user: {
        type: Object,
        required: true
    }
})


const defineView = (infoShow: string) => {
    showInfo.value = infoShow
}

const showInfo = ref<string>('user-info')

</script>

<template>
    <div v-if="showInfo === 'user-info'" class="account-info">
        <UserInfo :user="user" @edit-info="defineView('edit-info')" />
    </div>

    <div v-if="showInfo === 'edit-info'" class="edit-account-info">
        <EditInfo :user="user" @edit-info="defineView('user-info')" />
    </div>

</template>


<style scoped></style>
