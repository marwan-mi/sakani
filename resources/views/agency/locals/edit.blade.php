@extends('layouts\app')

@section('content')

<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Edit local :</h2><br><br>
@include('includes.error')
<div class="panel panel-default">
           
           <div class="panel-body">
               <form action="{{route('local.update',['id'=>$local->id])}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}

                   <div class="form-group col-lg-6">
                       <label for="title">Wilaya</label>
                       <select name="wilaya" id="cetegory" class="form-control">
                           <option value="{{$local->wilaya}}">{{$local->wilaya}}</option>
                       </select>
                   </div>
                   <div class="form-group col-lg-6">
                       <label for="title">Commune</label>
                       <select name="commune" id="cetegory" class="form-control">
                           <option value="{{$local->commune}}" selected>{{$local->commune}}</option>
                           
                       </select>
                   </div>
                   <div class="form-group col-lg-5">
                       <label for="title">Local Type</label><br>
                       <select name="category_id" id="cetegory" class="form-control">
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}"
                            @if($local->category->id==$cat->id)
                                    selected
                                @endif
                            >{{$cat->name}}</option>
                            @endforeach
                        </select>
                   </div>
                   
                   

                   <div class="form-group col-lg-3" style="">
                        <label for="title">Surface</label>
                        <div class="" style="display: flex;align-items: center;">
                            <input type="number" name="surface" class="form-control " style="width:90%" value="{{$local->surface}}">
                            <div class="" style="width:10%;">&nbspm²</div>
                        </div>
                    </div>

                    <div class="form-group col-lg-2" style="">
                        <label for="title">Pieces</label>
                        <input type="number" name="pieces" class="form-control " style="" value="{{$local->pieces}}">
                    </div>
                    <div class="form-group col-lg-2" style="">
                        <label for="title">Etage</label>
                        <input type="number" name="etage" class="form-control " style="" value="{{$local->etage}}">
                    </div>
                    

                    <div class="form-group col-lg-12">
                       <label for="">Options</label>

                       <div style="display: flex;justify-content: space-around;align-items: center;">
                        <div class="checkbox " style="display: flex;align-items: center;">
                        <div><label for=""><input name="garage" type="checkbox" value="ga" @if($local->nbrgarage > 0)checked @endif >Garage</label></div>&nbsp
                        <div><input type="number" name="garagenum" class="form-control " style="width:50px;height:30px"  value="{{$local->nbrgarage}}"  max="9" min="0"></div>
                            
                        </div><br>
                        <div class="checkbox " style="display: flex;align-items: center;">
                        <div><label for=""><input name="shower" type="checkbox" value="ba" @if($local->nbrshower > 0)checked @endif >Bathroom</label></div>&nbsp
                        <div><input type="number" name="showernum" class="form-control " style="width:50px;height:30px" value="{{$local->nbrshower}}" max="9" min="0"></div>
                            
                        </div><br>
                        <div class="checkbox ">
                            <label for=""><input name="gardin" type="checkbox" value="ga" @if($local->gardin > 0)checked @endif >Gardin</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="pool" type="checkbox" value="po" @if($local->pool > 0)checked @endif >Pool</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="fur" type="checkbox" value="f" @if($local->furniture > 0)checked @endif >Furniture</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="papers" type="checkbox" value="p" @if($local->paper > 0)checked @endif >Papers</label>
                        </div>
                       </div>
                   </div>
                   <div class="form-group col-lg-12">
                       <label for="featured">Pictures of local</label>
                       <input type="file" multiple name="pictures[]" class="form-control">
                   </div>
                   <div class="form-group col-lg-12">
                       <label for="content">Description</label>
                       <textarea name="desc" id="desc" cols="5" rows="5" class="form-control" value="">{!! $local->desc !!}</textarea>
                   </div>
                   <div class="col-lg-1"></div>
                   <div class="form-group col-lg-11">
                       <label for="">Type</label>
                       <div style="display: flex;justify-content: space-around;width:50%">
                        <div class="radio ">
                            <label for=""><input name="type" type="radio" value="sale" @if($local->vl == 'sale')checked @endif>Sale</label>
                        </div><br>
                        <div class="radio">
                            <label for=""><input name="type" type="radio" value="rent" @if($local->vl == 'rent')checked @endif>Rent</label>
                        </div>
                       </div>
                   </div>

                   <div class="col-lg-1"></div>
                   <div class="form-group col-lg-4" >
                        <label for="title">Price</label>
                        <div class="" style="display: flex;align-items: center;">
                            <input type="number" name="price" class="form-control " style="width:90%" value="{{$local->price}}">
                            <div class="" style="width:10%;">&nbspDA</div>
                        </div>
                    </div>
                    <div class="form-group col-lg-3">
                       <label for="title">Per</label>
                       <select name="per" id="cetegory" class="form-control">
                           <option value="day">Day</option>
                           <option value="week">Week</option>
                           <option value="month">Month</option>
                           <option value="year">Year</option>
                       </select>
                   </div>
                   <div class="form-group col-lg-3">
                       <label for="title">Advance</label>
                       <div style="display: flex;justify-content: space-around;">
                        <input type="number" name="advnum" class="form-control" style="width:30%" value="1" min="1" max="29">
                        <select name="adv" id="cetegory" class="form-control" style="width:60%">
                           <option value="day">Day</option>
                           <option value="week">Week</option>
                           <option value="month">Month</option>
                           <option value="year">Year</option>
                        </select>
                       </div>
                       
                   </div>
                   <div class="col-lg-1"></div>
                   
                   <div class="form-group col-lg-12" style="margin-top:20px">
                       <div class="text-center">
                           <button class="btn btn-success" type="submit">update</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>

@stop 


@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#desc').summernote();
    });
</script>

<script>
    $(".l10").css("background-color", "#52B586");
</script>

@stop