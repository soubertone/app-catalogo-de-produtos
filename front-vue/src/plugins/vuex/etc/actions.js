import _axios from "@/plugins/axios";

const actions = {

    getProducts({}, params) {
        return new Promise( (resolve, reject) => {
            _axios.get(params.route, { params: params.params })
                .then(response => {

                    if(response.data.data.error) {
                        resolve({ error: true, message: response.data.data });
                    } else {
                        resolve(response.data.data);
                    }

                })
                .catch(err => {
                    reject(err);
                });
        });
    }
}

export default actions;