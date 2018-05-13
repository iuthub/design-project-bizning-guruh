<!doctype html>
<html lang="en">
  <head>
  @include('layouts.head')
 </head>
  <body>

    <header>
      @include('layouts.header')

    </header>
    @section('main-content')

    @show


      <!-- FOOTER -->
      <footer class="text-light">
        @include('layouts.footer')

      </footer>
    </main>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="{{ asset('pages/js/jquery-slim.min.js') }}"><\/script>')</script>
  <script src="{{ asset('pages/js/popper.min.js') }}"></script>
  <script src="{{ asset('pages/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('pages/js/holder.min.js') }}"></script>
  </body>
</html>
