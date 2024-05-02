@include("front.header")

    <div class="dp-body-area">

   <div id="search_zoness"> 
    @include("front.search")
   </div> 

 





    <div class="container">
        <div class="row">
                <div class="col-lg-8">
                  <div class="dp-banner-property-slider">
                    <?php  $i = 0 ; foreach ($random as $one) { $i = $i + 1;
                      ?>
                    <div class="dp-banner-property-slide">
                      <a href="#" class="dp-banner-img">
                        <span class="dp-banner-bg-img" style="background-image: url('<?php echo $one["picset"][0]?>')"></span>
                        <span class="dp-banner-caption">
                          <small> <?php if($one['Beds'] != 0 ) { echo $one['Beds'] .  "  Bedrooms ";} ?>{{$one["type"]}} </small>
                          <strong>{{number_format($one["Price"])}} EUR</strong>
                        </span>
                        <span class="dp-banner-location">{{$one["location"]["location_name_en"]}}, {{$one["location"]["municipality_en"]}}</span>
                      </a>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                
                  
                <div class="col-lg-4">
                  <div class="dp-latest-news-wrapper">
                    <h2>Latest Deals</h2>
                    <div class="dp-latest-news">
                      <div class="row">
                        <?php foreach($latest as $lat){?>
                        <div class="col-lg-6 col-md-3">
                          <a class="dp-news-thumb" href="#"><span style="background-image: url('<?php echo $lat["picset"][0]?>');"></span></a>
                        </div>
                        <?php } ?>
                        
                      </div>
                    </div>
                  </div>
                </div>

          </div> 
    </div>  
    





   


      <!--========================================
      =            Properties Section            =
      =========================================-->
      
      <section class="dp-common-sec dp-property-sec">
        <div class="container">
          <h5 class="text-center">Our Properties</h5>
          <h3 class="text-center">FEATURED BULGARIAN PROPERTIES IN VELIKO TARNOVO CITY AND REGION</h3>
          <div class="row">


          <?php $count = 0; foreach ($random as $key) { $count = $count + 1;
            if($count < 10) {?>
       
           
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
                  <h3 class="dp-property-box-price"> @if ($key["Reduced"] == 0) {{number_format($key["Price"])}} EUR @else <s>{{number_format($key["InitialPrice"])}}</s> {{number_format($key["Price"])}}EUR @endif </h3>
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
            

            <?php } } ?>
          </div>


          <div class="dp-readmore-box text-center">
            <a href="javascript:void(0);" class="btn btn-ouline btn-outline-danger " onclick="moreprop()">View more properties</a>
          </div>
        </div>


        <div class="container" id="morre" >
         
          <div class="row">


          <?php $count = 0; foreach ($random as $key) { $count = $count + 1;
            if($count > 9 ) {?>
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
                  <h3 class="dp-property-box-price">{{number_format($key["Price"])}} EUR</h3>
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

            <?php } } ?>
          </div>

          
          <div class="dp-readmore-box text-center">
            <a href="{{route('listing',['page'=>1])}}" class="btn btn-ouline btn-outline-danger ">View more properties</a>
          </div>



        </div>
      </section>
      
      <!--====  End of Properties Section  ====-->
      

      <!--=================================
      =            Blog & News            =
      ==================================-->
      
      <section class="dp-common-sec dp-blog-sec">
        <div class="container">
          <h5>WHAT’S NEW</h5>
          <h2>Latest Blogs & Posts</h2>
          <div class="dp-blog-listing">
            <div class="row">

              <div class="col-lg-6">
                <div class="dp-blog-box">
                  <div class="row">
                    <div class="col-md-4 dp-blog-box-img" style="background-image:url('{{asset('assets/images/blog1.jpg')}}')">
                      <div class="dp-blog-date d-block d-md-none">
                        <p><strong></strong><small></small></p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="dp-blog-box-cnt">
                        <div class="row d-none d-md-block">
                          <div class="col-md-6"><p>21st January, 2024</p></div>
                          <div class="col-md-6"><p>Veliko Tarnovo</p></div>
                        </div>
                        <h4> <a  target="_blank"  href="https://vt-today.com/the-regional-museum-is-organizing-a-walking-tour-with-a-talk-for-march-3-event-veliko-tarnovo/">THE REGIONAL MUSEUM IS ORGANIZING A WALKING TOUR WITH A TALK FOR MARCH 3</a></h4>
                        <div class="dp-blog-box-desc d-none d-md-block"><p></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="dp-blog-box">
                  <div class="row">
                    <div class="col-md-4 dp-blog-box-img" style="background-image:url('{{asset('assets/images/blog2.webp')}}')">
                      <div class="dp-blog-date d-block d-md-none">
                        <p><strong></strong><small></small></p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="dp-blog-box-cnt">
                        <div class="row d-none d-md-block">
                          <div class="col-md-6"><p>22nd January, 2024</p></div>
                          <div class="col-md-6"><p>Veliko Tarnovo</p></div>
                        </div>
                        <h4><a target="_blank" href="https://vt-today.com/the-bulgarian-tradition-of-martenitsa-living-in-bulgaria/">THE BULGARIAN TRADITION OF MARTENITSA – LIVING IN BULGARIA</a></h4>
                        <div class="dp-blog-box-desc d-none d-md-block"><p></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="dp-blog-box">
                  <div class="row">
                    <div class="col-md-4 dp-blog-box-img" style="background-image:url('{{asset('assets/images/blog3.jpg')}}')">
                      <div class="dp-blog-date d-block d-md-none">
                        <p><strong></strong><small></small></p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="dp-blog-box-cnt">
                        <div class="row d-none d-md-block">
                          <div class="col-md-6"><p>24th January, 2024</p></div>
                          <div class="col-md-6"><p>Veliko Tarnovo</p></div>
                        </div>
                        <h4><a  target="_blank"  href="https://vt-today.com/the-national-assembly-of-sheep-breeders-near-lyaskovets-with-new-dates-this-year-festival-veliko-tarnovo/">THE NATIONAL ASSEMBLY OF SHEEP BREEDERS NEAR LYASKOVETS WITH NEW DATES THIS YEAR – FESTIVAL</a></h4>
                        <div class="dp-blog-box-desc d-none d-md-block"><p></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="dp-blog-box">
                  <div class="row">
                    <div class="col-md-4 dp-blog-box-img" style="background-image:url('{{asset('assets/images/blog4.jpg')}}')">
                      <div class="dp-blog-date d-block d-md-none">
                        <p><strong></strong><small></small></p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="dp-blog-box-cnt">
                        <div class="row d-none d-md-block">
                          <div class="col-md-6"><p>25th January, 2024</p></div>
                          <div class="col-md-6"><p>Veliko Tarnovo</p></div>
                        </div>
                        <h4><a   target="_blank"  href="https://vt-today.com/the-a-cappella-show-voca-people-veliko-tarnovo-entertainment/">THE A CAPPELLA SHOW “VOCA PEOPLE” – VELIKO TARNOVO ENTERTAINMENT</a></h4>
                        <div class="dp-blog-box-desc d-none d-md-block"><p></p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="dp-readmore-box text-center d-block d-md-none">
            <a href="javascript:void(0);"  class="btn btn-ouline btn-outline-dark ">View more</a>
          </div>
          </div>
        </div>
        <div class="dp-blog-bg d-none d-md-block"></div>
       
      </section>
      
      <!--====  End of Blog & News  ====-->
      
      <!--==============================
      =            Sale Sec            =
      ===============================-->
      
      <section class="dp-common-sec dp-sale-sec">
        <div class="container">
          <div class="dp-sale-content">
            <h4>Property for sale in Bulgaria: welcome to Yantra Homes<br>Your Trusted Partner for Selling and Buying Property in Bulgaria</h4>
            <p>If you are considering relocation to Bulgaria or perhaps want to move within the country, Yantra Homes is available to assist you. We are an independent agency that specialises in helping people sell and buy property in Bulgaria. Yantra Homes has a wide selection of properties to suit your needs and budget. Our team of experienced agents is multilingual and is ready to guide you through the process of selling or buying property in Bulgaria.</p>
            <div class="text-end"><a href="javascript:void(0)" onclick="readmore()" class="btn btn-link">Read more about Property in Bulgaria <i class="dpicon-arrow-1-down"></i></a></div>

            <p style="text-align:left; display:none;" id="readmore">
            Yantra Homes: Your Personalised Guide to Finding the Perfect Property in BulgariaAt Yantra Homes, we pride ourselves on providing personalised and professional service to ensure that our clients have a smooth and successful transaction. Whether you are looking for a holiday home, a place to retire, or an investment property, Yantra Homes can help you find the perfect property in Bulgaria. Our team of experienced agents has extensive knowledge of the market for properties for sale in Bulgaria and can guide you through every step of the process.Your Trusted Source for Property for Sale in Bulgaria: Residential, Commercial and InvestmentWhether you want to buy a property or sell your house, an apartment, a townhouse, an investment property, or any type of commercial property, we are your one-stop real estate resource. Our real estate agents not only deal with selling residential properties but also commercial and investment properties. We offer you helpful assistance and courteous service. For all of your real estate requirements, you can count on the locals you know and trust!<br><br>

Please take the time to see why Yantra Homes real estate agency does more to help both buyers and sellers than any other company in the Veliko Tarnovo real estate market.Discover all the best property for sale in Bulgaria: Your Ultimate Resource at yantrahomes.co.uk.With yantrahomes.co.uk, you can easily explore an extensive database of property for sale in Bulgaria, including village homes, building plots, agricultural land, and apartments. By saving your preferred search criteria, you will promptly receive the newest listings as they become available. Additionally, you can conveniently bookmark your favourite properties for future reference. Our advanced website technology ensures a seamless experience in finding the ideal Bulgarian real estate for home buyers. Trust yantrahomes.co.uk as your go-to platform for discovering properties across the Veliko Tarnovo region in north-central Bulgaria.
<br><br>
We never charge for accompanied viewings; as part of our service to clients, we can arrange hotels for viewing trips or apartments to rent for longer stays.Uncover Lucrative Property Investment Opportunities in Veliko Tarnovo, Bulgaria:
Explore the Finest Property for Sale with Yantra Homes.Whether you're a first-time buyer, seeking a holiday home, an investor, or relocating from abroad, the Veliko Tarnovo real estate market presents incredible prospects and unbeatable deals. At Yantra Homes, we possess the expertise and knowledge required to guide you towards the perfect opportunity at the opportune moment, offering comprehensive insights into the property market. With our specialisation in Veliko Tarnovo properties and years of experience in the field, we have established partnerships with banks, granting us access to valuable information about bank repossessions and available foreclosures. Trust us to be your trusted partner in navigating the dynamic world of property investments in Bulgaria.Buy a property in Bulgaria and gain access to a low cost of living and
a high-quality lifestyleLiving in Bulgaria means experiencing a high-quality lifestyle at an affordable price. The country offers a low cost of living, making it an ideal place to live for those who want to save money without sacrificing their quality of life. In addition, Bulgaria boasts a rich cultural heritage, stunning natural scenery, and a warm and welcoming community that make it an attractive destination for expats and retirees looking for a peaceful and fulfilling life.Favourable Investment Climate: Explore Properties for Sale in Bulgaria
for Foreign Investors.Bulgaria has emerged as a highly sought-after destination for foreign investors seeking to establish their enterprises in Europe, thanks to its stable economy and favourable investment climate. The country's advantageous location provides convenient access to other European markets, making it an attractive choice for investment opportunities.<br><br>

Additionally, the Bulgarian government has implemented various measures to improve the business environment, such as reducing bureaucracy and offering tax incentives to international companies. These proactive initiatives have resulted in a continuous surge in foreign direct investment in Bulgaria, further cementing its appeal as an investment hotspot.Yantra Homes: Your Trusted Partner for Property for Sale in BulgariaWhatever requirements you may have for Bulgarian property, local property specialists Yantra Homes guarantee that we will combine our specialist local knowledge of the Bulgarian property market with a clear understanding of our clients' requirements. Please call us, send us an email, or call in at the office when you are visiting; we promise that you will not be disappointed.

<div class="" style="display:none" id="hidelink"><a href="javascript:void(0)" onclick="hidereadmore()" class="btn btn-link">Hide  more about Property in Bulgaria <i class="dpicon-arrow-1-up"></i></a></div>
            </p>  

            


          </div>
        </div>
      </section>
      
      <!--====  End of Sale Sec  ====-->
      <script>
        function readmore() {
          document.getElementById("readmore").style.display = "block";
          document.getElementById("hidelink").style.display = "block"
        }

        function hidereadmore()
        {
          document.getElementById("readmore").style.display = "none";
          document.getElementById("hidelink").style.display = "none"
        }

        function moreprop()
        {
          document.getElementById("morre").style.display = "block";
        }

        window.onload = function()
        {
          setTimeout(() => {
            document.getElementById("morre").style.display = "none";
          }, 1000);
        }

      
      </script>  
      
     @include("front.footer_special")