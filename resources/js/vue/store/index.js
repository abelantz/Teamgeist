import Vuex from 'vuex';

const URL = 'http://teamgeist.test';

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
        referee_categories: [],
        roles: [],
        permissions: [],
        users: [],
        invoices: []
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
        getRefereeCategories(state, payload) {
            state.referee_categories =  payload
        },
        getRoles(state, payload) {
            state.roles = payload
        },
        getPermissions(state, payload) {
            state.permissions = payload
        },
        getUsers(state, payload) {
            state.users = payload
        },
        getInvoices(state, payload) {
            state.invoices = payload
        },
    },
    actions: {
        getTeams({commit}) {
            axios.get(URL + '/api/teams')
                    .then((response) => {
                        commit('getTeams', response.data.data)
                        return response;
                    })
        },
        createTeam({commit, dispatch}, payload) {
            return axios.post(URL + '/api/teams', payload)
                    .then((response) => {
                        dispatch('getTeams');
                        return response;
                    })
        },
        editTeam({commit, dispatch}, payload) {
            return axios.put(URL + '/api/teams/' + payload.id, payload)
                    .then((response) => {
                        dispatch('getTeams');
                        return response;
                    })
        },
        deleteTeam({commit}, payload) {
            return axios.delete(URL + '/api/teams/' + payload)
                    .then((response) => {
                        return response;
                    })
        },
        getMembers({commit}) {
            axios.get(URL + '/api/members')
                    .then((response) => 
                        commit('getMembers', response.data.data));
        },
        createMember({commit, dispatch}, payload) {
            return axios.post(URL + '/api/members', payload)
                        .then((response) => {
                            dispatch('getMembers');
                            return response;
                        });
        },
        updateMember({commit, dispatch}, payload) {
            return axios.put(URL + '/api/members/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getMembers');
                            return response;
                        });
        },
        getCategories({commit}) {
            axios.get(URL + '/api/categories')
                    .then((response) => 
                        commit('getCategories', response.data.data));
        },
        createCategory({commit}, payload) {
            return axios.post(URL + '/api/categories', payload)
                        .then((response) => {
                            return response;
                        });
        },
        deleteCategory({commit}, payload) {
            return axios.delete(URL + '/api/categories/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        createSubCategory({commit}, payload) {
            return axios.post(URL + '/api/subcategories', payload)
                        .then((response) => {
                            return response;
                        });
        },
        deleteSubCategory({commit}, payload) {
            return axios.delete(URL + '/api/subcategories/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        getSubcategories({commit}) {
            axios.get(URL + '/api/subcategories')
                    .then((response) => 
                        commit('getSubcategories', response.data.data));
        },
        getFields({commit}) {
            axios.get(URL + '/api/fields')
                    .then((response) =>  
                        commit('getFields', response.data.data));
        },
        createField({commit}, payload) {
            return axios.post(URL + '/api/fields', payload)
                        .then((response) => {
                            dispatch('getFields');
                            return response;
                        });
        },
        updateField({commit, dispatch}, payload) {
            return axios.put(URL + '/api/fields/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getFields');
                            return response;
                        });
        },
        deleteField({commit}, payload) {
            return axios.delete(URL + '/api/fields/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        getWardrobes({commit}) {
            axios.get(URL + '/api/wardrobes')
                    .then((response) =>  
                        commit('getWardrobes', response.data.data));
        },
        createWardrobe({commit}, payload) {
            return axios.post(URL + '/api/wardrobes', payload)
                        .then((response) => {
                            dispatch('getWardrobes');
                            return response;
                        });
        },
        updateWardrobe({commit, dispatch}, payload) {
            return axios.put(URL + '/api/wardrobes/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getWardrobes');
                            return response;
                        });
        },
        deleteWardrobe({commit}, payload) {
            return axios.delete(URL + '/api/wardrobes/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        getMatchdays({commit}) {
            axios.get(URL + '/api/matchdays')
                        .then((response) => 
                            commit('getMatchdays', response.data.data));
        },
        createMatchday({commit}, payload) {
            return axios.post(URL + '/api/matchdays', payload)
                        .then((response) => {
                            return response;
                        });
        },
        updateMatchday({commit, dispatch}, payload) {
            return axios.put(URL + '/api/matchdays/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getMatchdays');
                            return response;
                        });
        },
        deleteMatchday({commit}, payload) {
            return axios.delete(URL + '/api/matchdays/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        getTrainings({commit}) {
            axios.get(URL + '/api/trainings')
                        .then((response) => 
                            commit('getTrainings', response.data.data));
        },
        createTraining({commit}, payload) {
            return axios.post(URL + '/api/trainings', payload)
                        .then((response) => {
                            return response;
                        });
        },
        deleteTraining({commit}, payload) {
            return axios.delete(URL + '/api/trainings/' + payload)
                    .then((response) => {
                        return response;
                    });
        },
        getMemberships({commit}) {
            axios.get(URL + '/api/memberships')
                        .then((response) => 
                            commit('getMemberships', response.data.data));
        },
        createMembership({commit, dispatch}, payload) {
            return axios.post(URL + '/api/memberships', payload)
                        .then((response) => {
                            dispatch('getMemberships');
                            return response;
                        });
        },
        updateMembership({commit, dispatch}, payload) {
            return axios.put(URL + '/api/memberships/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getMemberships');
                            return response;
                        });
        },
        getMemberCategories({commit}) {
            axios.get(URL + '/api/member_categories')
                            .then((response) => 
                                commit('getMemberCategories', response.data.data));
        },
        createMemberCategory({commit}, payload) {
            return axios.post(URL + '/api/member_categories', payload)
                        .then((response) => {
                            return response;
                        });
        },
        getReferees({commit}) {
            axios.get(URL + '/api/referees')
                            .then((response) => 
                                commit('getReferees', response.data.data));
        },
        createReferee({commit, dispatch}, payload) {
            return axios.post(URL + '/api/referees', payload)
                        .then((response) => {
                            dispatch('getReferees');
                            return response;
                        });
        },
        updateReferee({commit, dispatch}, payload) {
            return axios.put(URL + '/api/referees/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getReferees');
                            return response;
                        });
        },
        deleteReferee({commit, dispatch}, payload) {
            return axios.delete(URL + '/api/referees/' + payload)
                    .then((response) => {
                        dispatch('getReferees');
                        return response;
                    });
        },
        getRefereeCategories({commit}) {
            axios.get(URL + '/api/referee_categories')
                            .then((response) => 
                                commit('getRefereeCategories', response.data.data));
        },
        createRefereeCategory({commit, dispatch}, payload) {
            return axios.post(URL + '/api/referee_categories', payload)
                        .then((response) => {
                            dispatch('getRefereeCategories');
                            return response;
                        });
        },
        getRoles({commit}) {
            axios.get(URL + '/api/roles')
                            .then((response) => 
                                commit('getRoles', response.data.data));
        },
        createRole({commit}, payload) {
            return axios.post(URL + '/api/roles', payload)
                        .then((response) => {
                            return response;
                        });
        },
        getPermissions({commit}) {
            axios.get(URL + '/api/permissions')
                            .then((response) => 
                                commit('getPermissions', response.data.data));
        },
        getUsers({commit}) {
            axios.get(URL + '/api/users')
                            .then((response) => 
                                commit('getUsers', response.data.data));
        },
        createUser({commit, dispatch}, payload) {
            return axios.post(URL + '/api/users', payload)
                        .then((response) => {
                            dispatch('getUsers');
                            return response;
                        });
        },
        updateUser({commit, dispatch}, payload) {
            return axios.put(URL + '/api/users/' + payload.id, payload)
                        .then((response) => {
                            dispatch('getUsers');
                            return response;
                        });
        },
        getInvoices({commit}) {
            axios.get(URL + '/api/invoices')
                            .then((response) => 
                                commit('getInvoices', response.data.data));
        },
        updateInvoice({commit, dispatch}, payload) {
            return axios.put(URL + '/api/invoices/' + payload, {paid: 1})
                        .then((response) => {
                            dispatch('getInvoices');
                            return response;
                        });
        },
        createMatchdayEvent({commit, dispatch}, payload) {
            return axios.post(URL + '/api/matchday_events', payload)
                        .then((response) => {
                            return response;
                        });
        },
        createMatchdayAttendance({commit, dispatch}, payload) {
            return axios.post(URL + '/api/matchday_attendance', payload)
                        .then((response) => {
                            return response;
                        });
        },
        createTrainingAttendance({commit, dispatch}, payload) {
            return axios.post(URL + '/api/training_attendance', payload)
                        .then((response) => {
                            return response;
                        });
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
store.dispatch('getRefereeCategories');
store.dispatch('getRoles');
store.dispatch('getPermissions');
store.dispatch('getUsers');
store.dispatch('getInvoices');

