@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update What Client Say</h2>
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
            <form class="form-horizontal" action="{{ route('update.client',$client->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Enter Client Name</label>
                        <div class="controls">
                            <input type="text"value="{{ $client->name }}" class="span6 typeahead" id="name" name="name"
                                placeholder="Enter Client Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="client_pro">Enter Client Pro</label>
                        <div class="controls">
                            <input type="text"value="{{ $client->client_pro }}" class="span6 typeahead" id="client_pro" name="client_pro"
                                placeholder="Enter Client Pro">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">Update Client Image</label>
                        <div class="controls">
                            <img src="{{ asset('images/client/'.$client->image) }}" width="50px">
                            <input type="file" name="image" class="input-file uniform_on" id="image">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Client Say</label>
                        <div class="controls">
                            <textarea class="" id="description" rows="3" name="description">{{ $client->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="add-btn">Update Client</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection