import Vuex from "vuex";
import Vue from "vue";
import actions from "./etc/actions";

Vue.use(Vuex);

export default new Vuex.Store({
    actions,
    strict: true,
});