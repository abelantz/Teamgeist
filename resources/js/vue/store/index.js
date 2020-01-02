import Vuex from 'vuex';

export const store = new Vuex.Store({
    state: {
        teams: [],
        members: [],
        categories: [],
        subcategories: [],
        fields: [],
        wardrobes: [],
        matchdays: [],
        trainings: [],
        memberships: [],
        memberCategories: [],
        referees: [],
        roles: [],
        permissions: [],
    },
    mutations: {
        getTeams(state, payload) {
            state.teams =  payload
        },
        getMembers(state, payload) {
            state.members =  payload
        },
        getCategories(state, payload) {
            state.categories =  payload
        },
        getSubcategories(state, payload) {
            state.subcategories =  payload
        },
        getFields(state, payload) {
            state.fields =  payload
        },
        getWardrobes(state, payload) {
            state.wardrobes =  payload
        },
        getMatchdays(state, payload) {
            state.matchdays =  payload
        },
        getTrainings(state, payload) {
            state.trainings =  payload
        },
        getMemberships(state, payload) {
            state.memberships =  payload
        },
        getMemberCategories(state, payload) {
            state.memberCategories =  payload
        },
        getReferees(state, payload) {
            state.referees =  payload
        },
        getRoles(state, payload) {
            state.roles = payload
        },
        getPermissions(state, payload) {
            state.permissions = payload
        }
    },
    actions: {
        getTeams({commit}) {
            axios.get('api/teams')
                    .then((response) => {
                        commit('getTeams', response.data.data)
                        return response;
                    })
        },
        createTeam({commit}, payload) {
            return axios.post('api/teams', payload)
                    .then((response) => {
                        return response;
                    })
        },
        deleteTeam({commit}, payload) {
            return axios.delete('api/teams/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getMembers({commit}) {
            axios.get('api/members')
                    .then((response) => 
                        commit('getMembers', response.data.data));
        },
        getCategories({commit}) {
            axios.get('api/categories')
                    .then((response) => 
                        commit('getCategories', response.data.data));
        },
        createCategory({commit}, payload) {
            return axios.post('api/categories', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteCategory({commit}, payload) {
            return axios.delete('api/categories/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        createSubCategory({commit}, payload) {
            return axios.post('api/subcategories', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteSubCategory({commit}, payload) {
            return axios.delete('api/subcategories/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getSubcategories({commit}) {
            axios.get('api/subcategories')
                    .then((response) => 
                        commit('getSubcategories', response.data.data));
        },
        getFields({commit}) {
            axios.get('api/fields')
                    .then((response) =>  
                        commit('getFields', response.data.data));
        },
        createField({commit}, payload) {
            return axios.post('api/fields', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteField({commit}, payload) {
            return axios.delete('api/fields/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getWardrobes({commit}) {
            axios.get('api/wardrobes')
                    .then((response) =>  
                        commit('getWardrobes', response.data.data));
        },
        createWardrobe({commit}, payload) {
            return axios.post('api/wardrobes', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteWardrobe({commit}, payload) {
            return axios.delete('api/wardrobes/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getMatchdays({commit}) {
            axios.get('api/matchdays')
                        .then((response) => 
                            commit('getMatchdays', response.data.data));
        },
        createMatchday({commit}, payload) {
            return axios.post('api/matchdays', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteMatchday({commit}, payload) {
            return axios.delete('api/matchdays/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getTrainings({commit}) {
            axios.get('api/trainings')
                        .then((response) => 
                            commit('getTrainings', response.data.data));
        },
        createTraining({commit}, payload) {
            return axios.post('api/trainings', payload)
                        .then((response) => {
                            return response;
                        })
        },
        deleteTraining({commit}, payload) {
            return axios.delete('api/trainings/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getMemberships({commit}) {
            axios.get('api/memberships')
                        .then((response) => 
                            commit('getMemberships', response.data.data));
        },
        createMembership({commit}, payload) {
            return axios.post('api/memberships', payload)
                        .then((response) => {
                            return response;
                        })
        },
        getMemberCategories({commit}) {
            axios.get('api/member_categories')
                            .then((response) => 
                                commit('getMemberCategories', response.data.data));
        },
        createMemberCategory({commit}, payload) {
            return axios.post('api/member_categories', payload)
                        .then((response) => {
                            return response;
                        })
        },
        getReferees({commit}) {
            axios.get('api/referees')
                            .then((response) => 
                                commit('getReferees', response.data.data));
        },
        getRoles({commit}) {
            axios.get('api/roles')
                            .then((response) => 
                                commit('getRoles', response.data.data));
        },
        createRole({commit}, payload) {
            return axios.post('api/roles', payload)
                        .then((response) => {
                            return response;
                        })
        },
        getPermissions({commit}) {
            axios.get('api/permissions')
                            .then((response) => 
                                commit('getPermissions', response.data.data));
        },
    }
});

store.dispatch('getTeams');
store.dispatch('getMembers');
store.dispatch('getCategories');
store.dispatch('getSubcategories');
store.dispatch('getFields');
store.dispatch('getWardrobes');
store.dispatch('getMatchdays');
store.dispatch('getTrainings');
store.dispatch('getMemberships');
store.dispatch('getMemberCategories');
store.dispatch('getReferees');
store.dispatch('getRoles');
store.dispatch('getPermissions');



let Fire = new Vue();
window.Fire = Fire;


import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});

import swal from 'sweetalert2';
window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;