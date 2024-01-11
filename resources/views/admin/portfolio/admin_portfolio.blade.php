@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Portfolio Data</h2>
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
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Items</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Portfolio as $key=>$portfolio);
                    <tr>

                        <td>{{ $key+1}}</td>
                        <td>{{ $portfolio->title }}</td>
                        <td>
                            1.{{ $portfolio->item_1 }}
                            2.{{ $portfolio->item_2 }}
                            3.{{ $portfolio->item_3 }}
                            4.{{ $portfolio->item_4 }}
                            5.{{ $portfolio->item_5 }}

                        </td>
                        <td>{{ $portfolio->desc }}</td>
                        <td>
                            <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" style="width: 70px;" alt="img">
                        </td>
                        <td class="center">
                            <a class="btn btn-info" href="{{ route('edit.portfolio',$portfolio->id) }}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete');"
                                href="{{ route('delete.portfolio',$portfolio->id) }}">
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