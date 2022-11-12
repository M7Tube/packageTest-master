<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4"><a href="/admin"
                                class="btn btn-outline-secondary"><i class="bi bi-skip-backward-fill"></i> Go
                                Back</a><span class="mx-5">Create Account</span>
                                {{-- <a href="/"
                                class="btn btn-outline-secondary"><i class="bi bi-skip-forward-fill"></i> Login</a></h3> --}}
                    </div>
                    <div class="card-body">
                        <form action="" enctype='multipart/form-data' autocomplete="off" method="POST">
                            @csrf
                            <div class="results">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                            </div>
                            <div class="results">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputName" type="text"
                                            placeholder="Mohammed S" name="name" autocomplete="off"
                                            value="{{ old('name') }}" />
                                        <span class="text-danger">@error('name')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputName">User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email"
                                            placeholder="name@example.com" name="email" autocomplete="off"
                                            value="{{ old('email') }}" />
                                        <span class="text-danger">@error('email')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password"
                                            placeholder="Create a password" name="password" autocomplete="new-password"
                                            value="{{ old('password') }}" />
                                        <span class="text-danger">@error('password')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="file" id="inputWorkerPicture" autocomplete="off" name="pic"
                                            class="form-control" placeholder="Worker Picture"
                                            value="{{ old('pic') }}">
                                        <span class="text-danger">@error('pic')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputWorkerPicture">Worker Picture</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select name="department_id" class="form-control">
                                            <option value="0" selected>Choose The User Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->department_id }}">
                                                    {{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('department_id')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputUserDepartment">Choose The User Department</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select name="role_id" class="form-control">
                                            <option value="0" selected>Choose The User Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->role_id }}">
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('role_id')
                                                {{ $message }}
                                            @enderror</span>
                                        <label for="inputUserRole">Choose The User Role</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
