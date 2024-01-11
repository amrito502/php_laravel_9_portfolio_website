@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Blog</h2>
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
            <form class="form-horizontal" action="{{ route('update.blog',$blog->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Blog Name</label>
                        <div class="controls">
                            <input type="text" value="{{ $blog->name }}" class="span6 typeahead" id="name" name="name"
                                placeholder="Write Blog Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="title">Blog Title</label>
                        <div class="controls">
                            <input type="text" value="{{ $blog->title }}" class="span6 typeahead" id="title" name="title"
                                placeholder="Write Blog Title">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose Blog Image</label>
                        <div class="controls">
                            <img src="{{ asset('images/blog/'.$blog->image) }}" width="50px">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Description</label>
                        <div class="controls">
                            <textarea class="" id="description" placeholder="Write Blog Description" rows="3" name="description">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Update Blog</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection