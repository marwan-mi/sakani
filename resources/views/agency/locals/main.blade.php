@extends('layouts\app')

@section('style')
<link href="{{ asset('css/radiobox.css') }}" rel="stylesheet">

@stop

@section('content')
<style>
  
</style>
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Choose main picture :</h2><br><br>
<div class="panel panel-default">
           
           <div class="panel-body">
<form action="{{route('main')}}" method="post">
{{csrf_field()}}
    <!-- <div class="row justify-content-center pb-4"> -->
                  
            @foreach($images as $image)
            <div class="col-xs-6 col-sm-4 col-md-3 nopad text-center">
                <label class="image-radio">
                    <img class="img-responsive2" src="{{ asset($image->link)}}" />
                    <input type="radio" name="image_radio" value="{{$image->id}}" />
                </label>
            </div>
            @endforeach
        <!-- </div> -->
        <div class="form-group col-lg-12" style="margin-top:20px">
            <div class="text-center">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
</form>
</div>
       </div>
    

@stop 
@section('script')

<script>
$(".l9").css("background-color", "#52B586");

      $(document).ready(function(){
    // add/remove checked class
    $(".image-radio").each(function(){
        if($(this).find('input[type="radio"]').first().attr("checked")){
            $(this).addClass('image-radio-checked');
        }else{
            $(this).removeClass('image-radio-checked');
        }
    });

    // sync the input state
    $(".image-radio").on("click", function(e){
        $(".image-radio").removeClass('image-radio-checked');
        $(this).addClass('image-radio-checked');
        var $radio = $(this).find('input[type="radio"]');
        $radio.prop("checked",!$radio.prop("checked"));

        e.preventDefault();
    });
});
    </script>
@stop