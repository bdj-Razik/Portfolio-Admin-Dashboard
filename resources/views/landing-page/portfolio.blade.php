       <!--==================== PORTFOLIO ====================-->
       <section class="portfolio section" id="portfolio">
           <h2 class="section__title">Portfolio</h2>
           <span class="section__subtitle">Most recent work</span>

           <div class="portfolio_container container swiper-container">
               <div class="swiper-wrapper">
                   <!--============ PORTFOLIO 1 ==============-->
                   <div class="portfolio_content grid swiper-slide">
                       <img src="{{asset('vendors/portfolio/assets/img/portfolio1.jpeg')}}" alt="" class="portfolio_img">

                       <div class="portfolio_data">
                           <h3 class="portfolio_title">Modern Website</h3>
                           <p class="portfolio_description">
                               Website adaptable to all devices,with ui description
                               and animated interactions.
                           </p>
                           <a href="#" class="button button--flex button--small portfolio_button">
                               Demo
                               <i class="uil uil-arrow-right button__icon"></i>
                           </a>
                       </div>
                   </div>
                   <!--============ PORTFOLIO 2 ==============-->
                   <div class="portfolio_content grid swiper-slide">
                       <img src="{{asset('vendors/portfolio/assets/img/portfolio2.jpeg')}}" alt="" class="portfolio_img">

                       <div class="portfolio_data">
                           <h3 class="portfolio_title">POS App</h3>
                           <p class="portfolio_description">
                               POS App description
                           </p>
                           <a href="#" class="button button--flex button--small portfolio_button">
                               Demo
                               <i class="uil uil-arrow-right button__icon"></i>
                           </a>
                       </div>
                   </div>
                   <!--============ PORTFOLIO 3 ==============-->
                   <div class="portfolio_content grid swiper-slide">
                       <img src="{{asset('vendors/portfolio/assets/img/portfolio3.jpeg')}}" alt="" class="portfolio_img">

                       <div class="portfolio_data">
                           <h3 class="portfolio_title">Online Store</h3>
                           <p class="portfolio_description">
                               Website adaptable to all devices,with ui description
                               and animated interactions.
                           </p>
                           <a href="#" class="button button--flex button--small portfolio_button">
                               Demo
                               <i class="uil uil-arrow-right button__icon"></i>
                           </a>
                       </div>
                   </div>
               </div>

               <!--Add Arrow-->
               <div class="swiper-button-next">
                   <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
               </div>
               <div class="swiper-button-prev">
                   <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
               </div>
               <!--Add Pagination-->
               <div class="swiper-pagination"></div>
           </div>
       </section>
