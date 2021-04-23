<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Blog</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
       
       
            .footer {
                padding-top:16px;
                padding-bottom:8px;
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}
.more{
            display: none;
            }
        </style>

        <!-- <style>
            .blog {
                font-family: 'Indie Flower', cursive;
            }
        </style> -->
        
      
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                Hostel 5 Blog
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#links" aria-controls="links" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
            <div class="collapse navbar-collapse ml-auto" id="links">
                <div class="navbar-nav">
                    <a class="nav-link" href="/create">Create</a>
                    <a class="nav-link" href="#">My Posts</a>
                    <a class="nav-link" href="#">Login</a>
                </div>
            </div>
            </div>
        </nav>
        
            
         @yield('content')
         
    <div class="mt-2 footer bg-secondary">
    <p class="font-weight-bold"> Copyright Hostel 5 Penthouse</p>
    </div>    

    <script>
   $(document).ready(function(){
   $(".read").click(function(){
      $(this).prev().children('.more').toggle();
      $(this).prev().children('.dots').toggle();
    //   $(this).siblings('.dots').toggle();
      if($(this).text()=='Read more'){
	$(this).text('Read less');
      }
      else{
	$(this).text('Read more');
      }
   });
});
       </script>
    </body>
      
</html>
