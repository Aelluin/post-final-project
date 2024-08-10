

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                    <x-app-layout>
                    <!DOCTYPE html>
                    <html lang="en">
                      <head>
                        <meta charset="utf-8" />
                        <title>KidKinder - Kindergarten Website Template</title>
                        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
                        <meta content="Free HTML Templates" name="keywords" />
                        <meta content="Free HTML Templates" name="description" />

                        <!-- Favicon -->
                        <link href="img/favicon.ico" rel="icon" />

                        <!-- Google Web Fonts -->
                        <link rel="preconnect" href="https://fonts.gstatic.com" />
                        <link
                          href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
                          rel="stylesheet"
                        />

                        <!-- Font Awesome -->
                        <link
                          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
                          rel="stylesheet"
                        />

                        <!-- Flaticon Font -->
                        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

                        <!-- Libraries Stylesheet -->
                        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
                        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

                        <!-- Customized Bootstrap Stylesheet -->
                        <link href="css/style.css" rel="stylesheet" />
                      </head>

                      <body>

                        <!-- Registration Start -->
                        <div class="container-fluid py-5">
                          <div class="container">
                            <div class="row align-items-center">
                              <div class="col-lg-7 mb-5 mb-lg-0">
                                <p class="section-title pr-5">
                                  <span class="pr-2">Book A Seat</span>
                                </p>
                                <h1 class="mb-4">Book A Seat For Your Kid</h1>
                                <p>
                                  Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                                  dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                                  Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                                  dolor
                                </p>
                                <ul class="list-inline m-0">
                                  <li class="py-2">
                                    <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                                    dolor amet diam
                                  </li>
                                  <li class="py-2">
                                    <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                                    amet ipsum
                                  </li>
                                  <li class="py-2">
                                    <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                                    elitripsum vero.
                                  </li>
                                </ul>
                                <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
                              </div>
                              <div class="col-lg-5">
                                <div class="card border-0">
                                  <div class="card-header bg-secondary text-center p-4">
                                    <h1 class="text-white m-0">Create a BLog</h1>
                                  </div>
                                  <div class="card-body rounded-bottom bg-primary p-5">
                                    <form action="/blogs/create" method="POST">
                                        @csrf
                                      <div class="form-group">
                                        <input
                                          type="text"
                                          class="form-control border-0 p-4" name="title"
                                          placeholder="Your Blog Title"
                                          required="required"
                                        />
                                      </div>
                                      <div class="form-group" action="POST",>
                                        <input
                                          type="text"
                                          class="form-control border-0 p-4" name="content"
                                          placeholder="Your Blog Content"
                                          required="required"
                                        />
                                      </div>
                                      <div>
                                        <button
                                          class="btn btn-secondary btn-block border-0 py-3"
                                          type="submit"
                                        >
                                          Submit
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Registration End -->

                        <!-- Blog Start -->
                        <div class="container-fluid pt-5">
                          <div class="container">
                            <div class="text-center pb-2">
                              <p class="section-title px-5">
                                <span class="px-2">Latest Blog</span>
                              </p>
                              <h1 class="mb-4">Latest Articles From Blog</h1>
                            </div>
                            <div class="row pb-3">
                              <div class="col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm mb-2">
                                  <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                                  <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Diam amet eos at no eos</h4>
                                    <div class="d-flex justify-content-center mb-3">
                                      <small class="mr-3"
                                        ><i class="fa fa-user text-primary"></i> Admin</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-folder text-primary"></i> Web Design</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-comments text-primary"></i> 15</small
                                      >
                                    </div>
                                    <p>
                                      Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                      eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                      lorem. Tempor ipsum justo amet stet...
                                    </p>
                                    <a href="" class="btn btn-primary px-4 mx-auto my-2"
                                      >Read More</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm mb-2">
                                  <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="" />
                                  <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Diam amet eos at no eos</h4>
                                    <div class="d-flex justify-content-center mb-3">
                                      <small class="mr-3"
                                        ><i class="fa fa-user text-primary"></i> Admin</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-folder text-primary"></i> Web Design</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-comments text-primary"></i> 15</small
                                      >
                                    </div>
                                    <p>
                                      Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                      eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                      lorem. Tempor ipsum justo amet stet...
                                    </p>
                                    <a href="" class="btn btn-primary px-4 mx-auto my-2"
                                      >Read More</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm mb-2">
                                  <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="" />
                                  <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Diam amet eos at no eos</h4>
                                    <div class="d-flex justify-content-center mb-3">
                                      <small class="mr-3"
                                        ><i class="fa fa-user text-primary"></i> Admin</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-folder text-primary"></i> Web Design</small
                                      >
                                      <small class="mr-3"
                                        ><i class="fa fa-comments text-primary"></i> 15</small
                                      >
                                    </div>
                                    <p>
                                      Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                                      eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                                      lorem. Tempor ipsum justo amet stet...
                                    </p>
                                    <a href="" class="btn btn-primary px-4 mx-auto my-2"
                                      >Read More</a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Blog End -->

                    <!-- Footer Start -->
                     <div
                     class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
                    >
                     <div class="row pt-5">
                       <div class="col-lg-3 col-md-6 mb-5">
                         <a
                           href=""
                           class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                           style="font-size: 0px; line-height: 0px"
                         >




                       </div>
                       <div class="col-lg-3 col-md-6 mb-5">




                       <div class="col-lg-3 col-md-6 mb-5">

                         <form action="">
                           <div class="form-group">



                           </div>
                         </form>
                       </div>
                     </div>
                    </div>
                     <div
                       class="container-fluid pt-5"
                       style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
                     >
                       <p class="m-0 text-center text-white">
                         &copy;
                         <a class="text-primary font-weight-bold" href="#"></a>
                         &copy; 2024 Laurence Ramirez. Made with &#10084; in Pangasinan, Philippines.
                         <div class="copyright">
                         <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->


                       </p>
                     </div>
                    </div>
                    <!-- Footer End -->


                        <!-- Back to Top -->
                        <a href="#" class="btn btn-primary p-3 back-to-top"
                          ><i class="fa fa-angle-double-up"></i
                        ></a>

                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                        <script src="lib/easing/easing.min.js"></script>
                        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                        <script src="lib/isotope/isotope.pkgd.min.js"></script>
                        <script src="lib/lightbox/js/lightbox.min.js"></script>

                        <!-- Contact Javascript File -->
                        <script src="mail/jqBootstrapValidation.min.js"></script>
                        <script src="mail/contact.js"></script>

                        <!-- Template Javascript -->
                        <script src="js/main.js"></script>
                      </body>
                    </html>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</x-app-layout>
