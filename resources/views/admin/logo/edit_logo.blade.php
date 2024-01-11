@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Logo</h2>
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
            <form class="form-horizontal" action="{{ route('update.logo',$logo->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="firstname">Logo First Name</label>
                        <div class="controls">
                            <input type="text" value="{{ $logo->firstname }}" class="span6 typeahead" id="firstname" name="firstname"
                                placeholder="Enter Logo First Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="lastname">Logo Last Name</label>
                        <div class="controls">
                            <input type="text" value="{{ $logo->lastname }}" class="span6 typeahead" id="lastname" name="lastname"
                                placeholder="Enter Logo Last Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="logo">Choose Logo</label>
                        <div class="controls">
                        <img src="{{ asset('images/logo/'.$logo->image) }}" width="50px">
                            <input type="file" name="image" class="input-file uniform_on" id="logo">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Update Logo</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection