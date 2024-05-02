@include("front.header")


   
    <!--====  End of Nav  ====-->

    <div class="dp-body-area">

      <!--============================
      =           FAQ section            =
      =============================-->

      <section class="FAQ-section">
        <div class="container FAQ-body">
            <h4 class="text-center">Bulgarian estate agents answer your most frequently asked questions</h4>

            <div class="text-info">
                <h4>
                When people are looking to buy property in Bulgaria – We come across a number of questions that are asked time and again – here we try to provide the answers
to make buying property in Bulgaria as straight forward as possible.
                </h4>
            </div>

            <h6>Your FAQ:</h6>

            <div class="faq">

                <div class="questions">
                  <div class="question">
                    <span>Is it easy to buy property in Bulgaria?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                  </div>
                  <div class="answer">
                    <hr>
                    <span>Yes it is relatively easy to buy property in Bulgaria, but there is a procedure that must be followed, for more information, please read about Our Services - For property Buyers.</span>
                  </div>
                </div>

                <div class="questions">
                  <div class="question">
                    <span>What is the procedure for buying Bulgarian Real estate?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>For a detailed explanation of the procedure, please read our Free Guide - Buying Property in Bulgaria.</span>
                  </div>
                </div>

                <div class="questions">
                    <div class="question">
                      <span>Do you charge for viewing property in Veliko Tarnovo?</span>
                      <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                      </div>
                    <div class="answer">
                      <hr>
                      <span>No we do not charge for viewing trips within the Veliko Tarnovo region. , we only charge a fee if you decide to buy a property in Bulgaria using our services.</span>
                    </div>
                </div>



                <div class="questions">
                  <div class="question">
                    <span>Where is Veliko Tarnovo?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>Veliko Tarnovo is in the region of North Central Bulgaria, geographically in the centre of the country, for more information about this region, please read our Information Pages - About Bulgaria</span>
                  </div>
                </div>

                <div class="questions">
                  <div class="question">
                    <span>Do I need visa to come to Bulgaria?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>EU citizens do not require a visa for Bulgaria, but many other nationalities do, please read our Free Guide - Visas for Bulgaria for more detailed information.</span>
                  </div>
                </div>

                <div class="questions">
                  <div class="question">
                    <span>Can my children go to school in Veliko Tarnovo?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>Check out our Free Guide - Going to School in VT and learn about schools in Veliko Tarnovo.</span>
                  </div>
                </div>

                <div class="questions">
                  <div class="question">
                    <span>Can I bring my pets to my new home in Bulgaria?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>Please read our Free Guide - Moving to Bulgaria with Pets for more information.</span>
                  </div>
                </div>

                <div class="questions">
                  <div class="question">
                    <span>What is the healthcare system like in Bulgaria?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>There are various healthcare options for foreigners living in Bulgaria, for more information see our Free Guide - Health in Bulgaria.</span>
                  </div>
                </div>


                <div class="questions">
                  <div class="question">
                    <span>How do you cope with the Bulgarian language?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>Bulgarian is a difficult language for those who speak a Latin based language, check out our Free Guide - Bulgarian Language & Alphabet for a few tips.</span>
                  </div>
                </div>


                <div class="questions">
                  <div class="question">
                    <span>Who are Yantra Homes of Veliko Tarnovo?</span>
                    <img class="faq-dropdown-arrow" src="{{asset('assets/images/svg/FAQ-Dropdown-Arrow.svg')}}" alt="dropdown arrow icon">
                    </div>
                  <div class="answer">
                    <hr>
                    <span>Yantra Homes are a small independent property agency in Veliko Tarnovo specialising in town and village properties, houses, apartments, land and commercial property, please read our Information Pages for more information about us, Veliko Tarnovo and Bulgaria.</span>
                  </div>
                </div>



              </div>
        </div>
      </section>

      <!--====  End of FAQ section  ====-->

      <script>
        const faq = document.querySelectorAll('.questions');
      
        faq.forEach((questions) => {
          questions.addEventListener('click', () => {
            questions.classList.toggle('active');
          });
        });


        // navbar dropdown
        let activeDropdown = null;

        function toggleDropdown(dropdownId) {
          const dropdown = document.getElementById(dropdownId);

          if (activeDropdown && activeDropdown !== dropdown) {
            activeDropdown.style.display = 'none';
          }

          dropdown.style.display = dropdown.style.display === 'flex' ? 'none' : 'flex';

          activeDropdown = dropdown;
        }
        // navbar dropdown
    </script>

@include("front.footer")

    