@include('front.includes.header')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner">
                                <h1 class="pbmit-tbar-title">Process Outsourcing</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                           <div class="pbmit-breadcrumb-inner">
                              <span><a title="" href="#" class="{{ route('index') }}"><span>Home</span></a></span>
                              <span class="sep">-</span>
                              <span><a title="" href="#" class="archive">Services</a></span>
                              <span class="sep">-</span>
                              <span class="post-root post post-post current-item">Process Outsourcing</span>
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
                           <img src="{{ url('/') }}/front/services/process.jpg" class="img-fluid w-90" alt="">
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="pbmit-heading-subheading">
                           <h4 class="pbmit-subtitle">OUR SERVICES</h4>
                           <h2 class="pbmit-title">Process Outsourcing</h2>
                        </div>
                        <p class="para-text">
                            Our Process Solutions service focuses on refining your operations through strategies that enhance efficiency and reduce costs. We analyze your existing processes to identify inefficiencies and implement tailored solutions aligned with your business objectives. Our expertise covers full-process outsourcing in critical areas like HR, finance, and customer support, enabling you to concentrate on core activities. By crafting scalable outsourcing strategies that integrate advanced technology, we maximize quality and efficiency, ensuring your operations meet high standards while allowing for growth.
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