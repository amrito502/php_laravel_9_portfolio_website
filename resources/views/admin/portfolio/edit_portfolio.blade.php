@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Portfolio</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <p class="alert-success">
                <?php

                use Illuminate\Support\Facades\Session;

                $message = Session::get('message');
                if($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
            </p>
            <form class="form-horizontal" action="{{ route('update.portfolio',$portfolio->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="title">Enter Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="title" name="title"
                                placeholder="Write Title" value="{{ $portfolio->title }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item_1">Portfolio Item-1</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item_1" name="item_1"
                                placeholder="write item-1" value="{{ $portfolio->item_1 }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item_2">Portfolio Item-2</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item_2" name="item_2"
                                placeholder="write item-2" value="{{ $portfolio->item_2 }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item_3">Portfolio Item-3</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item_3" name="item_3"
                                placeholder="write item-3" value="{{ $portfolio->item_3 }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item_4">Portfolio Item-4</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item_4" name="item_4"
                                placeholder="write item-4" value="{{ $portfolio->item_4 }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item_5">Portfolio Item-5</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item_5" name="item_5"
                                placeholder="write item-5" value="{{ $portfolio->item_5 }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose Portfolio Image</label>
                        <div class="controls">
                        <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" width="50px">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Portfolio Description</label>
                        <div class="controls">
                            <textarea class="" id="description" rows="3" name="desc" placeholder="write Description">{{ $portfolio->desc }}</textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Update Portfolio</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection