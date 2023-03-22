      <!--==================== TESTIMONIAL ====================-->
      <section class="testimonial section">
          <h2 class="section__title">Testimonial</h2>
          <span class="section__subtitle">My client saying</span>

          <div class="testimonial_container container swiper-container">
              <div class="swiper-wrapper">

                  @foreach ($testimonials as $row)
                      <div class="testimonial_content swiper-slide">
                          <div class="testimonial_data">
                              <div class="testimonial_header">
                                  <img src="{{ asset('vendors/portfolio/assets/img/testimonial1.jpeg') }}" alt=""
                                      class="testimonial_img">

                                  <div>
                                      <h3 class="testimonial_name">{{ $row->client->full_name }}</h3>
                                      <span class="testimonial_client">Client</span>
                                  </div>
                              </div>

                              <div>
                                  @for ($i = 1; $i <= $row->rating; $i++)
                                      <i class="uil uil-star testimonial_icon-star"></i>
                                  @endfor
                              </div>
                          </div>
                          <p class="testimonial_description">
                              {{ $row->feedback }}.
                          </p>
                      </div>
                  @endforeach






              </div>
              <!--Add Pagination-->
              <div class="swiper-pagination swiper-pagination-testimonial"></div>
          </div>
      </section>
