<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Players overview</h3>
                        <div class="card-tools">
                            
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fitness</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.fitnessValue" :min="1" :max="10"
                                            :processStyle="fitnessValue.processStyle"
                                            :lineHeight="fitnessValue.lineHeight"
                                            :tooltipStyles="fitnessValue.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{fitnessValue.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Footplay</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.footplay" :min="1" :max="10"
                                            :processStyle="footplay.processStyle"
                                            :lineHeight="footplay.lineHeight"
                                            :tooltipStyles="footplay.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{footplay.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Willing to fight</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.fight" :min="1" :max="10"
                                            :processStyle="fight.processStyle"
                                            :lineHeight="fight.lineHeight"
                                            :tooltipStyles="fight.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{fight.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.condition" :min="1" :max="10"
                                            :processStyle="condition.processStyle"
                                            :lineHeight="condition.lineHeight"
                                            :tooltipStyles="condition.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{condition.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Game Overview</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.gameOverview" :min="1" :max="10"
                                            :processStyle="gameOverview.processStyle"
                                            :lineHeight="gameOverview.lineHeight"
                                            :tooltipStyles="gameOverview.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{gameOverview.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Technique / ball feeling</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.technique" :min="1" :max="10"
                                            :processStyle="technique.processStyle"
                                            :lineHeight="technique.lineHeight"
                                            :tooltipStyles="technique.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{technique.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Shoot</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.shoot" :min="1" :max="10"
                                            :processStyle="shoot.processStyle"
                                            :lineHeight="shoot.lineHeight"
                                            :tooltipStyles="shoot.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{shoot.val}}</span></td>
                                </tr>
                                <tr>
                                    <td>Mental Strenght</td>
                                    <td>
                                        <vue-slide-bar v-model="overview.mental" :min="1" :max="10"
                                            :processStyle="mental.processStyle"
                                            :lineHeight="mental.lineHeight"
                                            :tooltipStyles="mental.tooltipStyles">
                                        </vue-slide-bar>
                                    </td>
                                    <td><span class="badge bg-danger">{{mental.val}}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary bg-primary ">Submit</button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import VueSlideBar from 'vue-slide-bar'
    export default {
        data() {
            return {
                overview:{
                    fitnessValue: null,
                    footplay: null,
                    fight: null,
                    condition: null,
                    gameOverview: null,
                    technique: null,
                    shoot: null,
                    mental: null
                },
                fitnessValue: {
                    val: 5,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                footplay: {
                    val: 8,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                fight: {
                    val: 4,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                condition: {
                    val: 4,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                gameOverview: {
                    val: 4,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                technique: {
                    val: 4,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                shoot: {
                    val: 4,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },
                mental: {
                    val: 7,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883',
                        padding: '0 !important'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                }
            }
        },
        components: {
            VueSlideBar
        }
    }

</script>

<style>

</style>
