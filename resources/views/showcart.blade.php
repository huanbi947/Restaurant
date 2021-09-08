<!DOCTYPE html>
<html lang="en">

  <head>

  	<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Chefs</a></li> 
                            <li class="scroll-to-section">
                                <a href="{{url('/redirects')}}">Features</a>
                                
                            </li>


                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}"></a></li> 

                            <li class="scroll-to-section" style="margin-top: -32px">

                                @auth

                                <a href="{{url('/showcart',Auth::user()->id)}}"></a>

                                <i class="fa fa-cart-plus" style="color: red">[{{$count}}]</i>

                                @endauth

                                @guest

                                Cart[0]

                                @endguest

                            </li> 


                            <li>
                                
                                 @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <li>
                                                
                                                <x-app-layout>
   
                                                </x-app-layout>
                                            </li>
                                        @else
                                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

<div id="top">
    <div class="container" style="width: 1000px">
 <marquee id="marq" scrollamount="8" behavior="alternate" direction="right" loop="150" scrolldelay="0">
<div class="row d-flex justify-content-center">
    <div class="col-md-4">
    <a href="Link"><img src="assets/images/slide-03.jpg" title="Ghi chú cho ảnh" width="500" height="500"/> </a>
    </div>
    <div class="col-md-4 ">
    <a href="Link"><img src="assets/images/slide-03.jpg" title="Ghi chú cho ảnh" width="500" height="500"/> </a>
    </div>
    <div class="col-md-4">
    <a href="Link"><img src="assets/images/slide-03.jpg" title="Ghi chú cho ảnh" width="500" height="500"/> </a>
    </div>
</div>
</marquee>
</div>  
    <div class="container">
    	<table id="myTable">
    		<thead>
    		<tr>
    			<th>Food Name</th>
    			<th>Price</th>
    			<th>Quantity</th>
    			<th>Action</th>
    		</tr>
            
            </thead>
            <tbody>
    	       <form action="{{url('orderconfirm')}}" method="POST" style="position: relative;">
    		@csrf
    		@foreach($data as $data)

    		<tr>
    			
    			<th>
    				<input type="" name="foodname[]"  value="{{$data->title}}" hidden="">
    				{{$data->title}}
    			</th>
    			<th>
    				<input type="" name="price[]" value="{{$data->price}}" hidden="">
    				{{$data->price}}
    			</th>
    			<th>
    				<input type="" name="quantity[]" value="{{$data->quantity}}" hidden="">
    				{{$data->quantity}}
    			</th>

    		</tr>

    		@endforeach
    		
    		
    		</tbody>
            @foreach($data2 as $data2)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="position: relative;top: -100px;">
                    <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a>
                </td>

            </tr>
            @endforeach
    	</table>
</div>
<div align="center" style="padding: 10px">
	
<button class="btn btn-primary" id="order" type="button">Order Now</button>

</div>

<div class="container" style="padding: 10px;display: none;" id="appear" >
	<div class="row d-flex justify-content-center">
    	<div class="col-8  mb-3">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control" placeholder="name">
    	</div>

    	<div class="col-8 mb-3">
    		<label>Phone</label>
    		<input type="number" name="phone" class="form-control" placeholder="phone">
    	</div>

    	<div class="col-8 mb-3">
    		<label>Address</label>
    		<input type="text" name="address" class="form-control" placeholder="address">
    	</div>

    	<div class="col-8 mb-3">
    		
    		<input class="btn btn-success" type="submit" value="Order Confirm ">
    		<button class="btn btn-danger" type="button" id="close">close</button>
    	</div>
</div>
</div>


</form>


</div>

	<script type="text/javascript">
		
		$("#order").click(
			function(){

				$('#appear').show();

			}


		);


		$("#close").click(
			function(){

				$('#appear').hide();

			}


		);

	</script>

      <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        
    $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>