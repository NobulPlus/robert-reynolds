@include('front.includes.header')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner">
                                <h1 class="pbmit-tbar-title">Recruitments</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                           <div class="pbmit-breadcrumb-inner">
                              <span><a title="" href="/" class="home"><span>Home</span></a></span>
                              <span class="sep">-</span>
                              <span><a title="" href="#" class="archive">Recruitments</a></span>
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
                           <img src="{{ url('/') }}/front/services/recruitment.jpg" class="img-fluid w-90" alt="">
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="col-xl- home-1-appointment-section-bg pbmit-bg-color-global">
                        <div class="home-1-appointment-section-inner-left ms-auto">
                           <div class="pbmit-heading-subheading">
                              <h4 class="pbmit-subtitle text-white">Welcome to our Recruitment Portal – your gateway to exciting career opportunities!</h4>
                              <p class="text-white">We are dedicated to connecting talented individuals with rewarding roles in a variety of industries. Our platform is designed to simplify the recruitment process for both job seekers and employers, ensuring a seamless experience from application to placement.</p>
                           </div>
                           <div role="form" class="home-1-appointment-form">
                              <form action="#" method="post" class="home-1-appointment-form init" novalidate="novalidate">
                                 <div class="pbmit-main-form pbmit-form-style-1">
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="your-name">
                                                <input type="text" name="your-name" value="" size="40" aria-invalid="false" placeholder="Name">
                                             </span>
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="your-email">
                                                <input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email Address">
                                             </span>
                                          </div>
                                        
                                        <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="phone-no">
                                                <input type="number" name="phone-no" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Phone Number">
                                             </span>
                                          </div>
                                          
                                        <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="resume">
                                                <input type="file" name="resume" value="" size="40" aria-required="true" aria-invalid="false" placeholder="CV/Resume">
                                             </span>
                                          </div>
                                          
                                       </div>
                                       <div class="col-sm-12">
                                          <div class="input-group">
                                             <span class="input-item" data-name="textarea-873">
                                                <textarea name="textarea" id="" class="" cols="40" rows="10" aria-invalid="false" placeholder="Cover Letter"></textarea>
                                             </span>
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <div class="input-button">
                                             <a href="#" id="submit" class="input-control input-submit pbmit-btn pbmit-btn-hover-black">Apply Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </section>
        <!-- Services End -->
@include('front.includes.footer');