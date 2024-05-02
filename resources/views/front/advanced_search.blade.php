@include("front.header")

    <div class="dp-body-area">

    <div id="search_zoness"> 
    @include("front.search")
   </div>







   


      <!--========================================
      =            Properties Section            =
      =========================================-->
      
      <section class="dp-common-sec dp-property-sec">
        <div class="container">
          <h5 class="text-center"></h5>
          <h3 class="text-center">{{$message}}</h3>
          <div class="row">


          <?php foreach ($random as $key) {?>
       
           
             
            <div class="col-lg-4 col-md-6" >
              <div class="dp-property-box" style="cursor:pointer" onclick="takeToPage('{{$key["idrefno"]}}')">
                <div class="dp-property-box-meta d-none d-lg-block">
                  <div class="row">
                    <div class="col-md-6">
                      <span class="badge bg-danger">  <?php echo $key["bustype"] ?></span>
                    </div>
                    <div class="col-md-6 text-end">
                      <a href="javascript:void(0)" class="btn btn-secondary dp-btn-heart"><i class="dpicon-heart" onclick="showlogin()"></i></a>
                    </div>
                  </div>
                </div>

                <div class="dp-property-box-imgs">
                  <div class="dp-property-box-imgs-slider">

                  <?php foreach($key["picset"] as $ones){?>
                    <div class="dp-property-box-imgs-slide">
                      <div class="dp-property-box-imgs-img" style="background-image:url('<?php echo $ones ?>')"></div>
                    </div>
                  <?php } ?>  

                  </div>
                </div>

                <div class="dp-property-box-desc">
                  <div class="dp-property-box-title-area">
                    <div class="dp-property-box-title-left">
                      <h4><a href="#"><?php if($key['Beds'] != 0 ) { echo $key['Beds'] .  "  Bedrooms ";} ?>  {{$key["type"]}} </a></h4>
                    </div>
                    <div class="dp-property-box-title-right d-none d-lg-block">
                      <a class="dp-property-id-btn btn btn-secondary">ID {{$key["idrefno"]}} </a>
                    </div>
                  </div>
                  <h3 class="dp-property-box-price"> @if ($key["Reduced"] == 0) {{number_format($key["Price"]);}} EUR @else <s>{{number_format($key["InitialPrice"]);}}</s> {{number_format($key["Price"]);}}EUR @endif </h3>
                  <h5 class="dp-property-box-location"><i class="dpicon-location"></i><span> {{$key["location"]["location_name_en"]}}, {{$key["location"]["municipality_en"]}}</span></h5>
                  <ul class="dp-property-box-fields">
                    <?php if($key["displayIcons"] == "YES"){?>
                      <?php if($key['Beds'] != 0 ) { ?> <li><div class="dp-property-field"><i class="dpicon-bed"></i><span>{{$key["Beds"]}} Beds</span></div></li> <?php } ?>
                      <?php if($key['Baths'] != 0 ) {?> <li><div class="dp-property-field"><i class="dpicon-baths"></i><span>{{$key["Baths"]}} Bath</span></div></li> <?php } ?>
                    <?php } ?>
                    <li><div class="dp-property-field"><i class="dpicon-area"></i><span>{{$key["SquareFeet"]}} Sq M</span></div></li>
                  </ul>
                </div>
              </div>
         
            </div>
            

          <?php } ?>


   



           
            

          </div>
          <div class="dp-readmore-box text-center">
            <?php for($i = 1; $i<= $maxpage; $i++){?>
            <a href="{{route('advanced_search_results',['page'=>$i])}}" class="btn btn-ouline btn-outline-danger ">Page {{$i}}</a>
            <?php } ?>
          </div>
        </div>
      </section>
      
      <!--====  End of Properties Section  ====-->
      

   
     
      <script>
        window.onload = function(){
          /*
          const AdvanceSearchBody = document.querySelector(".advance-search-body");
          AdvanceSearchBody.style.maxHeight = "1000px";
          const SearchBar = document.getElementById("search-bar");
          SearchBar.classList.add('active')*/
          
        }
      </script>  
     @include("front.footer_special")