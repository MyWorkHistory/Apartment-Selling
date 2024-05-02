
function search_whole(el)
{

  

    var url = site + "/do_advanced_search";
    var xml = new XMLHttpRequest();
    var t = document.getElementById('t_').value;
    var xml = new XMLHttpRequest();
    xml.open("POST", url, true);
    xml.setRequestHeader("X-CSRF-TOKEN", t);


    if(document.getElementById("nsima_property_type") !== null ){ var nsima_property_type = document.getElementById("nsima_property_type").value; }
    if(document.getElementById("nsima_price_range") !== null ){ var nsima_price_range = document.getElementById("nsima_price_range").value; }
    if(document.getElementById("nsima_bathrooms_min") !== null ){ var nsima_bathrooms_min = document.getElementById("nsima_bathrooms_min").value; }
    if(document.getElementById("nsima_bedrooms_min") !== null ){ var nsima_bedrooms_min = document.getElementById("nsima_bedrooms_min").value; }
    if(document.getElementById("nsima_location_id") !== null ){ var nsima_location_id = document.getElementById("nsima_location_id").value; }
    if(document.getElementById("nsima_build_type") !== null ){ var nsima_build_type = document.getElementById("nsima_build_type").value; }
    if(document.getElementById("nsima_price_from") !== null ){ var nsima_price_from = document.getElementById("nsima_price_from").value; }
    if(document.getElementById("nsima_price_to") !== null ){ var nsima_price_to = document.getElementById("nsima_price_to").value; }
    if(document.getElementById("nsima_sqm_from") !== null ){ var nsima_sqm_from = document.getElementById("nsima_sqm_from").value; }
    if(document.getElementById("nsima_sqm_to") !== null ){ var nsima_sqm_to = document.getElementById("nsima_sqm_to").value; }
    if(document.getElementById("nsima_status") !== null ){ var nsima_status = document.getElementById("nsima_status").value; }
    if(document.getElementById("nsima_Basement") !== null ){ var nsima_Basement = document.getElementById("nsima_Basement").checked; }
    if(document.getElementById("nsima_SecurityFeatures") !== null ){ var nsima_SecurityFeatures = document.getElementById("nsima_SecurityFeatures").checked; }
    if(document.getElementById("nsima_Balcony") !== null ){ var nsima_Balcony = document.getElementById("nsima_Balcony").checked; }
    if(document.getElementById("nsima_aircondtioning") !== null ){  var nsima_aircondtioning = document.getElementById("nsima_aircondtioning").checked; }
    if(document.getElementById("nsima_Furnished") !== null ){ var nsima_Furnished = document.getElementById("nsima_Furnished").checked; }
    if(document.getElementById("nsima_CentralHeating") !== null ){ var nsima_CentralHeating = document.getElementById("nsima_CentralHeating").checked; }
    if(document.getElementById("nsima_Garage") !== null ){ var nsima_Garage = document.getElementById("nsima_Garage").checked; }
    if(document.getElementById("nsima_EnSuite") !== null ){ var nsima_EnSuite = document.getElementById("nsima_EnSuite").checked; }
    if(document.getElementById("nsima_Lift") !== null ){ var nsima_Lift = document.getElementById("nsima_Lift").checked; }
    if(document.getElementById("nsima_OffRoadParking") !== null ){ var nsima_OffRoadParking = document.getElementById("nsima_OffRoadParking").checked; }
    if(document.getElementById("nsima_property_id") !== null ){ var nsima_property_id = document.getElementById("nsima_property_id").value; }
    if(document.getElementById("nsima_keywords") !== null ){ var nsima_keywords = document.getElementById("nsima_keywords").value; }
    if(document.getElementById("nsima_EnclosedGarden") !== null ){ var nsima_EnclosedGarden = document.getElementById("nsima_EnclosedGarden").value; } 
    if(document.getElementById("nsima_Outbuildings") !== null ){  var nsima_Outbuildings = document.getElementById("nsima_Outbuildings").value; }
    if(document.getElementById("nsima_Water") !== null ){ var nsima_Water = document.getElementById("nsima_Water").value; }
    if(document.getElementById("nsima_Electricity") !== null ){ var nsima_Electricity = document.getElementById("nsima_Electricity").value; }
    if(document.getElementById("nsima_LuxuryProperty") !== null ){ var nsima_LuxuryProperty = document.getElementById("nsima_LuxuryProperty").value; }
    if(document.getElementById("nsima_Indoor_Stairs") !== null ){ var nsima_Indoor_Stairs = document.getElementById("nsima_Indoor_Stairs").value; }
    if(document.getElementById("nsima_MainFloorBathroom") !== null ){  var nsima_MainFloorBathroom = document.getElementById("nsima_MainFloorBathroom").value; }
    if(document.getElementById("nsima_MainFloorBedroom") !== null ){ var nsima_MainFloorBedroom = document.getElementById("nsima_MainFloorBedroom").value; }
    if(document.getElementById("nsima_traditional") !== null ){ var nsima_traditional = document.getElementById("nsima_traditional").value; }
    if(document.getElementById("nsima_SwimmingPool") !== null ){ var nsima_SwimmingPool = document.getElementById("nsima_SwimmingPool").value; }
    if(document.getElementById("nsima_Floorplan") !== null ){ var nsima_Floorplan = document.getElementById("nsima_Floorplan").value; }
    if(document.getElementById("nsima_LotSize_from") !== null ){ var nsima_LotSize_from = document.getElementById("nsima_LotSize_from").value; }
    if(document.getElementById("nsima_LotSize_to") !== null ){ var nsima_LotSize_to = document.getElementById("nsima_LotSize_to").value; }
    if(document.getElementById("nsima_DiningRoom") !== null ){ var nsima_DiningRoom = document.getElementById("nsima_DiningRoom").value; }
    

    


    var nsima_orderby = "iddesc";

    var orderby =  document.getElementsByName("orderby");
    console.log(orderby);
    for(i =0; i< orderby.length; i++)
    {
        if(orderby[i].checked == true)
        {
            nsima_orderby = orderby[i].value;
            
        }
    }




    
    var fd = new FormData();

    if(document.getElementById("nsima_property_type") !== null ){  fd.append("nsima_property_type", nsima_property_type); }
    if(document.getElementById("nsima_price_range") !== null ){  fd.append("nsima_price_range",nsima_price_range); }
    if(document.getElementById("nsima_bathrooms_min") !== null ){  fd.append("nsima_bathrooms_min", nsima_bathrooms_min); }
    if(document.getElementById("nsima_bedrooms_min") !== null ){  fd.append("nsima_bedrooms_min",nsima_bedrooms_min); }
    if(document.getElementById("nsima_location_id") !== null ){  fd.append("nsima_location_id",nsima_location_id); }
    if(document.getElementById("nsima_build_type") !== null ){  fd.append("nsima_build_type",nsima_build_type); }
    if(document.getElementById("nsima_price_from") !== null ){  fd.append("nsima_price_from",nsima_price_from); }
    if(document.getElementById("nsima_price_to") !== null ){  fd.append("nsima_price_to",nsima_price_to); }
    if(document.getElementById("nsima_sqm_from") !== null ){  fd.append("nsima_sqm_from",nsima_sqm_from); }
    if(document.getElementById("nsima_sqm_to") !== null ){  fd.append("nsima_sqm_to",nsima_sqm_to); }
    if(document.getElementById("nsima_status") !== null ){  fd.append("nsima_status",nsima_status); }
    if(document.getElementById("nsima_Basement") !== null ){  fd.append("nsima_Basement",nsima_Basement); }
    if(document.getElementById("nsima_SecurityFeatures") !== null ){  fd.append("nsima_SecurityFeatures",nsima_SecurityFeatures); }
    if(document.getElementById("nsima_Balcony") !== null ){  fd.append("nsima_Balcony",nsima_Balcony); }
    if(document.getElementById("nsima_aircondtioning") !== null ){  fd.append("nsima_aircondtioning",nsima_aircondtioning); }
    if(document.getElementById("nsima_Furnished") !== null ){  fd.append("nsima_Furnished",nsima_Furnished); }
    if(document.getElementById("nsima_CentralHeating") !== null ){  fd.append("nsima_CentralHeating",nsima_CentralHeating); }
    if(document.getElementById("nsima_Garage") !== null ){   fd.append("nsima_Garage",nsima_Garage); }
    if(document.getElementById(",nsima_EnSuite") !== null ){   fd.append("nsima_EnSuite",nsima_EnSuite); }
    if(document.getElementById("nsima_Lift") !== null ){  fd.append("nsima_Lift",nsima_Lift); }
    if(document.getElementById("nsima_property_id") !== null ){  fd.append("nsima_property_id",nsima_property_id); }
    if(document.getElementById("nsima_OffRoadParking") !== null ){  fd.append("nsima_OffRoadParking",nsima_OffRoadParking); }
    if(document.getElementById("nsima_keywords") !== null ){  fd.append("nsima_keywords",nsima_keywords); }
     fd.append("nsima_orderby",nsima_orderby); 

     if(document.getElementById("nsima_EnclosedGarden") !== null ){  fd.append("nsima_EnclosedGarden", nsima_EnclosedGarden); }
     if(document.getElementById("nsima_Outbuildings") !== null ){  fd.append("nsima_Outbuildings",nsima_Outbuildings); }
     if(document.getElementById("nsima_Water") !== null ){  fd.append("nsima_Water", nsima_Water); }
     if(document.getElementById("nsima_LuxuryProperty") !== null ){  fd.append("nsima_LuxuryProperty",nsima_LuxuryProperty); }
     if(document.getElementById("nsima_Indoor_Stairs") !== null ){  fd.append("nsima_Indoor_Stairs",nsima_Indoor_Stairs); }
     if(document.getElementById("nsima_MainFloorBathroom") !== null ){  fd.append("nsima_MainFloorBathroom",nsima_MainFloorBathroom); }
     if(document.getElementById("nsima_MainFloorBedroom") !== null ){  fd.append("nsima_MainFloorBedroom",nsima_MainFloorBedroom); }
     if(document.getElementById("nsima_traditional") !== null ){  fd.append("nsima_traditional",nsima_traditional); }
     if(document.getElementById("nsima_SwimmingPool") !== null ){  fd.append("nsima_SwimmingPool",nsima_SwimmingPool); }
     if(document.getElementById("nsima_Floorplan") !== null ){  fd.append("nsima_Floorplan",nsima_Floorplan); }
     if(document.getElementById("nsima_LotSize_from") !== null ){  fd.append("nsima_LotSize_from",nsima_LotSize_from); }
     if(document.getElementById("nsima_LotSize_to") !== null ){  fd.append("nsima_LotSize_to",nsima_LotSize_to); }
     if(document.getElementById("nsima_DiningRoom") !== null ){  fd.append("nsima_DiningRoom",nsima_DiningRoom); }
    

    //alert(nsima_orderby);

    //doXHREvents(xml);
    xml.onreadystatechange = function() {
        if (xml.status == 419) {
            //takeBackToLogin();
            location.reload();
        }
        if (xml.readyState == 4 && xml.status == 200) 
        {
            if(xml.responseText == "none")
            {
                getPosition(el)
                //document.getElementById("responses").style.display = "block";
                setTimeout(function(){
                    document.getElementById("responses").style.display = "none";
                    document.getElementById("errorbanner").style.display = "none";
                },3000);
                return;
            }
           window.location = site + "/advanced-search-results/page/" + 1;
        }
    }
    xml.send(fd);
   

}

function getPosition(el) {
    var xPosition = 0;
    var yPosition = 0;
   
    while (el) {
      if (el.tagName == "BODY") {
        // deal with browser quirks with body/window/document and page scroll
        var xScrollPos = el.scrollLeft || document.documentElement.scrollLeft;
        var yScrollPos = el.scrollTop || document.documentElement.scrollTop;
   
        xPosition += (el.offsetLeft - xScrollPos + el.clientLeft);
        yPosition += (el.offsetTop - yScrollPos + el.clientTop);
      } else {
        xPosition += (el.offsetLeft - el.scrollLeft + el.clientLeft);
        yPosition += (el.offsetTop - el.scrollTop + el.clientTop);
      }
   
      el = el.offsetParent;
    }
      document.getElementById("errorbanner").style.top = yPosition + "px";
     document.getElementById("errorbanner").style.display = "block";
  }


  
  function taketo(valu)
{
  
  window.location.href = site + "/en/fast-search-results/" + valu + "/page-1";
  
}