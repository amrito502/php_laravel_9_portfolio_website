@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Banner</h2>
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
            <form class="form-horizontal" action="{{ route('home.store_banner') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="title">Enter Your Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="title" name="title"
                                placeholder="Enter Your Title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="name">Enter Your Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="name" name="name"
                                placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="pro">Enter Profession</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="pro" name="pro" placeholder="Enter Your Pro">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose Banner Image</label>
                        <div class="controls">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Banner Description</label>
                        <div class="controls">
                            <textarea class="" id="description" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Add Banner</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection