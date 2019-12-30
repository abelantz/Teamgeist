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
        refereeCategories: [],
        roles: [],
        permissions: [],
        invoices: [],
        users: []
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
            state.refereeCategories =  payload
        },
        getRoles(state, payload) {
            state.roles = payload
        },
        getPermissions(state, payload) {
            state.permissions = payload
        },
        getInvoices(state, payload) {
            state.invoices = payload
        },
        getUsers(state, payload) {
            state.users = payload
        },
    },
    actions: {
        getTeams({commit, dispatch}) {
            axios.get('api/teams')
                    .then((response) => {
                        commit('getTeams', response.data.data)
                        return response;
                    })
        },
        createTeam({commit, dispatch}, payload) {
            return axios.post('api/teams', payload)
                    .then((response) => {
                        dispatch('getTeams');
                        return response;
                    })
        },
        deleteTeam({commit, dispatch}, payload) {
            return axios.delete('api/teams/' + payload)
                    .then((response) => {
                        dispatch('getTeams');
                        return response;
                    })
        },
        getMembers({commit, dispatch}) {
            axios.get('api/members')
                    .then((response) => 
                        commit('getMembers', response.data.data));
        },
        createMember({commit, dispatch}, payload) {
            return axios.post('api/members', payload)
                    .then((response) => {
                        dispatch('getMembers');
                        dispatch('getUsers');
                        dispatch('getInvoices');
                        return response;
                    })
        },
        getCategories({commit, dispatch}) {
            axios.get('api/categories')
                    .then((response) => 
                        commit('getCategories', response.data.data));
        },
        createCategory({commit, dispatch}, payload) {
            return axios.post('api/categories', payload)
                        .then((response) => {
                            dispatch('getCategories');
                            return response;
                        })
        },
        deleteCategory({commit, dispatch}, payload) {
            return axios.delete('api/categories/' + payload)
                    .then((response) => {
                        dispatch('getCategories');
                        return response;
                    })
        },
        getSubcategories({commit, dispatch}) {
            axios.get('api/subcategories')
                    .then((response) => 
                        commit('getSubcategories', response.data.data));
        },
        createSubCategory({commit, dispatch}, payload) {
            return axios.post('api/subcategories', payload)
                        .then((response) => {
                            dispatch('getSubcategories');
                            return response;
                        })
        },
        deleteSubCategory({commit, dispatch}, payload) {
            return axios.delete('api/subcategories/' + payload)
                    .then((response) => {
                        dispatch('getSubcategories');
                        return response;
                    })
        },
        getFields({commit, dispatch}) {
            axios.get('api/fields')
                    .then((response) =>  
                        commit('getFields', response.data.data));
        },
        createField({commit, dispatch}, payload) {
            return axios.post('api/fields', payload)
                        .then((response) => {
                            dispatch('getFields');
                            return response;
                        })
        },
        deleteField({commit, dispatch}, payload) {
            return axios.delete('api/fields/' + payload)
                    .then((response) => {
                        dispatch('getFields');
                        return response;
                    })
        },
        getWardrobes({commit, dispatch}) {
            axios.get('api/wardrobes')
                    .then((response) =>  
                        commit('getWardrobes', response.data.data));
        },
        createWardrobe({commit, dispatch}, payload) {
            return axios.post('api/wardrobes', payload)
                        .then((response) => {
                            dispatch('getWardrobes');
                            return response;
                        })
        },
        deleteWardrobe({commit, dispatch}, payload) {
            return axios.delete('api/wardrobes/' + payload)
                    .then((response) => {
                        dispatch('getWardrobes');
                        return response;
                    })
        },
        getMatchdays({commit, dispatch}) {
            axios.get('api/matchdays')
                        .then((response) => 
                            commit('getMatchdays', response.data.data));
        },
        createMatchday({commit, dispatch}, payload) {
            return axios.post('api/matchdays', payload)
                        .then((response) => {
                            dispatch('getMatchdays');
                            return response;
                        })
        },
        deleteMatchday({commit, dispatch}, payload) {
            return axios.delete('api/matchdays/' + payload)
                    .then((response) => {
                        dispatch('getMatchdays');
                        return response;
                    })
        },
        getTrainings({commit, dispatch}) {
            axios.get('api/trainings')
                        .then((response) => 
                            commit('getTrainings', response.data.data));
        },
        createTraining({commit, dispatch}, payload) {
            return axios.post('api/trainings', payload)
                        .then((response) => {
                            dispatch('getTrainings');
                            return response;
                        })
        },
        deleteTraining({commit, dispatch}, payload) {
            return axios.delete('api/trainings/' + payload)
                    .then((response) => {
                        dispatch('getTrainings');
                        return response;
                    })
        },
        getMemberships({commit, dispatch}) {
            axios.get('api/memberships')
                        .then((response) => 
                            commit('getMemberships', response.data.data));
        },
        createMembership({commit, dispatch}, payload) {
            return axios.post('api/memberships', payload)
                        .then((response) => {
                            dispatch('getMemberships');
                            dispatch('getUsers');
                            dispatch('getInvoices');
                            return response;
                        })
        },
        deleteMembership({commit, dispatch}, payload) {
            return axios.delete('api/memberships/' + payload)
                    .then((response) => {
                        dispatch('getMemberships');
                        return response;
                    })
        },
        getMemberCategories({commit, dispatch}) {
            axios.get('api/member_categories')
                            .then((response) => 
                                commit('getMemberCategories', response.data.data));
        },
        createMemberCategory({commit, dispatch}, payload) {
            return axios.post('api/member_categories', payload)
                        .then((response) => {
                            dispatch('getMemberCategories')
                            return response;
                        })
        },
        getReferees({commit, dispatch}) {
            axios.get('api/referees')
                            .then((response) => 
                                commit('getReferees', response.data.data));
        },
        createReferee({commit, dispatch}, payload) {
            return axios.post('api/referees', payload)
                        .then((response) => {
                            dispatch('getReferees')
                            return response;
                        })
        },
        deleteReferee({commit, dispatch}, payload) {
            return axios.delete('api/referees/' + payload)
                    .then((response) => {
                        dispatch('getReferees')
                        return response;
                    })
        },
        getRefereeCategories({commit, dispatch}) {
            axios.get('api/referee_categories')
                            .then((response) => 
                                commit('getRefereeCategories', response.data.data));
        },
        createRefereeCategory({commit, dispatch}, payload) {
            return axios.post('api/referee_categories', payload)
                        .then((response) => {
                            dispatch('getRefereeCategories')
                            return response;
                        })
        },
        deleteRefereeCategory({commit, dispatch}, payload) {
            return axios.delete('api/referee_categories/' + payload)
                    .then((response) => {
                        dispatch('getRefereeCategories')
                        return response;
                    })
        },
        getRoles({commit, dispatch}) {
            axios.get('api/roles')
                            .then((response) => 
                                commit('getRoles', response.data.data));
        },
        createRole({commit, dispatch}, payload) {
            return axios.post('api/roles', payload)
                        .then((response) => {
                            dispatch('getRoles')
                            return response;
                        })
        },
        getPermissions({commit, dispatch}) {
            axios.get('api/permissions')
                            .then((response) => 
                                commit('getPermissions', response.data.data));
        },
        getInvoices({commit, dispatch}) {
            axios.get('api/invoices')
                            .then((response) => 
                                commit('getInvoices', response.data.data));
        },
        updateInvoice({commit, dispatch}, payload) {
            return axios.put('api/invoices/' + payload, {paid: 1})
                    .then((response) => {
                        dispatch('getInvoices')
                        return response;
                    })
        },
        getUsers({commit, dispatch}) {
            axios.get('api/users')
                            .then((response) => 
                                commit('getUsers', response.data.data));
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
store.dispatch('getInvoices');
store.dispatch('getUsers');