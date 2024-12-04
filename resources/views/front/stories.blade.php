@include('front.includes.header')
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.actives, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.actives:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>



        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner">
                                <h1 class="pbmit-tbar-title">Our Stories</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                           <div class="pbmit-breadcrumb-inner">
                              <span><a title="" href="/" class="home"><span>Home</span></a></span>
                              <span class="sep">-</span>
                              <span><a title="" href="#" class="archive">Our Stories</a></span>
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
                           <img src="{{ url('/') }}/front/images/custom/Ourstories.jpg" class="img-fluid w-90" alt="">
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="pbmit-heading-subheading">
                           <h2 class="pbmit-title">Our Stories</h2>
                        </div>
                        <p class="para-text" style="color:black;">
                           At Robert and Reynolds Consulting, we are dedicated to our clients' success through long-term partnerships. Founded by industry veterans Robert and Reynolds, we focus on strategic thinking and innovation to address unique challenges.
                        </p>
                        <p class="para-text" style="color:black;">
                           Recognizing the need for tailored solutions, we uphold values of integrity, excellence, and innovation. Our personalized approach builds trust with clients, whether they are startups or multinational corporations.
                        </p>
                        <p class="para-text" style="color:black;">
                           We empower organizations to thrive, measuring our success by yours. Join us on this journey—together, we can turn your vision into reality.
                        </p>
                    </div>    
                        
                        <div class="pbmit-heading-subheading">
                           <h2 class="pbmit-title">Our Services</h2>
                        </div>

<!-- Accordian Styling -->
<button class="accordion"><b style="color:black;">Strategic Partnerships</b></button>
<div class="panel">
  <p style="color:black;">Our strategic partnerships focus on driving lasting value through tailored solutions aligned with your vision. We collaborate closely with clients, offering actionable insights that support sustainable growth and informed decision-making. Acting as an extension of your team, we provide strategic guidance to achieve measurable success.
      </p>
</div>

<button class="accordion"><b style="color:black;">Corporate Programs </b></button>
<div class="panel">
  <p style="color:black;"> We design corporate programs that promote leadership, talent development, and employee engagement. Tailored to meet your organizational needs, these programs enhance skills, build a culture of learning, and drive innovation. Our goal is to align corporate programs with business objectives for a high-performance workplace.
                                    
  </p>
</div>

<button class="accordion"><b style="color:black;">Diversity & Inclusion </b></button>
<div class="panel">
  <p style="color:black;">Our Diversity & Inclusion programs foster a workplace where everyone feels valued. Through awareness, gender mainstreaming, and inclusive policies, we guide organizations to create equal opportunities and build a culture of respect. We help organizations become environments where diversity thrives and drives innovation.
                                   
  </p>
</div>

<button class="accordion"><b style="color:black;">Performance Management </b></button>
<div class="panel">
  <p style="color:black;">Our performance management services help align team contributions with organizational goals through goal-setting, feedback, and tailored development. By creating customized frameworks with clear metrics, we promote a culture of continuous improvement that enhances accountability, agility, and overall organizational performance.
                                  
  </p>
</div>

<button class="accordion"><b style="color:black;">Industrial Relations </b></button>
<div class="panel">
  <p style="color:black;">We support positive industrial relations to promote workplace harmony and productivity. From union negotiations to compliance, we facilitate open communication and fair practices. Our approach builds trust, addresses workforce needs, and enhances engagement, allowing organizations to focus on strategic objectives.
                                 
  </p>
</div>
                        <a href="{{ route('contact') }}" class="top-link mt-3">
                           <span class="about-us-button-text">Contact here</span>
                        </a>
                     </div>
                  </div>
               
            </section>
            
<script>
var acc = document.querySelectorAll(".accordion");
var active = null;

acc.forEach((item, i) => {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    
    if(active) {
      active.style.maxHeight = null;
    }
    
    if(panel !== active) {
      panel.style.maxHeight = panel.scrollHeight + "px";
      active = panel
    } else {
      active = null
    }
  });
});
</script>
            
        <!-- Services End -->
@include('front.includes.footer');