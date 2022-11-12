<div>
    @if (session()->get('Arinfo')&&session()->get('Arinfo'))
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">
                                {{-- <a href="/admin"
                                    class="btn btn-outline-secondary"><i class="bi bi-skip-backward-fill"></i> Go
                                    Back</a> --}}
                                <span class="noselect">الشروط والأحكام</span>
                                {{-- <a href="/"
                                    class="btn btn-outline-secondary"><i class="bi bi-skip-forward-fill"></i> Login</a></h3> --}}
                        </div>
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="results">
                                    @if (Session::get('Infomessage'))
                                        <div class="alert alert-success">
                                            {{ Session::get('Infomessage') }}
                                        </div>
                                    @endif
                                </div>
                                {{-- <input type="hidden" name="user_id"
                                    value="{{ session()->get('LoggedAccount')['user_id'] }}"> --}}
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <div class="my-2 col-12">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-right">
                                                                    <div class="row">
                                                                        <div class="col-12 noselect">
                                                                            الصلاحية
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">الصلاحية</span>
                                                                                <input type="number" value="15" min="0"
                                                                                    max="30" class="form-control"
                                                                                    id="basic-url"
                                                                                    aria-describedby="basic-addon3"
                                                                                    wire:model="Validity">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <div class="my-2 col-12">
                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="media">
                                                                <div class="media-body text-right">
                                                                    <div class="row">
                                                                        <div class="col-12 noselect">
                                                                            طريقة الدفع
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="input-group mb-3">
                                                                                <input type="number" value="99" max="100"
                                                                                    min="0" class="form-control"
                                                                                    id="basic-url1"
                                                                                    aria-describedby="basic-addon4"
                                                                                    wire:model="Payment_Method">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon4">% عند التعميد</span>
                                                                                <input type="number" value="99" max="100"
                                                                                    min="0" class="form-control"
                                                                                    id="basic-url1"
                                                                                    aria-describedby="basic-addon4"
                                                                                    wire:model="Payment_Method2">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon4">% بعد أكمال العمل</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (!session()->get('ArInfomessage'))
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button wire:click.prevent="save()"
                                                class="btn btn-outline-success">التالي</button>
                                        </div>
                                    </div>
                                @else
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <a href="/admin/Arexport" class="btn btn-outline-primary">أستخراج</a>
                                        </div>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="row justify-content-center mx-2">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <h1 class="text-center text-capitalize m-5">لا يوجد معلومات كافية , قم بعملية التعبئة أولا</h1>
                        <a href="https://erp-com.preview-domain.com/public/admin/Report"
                            class="mx-auto btn btn-block w-25 btn-outline-primary m-5">تعبئة</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
