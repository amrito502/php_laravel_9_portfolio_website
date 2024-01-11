@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Logo</h2>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%;" scope="col">No.</th>
                        <th style="width: 15%;" scope="col">Text-Logo</th>
                        <th style="width: 5%;" scope="col">Image-Logo</th>
                        <th style="width: 20%;" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Logo as $key=>$logo);
                    <tr>

                        <td>{{ $key+1 }}</td>
                        <td>{{ $logo->firstname }} {{ $logo->lastname }}</td>
                        <td>
                            <img src="{{ asset('images/logo/'.$logo->image) }}" style="width: 70px;" alt="img">
                        </td>
                        <td class="center">
                            <a class="btn btn-info" href="{{ route('edit.logo',$logo->id) }}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete');"
                                href="{{ route('delete.logo',$logo->id) }}">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
@endsection