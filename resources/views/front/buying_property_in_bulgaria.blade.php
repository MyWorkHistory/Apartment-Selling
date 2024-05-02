@include("front.header")

    <div class="dp-body-area">
      <!--=================================
      =            Search Area            =
      ==================================-->
      
      <div class="dp-header-area">
        <div class="container">
          <div class="dp-mobile-banner-box d-md-none">
            <div class="dp-property-box">
              <div class="dp-property-box-meta d-none d-lg-block">
                <div class="row">
                  <div class="col-md-6">
                    <span class="badge bg-danger">For Rent</span>
                  </div>
                  <div class="col-md-6 text-end">
                    <a href="#" class="btn btn-secondary dp-btn-heart"><i class="dpicon-heart"></i></a>
                  </div>
                </div>
              </div>
              <div class="dp-property-box-imgs">
                <div class="dp-property-box-imgs-slider">
                  <div class="dp-property-box-imgs-slide">
                    <div class="dp-property-box-imgs-img" style="background-image:url('{{asset('assets/images/property.jpg')}}')"></div>
                  </div>
                  <div class="dp-property-box-imgs-slide">
                    <div class="dp-property-box-imgs-img" style="background-image:url('{{asset('assets/images/property.jpg')}}')"></div>
                  </div>
                  <div class="dp-property-box-imgs-slide">
                    <div class="dp-property-box-imgs-img" style="background-image:url('{{asset('assets/images/property.jpg')}}')"></div>
                  </div>
                  <div class="dp-property-box-imgs-slide">
                    <div class="dp-property-box-imgs-img" style="background-image:url('{{asset('assets/images/property.jpg')}}')"></div>
                  </div>
                </div>
              </div>
              <div class="dp-property-box-desc">
                <div class="dp-property-box-title-area">
                  <div class="dp-property-box-title-left">
                    <h4><a href="#">Three Bedroom House</a></h4>
                  </div>
                  <div class="dp-property-box-title-right d-none d-lg-block">
                    <a class="dp-property-id-btn btn btn-secondary">ID 5422008</a>
                  </div>
                </div>
                <h3 class="dp-property-box-price">95,000 EUR</h3>
                <h5 class="dp-property-box-location"><i class="dpicon-location"></i><span>Area</span></h5>
                <ul class="dp-property-box-fields">
                  <li><div class="dp-property-field"><i class="dpicon-bed"></i><span>3 Beds</span></div></li>
                  <li><div class="dp-property-field"><i class="dpicon-baths"></i><span>2 Baths</span></div></li>
                  <li><div class="dp-property-field"><i class="dpicon-area"></i><span>120 Sq M</span></div></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-7 d-none d-md-block">
              <div class="row">


               @include("front.search")

              </div>
            </div>
            <div class="col-lg-12 col-md-5 d-lg-none">
              <div class="dp-property-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active"  data-bs-toggle="tab" data-bs-target="#property-for-sale" type="a" role="tab" aria-controls="property-for-sale" aria-selected="true">For Sale</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link"  data-bs-toggle="tab" data-bs-target="#property-for-rent" type="a" role="tab" aria-controls="property-for-rent" aria-selected="true">For Rent</a>
                  </li>
                </ul>
                <div class="tab-content" id="dp-property-tabs-cnt">
                  <div class="tab-pane fade show active" id="property-for-sale" tabindex="0">
                    <div class="dp-search-area-box">
                      <form>
                        <div class="row dp-search-area-box-row">
                          <div class="col-md-12">
                            <div class="search-bar-dropdown">
                              <input type="checkbox" class="dropdown-input checkbox4" id="dropdownCheckbox4">
                              <label class="dropdown-label" for="dropdownCheckbox4">Fast Search</label>
                              <ul class="dropdown-content fast-links">
                                <li class="dropdown-item"><input  class="dropdown-search" type="text"></li>
                                <li class="dropdown-item"><a href="#">1</a></li>
                                <li class="dropdown-item"><a href="#">2</a></li>
                                <li class="dropdown-item"><a href="#">3</a></li>
                                <li class="dropdown-item"><a href="#">4</a></li>
                                <li class="dropdown-item"><a href="#">5</a></li>
                                
                              </ul>
                              <svg class="dropdown-arrow" width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.58521 5.91067C7.23581 6.16283 6.76419 6.16283 6.41479 5.91067L0.848983 1.8939C0.0621447 1.32604 0.46384 0.083009 1.43419 0.0830089L12.5658 0.0830081C13.5362 0.0830081 13.9379 1.32604 13.151 1.89389L7.58521 5.91067Z" fill="#AAAAAA"/>
                                </svg>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Veliko Tarnovo, Bulgaria etc.">
                          </div>
                          <div class="col-md-12">
                            <select name="property_type" class="form-control">
                              <option value="">Select Property Type</option>
                              <option value="1">Apartment</option>
                              <option value="2">Commercial</option>
                              <option value="3">Hotel</option>
                              <option value="4">House</option>
                              <option value="5">House Floor</option>
                              <option value="6">Industrial</option>
                              <option value="7">Office Space</option>
                              <option value="8">Plot</option>
                              <option value="9">Shop or Retail</option>
                              <option value="10">Studio</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <select name="price_string" class="form-control">
                              <option value="" selected="selected">Price</option>
                              <option value="0">All</option>
                              <option value="0">0 - 5 000</option>
                              <option value="1">5 000 - 10 000</option>
                              <option value="2">10 000 - 20 000</option>
                              <option value="3">20 000 - 50 000</option>
                              <option value="4">50 000 - 100 000</option>
                              <option value="5">more than 100 000</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Property ID">
                          </div>
                          <div class="col-md-12">
                            <a href="javascript:void(0)" class="btn btn-link dp-btn-link-white"><i class="dpicon-advanced-search"></i> Advance Search</a>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-light dp-btn-white" type="submit"><i class="dpicon-search"></i> Search</button>
                          </div>
                        </div>  
                        
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="property-for-rent"  tabindex="0">
                    <div class="dp-search-area-box">
                      <form>
                        <div class="row dp-search-area-box-row">
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Veliko Tarnovo, Bulgaria etc.">
                          </div>
                          <div class="col-md-12">
                            <select name="property_type" class="form-control">
                              <option value="">Select Property Type</option>
                              <option value="1">Apartment</option>
                              <option value="2">Commercial</option>
                              <option value="3">Hotel</option>
                              <option value="4">House</option>
                              <option value="5">House Floor</option>
                              <option value="6">Industrial</option>
                              <option value="7">Office Space</option>
                              <option value="8">Plot</option>
                              <option value="9">Shop or Retail</option>
                              <option value="10">Studio</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <select name="price_string" class="form-control">
                              <option value="" selected="selected">Price</option>
                              <option value="0">All</option>
                              <option value="0">0 - 5 000</option>
                              <option value="1">5 000 - 10 000</option>
                              <option value="2">10 000 - 20 000</option>
                              <option value="3">20 000 - 50 000</option>
                              <option value="4">50 000 - 100 000</option>
                              <option value="5">more than 100 000</option>
                            </select>
                          </div>
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="" placeholder="Property ID">
                          </div>
                          <div class="col-md-12">
                            <a href="javascript:void(0)" class="btn btn-link dp-btn-link-white"><i class="dpicon-advanced-search"></i> Advance Search</a>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-light dp-btn-white" type="submit"><i class="dpicon-search"></i> Search</button>
                          </div>
                        </div>  
                                      
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <!--====  End of Search Area  ====-->

      <section class="veliko-section">
        <div class="container about-veliko-section">
          <div class="about-veliko-titles">
            <h3>Things to Know Before Buying Property in Bulgaria</h3>
          </div>

          <div class="about-veliko-body">
            <div>
              <img src="{{asset('assets/images/property.jpg')}}" alt="image of a house">
              <p>If you're looking to invest in real estate, Bulgarian property is a great option to consider. Bulgaria offers many opportunities for foreign investors, with a stable economy and low property taxes. In this article, we'll discuss everything you need to know about buying Bulgarian property for sale<br>

           <strong>Are you considering buying property in Bulgaria?</strong><br><br>
           This guide offers information to assist you in making informed decisions when investing in Bulgarian real estate. Please note that individual circumstances may affect the buying process, so it is best to seek advice from a real estate professional.</p>
            </div>


            <div>
              <p>
              Villages in the municipality of Veliko Tarnovo: Arbanasi, Balvan, Belchevtsi, Belyakovets, Bijovtsi, Boychevi Kolibi, Boychovtsi, Bochkovtsi, Boyanovtsi, Brankovtsi, Bukovets, Town of Debelets, Devetatsite, Dechkovtsi, Dimitrovtsi, Dimovtsi, Dichin, Doynovtsi, Dolen Enevets, Dolni Damyanovtsi, Dunavtsi, Emen, Gabrovtsi, Gashtevtsi, Golemanite, Goranovtsi, Goren Enevets, Hotnitsa, Ivanovtsi, Ilevtsi, Kapinovo, Town of Kilifarevo, Kisyovtsi, Kladni Dyal, Klashka Reka, Kutsarovtsi, , Lagerite, Ledenik, Malki Chiflik, Malchovtsi, Margovtsi, Mindya, Mishemorkovhan, Momin Sbor, Natsovtsi, Nikyup, Novo Selo, Osenarite, Piramidata, Plakovo, Pojernik, Popovtsi, Prisovo, Prodanovtsi, Pushevo, Pchelishte, Purovtsi, Radkovtsi, Raykovtsi, Rashevtsi, Resen, Rusalya, Ruskovtsi, Samovodene, Samsiite, Seymenite, Semkovtsi, Suhareka, Surnentsi, Shemshevo, Sheremetya, Shodekovtsi, Terziite, Todorovtsi, Tseperanite, Tserova Koriya, Tsonkovtsi, Ushevtsi, Velchevo, Vetrintsi, Vilare, Vodoley, Voynezha, Voneshta Voda, Vuglevtsi, Vurlinka, Yalovo, Yovchevtsi.<br>
                <br>

                Artifacts from Tsarevets Hill have been dated from the Chalcolithic Era 4200 BC, sometimes known as the Copper Age. The oldest settlement of Veliko Tarnovo was inhabited by Thracians and was a respectable size by the end of the Iron Age around 100 BC. History during the first centuries of the Roman Empire era is lost around Tsarevets but is very clear around neighbouring Nikyup village. From the 5th century there was a large Byzantium fortified town which sat on the Tsarevets Hill and withstood sieges and attacks for 3 centuries. Late in the 7th century a large Avar-Slav-Bulgar attack crushed the settlement and from the 8th to 10th century a new town was founded on the ruins of 12 previous centuries of buildings. By the end of the 10th century, Tsarevets hill was densely populated and in the 12th century the settlement was reinforced with a boyar's residential complex and a few Christian buildings erected.<br>
                 </p>
            </div>



            
          </div>
        </div>
      </section>
      

   
   
      
     @include("front.footer")