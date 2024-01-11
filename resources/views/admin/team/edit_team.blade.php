@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Team Members</h2>
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
            <form class="form-horizontal" action="{{ route('update.team',$team->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Enter Your Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="name" name="name"
                                placeholder="Enter Your Name" value="{{ $team->name }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="title">Enter Your Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="title" name="title"
                                placeholder="Enter Your title" value="{{ $team->title }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="facebook">Enter Fontawsome Facebook Icon Link</label>
                        <div class="controls">
                            <input type="text" value="{{ $team->facebook }}" class="span6 typeahead" id="facebook" name="facebook" placeholder="fontawsome facebook Icon Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="twitter">Enter Fontawsome Twitter Icon Link</label>
                        <div class="controls">
                            <input type="text" value="{{ $team->twitter }}"  class="span6 typeahead" id="twitter" name="twitter" placeholder="fontawsome twitter Icon Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="instagram">Enter Fontawsome Instagram Icon Link</label>
                        <div class="controls">
                            <input type="text" value="{{ $team->instagram }}" class="span6 typeahead" id="instagram" name="instagram" placeholder="fontawsome instagram Icon Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="linkedin">Enter Fontawsome Linkedin Icon Link</label>
                        <div class="controls">
                            <input type="text" value="{{ $team->linkedin }}" class="span6 typeahead" id="linkedin" name="linkedin" placeholder="fontawsome linkedin Icon Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose Banner Image</label>
                        <div class="controls">
                        <img src="{{ asset('images/team/'.$team->image) }}" width="50px">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Update Team Members</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection