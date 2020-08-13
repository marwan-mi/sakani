@extends('layouts\frontend')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@section('content')

<div class="filter">
    <div class="container" style="color:white;padding-top:35px">
      <form method="get" action="{{route('filter')}}">
      {{csrf_field()}}
      <div class="collapse " style="opacity: .9;" id="collapseExample">
          <div class=" ">
          <div class="row">
          <div class="form-group col-lg-3">
              <label for="title">Wilaya</label>
              <select name="wilaya" id="cetegory" class="form-control">
                  <option value="blida">Blida</option>
              </select>
          </div>
          <div class="form-group col-lg-3">
              <label for="title" class="text-left" style="text-align:left">Commune</label>
              <select name="commune" id="cetegory" class="form-control">
                  <option value="blida">Blida</option>
                  <option value="oulad yaich">Ouled Yaich</option>
                  <option value="mozaia">Mouzaïa</option>
                  <option value="Bouinan">Bouinan</option>
                  <option value="Affroun">El Affroun</option>
                  <option value="Larbaa">Larbaa</option>
                  <option value="Meftah">Meftah</option>
                  <option value="Oued Alleug">Oued Alleug</option>
                  <option value="Boufarik">Boufarik</option>
                  <option value="Bougara">Bougara</option>
              </select>
          </div>
          <div class="form-group col-lg-3">
              <label for="title">Local Category</label><br>
              <select name="category_id" id="cetegory" class="form-control">
                  @foreach($categories as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group col-lg-3">
              <label for="title">Type</label><br>
              <select name="vl" id="cetegory" class="form-control">
                  <option value="sale">Sale</option>
                  <option value="rent">Rent</option>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-2" style="">
              <label for="title">Surface min</label>
              <div class=" input-group">
                  <input type="number" value="{{ old('surmin') }}" name="surmin" class="form-control RE-input-sakani" >
                  <div class="input-group-append">
                    <span class="input-group-text border-black-sakani  ">m²</span>
                  </div>
                </div>
          </div>
          <div class="form-group col-lg-2" style="">
              <label for="title">Surface max</label>
              <div class=" input-group">
                  <input type="number" name="surmax" class="form-control RE-input-sakani" >
                  <div class="input-group-append">
                    <span class="input-group-text border-black-sakani  ">m²</span>
                  </div>
                </div>
          </div>
          <div class="form-group col-lg-2" style="">
              <label for="title">Pieces</label>
              <!-- <div class=" input-group"> -->
                <input type="number" name="pieces" class="form-control " style="">
              <!-- </div> -->
              
          </div>
          <div class="form-group col-lg-2" style="">
              <label for="title">Etage</label>
              <div class=" input-group">
                <input type="number" name="etage" class="form-control " style="">
              </div>
              
          </div>
          <div class="form-group col-lg-2" style="">
              <label for="title">Prix min</label>
              <div class=" input-group">
                  <input type="number" name="prixmin" class="form-control RE-input-sakani" aria-label="Amount (to the nearest dollar)">
                  <div class="input-group-append">
                    <span class="input-group-text border-black-sakani ">DA</span>
                  </div>
                </div>
          </div>
          <div class="form-group col-lg-2" style="">
              <label for="title">Prix max</label>
              <div class=" input-group">
                  <input type="number" name="prixmax" class="form-control RE-input-sakani" aria-label="Amount (to the nearest dollar)">
                  <div class="input-group-append">
                    <span class="input-group-text border-black-sakani  ">DA</span>
                  </div>
                </div>
          </div>
        </div>

        <!-- <div class="row  ">
          
          <div class="form-group col-lg-3 text-center">
            <div class="form-check">
              <input class="form-check-input" name="garage" value="ga" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Garage
              </label>
            </div>
          </div>
          
          <div class="form-group col-lg-3 text-center">
            <div class="form-check">
              <input class="form-check-input" name="gardin" value="gar" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Gardin
              </label>
            </div>
          </div>
          <div class="form-group col-lg-3">
            <div class="form-check">
              <input class="form-check-input"name="pool" value="pool" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Pool
              </label>
            </div>
          </div>
          <div class="form-group col-lg-3">
            <div class="checkbox">
              <input class="form-check-input" name="fur" value="fur" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Furniture
              </label>
            </div>
          </div>
          
          
        </div> -->
        <div class=" row">
          <div class="col-lg-12 text-center">
            <a href=""><button type="submit" class=" btn-filter ">Filter <i class="fa fa-filter"></i></button></a>
          </div>
        </div>

          </div>
        </div>

        <button href="" onclick="change()" class="btn-fil w-100 rounded-0 text-center" type="button" data-toggle="collapse"
          data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <i class="fa fa-chevron-down" id="btn-fil" style="font-size:24px" aria-hidden="true"></i>
          
        </button>
        
        
      </form>
    </div>
</div>
    @if($locals->count()>0)
    <div class="container-fluid" style="margin-top:20px">
        <div class="heading text-center" >
          <h3 class="heading-title" >Results</h3>
          <div class="heading-line" style="margin-top: -20px;">
            <span class="short-line"></span>
            <span class="long-line"></span>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
        @foreach($locals as $local)
          <div class="col-lg-6">
            <div class="card-exp mx-auto" style="margin:0px auto 30px auto;height:320px">
              <nav>
                <i class="fas fa-user-circle fa-lg"> &nbsp</i>
                  Agence {{$local->user->profile->agency_name}}
                <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>{{$local->created_at->diffForHumans()}}</span>
              </nav>
              <div class="photo" >
                <div class="pic">
                @foreach($local->images as $image)
                  @if($image->main == 1)
                  <img src="{{asset($image->link)}}">
                  @endif
                @endforeach
                </div>
                <div class="map">
                  <table width="100%"  style="height: 100%">
                    <tr>
                      <td align="center"><i class="fas fa-map text-secondary"></i> {{$local->wilaya}}, {{$local->commune}}</td>
                    </tr>
                  </table>
                </div>
              </div>
      
      <div class="description">
        <div style="">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> {{$local->nbrshower}}</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> {{$local->nbrgarage}}</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> {{$local->pieces}}</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> {{$local->surface}}m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
          <h3>{{$local->category->name}}</h3>
          <h1>{{$local->price}}Da</h1>
          <p>{{ str_limit(strip_tags($local->desc), 140) }}</p><br>
          <a href="{{route('detail',['id'=>$local->id])}}" class="btn-restore" style="margin: 0px 0 0 120px;">Details</a>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
     
      </div>
       @endforeach
        </div>
    </div>

    @else
    <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>404 - No results for your search</h2>
			</div>
		</div>
	</div>

    @endif
    
@stop
@section('script')
<script>
 $(document).ready(function() {
        $('.btn-fil').click();
    });


  function change(){
    var cl = $('#btn-fil').attr('class');
    
    if(cl === 'fa fa-chevron-down'){
      $("#btn-fil").removeClass("fa fa-chevron-down");
      $("#btn-fil").addClass("fa fa-chevron-up");
      
    }
    if(cl === 'fa fa-chevron-up'){
      $("#btn-fil").removeClass("fa fa-chevron-up");
      $("#btn-fil").addClass("fa fa-chevron-down");
    }
  }
  
  
</script>

@stop