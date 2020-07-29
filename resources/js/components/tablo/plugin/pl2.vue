<template>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2"><p v-on:click="get_data(1)">خوب ها</p></div>
                <div class="col-md-2"><p v-on:click="get_data(2)">متوسط ها</p></div>
                <div class="col-md-2"><p v-on:click="get_data(3)">بد ها</p></div>
                <div class="col-md-2"><p v-on:click="get_data(4)">افتضاح ها</p></div>
                <div class="col-md-2"><p v-on:click="get_data(5)">ریده ها</p></div>
                <div class="col-md-1"><p v-on:click="get_data(6)">آشغال  ها</p></div>
                <div class="col-md-1"><p v-on:click="get_data(7)"> نکبت ها </p></div>

            </div>

            <div class="row">
                {{sorted}}
            </div>
        </div>

    </div>

    
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return {
            daily_individual_cash_inflow : '',
            sorted : []

        }
    },
    mounted(){
        axios.get('http://localhost:8000/api/plugin/Daily_individual_cash_inflow/2020-07-28')
        .then(res => (
            this.daily_individual_cash_inflow = res.data
        ))
    },
    methods:{
        get_data : function(level){
            if(level == 1){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] > 10){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 2){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < 10 && dt[key] > 5){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 3){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < 2.5 && dt[key] > 0){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 4){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < 0 && dt[key] > -2.5){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 5){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < -2.5 && dt[key] > -5){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 6){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < -5 && dt[key] > -10){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
            else if(level == 7){
                var dt = this.daily_individual_cash_inflow
                this.sorted = []
                var aa = this.sorted
                Object.keys(dt).forEach(function(key){
                    if(dt[key] < -10){
                        aa.push([key,dt[key]])
                    }
                })
                aa.sort(function(a,b){
                    return a[1] - b[1]
                })
            }
        }
    }
}
</script>