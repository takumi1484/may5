<template>
    <div id="app">
        <a id="title">base.vue</a>
        <hr>
        <div id="topCace">
            <ul>
                <li><router-link to="/">none</router-link></li>
                <li><router-link to="/ex">ex</router-link></li>
                <li><router-link to="/shop">shop</router-link></li>
                <li><router-link to="/music">music</router-link></li>
                <li><router-link to="/machine">machine</router-link></li>
                <li><router-link to="/about">about</router-link></li>
            </ul>
        </div>
        <hr>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script src="./base.js"></script>

<style scoped src="./base.css"></style>