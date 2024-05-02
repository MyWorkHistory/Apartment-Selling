   <?php   
    $location = DB::table('yh_bg_locations_in_use')->orderby('location_name_en')->get();
  ?>

  <style>
    .custom-checkbox_new {
    display: inline-block;
    width: 18px;
    height: 18px;
    background-color: #fff;
    transition: .5s ease;
    border-radius:20% !important;  
    outline: none;
    }
    .newform
    {
      width:80px; border-radius:4px; 
      border:1px solid #a0051a;
      outline:none;
      background:#d9d9d9;
    }

    .newformtwo
    {
      width:120px; border-radius:4px; 
      border:1px solid #a0051a;
      outline:none;
      background:#d9d9d9;
    }

    #responses{
    border-radius: 4px;
    background: #D9D9D9;
    padding: 2px 5px;
    width: 455px;
    height:50px;
    padding-top:15px;
    padding-left:20px;
    display:none;
    }

    .response1{
    border-radius: 4px;
    color:white;  
    }

    @media only screen and (min-width: 600px) 
    {

      .newform
      {
        width:120px; border-radius:4px; 
        border:1px solid #a0051a;
        outline:none;
      }

    }



   </style> 
     <!--============================
      =            search-bar            =
      =============================-->
      <div class="container listing-search-bar">
        <div class="search-bar-header container" id="search-bar">
          <div>
            <button>For Sale</button>
          </div>
          <div>
            <button>For Rent</button>
          </div>
        </div>
        <div class="search-bar">
          <div class="search-bar-body">

            <div class="search-bar-dropdown">
            <select id="nsima_property_type2" class="dropdown-content select2" style="appearance: none;background-color:#ccc; color:#ccc">
                <option class="dropdown-item" value="0">Fast Search</option>
                <option class="dropdown-item" value="1"><a href="javascript:void(0)">Latest Property Listings</a></option>
                <option class="dropdown-item" value="2"><a href="javascript:void(0)">Apartments For Sale</a></option>
                <option class="dropdown-item" value="1"><a href="javascript:void(0)">Houses For Sale</a></option>
                <option class="dropdown-item" value="2"><a href="javascript:void(0)">Property For Sale in Town</a></option>
              </select>  
              <svg class="dropdown-arrow" width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.58521 5.91067C7.23581 6.16283 6.76419 6.16283 6.41479 5.91067L0.848983 1.8939C0.0621447 1.32604 0.46384 0.083009 1.43419 0.0830089L12.5658 0.0830081C13.5362 0.0830081 13.9379 1.32604 13.151 1.89389L7.58521 5.91067Z" fill="#AAAAAA"/>
                </svg>
            </div>

            <div>
              <input class="search-all" type="text" placeholder="Veliko Tarnovo, Bulgaria etc.">
            </div>

            <div class="search-bar-dropdown">
              <select id="nsima_property_type" onchange="changeArea(this.value)" class="dropdown-content select2" style="appearance: none;background-color:#ccc; color:#ccc" onchange="selectPropertyType(this.value)">
              <option class="dropdown-item" value="0">Property Type</option>
                <option class="dropdown-item" value="1">Apartment</option>
                <option class="dropdown-item" value="2">Commercial</option>
                <option class="dropdown-item" value="3">Hotel</option>
                <option class="dropdown-item" value="4">House</option>
                <option class="dropdown-item" value="5">House Floor</option>
                <option class="dropdown-item" value="6">Industrial</option>
                <option class="dropdown-item" value="7">Office Floor</option>
                <option class="dropdown-item" value="8">Plot</option>
                <option class="dropdown-item" value="9">Shop or Retail</option>
                <option class="dropdown-item" value="10">Studio</option>
              </select>  
              <svg class="dropdown-arrow" width="14"  height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.58521 5.91067C7.23581 6.16283 6.76419 6.16283 6.41479 5.91067L0.848983 1.8939C0.0621447 1.32604 0.46384 0.083009 1.43419 0.0830089L12.5658 0.0830081C13.5362 0.0830081 13.9379 1.32604 13.151 1.89389L7.58521 5.91067Z" fill="#AAAAAA"/>
                </svg>
            </div>


            <div class="search-bar-dropdown">
              <select id="nsima_price_range" class="dropdown-content select2" style="appearance: none;background-color:#ccc; color:#ccc" onchange="selectPrices(this.value)">
                <option class="dropdown-item" value="0">Price</option>
                <option class="dropdown-item" value="1">0 - 5 000</option>
                <option class="dropdown-item" value="2">5 000 - 10 000</option>
                <option class="dropdown-item" value="3">10 000 - 20 000</option>
                <option class="dropdown-item" value="4">20 000 - 50 000</option>
                <option class="dropdown-item" value="5">50 000 - 100 000</option>
                <option class="dropdown-item" value="6">more than 100 000</option>
              </select>
              <svg class="dropdown-arrow" width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.58521 5.91067C7.23581 6.16283 6.76419 6.16283 6.41479 5.91067L0.848983 1.8939C0.0621447 1.32604 0.46384 0.083009 1.43419 0.0830089L12.5658 0.0830081C13.5362 0.0830081 13.9379 1.32604 13.151 1.89389L7.58521 5.91067Z" fill="#AAAAAA"/>
                </svg>
            </div>
    
            <div>
              <input class="search-id" id="nsima_property_id" type="text" placeholder="Property ID">
            </div>

            <div class="advance-search mobile">
              <p class="advance-search-button">
                <svg class="advance-search-icon-red" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M12.0258 13.9999C11.7314 13.9999 11.4873 13.7785 11.4873 13.5115V6.34872C11.4873 6.08175 11.7314 5.86035 12.0258 5.86035C12.3201 5.86035 12.5642 6.08175 12.5642 6.34872V13.5115C12.5642 13.7785 12.3201 13.9999 12.0258 13.9999Z" fill="#A81913"/>
                  <path d="M12.0258 4.23256C11.7314 4.23256 11.4873 4.01116 11.4873 3.74419V0.488372C11.4873 0.221395 11.7314 0 12.0258 0C12.3201 0 12.5642 0.221395 12.5642 0.488372V3.74419C12.5642 4.01116 12.3201 4.23256 12.0258 4.23256Z" fill="#A81913"/>
                  <path d="M6.99989 14.0001C6.70553 14.0001 6.46143 13.7787 6.46143 13.5118V10.256C6.46143 9.98897 6.70553 9.76758 6.99989 9.76758C7.29425 9.76758 7.53835 9.98897 7.53835 10.256V13.5118C7.53835 13.7787 7.29425 14.0001 6.99989 14.0001Z" fill="#A81913"/>
                  <path d="M6.99989 8.13953C6.70553 8.13953 6.46143 7.91814 6.46143 7.65116V0.488372C6.46143 0.221395 6.70553 0 6.99989 0C7.29425 0 7.53835 0.221395 7.53835 0.488372V7.65116C7.53835 7.91814 7.29425 8.13953 6.99989 8.13953Z" fill="#A81913"/>
                  <path d="M1.9745 13.9999C1.68014 13.9999 1.43604 13.7785 1.43604 13.5115V6.34872C1.43604 6.08175 1.68014 5.86035 1.9745 5.86035C2.26886 5.86035 2.51296 6.08175 2.51296 6.34872V13.5115C2.51296 13.7785 2.26886 13.9999 1.9745 13.9999Z" fill="#A81913"/>
                  <path d="M1.9745 4.23256C1.68014 4.23256 1.43604 4.01116 1.43604 3.74419V0.488372C1.43604 0.221395 1.68014 0 1.9745 0C2.26886 0 2.51296 0.221395 2.51296 0.488372V3.74419C2.51296 4.01116 2.26886 4.23256 1.9745 4.23256Z" fill="#A81913"/>
                  <path d="M3.41026 6.8371H0.538462C0.244103 6.8371 0 6.6157 0 6.34872C0 6.08175 0.244103 5.86035 0.538462 5.86035H3.41026C3.70462 5.86035 3.94872 6.08175 3.94872 6.34872C3.94872 6.6157 3.70462 6.8371 3.41026 6.8371Z" fill="#A81913"/>
                  <path d="M13.4615 6.8371H10.5897C10.2954 6.8371 10.0513 6.6157 10.0513 6.34872C10.0513 6.08175 10.2954 5.86035 10.5897 5.86035H13.4615C13.7559 5.86035 14 6.08175 14 6.34872C14 6.6157 13.7559 6.8371 13.4615 6.8371Z" fill="#A81913"/>
                  <path d="M8.43565 8.13983H5.56385C5.26949 8.13983 5.02539 7.91843 5.02539 7.65146C5.02539 7.38448 5.26949 7.16309 5.56385 7.16309H8.43565C8.73001 7.16309 8.97411 7.38448 8.97411 7.65146C8.97411 7.91843 8.73001 8.13983 8.43565 8.13983Z" fill="#A81913"/>
                </svg>
    
                <svg class="advance-search-icon-white" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                  <path d="M12.0258 13.9999C11.7314 13.9999 11.4873 13.7785 11.4873 13.5115V6.34872C11.4873 6.08175 11.7314 5.86035 12.0258 5.86035C12.3201 5.86035 12.5642 6.08175 12.5642 6.34872V13.5115C12.5642 13.7785 12.3201 13.9999 12.0258 13.9999Z" fill="#F3F2F2"/>
                  <path d="M12.0258 4.23256C11.7314 4.23256 11.4873 4.01116 11.4873 3.74419V0.488372C11.4873 0.221395 11.7314 0 12.0258 0C12.3201 0 12.5642 0.221395 12.5642 0.488372V3.74419C12.5642 4.01116 12.3201 4.23256 12.0258 4.23256Z" fill="#F3F2F2"/>
                  <path d="M6.99989 13.9999C6.70553 13.9999 6.46143 13.7785 6.46143 13.5115V10.2557C6.46143 9.98873 6.70553 9.76733 6.99989 9.76733C7.29425 9.76733 7.53835 9.98873 7.53835 10.2557V13.5115C7.53835 13.7785 7.29425 13.9999 6.99989 13.9999Z" fill="#F3F2F2"/>
                  <path d="M6.99989 8.13953C6.70553 8.13953 6.46143 7.91814 6.46143 7.65116V0.488372C6.46143 0.221395 6.70553 0 6.99989 0C7.29425 0 7.53835 0.221395 7.53835 0.488372V7.65116C7.53835 7.91814 7.29425 8.13953 6.99989 8.13953Z" fill="#F3F2F2"/>
                  <path d="M1.9745 13.9999C1.68014 13.9999 1.43604 13.7785 1.43604 13.5115V6.34872C1.43604 6.08175 1.68014 5.86035 1.9745 5.86035C2.26886 5.86035 2.51296 6.08175 2.51296 6.34872V13.5115C2.51296 13.7785 2.26886 13.9999 1.9745 13.9999Z" fill="#F3F2F2"/>
                  <path d="M1.9745 4.23256C1.68014 4.23256 1.43604 4.01116 1.43604 3.74419V0.488372C1.43604 0.221395 1.68014 0 1.9745 0C2.26886 0 2.51296 0.221395 2.51296 0.488372V3.74419C2.51296 4.01116 2.26886 4.23256 1.9745 4.23256Z" fill="#F3F2F2"/>
                  <path d="M3.41026 6.8371H0.538462C0.244103 6.8371 0 6.6157 0 6.34872C0 6.08175 0.244103 5.86035 0.538462 5.86035H3.41026C3.70462 5.86035 3.94872 6.08175 3.94872 6.34872C3.94872 6.6157 3.70462 6.8371 3.41026 6.8371Z" fill="#F3F2F2"/>
                  <path d="M13.4615 6.8371H10.5897C10.2954 6.8371 10.0513 6.6157 10.0513 6.34872C10.0513 6.08175 10.2954 5.86035 10.5897 5.86035H13.4615C13.7559 5.86035 14 6.08175 14 6.34872C14 6.6157 13.7559 6.8371 13.4615 6.8371Z" fill="#F3F2F2"/>
                  <path d="M8.43565 8.13934H5.56385C5.26949 8.13934 5.02539 7.91795 5.02539 7.65097C5.02539 7.38399 5.26949 7.1626 5.56385 7.1626H8.43565C8.73001 7.1626 8.97411 7.38399 8.97411 7.65097C8.97411 7.91795 8.73001 8.13934 8.43565 8.13934Z" fill="#F3F2F2"/>
                </svg>
                Advance Search
              </p>
             
            </div>

            <button class="search-icon" id="search-icon" onclick="search_whole(this)">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.53582 19.0716C4.27949 19.0716 0 14.7921 0 9.53582C0 4.27949 4.27949 0 9.53582 0C14.7921 0 19.0716 4.27949 19.0716 9.53582C19.0716 14.7921 14.7921 19.0716 9.53582 19.0716ZM9.53582 1.39549C5.04235 1.39549 1.39549 5.05166 1.39549 9.53582C1.39549 14.02 5.04235 17.6761 9.53582 17.6761C14.0293 17.6761 17.6761 14.02 17.6761 9.53582C17.6761 5.05166 14.0293 1.39549 9.53582 1.39549Z" fill="#A81913"/>
                <path d="M19.3046 20.0019C19.1278 20.0019 18.9511 19.9367 18.8115 19.7972L16.9509 17.9365C16.6811 17.6667 16.6811 17.2202 16.9509 16.9504C17.2207 16.6806 17.6672 16.6806 17.937 16.9504L19.7977 18.811C20.0675 19.0808 20.0675 19.5274 19.7977 19.7972C19.6581 19.9367 19.4814 20.0019 19.3046 20.0019Z" fill="#A81913"/>
                </svg>
              <svg class="red-search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.53582 19.0716C4.27949 19.0716 0 14.7921 0 9.53582C0 4.27949 4.27949 0 9.53582 0C14.7921 0 19.0716 4.27949 19.0716 9.53582C19.0716 14.7921 14.7921 19.0716 9.53582 19.0716ZM9.53582 1.39549C5.04235 1.39549 1.39549 5.05166 1.39549 9.53582C1.39549 14.02 5.04235 17.6761 9.53582 17.6761C14.0293 17.6761 17.6761 14.02 17.6761 9.53582C17.6761 5.05166 14.0293 1.39549 9.53582 1.39549Z" fill="#A81913"/>
                <path d="M19.3046 20.0019C19.1278 20.0019 18.9511 19.9367 18.8115 19.7972L16.9509 17.9365C16.6811 17.6667 16.6811 17.2202 16.9509 16.9504C17.2207 16.6806 17.6672 16.6806 17.937 16.9504L19.7977 18.811C20.0675 19.0808 20.0675 19.5274 19.7977 19.7972C19.6581 19.9367 19.4814 20.0019 19.3046 20.0019Z" fill="#A81913"/>
                </svg>
                
              <span>Search</span>
            </button>
            
          </div>
          <div class="advance-search-body">
            <div class="advance-search-inputs">
              <div class="advance-search-inputs-div">
                <div>
                  <label class="label">Bedrooms (min)</label>
                  <input id="nsima_bedrooms_min" type="number" class="newformtwo">
                </div>

                <div>
                  <label class="label">Bathrooms (min)</label>
                  <input id="nsima_bathrooms_min" type="number" class="newformtwo">
                </div>

               <div style="display: flex; margin-top: 3px;">
                  <label class="label">Location</label>
                  <div class="advance-search-dropdown">
                    <select id="nsima_location_id" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:none; outline:0px;">
                      <option class="dropdown-item" value="0" ></option>
                      @foreach($location as $one)
                      <option class="dropdown-item" value="{{$one->id}}" >{{$one->location_name_en}}</option>
                      @endforeach
                    </select>  
                  </div>
                </div>
                
                <div style="display: flex; margin-top: 3px;">
                  <label class="label">Build type</label>
                  <div class="advance-search-dropdown">
                    <select id="nsima_build_type" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:none; outline:0px;">
                      <option class="dropdown-item" value="0" ></option>
                      <option class="dropdown-item" value="156">Brick</option>
                      <option class="dropdown-item" value="157">Panel</option>
                      <option class="dropdown-item" value="158">Concrete</option>
                      <option class="dropdown-item" value="159">Other</option>
                      <option class="dropdown-item" value="163">Stone</option>
                    </select>  
                  </div>
                </div>

                
              </div>
              <div class="advance-search-prices">
                <div>
                  <label>Price (EUR) from</label>
                  <input id="nsima_price_from" type="number" class="newform">
                  <label style="margin-left: 4px;">to</label>
                  <input id="nsima_price_to" type="number" class="newform">
                </div>

                <div>
                  <label>Living Area Sq M from</label>
                  <input  id="nsima_sqm_from" type="number" class="newform">
                  <label style="margin-left: 4px;">to</label>
                  <input id="nsima_sqm_to" type="number" class="newform">
                </div>

                <div class="status-div">
                  <label class="status-label">Status</label>
                  <div class="advance-search-dropdown">
                    <select id="nsima_status" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:1px solid #d9d9d9; outline:0px;">
                      <option class="dropdown-item" value="0" ></option>
                      <option class="dropdown-item" value="119" >Land Agricultural</option>
                      <option class="dropdown-item" value="120" >Land Regulated</option>
                      <option class="dropdown-item" value="121" >Land Unregulated</option>
                      <option class="dropdown-item" value="122" >Major renovation</option>
                      <option class="dropdown-item" value="123" >Minor renovation</option>
                      <option class="dropdown-item" value="124" >New Build</option>
                      <option class="dropdown-item" value="125" >Resale</option>
                    </select>  
                  </div>
                </div>


              </div>
            </div>

            <div class="advance-search-checkboxes">
              <div class="first-checkboxes">

                <div>
                  <div>
                    <input  id="nsima_Basement" type="checkbox" id="nsima_Basement" class="custom-checkbox_new ">
                    <label class="checkbox-label">Basement</label>
                  </div>
                  
                  <div>
                    <input type="checkbox" id="nsima_SecurityFeatures" class="custom-checkbox_new" >
                    <label class="checkbox-label">Security features</label>
                  </div>

                  <div>
                    <input type="checkbox" id="nsima_Balcony"  class="custom-checkbox_new">
                    <label class="checkbox-label">Balcony</label>
                  </div>
                </div>
                
                <div>
                  <div>
                    <input type="checkbox" id="nsima_aircondtioning"   class="custom-checkbox_new">
                    <label class="checkbox-label">Air conditioning</label>
                  </div>
                  
                  <div>
                    <input type="checkbox"  id="nsima_Furnished" class="custom-checkbox_new">
                    <label class="checkbox-label">Furnished</label>
                  </div>
  
                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_OffRoadParking">
                    <label class="checkbox-label">OffRoad parking</label>
                  </div>

                </div>
              </div>
              
              <div class="second-checkboxes">
                <div>
                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_CentralHeating">
                    <label class="checkbox-label">Central heating</label>
                  </div>
                  
                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_Garage">
                    <label class="checkbox-label">Garage</label>
                  </div>
                </div>
  
                <div>
                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_EnSuite">
                    <label class="checkbox-label">EnSuite</label>
                  </div>
                  
                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_Lift">
                    <label class="checkbox-label">Lift</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="key-words">
              <label>Keywords</label>
              <input class="keywords-input" type="text" id="nsima_keywords">
            </div>

            <div class="sort-results">
             <div>
              <span>Sort results by</span>
             </div>
              <div>
                <div class="price-checkbox">
                  <input type="radio" name="orderby" value="priceasc">
                  <label>Price Up</label>
                </div>
  
                <div class="price-checkbox">
                  <input type="radio" name="orderby" value="pricedesc">
                  <label>Price Down</label>
                </div>
  
                <div>
                  <input type="radio" name="orderby" value="iddesc">
                  <label>Most recent</label>
                </div>
              </div>
            </div>

            <div class="advance-search-buttons">
              <button onclick="search_whole(this)">Search</button>
              <button onclick="reload_page()">Reset</button>
            </div>
             
            <br>
            <div id="responses"> No Result found</div>

          

            <button class="search-icon-mobile" id="search-icon" onclick="search_whole(this)">
              <svg class="red-search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.53582 19.0716C4.27949 19.0716 0 14.7921 0 9.53582C0 4.27949 4.27949 0 9.53582 0C14.7921 0 19.0716 4.27949 19.0716 9.53582C19.0716 14.7921 14.7921 19.0716 9.53582 19.0716ZM9.53582 1.39549C5.04235 1.39549 1.39549 5.05166 1.39549 9.53582C1.39549 14.02 5.04235 17.6761 9.53582 17.6761C14.0293 17.6761 17.6761 14.02 17.6761 9.53582C17.6761 5.05166 14.0293 1.39549 9.53582 1.39549Z" fill="#A81913"/>
                <path d="M19.3046 20.0019C19.1278 20.0019 18.9511 19.9367 18.8115 19.7972L16.9509 17.9365C16.6811 17.6667 16.6811 17.2202 16.9509 16.9504C17.2207 16.6806 17.6672 16.6806 17.937 16.9504L19.7977 18.811C20.0675 19.0808 20.0675 19.5274 19.7977 19.7972C19.6581 19.9367 19.4814 20.0019 19.3046 20.0019Z" fill="#A81913"/>
                </svg>
                
              <span>Search</span>
            </button>
          </div>
        </div>
        <div class="advance-search desktop">
          <p class="advance-search-button">
            <svg class="advance-search-icon-red" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
              <path d="M12.0258 13.9999C11.7314 13.9999 11.4873 13.7785 11.4873 13.5115V6.34872C11.4873 6.08175 11.7314 5.86035 12.0258 5.86035C12.3201 5.86035 12.5642 6.08175 12.5642 6.34872V13.5115C12.5642 13.7785 12.3201 13.9999 12.0258 13.9999Z" fill="#A81913"/>
              <path d="M12.0258 4.23256C11.7314 4.23256 11.4873 4.01116 11.4873 3.74419V0.488372C11.4873 0.221395 11.7314 0 12.0258 0C12.3201 0 12.5642 0.221395 12.5642 0.488372V3.74419C12.5642 4.01116 12.3201 4.23256 12.0258 4.23256Z" fill="#A81913"/>
              <path d="M6.99989 14.0001C6.70553 14.0001 6.46143 13.7787 6.46143 13.5118V10.256C6.46143 9.98897 6.70553 9.76758 6.99989 9.76758C7.29425 9.76758 7.53835 9.98897 7.53835 10.256V13.5118C7.53835 13.7787 7.29425 14.0001 6.99989 14.0001Z" fill="#A81913"/>
              <path d="M6.99989 8.13953C6.70553 8.13953 6.46143 7.91814 6.46143 7.65116V0.488372C6.46143 0.221395 6.70553 0 6.99989 0C7.29425 0 7.53835 0.221395 7.53835 0.488372V7.65116C7.53835 7.91814 7.29425 8.13953 6.99989 8.13953Z" fill="#A81913"/>
              <path d="M1.9745 13.9999C1.68014 13.9999 1.43604 13.7785 1.43604 13.5115V6.34872C1.43604 6.08175 1.68014 5.86035 1.9745 5.86035C2.26886 5.86035 2.51296 6.08175 2.51296 6.34872V13.5115C2.51296 13.7785 2.26886 13.9999 1.9745 13.9999Z" fill="#A81913"/>
              <path d="M1.9745 4.23256C1.68014 4.23256 1.43604 4.01116 1.43604 3.74419V0.488372C1.43604 0.221395 1.68014 0 1.9745 0C2.26886 0 2.51296 0.221395 2.51296 0.488372V3.74419C2.51296 4.01116 2.26886 4.23256 1.9745 4.23256Z" fill="#A81913"/>
              <path d="M3.41026 6.8371H0.538462C0.244103 6.8371 0 6.6157 0 6.34872C0 6.08175 0.244103 5.86035 0.538462 5.86035H3.41026C3.70462 5.86035 3.94872 6.08175 3.94872 6.34872C3.94872 6.6157 3.70462 6.8371 3.41026 6.8371Z" fill="#A81913"/>
              <path d="M13.4615 6.8371H10.5897C10.2954 6.8371 10.0513 6.6157 10.0513 6.34872C10.0513 6.08175 10.2954 5.86035 10.5897 5.86035H13.4615C13.7559 5.86035 14 6.08175 14 6.34872C14 6.6157 13.7559 6.8371 13.4615 6.8371Z" fill="#A81913"/>
              <path d="M8.43565 8.13983H5.56385C5.26949 8.13983 5.02539 7.91843 5.02539 7.65146C5.02539 7.38448 5.26949 7.16309 5.56385 7.16309H8.43565C8.73001 7.16309 8.97411 7.38448 8.97411 7.65146C8.97411 7.91843 8.73001 8.13983 8.43565 8.13983Z" fill="#A81913"/>
            </svg>

            <svg class="advance-search-icon-white" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
              <path d="M12.0258 13.9999C11.7314 13.9999 11.4873 13.7785 11.4873 13.5115V6.34872C11.4873 6.08175 11.7314 5.86035 12.0258 5.86035C12.3201 5.86035 12.5642 6.08175 12.5642 6.34872V13.5115C12.5642 13.7785 12.3201 13.9999 12.0258 13.9999Z" fill="#F3F2F2"/>
              <path d="M12.0258 4.23256C11.7314 4.23256 11.4873 4.01116 11.4873 3.74419V0.488372C11.4873 0.221395 11.7314 0 12.0258 0C12.3201 0 12.5642 0.221395 12.5642 0.488372V3.74419C12.5642 4.01116 12.3201 4.23256 12.0258 4.23256Z" fill="#F3F2F2"/>
              <path d="M6.99989 13.9999C6.70553 13.9999 6.46143 13.7785 6.46143 13.5115V10.2557C6.46143 9.98873 6.70553 9.76733 6.99989 9.76733C7.29425 9.76733 7.53835 9.98873 7.53835 10.2557V13.5115C7.53835 13.7785 7.29425 13.9999 6.99989 13.9999Z" fill="#F3F2F2"/>
              <path d="M6.99989 8.13953C6.70553 8.13953 6.46143 7.91814 6.46143 7.65116V0.488372C6.46143 0.221395 6.70553 0 6.99989 0C7.29425 0 7.53835 0.221395 7.53835 0.488372V7.65116C7.53835 7.91814 7.29425 8.13953 6.99989 8.13953Z" fill="#F3F2F2"/>
              <path d="M1.9745 13.9999C1.68014 13.9999 1.43604 13.7785 1.43604 13.5115V6.34872C1.43604 6.08175 1.68014 5.86035 1.9745 5.86035C2.26886 5.86035 2.51296 6.08175 2.51296 6.34872V13.5115C2.51296 13.7785 2.26886 13.9999 1.9745 13.9999Z" fill="#F3F2F2"/>
              <path d="M1.9745 4.23256C1.68014 4.23256 1.43604 4.01116 1.43604 3.74419V0.488372C1.43604 0.221395 1.68014 0 1.9745 0C2.26886 0 2.51296 0.221395 2.51296 0.488372V3.74419C2.51296 4.01116 2.26886 4.23256 1.9745 4.23256Z" fill="#F3F2F2"/>
              <path d="M3.41026 6.8371H0.538462C0.244103 6.8371 0 6.6157 0 6.34872C0 6.08175 0.244103 5.86035 0.538462 5.86035H3.41026C3.70462 5.86035 3.94872 6.08175 3.94872 6.34872C3.94872 6.6157 3.70462 6.8371 3.41026 6.8371Z" fill="#F3F2F2"/>
              <path d="M13.4615 6.8371H10.5897C10.2954 6.8371 10.0513 6.6157 10.0513 6.34872C10.0513 6.08175 10.2954 5.86035 10.5897 5.86035H13.4615C13.7559 5.86035 14 6.08175 14 6.34872C14 6.6157 13.7559 6.8371 13.4615 6.8371Z" fill="#F3F2F2"/>
              <path d="M8.43565 8.13934H5.56385C5.26949 8.13934 5.02539 7.91795 5.02539 7.65097C5.02539 7.38399 5.26949 7.1626 5.56385 7.1626H8.43565C8.73001 7.1626 8.97411 7.38399 8.97411 7.65097C8.97411 7.91795 8.73001 8.13934 8.43565 8.13934Z" fill="#F3F2F2"/>
            </svg>
            Advance Search
          </p>
        </div>
      </div>
      
      <!--====  End of search-bar  ====-->


      <script>
      // To open "Advance Search" == start!
      const AdvanceSearch = document.querySelectorAll(".advance-search-button");
      const SearchBar = document.getElementById("search-bar");
      const AdvanceSearchBody = document.querySelector(".advance-search-body");
      const iconRed = document.querySelectorAll(".advance-search-icon-red");
      const iconWhite = document.querySelectorAll(".advance-search-icon-white");
      const searchButton = document.getElementById("search-icon");

      AdvanceSearch.forEach((button, index) => {
        button.addEventListener('click', () => {
          SearchBar.classList.toggle('active');
          if (window.innerWidth > 768) {
            if (SearchBar.classList.contains('active')) {
              AdvanceSearchBody.style.maxHeight = "1000px";
              button.style.position = "absolute";
              button.style.top = "-60px";
              button.style.right = "44px";
              button.style.color = "white";

              iconRed[index].style.display = "none";
              iconWhite[index].style.display = "inline";
            } else {
              AdvanceSearchBody.style.maxHeight = "0";
              button.style.position = "unset";
              iconRed[index].style.display = "inline";
              iconWhite[index].style.display = "none";
              button.style.color = "#A81913";
            }
          } else {
            if (SearchBar.classList.contains('active')) {
              AdvanceSearchBody.style.maxHeight = "1000px";
              button.style.top = "0";
              button.style.left = "0";
              button.style.color = "white";
              button.style.width = "fit-content";

              iconRed[index].style.display = "none";
              iconWhite[index].style.display = "inline";
              searchButton.classList.add('active');
            } else {
              AdvanceSearchBody.style.maxHeight = "0";
              iconRed[index].style.display = "none";
              iconWhite[index].style.display = "inline";
              button.style.color = "#fff";
              searchButton.classList.remove('active');
            }
          }
        });
      });
      // To open "Advance Search"  == end!



      // For dropdowns (in "Advance Search") == start!
      const dropdownButtons = document.querySelectorAll(".dropdown-toggle");
      const dropdownMenus = document.querySelectorAll(".advance-dropdown-menu");

      dropdownButtons.forEach((button, index) => {
        button.addEventListener("click", function (event) {
          event.preventDefault();
          dropdownMenus[index].classList.toggle("active");
        });
      });

      document.addEventListener("click", function (event) {
        dropdownButtons.forEach((button, index) => {
          if (!button.contains(event.target) && !dropdownMenus[index].contains(event.target)) {
            dropdownMenus[index].classList.remove("active");
          }
        });
      });
      // For dropdowns (in "Advance Search") == end!
      
      function selectPropertyType(val)
      {
          
      }

      function selectPrices(alue)
      {

      }

      function buildTypeHandle()
      {
        var element = document.querySelectorAll("#advance-dropdown-menu-build li")
        console.log(element)
        element.forEach(myFunc);
      }

      function myFunc(item)
        {
          item.classList.add("mystyle");
        
        }

     function revillBuild()
     {
      var element = document.querySelectorAll("#advance-dropdown-menu-build li")
        console.log(element)
        element.forEach(indexed)

     }
      
     function indexed(val)
     {
      val.classList.add("mystyle2");
      val.classList.remove("mystyle");
     }

     function nnn()
     {
      alert()
     }

     function reload_page()
     {
      location.reload();
     }
    </script>