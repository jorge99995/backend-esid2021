<template>
    <div class="main-wrapper">
        <Navbar></Navbar>
        <Aside></Aside>
        <router-view></router-view>
    </div>
</template>

<script setup>
import Navbar from "./Page/Plantilla/Navbar.vue";
import Aside from "./Page/Plantilla/Aside.vue";
components: {
    Navbar;
    Aside;
}
</script>
