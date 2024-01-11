@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Message</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        @foreach($messages as $key=>$message)
        @endforeach         

        <div class="main_message card">
            <div class="card-body">
            <div class="message_name">
                    <h6>Message No. : {{ $key+1 }}</h6>
                </div>
                <div class="message_name">
                    <h6>Name : {{ $message->name }}</h6>
                </div>
                <div class="message_email">
                <h6>E-mail : {{ $message->email }}</h6>
                </div>
                <div class="message_desc">
                    <h6>Message :</h6>
                    <p>{{ $message->message }}</p>
                </div>
            </div>
            <a href="{{ route('admin.message') }}" class="btn btn-info">Back All Message</a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete');" href="{{ route('delete.message',$message->id) }}">Delete Message</a>
        </div>
   
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection