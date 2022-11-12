<div id="app">
    <div id="layoutAuthentication_content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="/public/images/logo.png" alt="" width="60" height="48">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-bounding-box"></i>Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"><i class="bi bi-file-earmark-person-fill"></i>
                                        {{ session()->get('LoggedAccount')['name'] }}</a></li>
                                <li><a class="dropdown-item"><i class="bi bi-envelope"></i>
                                        {{ session()->get('LoggedAccount')['email'] }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="bi bi-door-closed"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if (session()->get('LoggedAccount')['role_id'] == 2 || session()->get('LoggedAccount')['role_id'] == 1)
            <main>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div class="results">
                                        @if (Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <h3 class="text-center font-weight-light my-4">Create Inspection <i
                                                class="bi bi-textarea-resize"></i></h3>
                                        <div class="col-12 col-md-6">
                                            <a href="{{ route('template.create') }}"
                                                class="btn btn-outline-success w-100 mb-2 text-capitalize">Create
                                                Temmplate <i class="bi bi-file-earmark-plus"></i></a>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <a href="{{ route('control') }}"
                                                class="btn btn-outline-primary w-100 mb-2 text-capitalize">Dashboard <i
                                                    class="bi bi-menu-app"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @forelse ($templates as $template)
                                            <div class="my-2 col-xl-3 col-sm-6 col-12">
                                                <a href="{{ route('template.manage', $template->template_id) }}"
                                                    class="text-dark" style="text-decoration: none;">
                                                    <div class="Scard card shadow-lg border-2 rounded-lg">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="align-self-center">
                                                                    @if (!is_null($template->pic))
                                                                        <img src="{{ $template->pic }}" alt=""
                                                                            width="35px">
                                                                    @else
                                                                        <i class="bi bi-file-earmark-bar-graph"></i>
                                                                    @endif
                                                                </div>
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-right">
                                                                        <h3>{{ $template->name }}</h3>
                                                                        @if (!is_null($template->user_id))
                                                                            <span>Created By <span
                                                                                    class="text-muted">{{ $template->user->name }}</span></span>.
                                                                        @else
                                                                            <span>Created By <span
                                                                                    class="text-danger">Unkowne</span></span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            {{-- <div class="card text-center my-2 col-12 col-md-6 col-lg-3">
                                            <div class="card-header">
                                                {{ $template->name }}
                                            </div>
                                            <div class="card-body">
                                                @if (!is_null($template->user_id))
                                                    <h5 class="card-title text-capitalize">This Template is Created By
                                                        <span
                                                            class="text-muted">{{ $template->user->name }}</span>.
                                                    </h5>
                                                @else
                                                    <h5 class="card-title">Created By !!!Unkowne</h5>
                                                @endif
                                                <p class="card-text text-capitalize">if you like to use this template
                                                    please hit this button.</p>
                                                <a href="" class="btn btn-outline-primary text-capitalize"><i
                                                        class="bi bi-file-earmark-plus"></i> create new form</a>
                                            </div>
                                            <div class="card-footer text-muted">
                                                {{ date('d M Y - H:i:s', $template->created_at->timestamp) }}
                                            </div>
                                        </div> --}}
                                        @empty
                                            <h3 class="text-center text-capitalize text-muted">empty</h3>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endif
        {{-- @if (session()->get('LoggedAccount')['role_id'] == 3 || session()->get('LoggedAccount')['role_id'] == 1)
            <main>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div class="results">
                                        @if (Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <h3 class="text-center font-weight-light my-4">Quotation <i
                                                class="bi bi-file-earmark-spreadsheet"></i></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="my-2 col-xl-3 col-sm-6 col-12">
                                            <a href="{{ route('info') }}" class="text-dark"
                                                style="text-decoration: none;">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                                            </div>
                                                            <div class="media d-flex">
                                                                <div class="media-body text-right">
                                                                    <h3>Create New Quotation</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="my-2 col-xl-3 col-sm-6 col-12">
                                            <a href="{{ route('Arabicinfo') }}" class="text-dark"
                                                style="text-decoration: none;">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                                            </div>
                                                            <div class="media d-flex">
                                                                <div class="media-body text-right">
                                                                    <h3>أنشاء عرض أسعار جديد</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="my-2 col-xl-3 col-sm-6 col-12">
                                            <a href="{{ route('Viewimport') }}" class="text-dark"
                                                style="text-decoration: none;">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="align-self-center">
                                                                <i class="bi bi-file-earmark-bar-graph"></i>
                                                            </div>
                                                            <div class="media d-flex">
                                                                <div class="media-body text-right">
                                                                    <h3>Import Item</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endif --}}
    </div>
</div>
