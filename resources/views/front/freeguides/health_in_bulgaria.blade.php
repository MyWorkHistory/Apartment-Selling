@include("front.header")

  
<div class="dp-body-area">
      
      <!--============================
      =    About Veliko section     =
      =============================-->
   

      <section class="veliko-section">
        <div class="container about-veliko-section">
          <div class="about-veliko-titles">
          <h2><?php echo $data->top_title ?></h2>
              <?php $str = str_replace("<p>", "<h3>", $data->top_text) ;  $str = str_replace("</p>", "</h3>", $str) ;  echo $str ?> 
          </div>
          <div class="about-veliko-body">


          

         
          <div>
          <p><strong>Looking after your Health in Bulgaria</strong><br> Questions that have been asked many times, particularly by the more senior (over 50's) house-hunters who have come to Veliko Tarnovo looking for property for sale in Bulgaria, is "what happens if I fall ill? Can I get the treatment I need in Bulgaria? How much will it cost?" etc.</p>
          </div>   


            <div>
            <p><strong> Visitors</strong><br>Since 2007 when Bulgaria joined the EU, all EU citizens who are suddenly taken ill or have an accident during a visit to Bulgaria, are entitled to free or reduced-cost treatment, in most cases on production of a valid European Health Insurance Card (EHIC)and provided their stay in the country does not exceed 90 days.<br>
            
             </p>
             <img src="{{asset('assets/images/staticpages/new/health1.jpg')}}" alt="image">
            </div>


            <div>
           <p> To access treatment, you will need your passport and EHIC card. Medicines, however, do have to be paid for. EHIC cards last between 3 and 5 years so please check the expiry date on your card. All members of your family will have to have their own card.

If you don't qualify for the free or reduced cost health treatment, you must choose between a private international health insurance policy and holiday/travel insurance. <br><br>
Most countries outside of the EU don't have reciprocal health agreements, so if you aren't covered by Bulgarian social security you must have private health insurance or a holiday/travel policy that covers you in Bulgaria.</p>
            </div>  

            <div>
            <img src="{{asset('assets/images/staticpages/new/health2.jpg')}}" alt="image">
            <p>ResidentsIf you have bought a property in Bulgaria, and are planning to move here permanently, you should ensure that you and your family have full health insurance during the interval between leaving your last country of residence and obtaining health insurance in Bulgaria.
One way to insure yourself and your family for this interim period is to take out a holiday/travel insurance policy. If you already have private health insurance, it's better to extend your present health insurance policy to provide international cover (which is usually possible) rather than to take out a new policy. This is particularly important if you have an existing health problem that won't be covered by a new policy.
             </p>
            </div>

           

            <div>
            <p>If you are going to take up residence in Bulgaria and will be working and contributing to Bulgarian social security (called 'NOI'), you and your family will be entitled to free or subsidised medical and dental treatment from the Bulgarian state system. Once you have a received your Residence Permit you will have to pay contributions through the NOI to the Bulgarian state health system (currently approximately EURO 8 per month). This entitles you to free treatment from a GP, free referrals to a specialist, and medicines at reduced prices or free.</p>
            <img src="{{asset('assets/images/staticpages/new/health3.jpg')}}" alt="image">
            </div>  


            <div> 
              <p>It's recommended that you take out private health insurance even if you're a resident, as the standard of private clinics and hospitals tends to be much higher than that of the state system and are comparatively inexpensive when compared to private clinics elsewhere in Europe. You should also check your entitlements under the Bulgarian state health scheme and when such cover might become effective.</p>
            </div> 
            
            
            <div>
            <img src="{{asset('assets/images/staticpages/new/health3.jpg')}}" alt="image">
              <p> Residents who don't contribute to social security (e.g. retirees) and aren't covered by a reciprocal agreement should take out a private international health insurance policy. International policies offer varying levels of cover, including repatriation in the case of serious illness.

             <br><br> For more information and to apply for your EHIC follow this link: EHIC
             </p>
            </div>  



            


          
           
            

           

        <div>
          <p><strong>Dislaimer: </strong><br>  Yantra Homes Ltd. produced this information solely as a service to its clients and in doing so has taken all reasonable care to ensure the accuracy of the content. However, we cannot guarantee this and should not be held responsible for any errors or omissions to the information given. Nothing on this website shall be considered to be financial advice. </p>
        </div>  

          
            
            
          </div>
        </div>
      </section>


      <!--==== End of About Veliko section  ====-->





@include("front.footer")

    