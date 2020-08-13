<div class="overlay_search">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="form_search-wrap">
            
                <form  method="get" action="/results">
                    <div class="form-group  form" style="">
                        <div class="inputGroup" style="">
                            <input id="radio1" name="radio" type="radio" value="sale" checked/>
                            <label for="radio1">Sale</label>
                        </div>
                        <div class="inputGroup" style="">
                            <input id="radio2" name="radio" type="radio" value="rent"/>
                            <label for="radio2">Rent</label>
                        </div>
                    
                    <div class=" " style="margin-bottom:40px">
                       <select name="category_id" id="cetegory" class="cate form-control" style="">
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                       </select>
                   </div>
                    </div>
                    <input class="overlay_search-input" name="query" placeholder="Type and hit Enter..." type="text" style="margin-top:0px">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>