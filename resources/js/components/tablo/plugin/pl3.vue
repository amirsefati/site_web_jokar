<template>
    <div>
        <p v-on:click="get_data(1)">بزن</p>
        {{sorted}}
    </div>
</template>
<script>
import axios from 'axios'
axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
    export default {
    data(){
        return {
            daily_individual_cash_inflow : '',
            sorted : []

        }
    },
    mounted(){
        axios.get('http://localhost:8000/api/daily_individual_cash_inflows')
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
                    return b[1] - a[1]
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