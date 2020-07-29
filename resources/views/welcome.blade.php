@extends('layouts.frontend')

@section('content')

<section class="header2" >
	<div class="text-box" >
    <h4 class="wordCarousel">    
        <img src="{{asset('img/logo2.png')}}" width="260px" height="190px"> 
        <div> 
            <ul class="flip4"> 
                <li>Apartements</li>
                <li>Old houses</li>
                <li>Stodios</li>  
                <li>Villas</li>
            </ul>
        </div>  
    </h4>
	</div>
</section>
<!-- ------------------------------- explore ---------------------------------------- -->
<!-- <section id="explore" style="">
<div class="container-fluid">
  <div class="row justify-content-center " >
    <div class="col-lg-6 " >
      <div class="card-exp " style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy sepi
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px;">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>

    <div class="col-lg-6 py-4">
      <div class="card-exp "  style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$6000</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>
  </div>
  <div class="row justify-content-center " >
    <div class="col-lg-6 " >
      <div class="card-exp " style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy sepi
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px;">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>

    <div class="col-lg-6 py-4">
      <div class="card-exp "  style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$6000</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>
  </div>
  <div class="row justify-content-center " >
    <div class="col-lg-6 " >
      <div class="card-exp " style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy sepi
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px;">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>

    <div class="col-lg-6 py-4">
      <div class="card-exp "  style="margin:50px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$6000</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button style="margin: 0 0 0 100px">Details</button>
        </div>
        <div >
          
        </div>
      </div>
      </div>
      
    </div>
  </div>
  <div class="row justify-content-center" >
    <div class="col-lg-12 text-center">
      <button class="btn btn-lg" style="margin:30px auto 0 auto;">See more</button>
    </div>
  </div>
</div>
</section> -->
<!-- ------------------------------- end explore ---------------------------------------- -->
 <div class="container-fluid">
        <div class="heading text-center" >
          <h3 class="heading-title" >LATEST OFFRES</h3>
          <div class="heading-line" style="margin-top: -20px;">
            <span class="short-line"></span>
            <span class="long-line"></span>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-lg-6">
            <div class="card-exp mx-auto" style="margin:0px auto 0 auto;">
              <nav>
                <i class="fas fa-user-circle fa-lg"> &nbsp</i>
                  Agence Idotensy 
                <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
              </nav>
              <div class="photo" >
                <div class="pic">
                  <img src="{{asset('img/1.jpg')}}">
                </div>
                <div class="map">
                  <table width="100%"  style="height: 100%">
                    <tr>
                      <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
                    </tr>
                  </table>
                </div>
              </div>
      
      <div class="description">
        <div style="">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button class="btn-detail" style="margin: 0 0 0 100px;">Details</button>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
      </div>
            <div class="col-lg-6 ">
            <div class="card-exp  " style="margin:0px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button class="btn-detail" style="margin: 0 0 0 100px;">Details</button>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-6">
            <div class="card-exp mx-auto" style="margin:0px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button class="btn-detail" style="margin: 0 0 0 100px;">Details</button>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
            </div>
            <div class="col-lg-6 ">
            <div class="card-exp  " style="margin:0px auto 0 auto;">
        <nav>
        <i class="fas fa-user-circle fa-lg"> &nbsp</i>
        Agence Idotensy 
        <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>12/6/2020</span>
      </nav>
      <div class="photo" >
        <div class="pic">
          <img src="{{asset('img/1.jpg')}}">
        </div>
        <div class="map">
          <table width="100%"  style="height: 100%">
            <tr>
              <td align="center"><i class="fas fa-map text-secondary"></i> Blida, ouad al aleug</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="description">
        <div style="padding-top: 10px">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> 1</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> 3</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> 122m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h2>Villa</h2>
          <h1>$4520</h1>
          <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red.</p>
          <button class="btn-detail" style="margin: 0 0 0 100px;">Details</button>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
            </div>
        </div>
    </div>






    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Selling</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/3.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">6500$</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/1.png" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">6500$</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="app/img/2.png" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">6500$</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Renting</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/2.png" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">200$ / month</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/3.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">200$ / month</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="app/img/4.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">200$ / month</h6>
                                    <h6 class="case-item__title">Blida,bni mered</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Rated agencies</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/5.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-left:10%">
                        <!-- Authentication Links -->
                            
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="app/img/2.png" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">Claritas est etiam processus dynamicus</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="app/img/6.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padded-50"></div>
            </div>
            </div>
        </div>
    </div>


    
        
@stop
