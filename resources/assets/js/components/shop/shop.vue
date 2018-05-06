<template>
    <div>
        <span>shop</span>
        <div>{{a}}</div>
        <button @click="b()" class="btn btn-sm btn-danger">b</button>

        <input type="checkbox" id="sdvx" value="1" v-model="checkedNames">
        <label for="sdvx">sdvx</label>
        <input type="checkbox" id="pop'n" value="2" v-model="checkedNames">
        <label for="pop'n">pop'n</label>
        <input type="checkbox" id="chunithm" value="3" v-model="checkedNames">
        <label for="chunithm">chunithm</label>

        <br>
        <span>Checked names: {{ checkedNames }}</span>
        <br>
        <span>{{ shops }}</span>
    </div>
</template>

<script src="./shop.js"></script>

<style scoped src="./shop.css"></style>