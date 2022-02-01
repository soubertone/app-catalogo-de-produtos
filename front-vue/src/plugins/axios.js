import axios from "axios";

let config = {
    baseURL: "http://localhost/api/",
}

const _axios = axios.create(config);

export default _axios;