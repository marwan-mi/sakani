@extends('layouts\frontend')

@section('style')
<link rel="stylesheet" href="{{asset('css/carousel.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/stars.css')}}">

@stop 


@section('content')
<div class=" detail1" style="margin-top:80px">
    <div class="col-lg-1"></div>
    <div class="col-lg-6">
    <div class="slideshow-container" style=""> 
                     <span style="display:none">{{$cmp=1}}</span>
                    @foreach($images as $image)
                        <div class="mySlides fade2">
                            <div class="numbertext">{{$cmp++}} / {{$images->count()}}</div>
                            <img src="{{asset($image->link)}}" style="width:100%;height:390px">
                        </div>
                    @endforeach
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <!-- The dots/circles -->
                        <div class="dots" style="text-align:center">
                        @for($i=1;$i <= $images->count();$i++)
                            <span class="dot" onclick="currentSlide('{{$i}}')"></span>
                        @endfor
                        </div>

                    </div><br><br>
                    <main class="main">
            <!-- <div class="col-lg-10 col-lg-offset-1"> -->
                <article class="  post-standard-details">
                    <div class="post__content">
                    <div class="post-additional-info">

                            

                            <span class="post__date">

                                <i class="seoicon-clock"  style="color:black"></i>

                                <time class="published" datetime="2016-03-20 12:00:00"  style="font-size:20px;font-weight: bold;color:black">
                                    {{$local->created_at->diffForHumans()}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags" style="color:black"></i>
                                <a href="#" style="font-size:20px;font-weight: bold;color:black">{{$local->vl}}</a>
                            </span>

                            <span class="category">
                                <i class="seoicon-tags"  style="color:black"></i>
                                <a href="#" style="font-size:20px;font-weight: bold;color:black">{{$local->category->name}}</a>
                            </span>

                        </div>
                    </div>
                    </article>
                    </main>

    </div>
    <!-- <div class="col-lg-1"></div> -->
    <div class="col-lg-5">
        <table width="" >
            
            <tr style="height:15px">
                <td><h4>Adress: </h4></td>
                <td>{{$local->wilaya}}, {{$local->commune}}</td>
            </tr>
            <tr>
                <td><h4>Etage: </h4></td>
                <td>{{$local->etage}}@if($local->etage == 0)
                    (ground floor)
                    @endif
                </td>
            </tr>
            <tr>
                <td><h4>Surface: </h4></td>
                <td>{{$local->surface}} m²</td>
            </tr>
            <tr>
                <td><h4>Nombre de chambre: </h4></td>
                <td>{{$local->pieces}}</td>
            </tr>
            <tr>
                <td><h4>Garage: </h4></td>
                <td>{{$local->nbrgarage}}</td>
            </tr>
            <tr>
                <td><h4>Bathroom: </h4></td>
                <td>{{$local->nbrshower}}</td>
            </tr>
            <tr >
                <td ><h3>Price: </h3></td>
                <td><h3>{{$local->price}} DA @if($local->vl == 'rent')/ {{$local->per}}@endif </h3></td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="row ">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">
                    <!-- Slideshow container -->
                    
                    <div class="post__content">
                        <div class="post__content-info">

                            <h3 class="post__subtitle">Description :</h3>
                            

                            <p class="post__text">
                                {{$local->desc}}
                            </p>

                            <h3 class="post__subtitle">Other options :</h3>

                            <div class="widget w-tags">
                                <div class="tags-wrap">
                                    @if($local->vl == 'rent')
                                        @if(($local->advnum != NULL)&&($local->adv != NULL))
                                            <h4 class="w-tags-item">{{$local->advnum}} {{$local->adv}} advence</h4>
                                        @endif
                                    @endif
                                    @if($local->gardin != 0)
                                        <h4 class="w-tags-item">Gardin</h4>
                                    @endif
                                    @if($local->pool != 0)
                                        <h4 class="w-tags-item">Pool</h4>
                                    @endif
                                    @if($local->paper != 0)
                                        <h4 class="w-tags-item">Papers</h4>
                                    @endif
                                    @if($local->furniture != 0)
                                        <h4 class="w-tags-item">Furniture</h4>
                                    @endif
                                    <h4 class="w-tags-item">Gas + L'eau + Electricity</h4>
                                    <h4  class="w-tags-item">Internet line</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="socials">Share:
                        <div class="addthis_inline_share_toolbox" style="margin-left:80px"></div>
                    </div>

                </article>
                <div>Offerd by : 
                    <div class="blog-details-author" style="margin-top:15px">

                            <div class="blog-details-author-thumb">
                                <img src="{{asset('app/img/blog-details-author.png')}}" alt="Author">
                            </div>

                            <div class="blog-details-author-content">
                                <div class="author-info">
                                    <h5 class="author-name">Agence {{$local->user->profile->agency_name}}</h5>
                                    <div class="rating-holder" style="padding:0;margin:0">
                                        <div class="c-rating c-rating--meduim" data-rating-value="4">
                                        <button>1</button>
                                        <button>2</button>
                                        <button>3</button>
                                        <button>4</button>
                                        <button>5</button>
                                        </div>
                                    </div>
                            </div>
                            <p class="text">
                                <i class="fa fa-map-marker-alt"></i> &nbsp{{$local->user->profile->adress}}
                            </p>
                            <p class="text">
                                <i class="fas fa-phone "></i> &nbsp{{$local->user->profile->phone1}} @if($local->user->profile->phone2) / @endif {{$local->user->profile->phone2}}
                            </p>
                            <p class="text">
                                <i class="fas fa-envelope "></i> &nbsp{{$local->user->email}}
                            </p>
                            <p class="text">
                                <i class="fab fa-facebook-square"></i> &nbsp{{$local->user->profile->fb}}
                            </p>
                            
                        
                    </div><a href="{{route('profile',['id'=>$local->user->profile->slug])}}" class="btn-profile" style="margin: 0px 0 0 85%;">Profile</a>
                </div>
                


                <div class="comments" style="margin-bottom:50px">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    @include('includes.disqus')
                </div>

                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->
        </main>
    </div>
</div>
<div class="container-fluid">
        <div class="row bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                <div class="offers">
                    <div class="row"><br><br>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Suggestion</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                        
                        <div class="case-item-wrap your-class">
                          @foreach($suj as $local)
                          <a href="{{route('detail',['slug'=>$local->slug])}}">
                            <div class="">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                      @foreach($local->images as $image)
                                        @if($image->main == 1)
                                        <img src="{{asset($image->link)}}" width="350px" style="height:200px">
                                        @endif
                                      @endforeach
                                    </div>
                                    <h6 class="case-item__title">{{$local->price}}DA</h6>
                                    <h6 class="case-item__title">{{$local->wilaya}}, {{$local->commune}}</h6>
                                </div>
                            </div>
                           </a>
                          @endforeach
                        </div>
                        
                    <!-- </div> -->
                </div>


                <div class="padded-50"></div>
            </div>
            </div>
        </div>
    </div>
@stop


@section('script')
<script src="{{asset('js/carousel.js')}}" ></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
    });
  </script>
@stop