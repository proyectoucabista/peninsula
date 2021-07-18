<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose Application landing page HTML5 template"/>
    <title>Peninsula Corporation Associates</title>
    <link href="assets/images/favicon/favicon.png" rel="icon"/> <!--favicon actializado-->
    <!--  Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets-->
    <link href="assets/css/vendor.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css?=v4" rel="stylesheet"/>
  </head>
  <body class="body-scroll">
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
      <!--   
      Header
      =============================================  
      -->
      <style>
        a#contact{
          padding: 10px;
          border-radius: 5px;
          display: inline-block;
          background: #ff4040;
          transform: translate(0px,-10px);
          color: #fff;
        }
        a#contact:hover{
          background: transparent;
          transition: .5s;
          color: #333;
        }
        @media screen and (max-width: 991px) {
          ul li a#contact
          {
            background: transparent;
            color: #333;
            transform: translate(0px,3px);
          }
          ul li a#contact:hover
          {
            color: #fff;
          }
          
         }

        
              </style>
      <header class="header header-transparent header-sticky">
        <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu"> 
          <div class="container"> <a class="logo navbar-brand" href="index.html"><img class="logo logo-dark" src="assets/images/logo/logo1.jpg" alt="Magma Logo"/><img class="logo logo-light" src="assets/images/logo/logo-light.svg" alt="Magma Logo"/></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#about">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#facts">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#testimonials">Testimonios</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#action">Subscribete</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#footer" id="contact">CONTÁCTANOS</a></li>
                </ul>
              <!-- End Module Container  -->
            </div>
            <!-- End .nav-collapse-->
          </div>
          <!-- End .container-->
        </nav>
        <!-- End .navbar-->
      </header>
      <!--
      Hero Section
      ============================================= 
      -->
      <section class="hero hero-lead" id="hero">
        <div class="hero-cotainer bg-overlay bg-overlay-dark">
          <div class="bg-section"> <img src="" alt="Background Image"/></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3"> 
                <div class="hero-content">
                  <p class="hero-subtitle">Peninsula Associates corporation</p>
                  <h1 class="hero-title">Online services from leading experts in market</h1>
                  <div class="hero-action"><a class="btn btn--primary" href="javascript:void(0)">Start your services</a></div>
                </div>
              </div>
            </div>
            <!-- End .row-->
           
                  <!-- End .feature-panel -->
                </div>
              </div>
              <!-- End .row-->
            </div>
            <!-- End .hero-features-->
          </div>
          <!-- End .hero-cotainer-->
        </div>
        <!-- End .container-->
      </section>
      <!--   
      About Section
      ============================================= 
      -->
      <section class="services text-center bg-parallax" id="about">
        <div class="bg-section"> <img src="" alt="Background Image"/></div>
        <div class="container">
          <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
              <div class="heading text-center">
                <p class="heading-subtitle">QUÉ HACEMOS</p>
                <h3 class="heading-title">¿Cómo podemos ayudarte?</h3>
                <div class="divider">
                  <div class="line"></div>
                </div>
              </div>
            </div>
            <!-- End .col-lg-6 -->
          </div>
          <!-- End .row  -->
          <style>
            .service-panel .service-img:hover{
              
              transition: .5s;
              cursor: pointer;
            }
          </style>
          <div class="row">
            <!-- Panel #1  -->
            <div class="col-12 col-lg-4">
              <div class="service-panel">
                <div class="service-img">
                  <div class="bg-section"><img src="assets/images/services/1.jpg" alt="service image"/></div>
                </div>
                <div class="service-body">
                  <div class="service-content">
                    <h3>Servicio de transporte Maritimo</h3>
                    <p>Somos especialistas en el fletamiento Maritimo.</p>
                  </div>
                </div>
              </div>
              <!-- End .service-panel -->
            </div>
            <!-- End .col-12-->
            <!-- Panel #2  -->
            <div class="col-12 col-lg-4">
              <div class="service-panel">
                <div class="service-img"> 
                  <div class="bg-section"><img src="assets/images/services/2.png" alt="service image"/></div>
                </div>
                <div class="service-body">
                  <div class="service-content">
                    <h3>Servicio de Gestión de compra</h3>
                    <p>Generamos valor a su empresa.</p>
                  </div>
                </div>
              </div>
              <!-- End .service-panel -->
            </div>
            <!-- End .col-12
            
            assets/images/services/3.png -->
            <style type="text/css">
            	.service-img .service-img img{
            		background-attachment: cover;
            		display: none;
            	}
            </style>
            <!-- Panel #3  -->
            </style>
            <div class="col-12 col-lg-4">
              <div class="service-panel">
                <div class="service-img"> 
                  <div class="bg-section completa"><img src="assets/images/services/3.png" style="display: none;" alt="service image"/></div>
                </div>
                <div class="service-body">
                  <div class="service-content">
                    <h3>Servicio de Gestión de compra</h3>
                    <p>Generamos valor a su empresa.</p>
                  </div>
                </div>
              </div>
              <!-- End .service-panel -->
            </div>
            <!-- End .col-12-->
          </div>
          <!-- End .row  -->
          <div class="row"> 
            <div class="col-12"> 
              </div>
            </div>
          </div>
        </div>
        <!-- End .container-->
      </section>
      <!-- 
      Counter	Section
      =============================================  
      -->
      
      <!-- 
      Pricing Table Section
      =============================================  
      -->

      <style>
        p.heading-text1 {
          text-align: start;
          color: #333;
          font-size: 15px;
          margin-left: 15px;


        }
      </style>
      <section class="pricing bg-clouds-red" id="pricing">
        <div class="container">
          <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
              <div class="heading heading-3 text-center">
                <p class="heading-subtitle">CONOCE MÁS</p>
                <h2 class="heading-title">Acerca de nosotros</h2>
                <div class="divider"></div>
                <div class="line"></div>
                <p class="heading-text1">PENINSULA es una empresa de capital privado fundada en el 2008, que nace de la fusión de dos
                  empresas con de reconocida experiencia en el sector naviero y con sede en los Estados Unidos de
                  Norteamérica. Cuenta con un equipo de profesionales con amplia experiencia, más de 30 años en
                  el transporte marítimo, manejando rutas, modalidades y trámites del circuito import – export, y pone
                  sus buenas prácticas a su servicio. 
                  </p>
                <div class="divider"> 
                  <div class="line"></div>
                </div>
              </div>
            </div>
            <!-- End .col-lg-6 -->
          </div>
          
          <!-- End .pricing-container-->
        </div>
        <!-- End .container-->
      </section>
      <section class="counters bg-overlay bg-overlay-dark-2 bg-parallax" id="facts">
        <div class="bg-section"> <img src="" alt="background"/></div>
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="heading heading-light heading-2 text-center">
                <h2 class="heading-title" style="text-transform: capitalize;">cumpliendo metas</h2>
                <div class="divider">
                  <div class="line"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End .row-->
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3"> 
              <div class="counter"> 
                <div class="counter-content"> 
                  <div class="counter-icon"><i class="flaticon-users-1"></i></div>
                  <div class="counter-num"> <span class="counting" data-counterup-nums="2008">2008</span></div>
                </div>
                <div class="counter-name">
                  <h6>FUNDACIÓN</h6>
                </div>
              </div>
              <!-- End .counter-->
            </div>
            <div class="col-12 col-md-6 col-lg-3"> 
              <div class="counter"> 
                <div class="counter-content"> 
                  <div class="counter-icon"><i class="flaticon-users-1"></i></div>
                  <div class="counter-num"> <span class="counting" data-counterup-nums="958">958</span></div>
                </div>
                <div class="counter-name">
                  <h6>EMPLEADOS</h6>
                </div>
              </div>
              <!-- End .counter-->
            </div>
            <div class="col-12 col-md-6 col-lg-3"> 
              <div class="counter"> 
                <div class="counter-content"> 
                  <div class="counter-icon"><i class="flaticon-photos"></i></div>
                  <div class="counter-num"> <span class="counting" data-counterup-nums="435">435</span></div>
                </div>
                <div class="counter-name">
                  <h6>PROYECTOS</h6>
                </div>
              </div>
              <!-- End .counter-->
            </div>
            <div class="col-12 col-md-6 col-lg-3"> 
              <div class="counter"> 
                <div class="counter-content"> 
                  <div class="counter-icon"><i class="flaticon-settings-8"></i></div>
                  <div class="counter-num"> <span class="counting" data-counterup-nums="1236">1236</span></div>
                </div>
                <div class="counter-name">
                  <h6>spend time</h6>
                </div>
              </div>
              <!-- End .counter-->
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>

      <style>
        section#testimonials::before{
          background-color: #f6f6f6;
        }

      </style>
    
      <section style="background: #f6f6f6;" class="testimonials bg-overlay bg-overlay-dark bg-parallax miseccion" id="testimonials">
        <div class="bg-section"><img src="assets/images/testimonials/Testimonial.jpg" alt="background"/></div>
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3"> 
              <div class="heading heading-4 heading-light text-center">
                <h2 style="color: #333; font-weight: 600;               " class="heading-title">Testimonios</h2>
                <div class="divider"> 
                  <div class="line"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End .row-->
          <div class="testimonials-holder">
            <div class="row no-gutters"> 
              <div class="col-12 col-lg-6 d-flex"> 
                <div class="img-holder"> 
                  <div class="bg-section"> <img src="assets/images/testimonials/Testimonial.jpg" alt="background"/></div>
                </div>
              </div>
              <div class="col-12 col-lg-6"> 
                <div class="testimonial-holder bg-overlay bg-overlay-grey">
                  <div class="bg-section"> <img src="assets/images/testimonials/right-bg.svg" alt="background"/></div>
                  <div class="owl-carousel" data-slider-id="1" data-slide="1" data-slide-res="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                    <div class="testimonial-panel">
                      <div class="testimonial-img"><img class="author" src="assets/images/testimonials/model-min.png" alt="author image"/>
                        <div class="testimonial-quote"> <img class="quote" src="assets/images/testimonials/quote-left.png" alt="quote image"/><img class="quote" src="assets/images/testimonials/quote-right.png" alt="quote image"/></div>
                      </div>
                      <div class="testimonial-body">
                        <h4 class="testimonial-name">mark smith</h4>
                        <p class="testimonial-title">envato Inc</p>
                        <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                        <div class="rating"> <i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div>
                      </div>
                    </div>
                    <div class="testimonial-panel">
                      <div class="testimonial-img"><img class="author" src="assets/images/testimonials/model-min.png" alt="author image"/>
                        <div class="testimonial-quote"> <img class="quote" src="assets/images/testimonials/quote-left.png" alt="quote image"/><img class="quote" src="assets/images/testimonials/quote-right.png" alt="quote image"/></div>
                      </div>
                      <div class="testimonial-body">
                        <h4 class="testimonial-name">joe sallan</h4>
                        <p class="testimonial-title">google Inc</p>
                        <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                        <div class="rating"> <i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div>
                      </div>
                    </div>
                    <div class="testimonial-panel">
                      <div class="testimonial-img"><img class="author" src="assets/images/testimonials/model-min.png" alt="author image"/>
                        <div class="testimonial-quote"> <img class="quote" src="assets/images/testimonials/quote-left.png
                          " alt="quote image"/><img class="quote" src="assets/images/testimonials/quote-left.png" alt="quote image"/></div>
                      </div>
                      <div class="testimonial-body">
                        <h4 class="testimonial-name">marko jack</h4>
                        <p class="testimonial-title">facebook Inc</p>
                        <p class="testimonial-desc">&quot;This should be used to tell a story and include any testimonials you might have about your product or service for your clients&quot;</p>
                        <div class="rating"> <i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .row-->
          </div>
          <!-- End .testimonials-holder-->
        </div>
        <!-- End .container-->
      </section>
      <!--
      ============================
      Clients #1 Section
      ============================
      -->
      <section class="clients clients-carousel clients-1 bg-grey" id="clients-1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/1.png" alt="client"/></div>
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/2.png" alt="client"/></div>
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/3.png" alt="client"/></div>
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/4.png" alt="client"/></div>
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/5.png" alt="client"/></div>
                <div class="client"><a href="javascript:void(0)"> </a><img src="assets/images/clients/6.png" alt="client"/></div>
              </div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- 
      CTA Section
      =============================================  
      -->


      <section class="cta" id="action">
        <div class="container">
          <div class="bg-section"><img src="" alt="map"/></div>
          <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3"> 
              <div class="heading heading-5 text-center">
                <h2 class="heading-title">Contáctenos</h2>
                <div class="divider"> 
                  <div class="line"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End .row-->
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3"> 
              <div class="form-mailchimp">
                <form class="mb-0 form-action mailchimp">
                  <div class="input-group">
                    <div class="input-icon"> 
                      <input class="form-control" type="email" placeholder="Ingrese su Gmail" required="required"/>
                    </div>
                    <button class="btn btn--primary">ENVIAR</button>
                  </div>
                  <!--  End .input-group-->
                </form>
                <div class="subscribe-alert"></div>
              </div>
            </div>
            <!-- End .col-12-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- 
      Footer
      ============================================= 
      -->
      <footer class="footer bg-overlay bg-overlay-dark bg-parallax" id="footer">
        <div class="bg-section"> <img src="" alt="background"/></div>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="footer-logo"><a class="logo" href="index.html"><img class="logo logo-light" src="assets/images/logo/logo-footer.svg" alt="Magma Logo"/></a></div>
              </div>
            </div>
            <div class="footer-links">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4"></div>
                <p class="sedes">SEDE PRINCIPAL</p>
                <p><i class="fas fa-map"></i> 795 south park, wonderlan, australia</p>
                <div class="col-12 col-md-6 col-lg-4"><a href="mailto:Magmasite@Envato.com"><i class="far fa-comment-dots"></i> Magmasite@Envato.com</a></div>
                <div class="col-12 col-md-6 col-lg-4">
                  <p><i class="far fa-clock"></i> Mon. -Fri. 8am to 5pm</p>
                </div>
              
                <div class="col-12 col-md-6 col-lg-4"><a href="tel:0106485655"><i class="fas fa-phone-alt"></i> +(123)456-789-102</a></div>
                <div class="col-12 col-md-6 col-lg-4"><a href="www.Envato.com"><i class="fas fa-link"></i> www.Envato.com</a></div>
                <div class="col-12 col-md-6 col-lg-4">
                  <p><i class="far fa-clock"></i> sat. 8am to 11pm</p>
                  <div class="map"><img src="assets/images/footer/world-map.png" ></div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-12 col-12 col-lg-6">
                <div class="footer-copyright"><span>2021 &copy; <a href="http://themeforest.net/user/zytheme/portfolio?ref=zytheme">Peninsula Associates Corporation</a>. All rights reserved.</span></div>
              </div>
              <div class="col-12 col-12 col-lg-6">
                <div class="footer-social">
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End .container  -->
      </footer>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/functions.js"></script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </body>
</html>