import axios from "axios";

let api = axios.create({
  baseURL: 'http://localhost/api/',
  timeout: 60 * 1000,
});

export default api;