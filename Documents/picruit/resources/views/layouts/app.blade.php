<!DOCTYPE html>
  <head>
 <title>@yield('title', 'Picruit')</title>
    @include('partials.head')
	 
  </head>
  <body>
  	@include('partials.header')
	 
  		 @yield('content') 
 
  	@include('partials.footer')
 
  	@include('partials.javascript')
  </body>
</html>