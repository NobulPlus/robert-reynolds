@include('front.includes.header')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner">
                                <h1 class="pbmit-tbar-title">Gender Equality</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                           <div class="pbmit-breadcrumb-inner">
                              <span><a title="" href="#" class="{{ route('index') }}"><span>Home</span></a></span>
                              <span class="sep">-</span>
                              <span><a title="" href="#" class="archive">Services</a></span>
                              <span class="sep">-</span>
                              <span class="post-root post post-post current-item">Gender Equality</span>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->
        <!-- Services -->
       <section class="section-lg about-us-1-service-section pbmit-bg-color-light">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6">
                        <div class="image">
                           <img src="{{ url('/') }}/front/services/gender.jpg" class="img-fluid w-90" alt="">
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="pbmit-heading-subheading">
                           <h4 class="pbmit-subtitle">OUR SERVICES</h4>
                           <h2 class="pbmit-title">Gender Equality</h2>
                        </div>
                        <p class="para-text">
                            Our Diversity & Inclusion service focused on gender equality is vital for creating a balanced workplace within outsourcing companies. Gender equality fosters innovation and improves performance, integrating this principle into your organizational core. We develop a gender equality strategy that aligns with your vision and goals, assessing current dynamics to identify disparities. Our experts collaborate with leadership to embed gender equality across recruitment and pay equity, providing training to promote awareness. By establishing metrics to evaluate progress, we help monitor improvements. Our support ensures your commitment to gender equality leads to a thriving workplace where everyone feels valued and empowered.
                        
                        </p>
                        
                        
                        
                        <a href="{{ route('contact') }}" class="top-link mt-3">
                           <span class="about-us-button-text">Contact here</span>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
        <!-- Services End -->
@include('front.includes.footer');