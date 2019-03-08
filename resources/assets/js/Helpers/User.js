import Token from './Token';
import Storage from './Storage';

class User {
  signup(data) {}

  login(data) {
    axios
      .post('api/auth/login', data)
      .then(response => this.handleResponse(response))
      .catch(error => console.log(error.response.data));
  }

  handleResponse(res) {
    const access_token = res.data.access_token;
    const username = res.data.user;
    if (Token.isValid(access_token)) {
      Storage.store(access_token, username);
    } else {
      console.log('erreur');
    }
  }

  hasToken() {
    const storedToken = Storage.getToken();
    if (storedToken) {
      return Token.isValid(storedToken);
    }

    return false;
  }

  loggedIn() {
    return this.hasToken();
  }

  logout() {
    Storage.clear();
  }

  name() {
    if (this.loggedIn()) {
      return Storage.getUser;
    }
  }

  id() {
    if (this.loggedIn()) {
      const payload = Token.payload(Storage.getToken());
      if (payload) {
        return payload.sub;
      }
    }
  }
}

export default (User = new User());
