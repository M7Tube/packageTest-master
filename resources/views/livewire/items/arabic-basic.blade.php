<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">
                            {{-- <a href="/admin"
                                class="btn btn-outline-secondary"><i class="bi bi-skip-backward-fill"></i> Go
                                Back</a> --}}
                            <span class="mx-5 noselect">أنشاء عرض أسعار جديد</span>
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
                                                            <div class="media-body">
                                                                <div class="row">
                                                                    <div class="col-12 noselect">
                                                                        أسم الشركة
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control"
                                                                                id="inputName" type="text"
                                                                                placeholder="Mohammed S"
                                                                                wire:model="companyName"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">@error('name')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                            {{-- <label for="inputName">أسم الشركة</label> --}}
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
                                                                        رقم الملف.
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <div class="input-group input-group-lg">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-lg">ر.الملف</span>
                                                                                <input class="form-control "
                                                                                    id="inputdocNo" type="text"
                                                                                    wire:model="docNo"
                                                                                    autocomplete="off" disabled />
                                                                                <span
                                                                                    class="text-danger">@error('docNo')
                                                                                        {{ $message }}
                                                                                    @enderror</span>
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
                                                                        العنوان
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                                <select name="subject" class="form-control" wire:model="selectedSubjects">
                                                                                    <option value="0" selected>اختر العنوان المنساب لتقريرك</option>
                                                                                    @foreach ($subjects as $subject)
                                                                                        <option value="{{ $subject->subject_id }}">
                                                                                            {{ $subject->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <span class="text-danger">@error('subject')
                                                                                        {{ $message }}
                                                                                    @enderror</span>
                                                                                {{-- <label for="inputUserRole">اختر العنوان المنساب لتقريرك</label> --}}
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
                                                                        أسم العميل
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="inputName"
                                                                                type="text" placeholder="Mohammed S"
                                                                                wire:model="clientName"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">@error('name')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                            {{-- <label for="inputName">أسم العميل</label> --}}
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
                                                                        رقم هاتف العميل
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="inputName"
                                                                                type="text" placeholder="Mohammed S"
                                                                                wire:model="clientPhone"
                                                                                autocomplete="off" />
                                                                            <span class="text-danger">@error('name')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                            {{-- <label for="inputName">رقم هاتف العميل</label> --}}
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
                                                                        التاريخ
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-floating mb-1">
                                                                            <input class="form-control" id="date"
                                                                                type="text" autocomplete="off"
                                                                                value="{{ date('Y-m-d H:i:s') }}"
                                                                                disabled />
                                                                            <span class="text-danger">@error('date')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                            {{-- <label for="date">تاريخ عرض السعر</label> --}}
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
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button wire:click.prevent="save()" class="btn btn-outline-success">التالي</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
