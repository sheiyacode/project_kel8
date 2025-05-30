@extends('user.layout.main')

@section('content')
<section class="section" id="profile">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-12">
        <h2>Your Profile</h2>
        <p>Manage your personal information and account settings.</p>
      </div>
    </div>

    <div class="row">
      <!-- Profile Info -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Profile Information
          </div>
          <div class="card-body">
            <p><strong>Full Name:</strong> {{ Auth::user()->full_name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Joined At:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
          </div>
        </div>
      </div>

      <!-- Edit Form -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-secondary text-white">
            Update Info
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('user.profile.update') }}">
              @csrf
              @method('PUT')

              <div class="form-group mb-3">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ Auth::user()->full_name }}">
              </div>

              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
              </div>

              <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
