<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopaholicks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
       <form action="{{ route('newsletter.create') }}" method="post">
           <label for="email"> Email
               <input type="email" name="email" id="email">
           </label>
           @if ($errors->has('email'))
             {{-- expr --}}
             <div class="error">
               {{ $errors->first('email')}}
             </div>
           @endif
           <input type="submit" value="Subscribe">
           {{ csrf_field() }}
       </form>
    </body>
</html>
