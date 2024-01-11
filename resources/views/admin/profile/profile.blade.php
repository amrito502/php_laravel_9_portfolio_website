@extends('admin.admin_master')
@section('admin_content')
<a href="{{ route('add.profile') }}" class="btn btn-info">Add Profile One Time</a>
@foreach($Profile as $key=>$profile)

<div class="container">
    <div class="row">
        <div class="main_profile">
            <div class="col-md-12">
                <div class="profile">
                    <div class="card">
                        <div class="pro_img">
                            <img src="{{ asset('images/profile/'.$profile->image) }}" alt="">
                        </div>
                        <div class="pro_name">
                            <h5>{{ $profile->name }}</h5>
                            <p>{{ $profile->prof }}</p>
                        </div>
                        <div class="pro_address">
                            <h6>Email : {{ $profile->email }}</h6>
                            <h6>Phone : +88{{ $profile->phone }}</h6>
                            <h6>Address : {{ $profile->address }}</h6>
                        </div>
                        <div class="pro_desc">
                            <h4>About Me</h4>
                            <p>{{ $profile->about_desc }}</p>
                        </div>
                        <div class="pro_social">
                            <a href="{{ $profile->facebook }}" target="_blank" class="pro_icon"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a href="{{ $profile->twitter }}" target="_blank" class="pro_icon"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="{{ $profile->instagram }}" target="_blank" class="pro_icon"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="{{ $profile->linkedin }}" target="_blank" class="pro_icon"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <a href="{{ url('/password/reset') }}" target="_blank" class="pro_change_pass">Change Password</a>

                        <div class="pro_footer">
                        <a href="{{ route('edit.profile',$profile->id) }}" class="pro_btn btn btn-info">Update Profile</a>
                        <a href="{{ route('delete.profile',$profile->id) }}" onclick="return confirm('Are you sure to delete');"  class="pro_btn btn btn-danger">Delete Profile</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection