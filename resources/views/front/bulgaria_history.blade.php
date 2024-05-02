@include("front.header")

  
<div class="dp-body-area">
      
      <!--============================
      =    About Veliko section     =
      =============================-->
   

      <section class="veliko-section">
        <div class="container about-veliko-section">
          <div class="about-veliko-titles">
            <h2><?php echo $data->top_title ?></h2>
              <?php $str = str_replace("<p>", "<h3>", $data->top_text) ;  $str = str_replace("</p>", "</h3>", $str) ; echo $str  ?> 
          </div>
          <div class="about-veliko-body">


          

            <div>
            <img src="{{asset('assets/images/staticpages/history1.jpg')}}" alt="image of a house">
              <p><strong> Pre-historic Bulgaria </strong> <br> From Neolithic times the land we currently know as Bulgaria was occupied by primitive tribes then at around 3000BC Thracians arrived and despite invasion from various warring tribes thrived and increased in number. In 29 BC that well known hero Spartacus fought off the Roman invasion but was eventually overcome and Thrace became part of the Roman Empire.</p>
            </div>


            <div>
              <p><strong> First Bulgarian Kingdom </strong> <br> When the Roman Empire eventually fell, Thrace came under the authority of Byzantium. Later Slavs and Turkic-Tartar peoples arrived from the Russian plains, the most notable being the Bulgars who, uniting with the Slavic tribes, defeated the Byzantines and formed the first Bulgarian state. During this time Bulgaria flourished and became the Slavic cultural centre. In 886 AD it was decreed by Tsar Boris 1 that Bulgaria should have its own alphabet, the Cyrillic alphabet was born. Named after a Byzantine missionary, St Cyril, who along with his brother St Methodius devised the ancient Glagolitic alphabet, thought to be a derivative of the old Greek alphabet. The Cyrillic alphabet was adopted and adapted by various Eastern European countries including Russia, Macedonia and Serbia. This is known as the First Bulgarian Kingdom. The Byzantines invaded again and once again reduced Bulgaria to an annex.</p>
            </div> 
            
            
            <div>
              <p><strong>Second Bulgaria Kingdom.</strong><br>   he Second Bulgarian Kingdom began in 1185 when a revolution led by members of the ‘Boyars’ or feudal aristocracy, namely Assen & Petar, defeated the Byzantines and power was restored to the Khans who declared Veliko Tarnovo as their capital. In 1393, unable to resist attack, Bulgaria was sacked by the Ottoman Empire, Veliko Tarnovo was destroyed and the country became known as Roumelia, a province of the Turkish Ottoman Empire.</p>
              <img src="{{asset('assets/images/staticpages/history2.jpg')}}" alt="image of a house">
            </div>

            <div>
            <img src="{{asset('assets/images/staticpages/history3.jpg')}}" alt="image of a house">
            <p> <strong>Third Bulgarian Kingdom </strong> <br>It wasn’t until the 18th Century that revolutionaries, tradesmen, artists and artisans began what is known as the National Revival and the Third Bulgarian Kingdom, building stylish houses with ornate carvings, typically in the more mountainous regions, as can be seen in the architectural reserve village of Bojentsi and right next door to our own Yantra Homes office where you will find the ‘House with the Monkey’ built by Revivalist architect and craftsman Kolio Ficheto who also built the town hall in VT and the covered bridge in Lovech.<br>
            In 1877 Russia declared war on the Ottoman Empire and liberated Bulgaria. For many years after the liberation of the Balkan states, bitter conflict ensued between the various countries with territories changing hands and new borders being formed.<br>
            <strong>Communism</strong><br>
After World War II Bulgaria became part of the Eastern Block until the end of Communism in 1989. During communist times all agricultural land was seized from its owners and turned into State farms and cooperatives run by the government. After the fall of communism, there were demands for the return of land and property. In 1992 Bulgaria passed Restitution Laws and returned the land to their former owners.
           </p>
            </div>


            <div>
              <p><strong>Present day </strong><br>
              It is interesting to note that Bulgaria still has a Royal Family. Simeon Borisov of Saxe-Coburg and Gotha. Born Tsar Simeon II in 1937, he reigned for a short period from 1943 to 1946 before going into exile until the communist era came to an end. He returned in 2001 and took up office as Prime Minister until 2005 and instigated Bulgaria’s joining of the EU. He is related to Queen Elizabeth II and other European royalty.
              <br><br>
              The current President of Bulgaria is Rosen Plevneliev, who was elected in January 2012. The Prime Minister is Boyko Borisov (GERB Party). Bulgaria is a member of the United Nations, also a member of OSCE (1992), BSEC (1992), WTO (1996), NATO (2004), and EU (2007).</p>
              <img src="{{asset('assets/images/staticpages/bulgarian-houses1.jpg')}}" alt="image of a house">
            </div>  

            <div>
              <p>Veliko Tarnovo property specialists Yantra Homes, guarantee that we will do all we can to ensure you achieve your goals as quickly as possible, and with the minimum inconvenience. You will not be disappointed by our customer service, why not contact us today.</p>
             </div>  



          

           
            
          </div>
        </div>
      </section>


      <!--==== End of About Veliko section  ====-->





@include("front.footer")

    