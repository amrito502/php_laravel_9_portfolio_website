@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Services</h2>
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
            <form class="form-horizontal" action="{{ route('store.services') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="target">Enter Button Target ID</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="target" name="target"
                                placeholder="Enter Button Target ID">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="name">Enter Button Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="name" name="name"
                                placeholder="Enter Button Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="title">Enter Service Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="title" name="title"
                                placeholder="Enter Service Title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item">Enter Service Item-1</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item" name="item_1"
                                placeholder="Enter Service item-1">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item">Enter Service Item-2</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item" name="item_2"
                                placeholder="Enter Service item-2">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item">Enter Service Item-3</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item" name="item_3"
                                placeholder="Enter Service item-3">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item">Enter Service Item-4</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item" name="item_4"
                                placeholder="Enter Service item-4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="item">Enter Service Item-5</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="item" name="item_5"
                                placeholder="Enter Service item-5">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose services Image</label>
                        <div class="controls">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Services Description</label>
                        <div class="controls">
                            <textarea class="" id="description" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Add Services</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection