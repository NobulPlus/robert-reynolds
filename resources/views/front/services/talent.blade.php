@include('front.includes.header')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner">
                                <h1 class="pbmit-tbar-title">Talent Development</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                           <div class="pbmit-breadcrumb-inner">
                              <span><a title="" href="#" class="{{ route('index') }}"><span>Home</span></a></span>
                              <span class="sep">-</span>
                              <span><a title="" href="#" class="archive">Services</a></span>
                              <span class="sep">-</span>
                              <span class="post-root post post-post current-item">Talent Development</span>
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
                           <img src="{{ url('/') }}/front/images/custom/TalentDevelopment.jpg" class="img-fluid w-90" alt="">
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="pbmit-heading-subheading">
                           <h4 class="pbmit-subtitle">OUR SERVICES</h4>
                           <h2 class="pbmit-title">Talent Development</h2>
                        </div>
                        <p class="para-text">
                            We collaborate with you to optimize your organization’s talent through strategies that align with your business objectives. Our emphasis on talent development ensures your workforce is skilled and adaptable. Leveraging our HR expertise, we empower you to create a resilient, high-performing team committed to operational excellence. From recruitment to professional development, we offer comprehensive support that fosters a culture of growth and innovation, ensuring your people strategy aligns with organizational goals.
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