<template>
    <div>

        <div class="row">
            <div class="col">
                <div class="info-box">
                    <span class="info-box-icon bg-gray w-25">{{ time }}</span>

                    <button @click="startFirstHalf" type="button" class="btn btn-primary btn-lg m-1 ml-auto">Start First Half</button>
                    <button @click="startSecondHalf" type="button" class="btn btn-primary btn-lg m-1">Start Second Half</button>
                    <button @click="stop" type="button" class="btn btn-primary btn-lg m-1">Stop</button>
                    <button @click="reset" type="button" class="btn btn-primary btn-lg m-1">Reset</button>

                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-3">
                <div class="info-box mb-3 py-5 bg-warning" @click="yellowCard">
                    <span class="info-box-icon"><i class="fas fa-file"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                        <span class="info-box-number">YELLOW CARD</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-3">
                <div class="info-box mb-3 py-5 bg-danger" @click="redCard">
                    <span class="info-box-icon"><i class="fas fa-file"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                        <span class="info-box-number">RED CARD</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-3">
                <div class="info-box mb-3 py-5 bg-info" @click="substitution">
                    <span class="info-box-icon"><i class="fas fa-sync"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                        <span class="info-box-number">SUBSTITUTION</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-3">
                <div class="info-box mb-3 py-5 bg-success" @click="goal">
                    <span class="info-box-icon"><i class="fas fa-futbol"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                        <span class="info-box-number">GOAL</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <div class="timeline mt-5">
                    <div v-for="event in events" v-bind:key="event.time">

                        <i class="fas fa-file bg-danger" v-if="event.type == 'redcard'"></i>
                        <div class="timeline-item" v-if="event.type == 'redcard'">
                            <span class="time"><i class="fas fa-clock"></i> {{ formatTime(event) }}</span>
                            <h3 class="timeline-header"><a href="#">{{ event.member_id }}</a> recieved a red card</h3>
                        </div>

                        <i class="fas fa-file bg-warning" v-if="event.type == 'yellowcard'"></i>
                        <div class="timeline-item" v-if="event.type == 'yellowcard'">
                            <span class="time"><i class="fas fa-clock"></i> {{ formatTime(event) }}</span>
                            <h3 class="timeline-header"><a href="#">{{ event.member_id }}</a> recieved a yellow card</h3>
                        </div>

                        <i class="fas fa-futbol bg-success" v-if="event.type == 'goal'"></i>
                        <div class="timeline-item" v-if="event.type == 'goal'">
                            <span class="time"><i class="fas fa-clock"></i> {{ formatTime(event) }}</span>
                            <h3 class="timeline-header"><a href="#">{{ event.member_id }}</a> scored a goal</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="players" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" 
                            id="addNew" 
                            v-if="event.member_id == '' && event.type == 'substitution'">Select Outgoing Player</h5>
                        <h5 class="modal-title" 
                            id="addNew" 
                            v-else-if="event.member_id != '' && event.type == 'substitution'">Select Incoming Player</h5>
                        <h5 class="modal-title" 
                            id="addNew" 
                            v-else>Select Player</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-radio">
                                <ul v-if="event.member_id != '' && event.type == 'substitution'">
                                    <li v-for="member in members" v-bind:key="member.id + '2'">
                                        <input class="form-check-input" type="radio" :value="member.id"
                                            v-model="event.second_member_id">
                                        <label class="form-check-label">{{ member.membership.user.name }}</label>
                                    </li>
                                </ul>
                                <ul v-else>
                                    <li v-for="member in members" v-bind:key="member.id + '1'">
                                        <input class="form-check-input" type="radio" :value="member.id"
                                            v-model="event.member_id">
                                        <label class="form-check-label">{{ member.membership.user.name }}</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" @click="closeModal">Close</button>
                        <button @click="saveEvent" type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    const theme = 'red';
    export default {
        props: ['matchdayId'],
        data() {
            return {
                events: [],
                event: {
                    member_id: '',
                    second_member_id: null,
                    type: '',
                    time: '',
                    half: null,
                    matchday_id: this.matchdayId
                },
                time: '00:00:00.000',
                half: 1,
                timeBegan: null,
                timeStopped: null,
                stoppedDuration: 0,
                started: null,
                running: false,
            }
        },

        computed: {
            members() {
                return this.$store.state.members;
            },
        },

        methods: {

            formatTime(event) {
                let min = parseInt(event.time.split(':')[1])
                if(event.half == 1) {
                    if(min >= 45) {
                        return '45\' + ' + (min - 44);
                    } else {
                        return  min + 1 + '\'';
                    }
                } else {
                    if(min >= 90) {
                        return  '90\' + ' + (min - 89);
                    } else {
                        return  min + 1 + '\'';
                    }
                }
            },

            setTimeAndHalf() {
                this.event.time = this.time;
                this.event.half = this.half;
            },

            redCard() {
                $('#players').modal('show');
                this.event.type = "redcard";
                this.setTimeAndHalf();
            },

            yellowCard() {
                $('#players').modal('show');
                this.event.type = "yellowcard";                
                this.setTimeAndHalf();
            },
            substitution() {
                $('#players').modal('show');
                this.event.type = "substitution";
                this.setTimeAndHalf();
            },
            goal() {
                $('#players').modal('show');
                this.event.type = "goal";
                this.setTimeAndHalf();
            },

            saveEvent() {
                if (this.event.type != '' && this.event.member_id != '') {
                    this.event.matchday_id = this.matchdayId
                    this.createEvent();
                    this.events.push(this.event);
                    $('#players').modal('hide');
                    this.event = {
                        member: '',
                        type: '',
                        time: '',
                        half: null,
                    }
                }
            },

            createEvent() {
                this.$store.dispatch('createMatchdayEvent', this.event)
                            .then(res => this.closeModal());
            },

            startFirstHalf() {
                this.half = 1;
                this.start();
            },

            startSecondHalf() {
                this.half = 2;
                this.start();
            },

            closeModal() {
                $('#players').modal('hide');
                    this.event = {
                        member: '',
                        type: '',
                        time: '',
                        half: null,
                    }
            },

            start() {
                if (this.running) return;

                if (this.timeBegan === null) {
                    this.reset();
                    this.timeBegan = new Date();
                }

                if (this.timeStopped !== null) {
                    this.stoppedDuration += (new Date() - this.timeStopped);
                }

                this.started = setInterval(this.clockRunning, 10);
                this.running = true;
            },
            stop() {
                console.log(this.events)
                this.running = false;
                this.timeStopped = new Date();
                clearInterval(this.started);
            },
            reset() {
                this.running = false;
                clearInterval(this.started);
                this.stoppedDuration = 0;
                this.timeBegan = null;
                this.timeStopped = null;
                this.time = "00:00:00.000";
            },
            clockRunning() {
                var currentTime = new Date(),
                    timeElapsed = new Date(currentTime - this.timeBegan - this.stoppedDuration),
                    hour = timeElapsed.getUTCHours(),
                    min = timeElapsed.getUTCMinutes(),
                    sec = timeElapsed.getUTCSeconds(),
                    ms = timeElapsed.getUTCMilliseconds();

                    this.time =
                        this.zeroPrefix(hour, 2) + ":" +
                        this.zeroPrefix(min, 2) + ":" +
                        this.zeroPrefix(sec, 2) + "." +
                        this.zeroPrefix(ms, 3);

            },
            zeroPrefix(num, digit) {
                var zero = '';
                for (var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            }
        }
    }

</script>
