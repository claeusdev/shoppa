<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopaholicks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto+Slab" rel="stylesheet">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
      <div class="page-wrapper">
        <div class="page-wrapper__image" style="background-image: url('images/desktop.jpg');"></div>
        <div class="page-wrapper__content">
          <h1>Shopaholicks.</h1>
          <p class="pl">
            Starting an online shop has never been easier.
          </p>

          <p class="pl">
            Whether you sell online, on social media, in store, or out of the trunk of your car, Shopaholicks is about to make it a whole lot easier.
          </p>
          
            <form action="{{ route('newsletter.create') }}" method="post">
              <div class="form-container">
                <input type="email" name="email" id="email" class="form-input" placeholder="Email address">
                <input type="submit" value="Subscribe" class="button">
                @if ($errors->has('email'))
                 {{-- expr --}}
                  <div class="error">
                    {{ $errors->first('email')}}
                  </div>
                @endif
              </div>
              
             {{ csrf_field() }}
           </form>          
        </div>
      </div>
    </body>
</html>
