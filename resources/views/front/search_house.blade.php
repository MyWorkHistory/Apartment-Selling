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
            <select id="nsima_property_type2" onchange="fastsearch(this.value)" class="dropdown-content select2" style="appearance: none;background-color:#ccc; color:#ccc">
                <option class="dropdown-item" value="0">Fast Search</option>
                <option class="dropdown-item" value="latest-properties-for-sale"><a href="javascript:void(0)">Latest Property Listings</a></option>

                <optgroup label="Apartment for sale">
                <option class="dropdown-item" value="latest-apartments-for-sale"><a href="">Latest Apartment For Sale</a></option>
                <option class="dropdown-item" value="new-apartments-for-sale"><a href="javascript:void(0)">New apartments for sale</a></option>
                <option class="dropdown-item" value="apartments-for-resale"><a href="javascript:void(0)">Apartments for resale</a></option>
               </optgroup>

               <optgroup label="House for sale" style="color:red !important">
               <option class="dropdown-item" value="latest-houses-for-sale"><a href="javascript:void(0)">Latest houses for sale</a></option>
               <option class="dropdown-item" value="houses-in-veliko-tarnovo-town"><a href="javascript:void(0)">Houses in veliko tarnovo town</a></option>
               <option class="dropdown-item" value="traditional-houses-for-sale"><a href="javascript:void(0)">Traditional-houses-for-sale</a></option>
               <option class="dropdown-item" value="luxury-houses-for-sale"><a href="javascript:void(0)">Luxury houses for sale</a></option>
               <option class="dropdown-item" value="discounted-houses-for-sale"><a href="javascript:void(0)">Discounted-houses for sale</a></option>
               <option class="dropdown-item" value="new-houses-for-sale"><a href="javascript:void(0)">New houses for sale</a></option>
               <option class="dropdown-item" value="houses-for-sale-with-pool"><a href="javascript:void(0)">houses-for-sale-with-pool</a></option>
               <option class="dropdown-item" value="latest-villas-in-bulgaria"><a href="javascript:void(0)">Latest villas in bulgaria</a></option>
               <option class="dropdown-item" value="cheap-houses"><a href="javascript:void(0)">Houses under 20k</a></option>
               <option class="dropdown-item" value="cheap-houses-for-sale"><a href="javascript:void(0)">Very Cheap houses</a></option>
               </optgroup> 

               
               <option class="dropdown-item" value="latest-town-properties-for-sale"><a href="javascript:void(0)">latest town properties for sale</a></option>

               <optgroup label="Commercial Property">
               <option class="dropdown-item" value="industrial-property-for-sale"><a href="javascript:void(0)">Industrial property for sale</a></option>
               <option class="dropdown-item" value="latest-commercial-property-for-sale"><a href="javascript:void(0)">Latest commercial property for sale</a></option>
               <option class="dropdown-item" value="hotels-for-sale"><a href="javascript:void(0)">Hotels for sale</a></option>
              </optgroup> 

              <option class="dropdown-item" value="latest-building-plots-for-sale"><a href="javascript:void(0)">Latest building plots for sale</a></option>
              <option class="dropdown-item" value="latest-hotels-for-sale"><a href="javascript:void(0)">Latest hotels for sale</a></option>

              <option class="dropdown-item" value="bulgarian-character-properties"><a href="javascript:void(0)">Bulgarian character properties</a></option>
              <option class="dropdown-item" value="business-opportunities"><a href="javascript:void(0)">Business opportunities</a></option>
              <option class="dropdown-item" value="latest-property-dryanovo"><a href="javascript:void(0)">latest property dryanovo</a></option>
              <option class="dropdown-item" value="latest-property-elena"><a href="javascript:void(0)">latest-property-elena</a></option>
              <option class="dropdown-item" value="latest-property-gorna-oryahovitsa"><a href="javascript:void(0)">latest-property-gorna-oryahovitsa</a></option>
              <option class="dropdown-item" value="latest-property-lyaskovets"><a href="javascript:void(0)">latest property lyaskovets</a></option>
              <option class="dropdown-item" value="latest-property-pavlikeni"><a href="javascript:void(0)">latest property pavlikeni</a></option>
              <option class="dropdown-item" value="latest-property-polski-trambesh"><a href="javascript:void(0)">latest property polski trambesh</a></option>
              <option class="dropdown-item" value="latest-property-strazhitsa"><a href="javascript:void(0)">latest property strazhitsa</a></option>
              <option class="dropdown-item" value="latest-property-veliko-tarnovo"><a href="javascript:void(0)">latest-property veliko tarnovo</a></option>
               

              <optgroup label="Other Municipalities">
               <option class="dropdown-item" value="latest-property-gabrovo-town"><a href="javascript:void(0)">gabrovo</a></option>
               <option class="dropdown-item" value="latest-property-sevlievo"><a href="javascript:void(0)">sevlievo</a></option>
               <option class="dropdown-item" value="latest-property-suhindol"><a href="javascript:void(0)">suhindol</a></option>
               <option class="dropdown-item" value="latest-property-svishtov"><a href="javascript:void(0)">svishtov</a></option>
               <option class="dropdown-item" value="latest-property-tryavna"><a href="javascript:void(0)">tryavna</a></option>
               <option class="dropdown-item" value="latest-property-zlataritsa"><a href="javascript:void(0)">zlataritsa</a></option>
              </optgroup> 

              <option class="dropdown-item" value="propertyunder5k"><a href="javascript:void(0)">Property under 5K</a></option>
              <option class="dropdown-item" value="propertyunder10k"><a href="javascript:void(0)">Property under 10K</a></option>
              <option class="dropdown-item" value="propertyunder20k"><a href="javascript:void(0)">Property under 20K</a></option>
              <option class="dropdown-item" value="propertyunder50k"><a href="javascript:void(0)">Property under 50K</a></option>
              <option class="dropdown-item" value="latest-properties-for-sale-il"><a href="javascript:void(0)">ברוכים הבאים</a></option>
             

              
              </select> 
              <svg class="dropdown-arrow" width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.58521 5.91067C7.23581 6.16283 6.76419 6.16283 6.41479 5.91067L0.848983 1.8939C0.0621447 1.32604 0.46384 0.083009 1.43419 0.0830089L12.5658 0.0830081C13.5362 0.0830081 13.9379 1.32604 13.151 1.89389L7.58521 5.91067Z" fill="#AAAAAA"/>
                </svg>
            </div>

            <div>
              <input class="search-all" type="text" placeholder="Veliko Tarnovo, Bulgaria etc.">
            </div>

            <div class="search-bar-dropdown">
              <select  onchange="changeArea(this)"  id="nsima_property_type" class="dropdown-content select2" style="appearance: none;background-color:#ccc; color:#ccc" onchange="selectPropertyType(this.value)">
              <?php if(isset($realval)){?>
                <option class="dropdown-item" value='{{$realval}}'>{{ $textt}}</option>
               <?php }?>
             
              <?php if(isset($_SESSION["nsima_property_type"])){?>
                <option class="dropdown-item" value='{{$_SESSION["nsima_property_type_value"]}}'>{{ $_SESSION["nsima_property_type"]}}</option>
               <?php }?> 
              
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
                  <input id="nsima_bedrooms_min" type="number"  class="newformtwo" <?php if(isset( $_SESSION["nsima_bedrooms_min_value"] )) {?>  value='<?php echo  $_SESSION["nsima_bedrooms_min_value"] ; }   ?>' >
                </div>

                <div>
                  <label class="label">Bathrooms (min)</label>
                  <input id="nsima_bathrooms_min" type="number" class="newformtwo" <?php if(isset( $_SESSION["nsima_bathrooms_min_value"] )) {?>  value='<?php echo  $_SESSION["nsima_bathrooms_min_value"] ; }   ?>'  >
                </div>

                <div>
                  <label class="label">Floor</label>
                  <input id="nsima_Floorplan" type="number"  class="newformtwo" <?php if(isset( $_SESSION["nsima_Floorplan"] )) {?>  value='<?php echo  $_SESSION["nsima_Floorplan"] ; }   ?>' >
                </div>


               <div style="display: flex; margin-top: 3px;">
                  <label class="label">Municipality</label>
                  <div class="advance-search-dropdown">
                    <select id="nsima_location_id" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:none; outline:0px;">

                    <?php if(isset( $_SESSION["nsima_location_id_value"] )) {?>
                      <option class="dropdown-item" value='<?php echo $_SESSION["nsima_location_id_value"]  ?>' ><?php echo $_SESSION["nsima_location"]  ?></option>
                    <?php } ?>  
                      <option class="dropdown-item" value="0" ></option>
                      @foreach($location as $one)
                      <option class="dropdown-item" value="{{$one->id}}" >{{$one->location_name_en}}</option>
                      @endforeach
                    </select>  
                  </div>
                </div>
                
               
                

                
              </div>
              <div class="advance-search-prices">
                <div>
                  <label>Price (EUR) from</label>
                  <input id="nsima_price_from" type="number" class="newform"  <?php if(isset( $_SESSION["nsima_price_from"] )) {?>  value='<?php echo  $_SESSION["nsima_price_from"] ; }   ?>'>
                  <label style="margin-left: 4px;">to</label>
                  <input id="nsima_price_to" type="number" class="newform" <?php if(isset( $_SESSION["nsima_price_to"] )) {?>  value='<?php echo  $_SESSION["nsima_price_to"] ; }   ?>'>
                </div>

                <div>
                  <label>Living Area Sq M from</label>
                  <input  id="nsima_sqm_from" type="number" class="newform" <?php if(isset( $_SESSION["nsima_sqm_from"] )) {?>  value='<?php echo  $_SESSION["nsima_sqm_from"] ; }   ?>'>
                  <label style="margin-left: 4px;">to</label>
                  <input id="nsima_sqm_to" type="number" class="newform"  <?php if(isset( $_SESSION["nsima_sqm_to"] )) {?>  value='<?php echo  $_SESSION["nsima_sqm_to"] ; }   ?>'>
                </div>

                <div>
                  <label>Plot Size Sq M from</label>
                  <input  id="nsima_LotSize_from" type="number" class="newform" <?php if(isset( $_SESSION["nsima_LotSize_from"] )) {?>  value='<?php echo  $_SESSION["nsima_LotSize_from"] ; }   ?>'>
                  <label style="margin-left: 4px;">to</label>
                  <input id="nsima_LotSize_to" type="number" class="newform"  <?php if(isset( $_SESSION["nsima_LotSize_to"] )) {?>  value='<?php echo  $_SESSION["nsima_LotSize_to"] ; }   ?>'>
                </div>

                <div class="status-div">
              
                  <div class="advance-search-dropdown">
                  <label class="status-label">Status</label>
                    <select id="nsima_status" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:1px solid #d9d9d9; outline:0px;">
                    <?php if(isset( $_SESSION["nsima_status_value"] )) {?>
                      <option class="dropdown-item" value='<?php echo $_SESSION["nsima_status_value"]  ?>' ><?php echo $_SESSION["nsima_status_text"]  ?></option>
                    <?php } ?>  
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


            <div class="advance-search-checkboxes" style="border:none">
              <div class="first-checkboxes">
              <label class="checkbox-label">Town or Village</label>
              <input class="keywords-input" style="width:200px; height:31px; " type="text" id="townorvillage">
              </div> 


              <div class="first-checkboxes">
              <label class="checkbox-label">Distance to Veliko Tarnovo</label>
              <div class="advance-search-dropdown">
                    <select id="" class="lloc" style="width:200px; height:31px; background:#d9d9d9; border-radius:5px; border:1px solid #d9d9d9; outline:0px;">
                   
                      <option class="dropdown-item" value="0" >Any distance &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </option>
                      <option class="dropdown-item" value="5" >< 5KM</option>
                      <option class="dropdown-item" value="10" >< 10KM</option>
                      <option class="dropdown-item" value="121" > < 15KM</option>
                      <option class="dropdown-item" value="122" >< 20KM</option>
                      <option class="dropdown-item" value="123" >< 25KM</option>
                      <option class="dropdown-item" value="124" >< 30KM</option>
                      <option class="dropdown-item" value="125" >< 35KM</option>
                      <option class="dropdown-item" value="124" >< 40KM</option>
                      <option class="dropdown-item" value="125" >< 45KM</option>
                      <option class="dropdown-item" value="124" >< 50KM</option>
                   
                    </select>  
                  </div>
              </div> 


            </div>   

            <div class="advance-search-checkboxes" >
              <div class="first-checkboxes">
                <div>

                 <div>
                    <input  id="nsima_LuxuryProperty" type="checkbox" id="nsima_LuxuryProperty" class="custom-checkbox_new " <?php if(isset($_SESSION["nsima_LuxuryProperty"]))  { echo "checked"; } ?> >
                    <label class="checkbox-label">Luxury Property</label>
                  </div>

                  <div>
                    <input type="checkbox" id="nsima_aircondtioning"   class="custom-checkbox_new" <?php if(isset($_SESSION["nsima_aircondtioning"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Air conditioning</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_MainFloorBedroom" <?php if(isset($_SESSION["nsima_MainFloorBedroom"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">MainFloor Bedroom</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_Outbuildings"  <?php if(isset($_SESSION["nsima_Outbuildings"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Out buildings</label>
                  </div>


                  <div>
                    <input type="checkbox"  id="nsima_Furnished" class="custom-checkbox_new" <?php if(isset($_SESSION["nsima_Furnished"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Furnished</label>
                  </div>
  
                
              </div>




              <div class="second-checkboxes">
                <div>

                      
                <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_traditional"  <?php if(isset($_SESSION["nsima_traditional"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Traditional Style</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_EnSuite" <?php if(isset($_SESSION["nsima_EnSuite"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">EnSuite</label>
                  </div>


                  <div>
                    <input type="checkbox" id="nsima_Balcony"  class="custom-checkbox_new" <?php if(isset($_SESSION["nsima_Balcony"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Balcony</label>
                  </div>
                


                <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_SwimmingPool"  <?php if(isset($_SESSION["nsima_SwimmingPool"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Swimming Pool</label>
                  </div>


                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_Water" <?php if(isset($_SESSION["nsima_Water"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Water</label>
                  </div>
      
                </div>
              </div>  




              
              <div>
                
                  <div>
                    <input  id="nsima_Basement" type="checkbox" id="nsima_Indoor_Stairs" class="custom-checkbox_new " <?php if(isset($_SESSION["nsima_Indoor_Stairs"]))  { echo "checked"; } ?> >
                    <label class="checkbox-label">Indoor Stairs</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_DisabilityFeatures" <?php if(isset($_SESSION["nsima_DisabilityFeatures"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Disability Features</label>
                  </div>

                  <div>
                    <input  id="nsima_Basement" type="checkbox" id="nsima_Basement" class="custom-checkbox_new " <?php if(isset($_SESSION["nsima_Basement"]))  { echo "checked"; } ?> >
                    <label class="checkbox-label">Basement</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_Garage" <?php if(isset($_SESSION["nsima_Garage"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Garage</label>
                  </div>


                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_CentralHeating" <?php if(isset($_SESSION["nsima_Electricity"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Electricity</label>
                  </div>
                  

                  </div>     
                </div>




  
                <div class="second-checkboxes">
                <div>

                <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_CentralHeating" <?php if(isset($_SESSION["nsima_CentralHeating"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Central heating</label>
                  </div>


                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_MainFloorBathroom" <?php if(isset($_SESSION["nsima_MainFloorBathroom"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">MainFloor Bathroom</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_EnclosedGarden" <?php if(isset($_SESSION["nsima_EnclosedGarden"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">Enclosed Garden</label>
                  </div>

                  <div>
                    <input type="checkbox" class="custom-checkbox_new" id="nsima_OffRoadParking" <?php if(isset($_SESSION["nsima_OffRoadParking"]))  { echo "checked"; } ?>>
                    <label class="checkbox-label">OffRoad parking</label>
                  </div>


                  <div>
                    <input type="checkbox" id="nsima_SecurityFeatures" class="custom-checkbox_new" <?php if(isset($_SESSION["nsima_SecurityFeatures"]))  { echo "checked"; } ?>   >
                    <label class="checkbox-label">Security features</label>
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