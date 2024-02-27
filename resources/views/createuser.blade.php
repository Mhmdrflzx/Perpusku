@extends('layout.navbar')
@extends('layout.sidebar')

@section('content')

<main id="main" class="main">

    <div id="page-wrapper">
        <div class="main-page">
            <a>　　　　　　　　　　　　　　　　　　　　　　　　</a>
            <div class="card-header" style="background-color: rgb(245, 254, 255);">
                    <div class="d-flex justify-content-between">
              </div>
            </div>
        </div>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="pagetitle text-center">
                    <h1>Tambah User</h1>
                  </div><!-- End Page Title -->

                  <form action="/createuser" method="POST" enctype="multipart/form-data">

                    @csrf <!-- Token CSRF untuk keamanan -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="role" {{ old('role') == '' ? 'selected' : '' }}></option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ old('role') == 'petugas' ? 'selected' : '' }}>Petugas</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>                        

                    <br>
                    <div class="container d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection