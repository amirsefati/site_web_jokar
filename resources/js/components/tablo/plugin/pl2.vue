<template>
    <div class="box_pl2 m-2">
        <v-tabs
            v-model="tab"            
        >
            
            <v-tab>
                سهام ها
            </v-tab>

            <v-tab v-on:click="group_select">
                 گروه ها 
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
                  <v-data-table
                        :headers="headers"
                        :items="group_data"
                        :search="search"
                        :items-per-page=200
                        :mobile-breakpoint=300
                    >
                                    </v-data-table>

            </v-tab-item>

        </v-tabs-items>
     
    </div>
</template>

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
        group : [],
        group_data : []
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

      group_select:function(){
        for(var i=0;i<this.all.length;i++){
          if(!this.group.includes(this.all[i].g)){
            this.group.push(this.all[i].g)
          }
        }
      for(var j=0;j<this.group.length;j++){
        var dd = 0
        var ww = 0

        for(var k=0;k<this.all.length;k++){
          if(this.all[k].g == this.group[j]){
            dd = dd + this.all[k].d
            ww = ww + this.all[k].w

          }
        }
        this.group_data.push({'n':this.group[j],'d':dd,'w':ww})
        }
      }
    },
  }
</script>