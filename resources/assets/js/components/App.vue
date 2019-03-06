<template>
  <div>
    <app-navbar></app-navbar>
    <div class="container">
      <div class="row">
        <router-view></router-view>
      </div>
    </div>
    <app-footer></app-footer>
  </div>
</template>

<script>
import AppHome from "./AppHome.vue";
import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";
export default {
  components: {
    appHome: AppHome,
    appNavbar: Navbar,
    appFooter: Footer
  }
};
</script>

<style>
</style>
