<template>
  <div class="col-md-6 mt-5">
    <form method="post" @submit.prevent="signup()">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" v-model="form.name">
        <span class="text-danger" v-if="errors.name">{{errors.name[0]}}</span>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" v-model="form.email">
        <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" v-model="form.password">
        <span class="text-danger" v-if="errors.password">{{errors.password[0]}}</span>
      </div>

      <div class="form-group">
        <label for="confirm_password">confirm_password password</label>
        <input type="password" class="form-control" v-model="form.confirm_password">
      </div>
      <button class="btn btn-success">Sign UP</button>

      <router-link to="/login" tag="a" class="btn btn-info">Log In</router-link>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
        confirm_password: ""
      },
      errors: {}
    };
  },
  methods: {
    signup() {
      axios
        .post("api/auth/signup", this.form)
        .then(response => User.handleResponse(response))
        .catch(error => {
          this.errors = error.response.data.errors;
        }); //(this.errors =)error.response.data.errors));
    },
    alert() {
      alert(this.errors);
    }
  }
};
</script>