@include('front.includes.header')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title">Our Services</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="/" class="{{ route('index') }}"><span>Home</span></a></span>
                        <span class="sep">-</span>
                        <span><a title="" href="{{ route('services.index')}}" class="archive">Services</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<section class="home-1-service-section section-lg pbmit-bg-color-light">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="pbmit-heading-subheading">
                           <h4 class="pbmit-subtitle">OUR SERVICES</h4>
                           <h2 class="pbmit-title">Delivering Expert <br><em>HR Solutions</em></h2>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="mb-5">
                           At Robert and Reynolds Consulting, we empower businesses with tailored solutions to foster growth, efficiency, and inclusivity. From developing talent to streamlining processes, enhancing structures, and promoting workplace equity, we are your trusted partner for transformation and success. Explore how we can help your organization thrive.                        
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/consultancy.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.consultancy') }}">Consultancy & Advisory</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>Our consultancy services encompass a wide range of areas, including strategy development. </p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.consultancy') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4"> 
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/talent.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.talent') }}">Talent Development</a> 
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>We collaborate with you to optimize your organization’s talent through strategies that align with your business objectives.</p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.talent') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4"> 
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/process.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.process') }}">Process Outsourcing</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>Our Process Solutions service focuses on refining your operations through strategies that enhance efficiency and reduce costs.</p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.process') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4"> 
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/organization.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.organization') }}">Organization Structure and Redesign</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>Our Organizational Transformation service focuses on aligning your company’s structure and processes with strategic objectives...</p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.organization') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4"> 
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/industrial.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.industrial') }}">Industrial Relations</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>Our Industrial Relations service is essential for managing workforce dynamics, focusing on positive relationships among employers and employees.
                                           </p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.industrial') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4"> 
                        <article class="pbmit-service-style-3">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ url('/') }}/front/services/mainstreaming.jpg" class="img-fluid w-100" alt="" />
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-content-inner">
                                    <h3 class="pbmit-service-title">
                                       <a href="{{ route('services.mainstreaming') }}">Gender Mainstreaming</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                       <p>Our Diversity & Inclusion service emphasizes Gender Mainstreaming, which is crucial for fostering an equitable workplace in the outsourcing sector. </p>
                                    </div>
                                    <div class="pbmit-service-btn"> 
                                       <a class="btn-arrow" href="{{ route('services.mainstreaming') }}">
                                          <i class="pbmit-base-icon-right-arrow-1"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>

@include('front.includes.footer');