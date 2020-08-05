<template>
   <div class="col-md-12">
     <div class="row line_under_plgin">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="name_plugin_address_bar">بازار سرمایه  . تابلو سهام</p>
            <img src="/assets/img/plugin/tablo.png" class="img_plugin_circle" alt="">
            <span style="font-size:26px">تابلو سهام</span>

           <v-card>
               <v-tabs
                  background-color="teal darken-3"
                  next-icon="mdi-arrow-right-bold-box-outline"
                  prev-icon="mdi-arrow-left-bold-box-outline"

                  show-arrows

                  >
                  <v-tabs-slider color="teal lighten-3"></v-tabs-slider>
                  <v-tab>
                     <router-link :to="{name:'pl1'}"> راهنما </router-link>
                  </v-tab>
                  <v-tab>
                     <router-link :to="{name:'pl2'}">ورود و خروج پول حقیقی</router-link>
                  </v-tab>
                
                
                  
               </v-tabs>
            </v-card>

        </div>
     </div>

     <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <router-view></router-view>
        </div>
     </div>
   </div>
</template>

<script>
  export default {
      data:() => ({
         active: 'guide',
        
      })
  }
  
  </script>