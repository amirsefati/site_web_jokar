<template>
   <div class="row">
       <div class="col-md-1 p_white" style="background:#40798C">
            <router-link class="dashboard_menu_item" :to="{ name: 'pl1' }">پلاگین اول </router-link>  
            <router-link class="dashboard_menu_item" :to="{ name: 'pl2' }">پلاگین دوم </router-link>  

       </div>

       <div class="col-md-11">
           <router-view></router-view>
       </div>
   </div>
</template>

