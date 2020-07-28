@extends('layouts\app')


@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif

        <div class="panel panel-default">
            <div class="panel-heading">
               <h2 class="text-center">Create post </h2> 
            </div>
            <div class="panel-body">
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="featured">Featured image</label>
                        <input type="file" name="featured" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">selecet a category</label>
                        <select name="category_id" id="cetegory" class="form-control">
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="">selecet tags</label>
                        @foreach($tags as $tag)
                        <div class="checkbox">
                            <label for=""><input name="tags[]" type="checkbox" value="{{$tag->id}}">{{$tag->tag}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Store post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@stop