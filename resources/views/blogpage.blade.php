
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
            @foreach($blogs as $blog)
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                    <div class="card-body bg-light text-center p-4">
                        <h4>{{ $blog->title }}</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <small class="mr-3">
                                <i class="fa fa-user text-primary"></i> {{ $blog->user ? $blog->user->name : 'Unknown Author' }}
                            </small>
                        </div>
                        <p>{{ Str::limit($blog->content, 150) }}</p>
                        <a href="{{ route('blogpage', $blog->id) }}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

  <!-- Blog End -->
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
@endsection
</x-app-layout>
