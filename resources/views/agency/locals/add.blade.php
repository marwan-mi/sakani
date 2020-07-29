@extends('layouts\app')

@section('content')
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Add local :</h2><br><br>
@include('includes.error')
<div class="panel panel-default">
           
           <div class="panel-body">
               <form action="{{route('local.store')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}

                   <div class="form-group col-lg-6">
                       <label for="title">Wilaya</label>
                       <select name="wilaya" id="cetegory" class="form-control">
                           <option value="blida">Blida</option>
                       </select>
                   </div>
                   <div class="form-group col-lg-6">
                       <label for="title">Commune</label>
                       <select name="commune" id="cetegory" class="form-control">
                           <option value="blida">Blida</option>
                           <option value="oulad yaich">Oulad yaich</option>
                           <option value="mozaia">Mozaia</option>
                           <option value="afroun">Afroun</option>
                       </select>
                   </div>
                   <div class="form-group col-lg-5">
                       <label for="title">Local Type</label><br>
                       <select name="typel" id="cetegory" class="form-control">
                           <option value="villa">Villa</option>
                           <option value="apartement">Apartement</option>
                           <option value="studio">Studio</option>
                           <option value="arab">Arab house</option>
                       </select>
                   </div>
                   
                   

                   <div class="form-group col-lg-3" style="">
                        <label for="title">Surface</label>
                        <div class="" style="display: flex;align-items: center;">
                            <input type="number" name="surface" class="form-control " style="width:90%">
                            <div class="" style="width:10%;">&nbspm²</div>
                        </div>
                    </div>

                    <div class="form-group col-lg-2" style="">
                        <label for="title">Pieces</label>
                        <input type="number" name="pieces" class="form-control " style="">
                    </div>
                    <div class="form-group col-lg-2" style="">
                        <label for="title">Etage</label>
                        <input type="number" name="etage" class="form-control " style="">
                    </div>
                    

                    <div class="form-group col-lg-12">
                       <label for="">Options</label>

                       <div style="display: flex;justify-content: space-around;align-items: center;">
                        <div class="checkbox " style="display: flex;align-items: center;">
                        <div><label for=""><input name="garage" type="checkbox" value="">Garage</label></div>&nbsp
                        <div><input type="number" name="garagenum" class="form-control " style="width:50px;height:30px" max="9" min="1"></div>
                            
                        </div><br>
                        <div class="checkbox " style="display: flex;align-items: center;">
                        <div><label for=""><input name="shower" type="checkbox" value="">Shower</label></div>&nbsp
                        <div><input type="number" name="showernum" class="form-control " style="width:50px;height:30px" max="9" min="1"></div>
                            
                        </div><br>
                        <div class="checkbox ">
                            <label for=""><input name="gardin" type="checkbox" value="">Gardin</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="pool" type="checkbox" value="">Pool</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="fur" type="checkbox" value="">Furniture</label>
                        </div><br>
                        <div class="checkbox">
                            <label for=""><input name="papers" type="checkbox" value="">Papers</label>
                        </div>
                       </div>
                   </div>
                   <div class="form-group col-lg-12">
                       <label for="featured">Pictures of local</label>
                       <input type="file" multiple name="pictures" class="form-control">
                   </div>
                   <div class="form-group col-lg-12">
                       <label for="content">Description</label>
                       <textarea name="desc" id="desc" cols="5" rows="5" class="form-control"></textarea>
                   </div>
                   <div class="col-lg-1"></div>
                   <div class="form-group col-lg-11">
                       <label for="">Type</label>
                       <div style="display: flex;justify-content: space-around;width:50%">
                        <div class="radio ">
                            <label for=""><input name="type" type="radio" checked value="sale">Sale</label>
                        </div><br>
                        <div class="radio">
                            <label for=""><input name="type" type="radio" value="rent">Rent</label>
                        </div>
                       </div>
                   </div>

                   <div class="col-lg-1"></div>
                   <div class="form-group col-lg-4" >
                        <label for="title">Price</label>
                        <div class="" style="display: flex;align-items: center;">
                            <input type="number" name="price" class="form-control " style="width:90%">
                            <div class="" style="width:10%;">&nbspDA</div>
                        </div>
                    </div>
                    <div class="form-group col-lg-3">
                       <label for="title">Per</label>
                       <select name="per" id="cetegory" class="form-control">
                           <option value="">Month</option>
                           <option value="">Year</option>
                       </select>
                   </div>
                   <div class="form-group col-lg-3">
                       <label for="title">Advance</label>
                       <div style="display: flex;justify-content: space-around;">
                        <input type="number" name="advnum" class="form-control" style="width:30%" value="1">
                        <select name="adv" id="cetegory" class="form-control" style="width:60%">
                            <option value="">month</option>
                            <option value="">Year</option>
                        </select>
                       </div>
                       
                   </div>
                   <div class="col-lg-1"></div>
                   
                   <div class="form-group col-lg-12">
                       <div class="text-center">
                           <button class="btn btn-success" type="submit">Add Local and shoose main picture</button>
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
    $(".l9").css("background-color", "#52B586");
</script>

@stop