<template>
    <div class="box_pl2 mt-5 mr-2 ml-2">
        <v-tabs
            v-model="tab"            
        >
            
            <v-tab>
                سهام ها
            </v-tab>

            <v-tab v-on:click="group_table">
                 گروه ها 
            </v-tab>

            <v-tab v-on:click="group_chart">
                ساختار نموداری گروه ها 
            </v-tab>

            <v-tab v-on:click="group_series">
                کل بازار
            </v-tab>
        </v-tabs>

        <v-tabs-items v-model="tab">
            <v-tab-item>
                <div class="item_box_intabbar p-2">
                <p style="font-size:14px;margin-bottom:6px;font-weight:bold">ورود و خروج نقدینگی حقیقی</p>
                <p style="font-size:14px">
                  یکی از مهمترین مولفه های موجود در بازار اوراق بهادار که جهت دهنده است به روند سهم، مورد توجه قرار گرفتن  و یا عدم توجه به آن سهم توسط معامله گران خرد یا حقیقی ها است که یکی از روش های اندازه گیری این توجه یا عدم توجه، خرید یا فروش این اشخاص در سهام است.
                  در جدول زیر خرید و فروش های حقیقی ها بر اساس سه بازه زمانی روزانه، هفتگی و ماهانه دسته بندی شده است. 
                  و در قسمت رنک، هر نماد دارای رتبه ای بر اساس عملکرد این سه بازه زمانی است. نمادها با رنک های بالاتر نشان دهنده ورود پول حقیقی و مورد توجه قرار گرفتن سهام توسط معامله گران خرد در سه دوره زمانی ذکر شده است.           
                </p>
                </div>
               
                <v-data-table
                        :headers="headers"
                        :items="desserts"
                        :search="search"
                        :items-per-page=200
                        :mobile-breakpoint=300
                    >
                        <template v-slot:item.n="{ item }">
                            <p  style="text-align:right;margin:4px"><a v-bind:href="item.n">{{ item.n }}</a></p>
                            <p  style="text-align:right;margin:4px;font-size:8px"> {{item.g_fa}}</p>
                        </template>

                        <template v-slot:item.d="{ item }">
                            <p :class="getColor(item.d)" style="direction:ltr;margin:0">{{ item.d }}</p>
                        </template>
          
                        <template v-slot:item.w="{ item }">
                            <p  style="direction:ltr;margin:0;font-weight:bold">{{ item.w }}</p>
                        </template>
          
                       <template v-slot:item.m="{ item }">
                            <p  style="direction:ltr;margin:0;font-weight:bold">{{ item.m }}</p>
                        </template>

                        <template v-slot:header.n="{ header }">
                          <v-text-field
                              v-model="search"
                              append-icon="mdi-magnify"
                              label="جست و جو نماد"
                              single-line
                              hide-details
                          ></v-text-field>
                        </template>

                </v-data-table>
            
            </v-tab-item>

            <v-tab-item>
              <div class="item_box_intabbar p-2">
                <p style="font-size:14px;margin-bottom:6px;font-weight:bold">  ورود و خروج نقدینگی حقیقی بر حسب گروه</p>
                <p style="font-size:14px">
                  یکی از مهمترین مولفه های موجود در بازار اوراق بهادار که جهت دهنده است به روند سهم، مورد توجه قرار گرفتن  و یا عدم توجه به آن سهم توسط معامله گران خرد یا حقیقی ها است که یکی از روش های اندازه گیری این توجه یا عدم توجه، خرید یا فروش این اشخاص در سهام است.
                  در جدول زیر خرید و فروش های حقیقی ها بر اساس سه بازه زمانی روزانه، هفتگی و ماهانه دسته بندی شده است. 
                  و در قسمت رنک، هر نماد دارای رتبه ای بر اساس عملکرد این سه بازه زمانی است. نمادها با رنک های بالاتر نشان دهنده ورود پول حقیقی و مورد توجه قرار گرفتن سهام توسط معامله گران خرد در سه دوره زمانی ذکر شده است.           
                </p>
              </div>
              <v-data-table
                :headers="headers_group"
                :items="group_data"
                :search="search"
                :items-per-page=200
                :mobile-breakpoint=300>

                <template v-slot:item.n="{ item }">
                  <p  style="text-align:right;margin:4px"><a href=""> {{item.n}}</a></p>
                </template>

                <template v-slot:item.d="{ item }">
                  <p :class="getColor_group(item.d)" style="direction:ltr;margin:0">{{ item.d }}</p>
                </template>

                <template v-slot:header.n="{ header }">
                  <v-text-field
                    v-model="search"
                    append-icon="mdi-magnify"
                    label="جست و جو گروه"
                    single-line
                    hide-details>
                  </v-text-field>
                </template>

              </v-data-table>
                      
            </v-tab-item>

            <v-tab-item>
              <div class="item_box_intabbar p-2">
                <v-col cols="12" sm="12" class="py-2">
                  <p style="font-size:14px">
                  یکی از مهمترین مولفه های موجود در بازار اوراق بهادار که جهت دهنده است به روند سهم، مورد توجه قرار گرفتن  و یا عدم توجه به آن سهم توسط معامله گران خرد یا حقیقی ها است که یکی از روش های اندازه گیری این توجه یا عدم توجه، خرید یا فروش این اشخاص در سهام است.
                  در جدول زیر خرید و فروش های حقیقی ها بر اساس سه بازه زمانی روزانه، هفتگی و ماهانه دسته بندی شده است. 
                  و در قسمت رنک، هر نماد دارای رتبه ای بر اساس عملکرد این سه بازه زمانی است. نمادها با رنک های بالاتر نشان دهنده ورود پول حقیقی و مورد توجه قرار گرفتن سهام توسط معامله گران خرد در سه دوره زمانی ذکر شده است.           
                </p>
                <br>
                  <p>انتخاب بازه نمایشی</p>

                  <v-btn-toggle
                    v-model="toggle_multiple"
                    dense
                    background-color="primary">

                    <v-btn v-on:click="group_chart_daily">
                      روزانه
                    </v-btn>

                    <v-btn v-on:click="group_chart_week">
                      هفتگی
                    </v-btn>

                    <v-btn v-on:click="group_chart_month">
                      ماهانه
                    </v-btn>

                    <v-btn>
                      سالانه
                    </v-btn>
                  </v-btn-toggle>
                </v-col>
              </div>

              <apexchart width="100%" height="1200px" :options="options" :series="series"></apexchart>
          
            </v-tab-item>

            <v-tab-item class=" mb-5">
              <div class="item_box_intabbar p-2">
                <p style="font-size:14px;margin-bottom:6px;font-weight:bold">  ورود و خروج نقدینگی حقیقی بر حسب گروه</p>
                <p style="font-size:14px">
                  یکی از مهمترین مولفه های موجود در بازار اوراق بهادار که جهت دهنده است به روند سهم، مورد توجه قرار گرفتن  و یا عدم توجه به آن سهم توسط معامله گران خرد یا حقیقی ها است که یکی از روش های اندازه گیری این توجه یا عدم توجه، خرید یا فروش این اشخاص در سهام است.
                  در جدول زیر خرید و فروش های حقیقی ها بر اساس سه بازه زمانی روزانه، هفتگی و ماهانه دسته بندی شده است. 
                  و در قسمت رنک، هر نماد دارای رتبه ای بر اساس عملکرد این سه بازه زمانی است. نمادها با رنک های بالاتر نشان دهنده ورود پول حقیقی و مورد توجه قرار گرفتن سهام توسط معامله گران خرد در سه دوره زمانی ذکر شده است.           
                </p>
              </div>
              <div v-if="show_ss == 1">
              <highcharts :constructorType="'stockChart'" :options="chartOptions"></highcharts>

              </div>

             
            </v-tab-item>

        </v-tabs-items>

     
    </div>
</template>


</script>
<script>
import axios from 'axios'
export default {    
    mounted(){
      axios.get('http://localhost:8000/api/plugin/daily_individual_cash_inflows')
        .then(res => (
            this.all = res.data
        )).then(()=>{
          for(var i=0;i<this.all.length;i++){
            this.desserts.push(this.all[i])
          }
        })
      },
    data () {
      return {
        arr_chart_col:[],
        arr_chart_line:[],
        show_ss:0,
        toggle_multiple: 0,
        all : '',
        tab:null,
        search: '',
        headers: [
          {
            text: 'نماد',
            align: 'start',
            sortable: false,
            value: 'n',
          },
          { text: 'روزانه', value: 'd' },
          { text: 'هفتگی', value: 'w' },
          { text: 'ماهانه', value: 'w' },
          { text: 'سالیانه', value: 'w' },

          { text: 'رنک', value: 'protein' },
        ],
        desserts: [],

        headers_group: [
          {
            text: 'نماد',
            align: 'start',
            sortable: false,
            value: 'n',
          },

          { text: 'روزانه', value: 'd' },
          { text: 'هفتگی', value: 'w' },
          { text: 'ماهانه', value: 'w' },
          { text: 'سالیانه', value: 'w' },
          { text: 'رنک', value: 'protein' },
        ],
        group : [],
        group_data : [],
        chart_group_daily : [],
        chart_group_week : [],
        chart_group_month : [],
        micro_entry : [],
        options: {
          chart: {
            type: 'bar',
            height: 350
          },
          plotOptions: {
            bar: {
              horizontal: true,
              colors: {
              ranges: [{
                from: 50,
                to: 5000,
                color: '#55F02E'
              }, {
                from: 0,
                to: 50,
                color: '#4EF46F'
              }, {
                from: -50,
                to: 0,
                color: '#F46969'
              }, {
                from: -5000,
                to: -50,
                color: '#F02E2E'
              }
              ]
            },
            }
          },
          dataLabels: {
          enabled: false
          },
          xaxis: {
            categories: []
          }
        },

        series: [{
          name: 'میلیارد تومان',
          data: []
        }],
       chartOptions: {
         chart:{
           height:600
         },
        series: [{
            type: 'column',
            name: 'مقدار',
            data: [],
            
        },
        {
            type: 'line',
            name: 'مقدار',
            data: [],
            yAxis: 1
            
        },
        ],
        xAxis: {
            type: 'datetime'
        },
        yAxis:[
          {
          title:{
            text:'اولی'
          },
          opposite: false
          },
          {
            title:{
            text:'دومی'
          },
          }],
        title:{
          text:'امیر'
        },
      
      }
      }
    },
    methods: {
      getColor (item) {
        if (item > 0 && item < 10) return 'normal_arrow'
        else if (item > 10 && item < 40 ) return 'buy_arrow'
        else if ( item > 40 ) return 'buy_strong_arrow'
        else if (item > -10 && item < 0 ) return 'color:#5A0C13'
        else if (item > -40 && item < -10 ) return 'sell_arrow'
        else if ( item < -40 ) return 'sell_strong_arrow'
        else return 'blue'
      },
      getColor_group (item) {
        if (item > 0 && item < 100 ) return 'buy_arrow'
        else if ( item > 50 ) return 'buy_strong_arrow'

        else if (item < 0 && item > -100 ) return 'sell_arrow'
        else if ( item < -100 ) return 'sell_strong_arrow'
        else return 'blue'
      },

      group_table:function(){
      this.group_data = []  
      this.chart_group_daily = []
      this.chart_group_week = []
      this.chart_group_month = []

        for(var i=0;i<this.all.length;i++){
          if(!this.group.includes(this.all[i].g)){
            this.group.push(this.all[i].g)
          }
        }
      for(var j=0;j<this.group.length;j++){
        var dd = 0
        var ww = 0
        var nn = ''
        for(var k=0;k<this.all.length;k++){
          if(this.all[k].g == this.group[j]){
            dd = dd + this.all[k].d
            ww = ww + this.all[k].w
            nn = this.all[k].g_fa
          }
        }
        this.group_data.push({'n':nn,'d':Math.round(dd * 10000)/10000,'w':Math.round(ww * 10000)/10000})
        this.chart_group_daily.push([nn,Math.round(dd * 10000)/10000])
        this.chart_group_week.push([nn,Math.round(ww * 10000)/10000])
        this.chart_group_month.push([nn,Math.round(dd * 10000)/10000])
      }
      },

      group_chart:function(){
        this.chart_group_daily = []
        this.series[0].data = []
        this.options.xaxis.categories = []
        this.group_table()

          this.chart_group_daily.sort(function(a,b){return a[1]-b[1]}).reverse()
          for(var i=0;i<this.chart_group_daily.length;i++){
            this.options.xaxis.categories.push(this.chart_group_daily[i][0])
            this.series[0].data.push(this.chart_group_daily[i][1])
          }
      },
      group_chart_daily:function(){
        var jj =[]
        for(var i=0;i<this.chart_group_daily.length;i++){
          jj.push(this.chart_group_daily[i][1])
        }
        this.series = [{data:jj}]
      },
      group_chart_week:function(){
        var jj =[]
        for(var i=0;i<this.chart_group_week.length;i++){
          jj.push(this.chart_group_week[i][1])
        }
        this.series = [{data:jj}]
      },
      group_chart_month:function(){
        var val = []
        var ke = []
        for(var i=0;i<this.chart_group_month.length;i++){
          val.push(this.chart_group_month[i][1])
         }
        this.series = [{data:val}]
      },

      group_series:function(){
        axios.get("http://localhost:8000/api/plugin/micro_entry_and_exit")
        .then(res => {
          this.micro_entry = res.data
                    
        }).then(()=>{
          for(var i=0;i<this.micro_entry.length;i++){
            this.arr_chart_col.push([new Date(this.micro_entry[i][0]).getTime(),this.micro_entry[i][1]])
            this.arr_chart_line.push([new Date(this.micro_entry[i][0]).getTime(),this.micro_entry[i][2]])
            }
          }).then(()=>{
            this.chartOptions.series[0].data = this.arr_chart_col
            this.chartOptions.series[1].data = this.arr_chart_line

            this.show_ss = 1
          })
      }
    }
  }
</script>