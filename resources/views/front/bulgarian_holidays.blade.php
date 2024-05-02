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
            </p>
          </div>
          <div class="about-veliko-body">


          

            <div>
              <p><strong>Easter</strong><br>As an Orthodox country, Bulgarians observe Easter as a highly religious holiday. Bulgarian Easter eggs are primarily red in colour. Red Easter eggs decorated with religious symbols may be cracked against each other to see who will have the most luck during the following year.</p>
            </div>


            <div>
            <img src="{{asset('assets/images/staticpages/history6.jpg')}}" alt=""> 
            <p><strong> Christmas </strong>  If you have bought a property in Bulgaria and are at home during Christmas festivities, on Christmas Eve you may have the pleasure of entertaining the Koledari. Koledari are Christmas carolers who traditionally visit the houses of their relatives, neighbours and other villagers after midnight and perform. The carolers are usually young men from the village dressed in traditional attire and brandishing long sticks called Survachka decorated with popcorn, coloured threads, dried fruits and coins. During their songs they gently beat their audience with the stick wishing them health, wealth and happiness and are usually rewarded with food.
            </p>
            </div>


            <div>
            <p><strong>Baba Marta</strong>  <br>
            Should you visit Bulgaria in late February, you will find many street stalls selling red and white amulets, bracelets or dolls called martenitsa, which are worn on March 1st to ward off Baba Marta or Grandmother March. Traditionally they are only taken off when the wearer sees the first sign of spring which is usually a tree in blossom or they sight their first Stork of the year returning from migration. Usually the martenitsa will be hung on a tree to encourage health, wealth, happiness and love.</p>
            <img src="{{asset('assets/images/staticpages/history4.jpg')}}" alt="Holiday Picture"> 
           </div>

           <div>
           <img src="{{asset('assets/images/staticpages/history5.jpg')}}" alt="Holiday Picture"> 
            <p><strong> Kukeri </strong><br>
            Believed to have its roots in pagan times, the Kukeri ritual is performed between Christmas and Lent in towns and villages throughout Bulgaria. During Kukeri rituals men robed entirely in animal skins, usually that of a goat or sheep decorated with beads and feathers, cover their heads with elaborate masks, horns and large bells and perform folk dances in large groups through the streets to scare off evil spirits and promote fertility and fruitfulness.</p>
          </div> 

          <div>
           <p><strong> Name Days </strong> <br>Since early Christian times Bulgarians have celebrated their name days. Most Bulgarians are named after a saint so when the corresponding Saint Day arrives they celebrate with family and friends. </p>
          </div>


          <div>
          <p><strong> St Nicholas Day</strong><br>   The winter feast of St Nicholas is celebrated by Bulgarians on 6th December when traditionally a large carp and bread are eaten. St Nicholas is considered the patron saint of seamen and children and the feast is celebrated throughout Europe in various ways. </p>  
          </div>


          <div>
          <p><strong>St George's Day </strong><br>
          Perhaps the most celebrated of the name days is that of the patron saint of shepherds St. George, which takes place on 6th May when traditionally a whole lamb is cooked and enjoyed by family and friends.<br>

          If you are thinking about buying a house in Bulgaria, the country has a vast number of places of interest for you to visit, so many customs and traditions, feast days and festivals for you to enjoy and Bulgarians are happy for you to join the fun.
          <br>
          Veliko Tarnovo property specialists Yantra Homes, guarantee that we will do all we can to ensure you achieve your goals as quickly as possible, and with the minimum inconvenience. You will not be disappointed by our customer service, why not contact us today.
          </p>
          <img src="{{asset('assets/images/staticpages/salebulgaria1.jpg')}}" alt="Holiday Picture"> 
          </div>
  
 


            



           

          

           
            
          </div>
        </div>
      </section>


      <!--==== End of About Veliko section  ====-->





@include("front.footer")

    