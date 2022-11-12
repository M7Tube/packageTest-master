<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            @if (session()->get('Arinfo'))
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div class="row">
                                        <h3 class="text-center font-weight-light my-4 noselect">المواد</h3>
                                    </div>
                                    <div class="results">
                                        @if (Session()->has('Cartmessage'))
                                            <div class="alert alert-success">
                                                {{ Session('Cartmessage') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="results">
                                        @if (Session()->has('importmessage'))
                                            <div class="alert alert-success">
                                                {{ Session('importmessage') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="results">
                                        @if (Session()->has('Cartmessage2'))
                                            <div class="alert alert-danger">
                                                {{ Session('Cartmessage2') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <input wire:model.debounce.300ms="search" type="text"
                                                    class="form-control mb-3" placeholder="أبحث هنا">
                                            </div>
                                            @if ($search)
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        @forelse ($items as $item)
                                                            @if (!isset(session()->get('Arcart', [])[$item->item_id]) && session()->get('Arcart', []) != 'Arinfo')
                                                                <div class="Scard card shadow-lg border-2 rounded-lg">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <div class="media">
                                                                                <div class="media-body text-right">
                                                                                    <div class="row">
                                                                                        <div class="col-4 noselect">
                                                                                            {{ $item->name }}
                                                                                        </div>
                                                                                        <div class="col-4 noselect">
                                                                                            {{ $item->price }} ر.س
                                                                                        </div>
                                                                                        <div class="col-4 noselect">
                                                                                            @if (!isset(session()->get('Arcart', [])[$item->item_id]))
                                                                                                <button type="button"
                                                                                                    class="btn btn-outline-info"
                                                                                                    wire:click.prevent="select({{ $item->item_id }})">أختار</button>
                                                                                            @else
                                                                                                <button type="button"
                                                                                                    class="btn btn-outline-danger"
                                                                                                    wire:click.prevent="Unselect({{ $item->item_id }})">حذف</button>
                                                                                            @endif
                                                                                            <br />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <td>
                                                                            <button type="button"
                                                                                class="btn btn-outline-success"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edititemModal"
                                                                                wire:click.prevent="edit({{ $item->item_id }})">Edit</button>
                                                                        </td> --}}
                                                            @else
                                                            @endif
                                                        @empty
                                                            <h5 class="text-center">
                                                                                            <i>فارغة <button
                                                                                                    type="button"
                                                                                                    class="btn btn-outline-success mb-2"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#CreateuserModal"><i
                                                                                                        class="bi bi-plus-square"></i></button></i>
                                                                                        </h5>
                                                        @endforelse
                                                        {!! $items->links() !!}
                                                    </div>
                                                    {{-- <div wire:ignore.self class="modal fade" id="edititemModal"
                                                    tabindex="-1" aria-labelledby="edititemModallabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="edititemModalText">Edit Item
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    wire:click.prevent="clear()"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @if (Session()->has('WrongItem'))
                                                                    <div class="alert alert-danger">
                                                                        {{ Session('WrongItem') }}
                                                                    </div>
                                                                @endif
                                                                @if (!Session()->has('WrongItem'))
                                                                    <div class="card-body">
                                                                        <form autocomplete="off" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="item_id"
                                                                                wire:model="item_id">
                                                                            <div class="results">
                                                                                @if (Session()->has('message'))
                                                                                    <div class="alert alert-success">
                                                                                        {{ Session('message') }}
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-floating mb-3">
                                                                                        <input class="form-control"
                                                                                            id="InputItemName" type="text"
                                                                                            name="name" autocomplete="off"
                                                                                            wire:model="name" />
                                                                                        <label for="inputItemName">Item
                                                                                            Name</label>
                                                                                        <span
                                                                                            class="text-danger">@error('name')
                                                                                                {{ $message }}
                                                                                            @enderror</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-floating mb-3">
                                                                                        <input class="form-control"
                                                                                            id="InputItemPrice" type="text"
                                                                                            name="price" autocomplete="off"
                                                                                            wire:model="price" />
                                                                                        <label for="inputItemPrice">Item
                                                                                            Price</label>
                                                                                        <span
                                                                                            class="text-danger">@error('price')
                                                                                                {{ $message }}
                                                                                            @enderror</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    wire:click.prevent="clear()">Close</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    wire:click.prevent="delete()">Delete</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    wire:click.prevent="update()">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                 <div wire:ignore.self class="modal fade" id="CreateuserModal" tabindex="-1"
                                        aria-labelledby="CreateuserModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="CreateuserModalText">أنشاء مادة جديدة
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Session()->has('WrongUser'))
                                                        <div class="alert alert-danger">
                                                            {{ Session('WrongUser') }}
                                                        </div>
                                                    @endif
                                                    @if (!Session()->has('WrongUser'))
                                                        <div class="card-body">
                                                            <form autocomplete="off" method="POST">
                                                                @csrf
                                                                <div class="results">
                                                                    @if (Session()->has('message'))
                                                                        <div class="alert alert-success">
                                                                            {{ Session('message') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control"
                                                                                id="inputname" type="text"
                                                                                name="name" autocomplete="off"
                                                                                wire:model="name" />
                                                                            <label for="inputname">أسم المادة</label>
                                                                            <span
                                                                                class="text-danger">@error('name')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 col-md-6">
                                                                        <div class="form-floating mb-3">
                                                                            <input class="form-control"
                                                                                id="inputprice" type="text"
                                                                                name="price" autocomplete="off"
                                                                                wire:model="price" />
                                                                            <label for="inputprice">سعر المادة</label>
                                                                            <span
                                                                                class="text-danger">@error('price')
                                                                                    {{ $message }}
                                                                                @enderror</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-6 col-md-6">
                                                                        <button type="button"
                                                                                class="btn btn-outline-success"
                                                                                wire:click.prevent="addSearchName()">أستخدام جملة البحث</button>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"
                                                        wire:click.prevent="Create()">أنشاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                </div>
                                            @else
                                            @endif
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-control" wire:model="orderBy">
                                                        <option value="name">Name</option>
                                                        <option value="price">price</option>
                                                    </select>
                                                    <label for="ChooseOrderCoulmn">Order By Coulmn</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-floating mb-3">
                                                    <select class="form-control" wire:model="orderAsc">
                                                        <option value="1">Ascending</option>
                                                        <option value="0">Descending</option>
                                                    </select>
                                                    <label for="ChooseOrderType">Order Type</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <h4 class="text-center font-weight-light my-4 noselect">المواد المختارة</h4>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12">
                                            <div class="card-body table-responsive">
                                                @if (session()->get('Arcart'))
                                                    @forelse (array_keys(session()->get('Arcart')) as $key)
                                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="media">
                                                                        <div class="media-body text-right">
                                                                            <div class="row">
                                                                                <div class="col-6 col-md-2  noselect">
                                                                                    {{ session()->get('Arcart')[$key]['name'] }}
                                                                                </div>
                                                                                @if (!is_null(session()->get('Arcart')[$key]['price']))
                                                                                    <div
                                                                                        class="col-6 col-md-2  noselect">
                                                                                        {{ session()->get('Arcart')[$key]['price'] }}
                                                                                        ر.س
                                                                                        <span
                                                                                            class="text-danger">@error('price')
                                                                                                {{ $message }}
                                                                                            @enderror</span>
                                                                                    </div>
                                                                                @else
                                                                                    <div
                                                                                        class="col-6 col-md-2  noselect">
                                                                                        <div class="input-group mb-3">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                id="basic-addon3">أضافة سعر</span>
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                id="basic-url"
                                                                                                aria-describedby="basic-addon3"
                                                                                                wire:model="price">
                                                                                        </div>
                                                                                    </div>
                                                                                @endif

                                                                                <div
                                                                                    class="col-6 col-md-4 mt-1  noselect">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-success"
                                                                                        wire:click.prevent="incress({{ $key }})">+</button>
                                                                                    {{ session()->get('Arcart')[$key]['quantity'] }}
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-danger"
                                                                                        wire:click.prevent="decress({{ $key }})">-</button>
                                                                                </div>
                                                                                <div
                                                                                    class="col-6 col-md-4 mt-1  noselect">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-danger"
                                                                                        wire:click.prevent="Unselect({{ $key }})">حذف</button>
                                                                                    <br />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row">
                                                            <div class="col-6">
                                                                @if ($loop->last)
                                                                    <div class="text-center">TOTAL</div>
                                                                @else
                                                                @endif
                                                            </div>
                                                            <div class="col-6">
                                                                @if ($loop->last)
                                                                    {{ array_sum(array_column(session()->get('cart'), 'price')) }}
                                                                    SAR
                                                                @else
                                                                @endif
                                                            </div>
                                                        </div> --}}
                                                    @empty
                                                    @endforelse
                                                @else
                                                    <div class="text-center">سلة فارغة</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button wire:click.prevent="save()"
                                                class="btn btn-outline-success">التالي</button>
                                        </div>
                                    </div>
                                    {{-- <a href="{{ route('export') }}" class="btn btn-outline-primary">Export</a> --}}
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
                                <h1 class="text-center text-capitalize m-5">ليس هناك معلومات معبئة مسبقا للدخول لهذه الصفحة</h1>
                                <a href="https://erp-com.preview-domain.com/public/admin/ArabicReport"
                                    class="mx-auto btn btn-block w-25 btn-outline-primary m-5">تعبئة</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </main>
    </div>
</div>
</div>
