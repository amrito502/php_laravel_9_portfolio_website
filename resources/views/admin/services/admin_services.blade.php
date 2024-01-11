@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Services Data</h2>
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
                        <th scope="col">ID</th>
                        <th scope="col">target</th>
                        <th scope="col">name</th>
                        <th scope="col">title</th>
                        <th scope="col">items</th>
                        <th scope="col">description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $key=>$service)
                    <tr>
                        
                        <td>{{ $key+1 }}</td>
                        <td>{{ $service->target }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->title }}</td>
                        <td>item_1:
                            {{ $service->item_1 }} </br>
                            item_2:
                            {{ $service->item_2 }} </br>
                            item_3:
                            {{ $service->item_3 }} </br>
                            item_4:
                            {{ $service->item_4 }} </br>
                            item_5:
                            {{ $service->item_5 }} </br>

                        </td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <img src="{{ asset('images/services/'.$service->image) }}" style="width: 70px;" alt="img">
                        </td>
                        <td class="center">
                            @if($service->status==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Deactive</span>
                            @endif
                        </td>
                        <td class="center">
                            <!-- =========ad========== -->
                            @if($service->status==1)
                            <a class="btn btn-success" href="{{ url('/services-status'.$service->id) }}">
                                <i class="halflings-icon white thumbs-down"></i>
                            </a>
                            @else
                            <a class="btn btn-danger" href="{{ url('/services-status'.$service->id) }}">
                                <i class="halflings-icon white thumbs-up"></i>
                            </a>
                            @endif
                            <!-- ==========ad========== -->
                            <a class="btn btn-info" href="{{ route('edit.services',$service->id) }}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete');" href="{{ route('delete.services',$service->id) }}">
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