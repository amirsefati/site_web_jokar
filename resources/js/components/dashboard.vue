<template>
    <div class="container-fluid p-0">
        <div class="row dashboard_navbar">
            <div class="col-md-2">منو</div>
            <div class="col-md-1">
                <router-link class="dashboard_menu_item" :to="{ name: 'tablo_home' }">تابلو</router-link>  
            </div>
            <div class="col-md-1">
                <router-link class="dashboard_menu_item" :to="{ name: 'technical_home' }">تکنیکال </router-link>  
            </div>
            <div class="col-md-1">
                <router-link class="dashboard_menu_item" :to="{ name: 'fundemental_home' }">بنیادی </router-link> 
            </div>
        </div>

        <router-view></router-view>
    </div>
</template>

<script>
export default {
    
}
</script>