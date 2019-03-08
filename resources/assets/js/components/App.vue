<template>
  <div>
    <app-navbar></app-navbar>
    <div class="container">
      <div class="row">
        <transition
          enter-active-class="animated fadeInLeft"
          leave-active-class="animated fadeOutRight"
          mode="out-in"
        >
          <router-view></router-view>
        </transition>
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
