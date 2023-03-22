      <!--==================== CONTACT ME ====================-->
      <section class="contact section" id="contact">
          <h2 class="section__title">Contact Me</h2>
          <span class="section__subtitle">Get in touch</span>

          <div class="contact_container container grid">
              <div>
                  <div class="contact_information">
                      <i class="uil uil-phone contact_icon"></i>

                      <div>
                          <h3 class="contact_title">Call Me</h3>
                          <span class="contact_subtitle">{{ $aboutsUs->phone }}</span>
                      </div>
                  </div>
                  <div class="contact_information">
                      <i class="uil uil-envelope contact_icon"></i>

                      <div>
                          <h3 class="contact_title">Email</h3>
                          <span class="contact_subtitle">{{ $aboutsUs->email }}</span>
                      </div>
                  </div>
                  <div class="contact_information">
                      <i class="uil uil-map-marker contact_icon"></i>

                      <div>
                          <h3 class="contact_title">Location</h3>
                          <span class="contact_subtitle">{{ $aboutsUs->adresse }}</span>
                      </div>
                  </div>
              </div>

              <form action="{{ route('contactMe') }}" method="POST" class="contact_form grid">
                  @csrf
                  <div class="contact_inputs grid">
                      <div class="contact_content">
                          <label for="name" class="contact_label">Name</label>
                          <input type="text" name="name" class="contact_input" required>
                      </div>
                      <div class="contact_content">
                          <label for="email" class="contact_label">Email</label>
                          <input type="email" name="email" class="contact_input" required>
                      </div>
                  </div>
                  <div class="contact_content">
                      <label for="title" class="contact_label">Project</label>
                      <input type="text" name="title" class="contact_input" required>
                  </div>
                  <div class="contact_content">
                      <label for="description" class="contact_label">Project description</label>
                      <textarea name="description" cols="0" rows="7" class="contact_input" required></textarea>
                  </div>

                  <div>
                      <button type="submit" class="button button--flex" style="border: none;font-size: 18px">
                          Send Message
                          <i class="uil uil-message button_icon"></i>
                      </button>
                  </div>
              </form>
          </div>
      </section>
