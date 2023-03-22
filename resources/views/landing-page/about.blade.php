            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My introduction</span>

                <div class="about_container container grid">
                    <img src="{{ asset('vendors/portfolio/assets/img/about-img.png') }}" alt="" class="about_img">

                    <div class="about_data">
                        <p class="about_description">
                            {{ $aboutsUs->description
                                ? $aboutsUs->description
                                : 'FullStack Web developer, with extencive knowledge and years of experience,
                                                                                                                                                                                                                                                                                                                    working in web technologies and UI/UX design, delivering quality work.' }}

                        </p>
                        <div class="about_info">
                            <div>
                                <span class="about_info-title">{{ $aboutsUs->experience }}+</span>
                                <span class="about_info-name">Years <br>experience</span>
                            </div>
                            <div>
                                <span class="about_info-title">{{ $projects->count() }}+</span>
                                <span class="about_info-name">Completed <br>project</span>
                            </div>
                            <div>
                                <span class="about_info-title">{{ $companyCount }}+</span>
                                <span class="about_info-name">Companies <br>worked</span>
                            </div>
                        </div>
                        <div class="about_buttons">
                            <a href="assets/pdf/johndoe-Cv.pdf" class="button button--flex">
                                Download CV <i class="uil uil-download-alt button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
