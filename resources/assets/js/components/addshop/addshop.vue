<template>
    <input type="text" class="form-control"
           v-model="name" @keyup.enter="addTask" placeholder="入力...">
</template>

<script>
    export default {
        name: "addshop.vue"
    }
</script>

<style scoped>

</style>