@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Send Data Profile</h2>
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
            <form class="form-horizontal" action="{{ route('store.profile') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="name" name="name"
                                placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="prof">Profession</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="prof" name="prof"
                                placeholder="Enter Profession">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="email" name="email"
                                placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone">Phone</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="phone" name="phone"
                                placeholder="Enter Phone">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="address" name="address"
                                placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="facebook">Facebook Profile Link</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="facebook" name="facebook"
                                placeholder="Enter Facebook Profile Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="twitter">Twitter Profile Link</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="twitter" name="twitter"
                                placeholder="Enter Twitter Profile Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="instagram">Instagram Profile Link</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="instagram" name="instagram"
                                placeholder="Enter Instagram Profile Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="linkedin">linkedin Profile Link</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="linkedin" name="linkedin"
                                placeholder="Enter linkedin Profile Link">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Choose Profile Image</label>
                        <div class="controls">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="about_desc">About Profile</label>
                        <div class="controls">
                            <textarea class="" id="about_desc" rows="3" name="about_desc"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Send Data Profile</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection