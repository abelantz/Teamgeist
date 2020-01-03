<template>
    <div>

        <div class="text-center mb-5">
            <h1><span class="time">{{ time }}</span></h1>
            <button @click="start" type="button" class="btn btn-primary">Start</button>
            <button @click="stop" type="button" class="btn btn-primary">Stop</button>
            <button @click="reset" type="button" class="btn btn-primary">Reset</button>
        </div>
        
        <div class="row">
            <div class="col-3">
                <light-timeline :items='items'></light-timeline>
            </div>
            <div class="col-3">
                <div class="bg-yellow m-3 mx-auto" style="width: 50px; height: 70px;" @click="yellowCard"></div>
            </div>
            <div class="col-3">
                <div class="bg-danger m-3 mx-auto" style="width: 50px; height: 70px;" @click="redCard"></div>
            </div>
            <div class="col-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/e/ec/Soccer_ball.svg" 
                class="m-3 mx-auto d-block" style="width: 70px; height: 70px;" @click="goal"/>
            </div>
        </div>
        

         <div class="modal fade" id="players" tabindex="-1" role="dialog" aria-labelledby="addNew"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNew">Select Player</h5>
                    </div>
                    <div class="modal-body">
                       <div class="form-group">
                            <div class="form-radio">
                                <ul>
                                    <li v-for="member in members" v-bind:key="member.id">
                                        <input  class="form-check-input" type="radio" :value="member.name" 
                                            v-model="event.member">
                                        <label  class="form-check-label">{{ member.name }}</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        data() {
            return {
                events: [],
                event: {
                    member: '',
                    type: '',
                    time: '',
                },
                time: '00:00:00.000',
                timeBegan: null,
                timeStopped: null,
                stoppedDuration: 0,
                started: null,
                running: false,
                items: []
            }
        },

        computed: {
            members() {
                return this.$store.state.members;
            }
        },

        methods: {
            redCard() {
                $('#players').modal('show');
                this.event.type = 'redcard';
                this.event.time = this.time;
                console.log(this.event);
            },
            yellowCard() {
                $('#players').modal('show');
                this.event.type = 'yellowcard';
                this.event.time = this.time;
                console.log(this.event);
            },
            goal() {
                $('#players').modal('show');
                this.event.type = 'goal';
                this.event.time = this.time;
                console.log(this.event);
            },
            saveEvent() {
                if(this.event.type != '' && this.event.member != '') {
                    var timelineItem = {
                        tag: parseInt(this.time.split(':')[1]) + 1 + '\'',
                        type: 'circle',
                        content: this.event.type + ', ' + this.event.member
                    }
                    this.items.push(timelineItem);
                    this.events.push(this.event);
                    $('#players').modal('hide');
                    this.event =  {
                        member: '',
                        type: '',
                    }
                }
            },


            start() {
                if(this.running) return;

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
            clockRunning(){
                var currentTime = new Date()
                , timeElapsed = new Date(currentTime - this.timeBegan - this.stoppedDuration)
                , hour = timeElapsed.getUTCHours()
                , min = timeElapsed.getUTCMinutes()
                , sec = timeElapsed.getUTCSeconds()
                , ms = timeElapsed.getUTCMilliseconds();

                this.time = 
                    this.zeroPrefix(hour, 2) + ":" + 
                    this.zeroPrefix(min, 2) + ":" + 
                    this.zeroPrefix(sec, 2) + "." + 
                    this.zeroPrefix(ms, 3);
            },
            zeroPrefix(num, digit) {
                var zero = '';
                for(var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            }

        }
    }

</script>
