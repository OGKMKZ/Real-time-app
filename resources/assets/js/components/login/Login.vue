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
      <button class="btn btn-success btn-block">Submit</button>
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
      axios
        .post("api/auth/login", this.form)
        .then(response => console.log(response.data))
        .catch(error => console.log(error.response.data));
    }
  }
};
</script>

<style>
</style>
