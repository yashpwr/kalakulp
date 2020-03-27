<!DOCTYPE html>
<html lang="en">

@include('frontend.include.header')

<body>
	<div id="page">
    	@include('frontend.include.body_header') 

		@yield('content')
    
    	@include('frontend.include.body_footer')    
	</div>
	
	@include('frontend.include.footer')
	
</body>
</html>