@include("front.header")

  

<div class="dp-body-area">

<!--============================
=       details section1       =  
=============================-->
     
<section class="container details-section">
  <div>
      <div>
          <h1><?php if($data['Beds'] != 0 ) { echo $data['Beds'] .  "  Bedrooms ";} ?> {{$data["type"]}}  {{$data["location"]["location_name_en"]}}, {{$data["location"]["municipality_en"]}}</a></h4></h1>
          <div class="property-details-main">
              <div class="property-details property-details-first">
                  <img style="max-height:460px" src="<?php echo $data["picset"][0]?>" alt="property image">
              </div>
              <div class="property-details">
                  <div class="secondary-images">
                     <?php if(isset($data["picset"][1])){?>
                     <div>
                      <img src="<?php echo $data["picset"][1]?>" alt="property image" style="max-height:211px">
                     </div>
                     <?php } ?>

                     <?php if(isset($data["picset"][2])){?>
                     <div>
                      <img src="<?php echo $data["picset"][2]?>" alt="property image" style="max-height:211px">
                     </div>
                     <?php } ?>
                  </div>
                  <br>
                  <div class="secondary-images" style="display: flex;">
                      <?php if(isset($data["picset"][3])){?>  
                      <div>
                       <img src="<?php echo $data["picset"][3]?>" alt="property image" style="max-height:211px">
                      </div>
                      <?php } ?>

                      <?php if(isset($data["picset"][4])){?>
                      <div>
                       <img src="<?php echo $data["picset"][4]?>" alt="property image" style="max-height:211px">
                       <a href="#" class="see-more">See All Photos</a>
                      </div>
                      <?php } ?>
                   </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!--====  End of details section1  ====-->



 <!--============================
=       details section2       =  
=============================-->

<section class="details-section2">
  <div class="container details-section2-div">
    <div class="details-description">
      <div>
          <div class="property-price">
              <p>{{number_format($data["Price"],2)}} EUR</p>
              <span></span>
              <img src="{{asset('assets/images/svg/like.svg')}}" alt="like button">
          </div>

          <div class="short-property-description">
            <span><img src="{{asset('assets/images/svg/bed.svg')}}" alt="icon of bed">3 Beds</span>
            <span><img src="{{asset('assets/images/svg/bath.svg')}}" alt="icon of bath">2 Baths</span>
            <span><img src="{{asset('assets/images/svg/area.svg')}}" alt="area icon">120 Sq M</span>
          </div>

          <div class="property-features">
            <h4>Features and Details:</h4>
            <div>
              <span><img src="{{asset('assets/images/svg/sofa.svg')}}" alt="icon of sofa"> Furnishing: Furnished</span>
              <span style="margin-left: 25px;">Construction type: brick</span>
              <span><img src="{{asset('assets/images/svg/building.svg')}}" alt="building icon"> 3 floors</span>
            </div>
          </div>

          <div class="facilities">
            <p>Amenities and appliances:</p>
            <span><img src="{{asset('assets/images/svg/firepalce.svg')}}" alt="fireplace icon"> Fireplace</span>
            <span><img src="{{asset('assets/images/svg/pool.svg')}}" alt="pool icon"> Pool</span>
            <span><img src="{{asset('assets/images/svg/washing-machine.svg')}}" alt="washingmachine icon"> Washingmachine</span>
            <span><img src="{{asset('assets/images/svg/car.svg')}}" alt="car icon"> Parking</span>
          </div>

          <div class="heating">
            <p>Heating:</p>
            <span style="margin-left: 25px;">Air conditioning</span>
          </div>

          <div class="extras">
            <p>Additional extras:</p>
            <span><img src="{{asset('assets/images/svg/terrace.svg')}}" alt="terrace icon"> Terrace</span>
          </div>

          <div class="property-location">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="18" viewBox="0 0 13 18" fill="none">
              <path d="M7.30234 17.1556C9.03906 14.9493 13 9.60194 13 6.59832C13 2.9555 10.0885 0 6.5 0C2.91146 0 0 2.9555 0 6.59832C0 9.60194 3.96094 14.9493 5.69766 17.1556C6.11406 17.6814 6.88594 17.6814 7.30234 17.1556ZM6.5 8.79777C5.30495 8.79777 4.33333 7.81145 4.33333 6.59832C4.33333 5.38519 5.30495 4.39888 6.5 4.39888C7.69505 4.39888 8.66667 5.38519 8.66667 6.59832C8.66667 7.81145 7.69505 8.79777 6.5 8.79777Z" fill="#B1B1B1"/>
            </svg>
            <a href="#">
            {{$data["location"]["location_name_en"]}}, {{$data["location"]["municipality_en"]}}</a>
          </div>
      </div>
      <div class="property-id-section">
          <p class="property-id">Property ID: {{$data["idrefno"]}}</p>
          <div style="display: flex; gap: 7px;">
              <div class="agent-profile"></div>
              <div>
                  <h6>{{$data["Agent"]}}</h6>
                  <span>Agent</span>
                  <span>mobile:</span>
                  <span>email:</span>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!--====  End of details section2  ====-->



 <!--============================
=       details section3       =  
=============================-->

<section class="container details-section3">
  <div>
    <h4>Description of the property:</h4>
    <p id="description"><?php echo $data["Description_en"]?></p>
  </div>
</section>
<!--====  End of details section3  ====-->



 <!--============================
=       details section4       =  
=============================-->
<div class="read-more">
  <div class="container">
    <a href="#" id="seeMore">Read more<span style="color: rgba(17, 155, 255, 0.83);;">&#x25BC;</span></a>
  </div>  
</div>

<section class="details-section4">
  <div class="container">
    <div class="property-id-section-mobile">
      <p class="property-id">Property ID: 000003400</p>
      <div style="display: flex; gap: 7px;">
          <div class="agent-profile"></div>
          <div>
              <h6>Kristian Kovatchev</h6>
              <span>Agent</span>
              <span>mobile:</span>
              <span>email:</span>
          </div>
      </div>
    </div>
  </div>

 <!-- <div class="container">
    <div class="about-sevlievo">
      <h4>About Sevlievo</h4>
    </div>
  </div>-->
  
  <div class="container">
    <div class="similar-properties">
      <h4>Similar properties:</h4>

      <div class="products">



        <div style="cursor:pointer" onclick="takeToPage('{{$random[0]["idrefno"]}}')">
          <div class="for-rent" >
            <img src="<?php echo $random[0]["picset"][0]?>" alt="image of a house">
          </div>

          <div class="description">
            <div>
              <div class="product-price">
                <span><?php echo number_format($random[0]["Price"],2)?> EUR</span>
              </div>
              <div class="title">
                <h4><?php if($random[0]['Beds'] != 0 ) { echo $random[0]['Beds'] .  "  Bedrooms ";} ?>{{$random['0']["type"]}}</h4>
              </div>
              <div class="location">
                <span >
                  <img src="{{asset('assets/images/svg/location.svg')}}" alt="location icon">
                  {{$random[0]["location"]["location_name_en"]}}, {{$random[0]["location"]["municipality_en"]}}
                </span>
              </div>
              <div class="house-details">
                <span>
                  <img src="{{asset('assets/images/svg/bed.svg')}}" alt="bed icon">
                  {{$random[0]["Beds"]}} Beds
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/bath.svg')}}" alt="bath icon">
                  {{$random[0]["Baths"]}} Baths
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/area.svg')}}" alt="four arrows pointing opposite directions">
                  {{$random[0]["SquareFeet"]}} Sq M
                </span>
              </div>
            </div>
          </div>
        </div>




        <div>
          <div class="for-rent">
            <img src="<?php echo $random[1]["picset"][0]?>" alt="image of a house">
          </div>

          <div class="description">
            <div>
              <div class="product-price">
                <span><?php echo number_format($random[1]["Price"],2)?> EUR</span>
              </div>
              <div class="title">
                <h4><?php if($random[1]['Beds'] != 0 ) { echo $random[1]['Beds'] .  "  Bedrooms ";} ?>{{$random['1']["type"]}}</h4>
              </div>
              <div class="location">
                <span >
                  <img src="{{asset('assets/images/svg/location.svg')}}" alt="location icon">
                  {{$random[1]["location"]["location_name_en"]}}, {{$random[1]["location"]["municipality_en"]}}
                </span>
              </div>
              <div class="house-details">
                <span>
                  <img src="{{asset('assets/images/svg/bed.svg')}}" alt="bed icon">
                  {{$random[1]["Beds"]}} Beds
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/bath.svg')}}" alt="bath icon">
                  {{$random[1]["Baths"]}} Baths
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/area.svg')}}" alt="four arrows pointing opposite directions">
                  {{$random[1]["SquareFeet"]}} Sq M
                </span>
              </div>
            </div>
          </div>
        </div>



        <div class="last-product">
          <div class="for-rent">
            <img src="<?php echo $random[2]["picset"][2]?>" alt="image of a house">
          </div>

          <div class="description">
            <div>
              <div class="product-price">
                <span><?php echo number_format($random[1]["Price"],2)?> EUR</span>
              </div>
              <div class="title">
                <h4><?php if($random[2]['Beds'] != 0 ) { echo $random[2]['Beds'] .  "  Bedrooms ";} ?>{{$random['2']["type"]}}</h4>
              </div>
              <div class="location">
                <span >
                  <img src="{{asset('assets/images/svg/location.svg')}}" alt="location icon">
                  {{$random[2]["location"]["location_name_en"]}}, {{$random[2]["location"]["municipality_en"]}}
                </span>
              </div>
              <div class="house-details">
                <span>
                  <img src="{{asset('assets/images/svg/bed.svg')}}" alt="bed icon">
                  {{$random[2]["Beds"]}} Beds
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/bath.svg')}}" alt="bath icon">
                  {{$random[2]["Baths"]}} Baths
                </span>
                <span>
                  <img src="{{asset('assets/images/svg/area.svg')}}" alt="four arrows pointing opposite directions">
                  {{$random[2]["SquareFeet"]}} Sq M
                </span>
              </div>
            </div>
          </div>
        </div>




      





       

      </div>
    </div>
  </div>

  <div class="container">
    <div class="useful-articles">
      <h4>Useful articles:</h4>

      <div class="useful-articles-body">
        <div>
          <div class="articles">

            <div class="black"></div>
            <div class="about-article">
              <div class="publish-date">
                <span>21 September, 2023</span>
                <span>Veliko Tarnovo</span>
              </div>
              <div class="article-title">
                <h4>THE CRAFT FESTIVAL <br> “NIGHT OF THE SAMOVODSKA CHARSHIYA”</h4>
              </div>
              <div class="article-footer">
                <p>Lorem Ipsum Dolor</p>
              </div>
            </div>

          </div>

          <div class="articles">

            <div class="black"></div>
            <div class="about-article">
              <div class="publish-date">
                <span>16 September, 2023</span>
                <span>Novo Gradishte</span>
              </div>
              <div class="article-title">
                <h4>A BANITSA FESTIVAL IS COMING UP IN NOVO GRADISHTE</h4>
              </div>
              <div class="article-footer">
                <p>Lorem Ipsum Dolor</p>
              </div>
            </div>

          </div>
        </div>
        <div class="desktop-article">
          <div class="articles">

            <div class="black"></div>
            <div class="about-article">
              <div class="publish-date">
                <span>1 September, 2023</span>
                <span>Sevlievo</span>
              </div>
              <div class="article-title">
                <h4>THE MUNICIPALITY OF SEVLIEVO ORGANIZES A ROCK FEST “HOTALICH”</h4>
              </div>
              <div class="article-footer">
                <p>Lorem Ipsum Dolor</p>
              </div>
            </div>

          </div>
          
          <div class="articles">

            <div class="black"></div>
            <div class="about-article">
              <div class="publish-date">
                <span>26 August, 2023</span>
                <span>Dzhulyunitsa</span>
              </div>
              <div class="article-title">
                <h4>THE CULINARY FESTIVAL “COLORFUL TABLE” FOR THE THIRTEENTH TIME</h4>
              </div>
              <div class="article-footer">
                <p>Lorem Ipsum Dolor</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--====  End of details section4  ====-->


<!--============================
=            Footer            =
=============================-->






@include("front.footer")

    