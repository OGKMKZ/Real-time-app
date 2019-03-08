<template>
  <div class="col-md-6 mt-5">
    <form method="post" @submit.prevent="login()">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" v-model="form.email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" v-model="form.password">
      </div>
      <button class="btn btn-success">Log in</button>

      <router-link to="/signup" tag="a" class="btn btn-info">Sign up</router-link>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    login() {
      User.login(this.form);
    }
  }
};
</script>

<style>
</style>
