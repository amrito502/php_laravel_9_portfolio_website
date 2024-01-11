@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Banner Data</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%;" scope="col">ID</th>
                        <th style="width: 15%;" scope="col">Title</th>
                        <th style="width: 5%;" scope="col">Name</th>
                        <th style="width: 10%;" scope="col">Profession</th>
                        <th style="width: 30%;" scope="col">Description</th>
                        <th style="width: 10%;" scope="col">Image</th>
                        <th style="width: 5%;" scope="col">Status</th>
                        <th style="width: 20%;" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($BannerSection as $key=>$banner);
                    <tr>

                        <td>{{ $banner->id }}</td>
                        <td>{{ $banner->title }}</td>
                        <td>{{ $banner->name }}</td>
                        <td>{{ $banner->pro }}</td>
                        <td>{{ $banner->description }}</td>
                        <td>
                            <img src="{{ asset('images/banner/'.$banner->image) }}" style="width: 70px;" alt="img">
                        </td>
                        <td class="center">
                            @if($banner->status==1)
                            <span class="label label-success">Active</span>
                            @else
                            <span class="label label-danger">Deactive</span>
                            @endif
                        </td>
                        <td class="center">
                            <!-- =========ad========== -->
                            @if($banner->status==1)
                            <a class="btn btn-success" href="{{ url('/banner-status'.$banner->id) }}">
                                <i class="halflings-icon white thumbs-down"></i>
                            </a>
                            @else
                            <a class="btn btn-danger" href="{{ url('/banner-status'.$banner->id) }}">
                                <i class="halflings-icon white thumbs-up"></i>
                            </a>
                            @endif
                            <!-- ==========ad========== -->
                            <a class="btn btn-info" href="{{ route('edit.banner',$banner->id) }}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete');" href="{{ route('delete.banner',$banner->id) }}">
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