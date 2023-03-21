          <!--==================== HOME ====================-->
          <section class="home section" id="home">
              <div class="home_container container grid">
                  <div class="home_img">
                      <img src="{{ asset('vendors/portfolio/assets/img/home.png') }}" alt="">
                  </div>

                  <div class="home_data">
                      <h1 class="home_title">Hi, I'am
                          {{ ucfirst($aboutsUs->last_name) }}</h1>
                      <h3 class="home_subtitle">{{ ucfirst($aboutsUs->title) }}</h3>
                      <p class="home_description">
                          {{ $aboutsUs->sub_title
                              ? $aboutsUs->sub_title
                              : ' High level experience in web design,fornt-en and backend development, producing quality work.' }}
                      </p>
                      <a href="#contact" class="button button--flex">
                          Contact Me&ensp;
                          <i class="uil uil-message button__icon"></i>
                      </a>
                      <div class="home_scroll">
                          <a href="#about" class="home_scroll-button button--flex"></a>
                          <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                          <span class="home_scroll-name">Scroll down</span>
                          <i class="uil uil-arrow-down home_scroll-arrow"></i>
                      </div>
                      <div class="home_social">
                          <span class="home_social-follow">Follow Me</span>
                          <div class="home_social-links">
                              <a href="{{ $aboutsUs->linkedin }}" target="_blank" class="home_social-icon">
                                  <i class="uil uil-linkedin-alt"></i>
                              </a>
                              <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                                  <i class="uil uil-dribbble"></i>
                              </a>
                              <a href="{{ $aboutsUs->github }}" target="_blank" class="home_social-icon">
                                  <i class="uil uil-github-alt"></i>
                              </a>
                          </div>
                      </div>

                      <div class="home_scroll_social">
                          <div class="home_scroll1">
                              <a href="#about" class="home_scroll-button button--flex"></a>
                              <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                              <span class="home_scroll-name">Scroll down</span>
                              <i class="uil uil-arrow-down home_scroll-arrow"></i>
                          </div>
                          <div class="home_social1">
                              <div class="home_social-link">
                                  <a href="https://www.linkedin.com" target="_blank" class="home_social-icon">
                                      <i class="uil uil-linkedin-alt"></i>
                                  </a>
                                  <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                                      <i class="uil uil-dribbble"></i>
                                  </a>
                                  <a href="https://www.github.com" target="_blank" class="home_social-icon">
                                      <i class="uil uil-github-alt"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
