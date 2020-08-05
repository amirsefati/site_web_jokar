<template>
    <div class="container-fluid p-0">
        <div class="row show_only_in_mobile">
        </div>

        <div class="row nav_top_widget">
            <!-- main  -->
            <div class="col-md-2 col-sm-4 col-4 line_after">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name pr-2">خساپا</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">15200</span>
                    <span class="nav_top_widget_item_percent_percent">0.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>
            
              <div class="col-md-2 col-sm-4 col-4 line_after">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name pr-2">ونوین</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">10602</span>
                    <span class="nav_top_widget_item_percent_percent">99.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>

              <div class="col-md-2 col-sm-4 col-4 line_after">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name">خساپا</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">15200</span>
                    <span class="nav_top_widget_item_percent_percent">0.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>
            <!-- etc -->
            <div class="col-md-2 col-sm-4 line_after hidden_phone">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name">خساپا</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">15200</span>
                    <span class="nav_top_widget_item_percent_percent">0.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>
            
              <div class="col-md-2 col-sm-4 line_after hidden_phone">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name">ونوین</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">10602</span>
                    <span class="nav_top_widget_item_percent_percent">99.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>

              <div class="col-md-2 col-sm-4 line_after hidden_phone">
                <div class="nav_top_widget_item_head">
                    <span class="nav_top_widget_item_head_name">خساپا</span>
                    <span class="nav_top_widget_item_head_bumber">3270.1</span>
                </div>
                
                <div class="nav_top_widget_item_percent" style="color:#26a69a">
                    <span class="nav_top_widget_item_percent_vol">15200</span>
                    <span class="nav_top_widget_item_percent_percent">0.45%</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13px" viewBox="0 0 12 8"><path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-width="2" d="m1 6 5-4 5 4"></path></svg>
                </div>
            </div>
        </div>
    
        <div class="row header_nav_sticky">
            <div class="col-md-2 hidden_phone"></div>
            <div class="col-md-1 col-3">
                <div class="header_nav_sticky_logo">
                    <img src="/assets/img/logo.png" class="logo_style" alt="">
                </div>   
            </div>

            <div class="col-md-5 col-6 ">
                <div class="header_nav_sticky_search">
  <vs-select
        filter
        placeholder="جست و جوی نماد"
        v-model="value"
      >
        <vs-option label="خساپا" value="1">
          خساپا
        </vs-option>
        <vs-option label="سبزوا" value="2">
          سبزوا
        </vs-option>
        <vs-option label="خودرو" value="3">
          خودرو
        </vs-option>
        <vs-option label="فولاد" value="4">
          فولاد
        </vs-option>
        
      </vs-select>
                </div> 

            </div>

            <div class="col-md-1 hidden_phone">
                <div class="btn_danger_header">
                    <p style="color:white;text-align:center;font-size:12px;margin:0px;padding:4px 0px 2px 0px;font-weight:bold">اکانت ویژه</p>
                    <p style="color:#EF5350;text-align:center;font-size:9px;margin:0px">سی روز اکانت رایگان</p>

                </div>
            </div>
        </div>

        <div class="row header_nav_menu hidden_phone">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <nav id="menu">
                <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
                <input type="checkbox" id="tm">
                <ul class="main-menu clearfix">
                    <li><a href="#">گروه ها</a></li>
                    <li><a href="#">آموزش</a></li>
                   
                    <li><a href="#">بازار سرمایه
                        <span class="drop-icon">▾</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
                    </a>
                    <input type="checkbox" id="sm1">
                    <ul class="sub-menu">
                        <li><a href="#">سهام
                            <span class="drop-icon">▾</span>
                            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
                        </a>
                        <input type="checkbox" id="sm2">
                        <ul class="sub-menu">
                            <li><router-link :to="{name:'pl1'}">تابلو</router-link></li>
                            <li><a href="#">تکنیکال</a></li>
                            <li><a href="#">فاندامنتال</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Item 3.4</a></li>
                    </ul>
                    </li>
                    <li><a href="#">صفحه اصلی</a></li>
                </ul>
            </nav>
            </div>
        </div>


        <div class="row">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
  export default {
     data:() => ({
        value: '',       
      }),
      
  
  }
  </script>