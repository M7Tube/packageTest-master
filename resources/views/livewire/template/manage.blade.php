<div id="app">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center mx-2">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="row">
                                    <h3 class="text-center font-weight-light my-4">{{ $template->name }} Template</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a href="{{ route('form.create', ['template_id' => $template->template_id]) }}"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-plus"></i>Create <span
                                                                        class="text-muted">Inspection <i
                                                                            class="bi bi-ui-checks"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a href="{{ route('attrubite.create', ['template_id' => $template->template_id]) }}"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-plus"></i>Create <span
                                                                        class="text-muted">Question <i
                                                                            class="bi bi-patch-question"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a href="{{ route('selector.create', ['template_id' => $template->template_id]) }}"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-plus"></i>Create <span
                                                                        class="text-muted">Selector <i
                                                                            class="bi bi-patch-question"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a href="{{ route('textbox.create', ['template_id' => $template->template_id]) }}"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-plus"></i>Create <span
                                                                        class="text-muted">Text Box <i
                                                                            class="bi bi-patch-question"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a href="{{ route('category.create', ['template_id' => $template->template_id]) }}"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-2 rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-plus"></i>Create <span
                                                                        class="text-muted">Category <i
                                                                            class="bi bi-tags"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="my-2 col-xl-3 col-sm-6 col-12">
                                        <a data-bs-toggle="modal" data-bs-target="#DeleteTemplateModal"
                                            class="text-dark" style="text-decoration: none;">
                                            <div class="Scard card shadow-lg border-1 border-danger rounded-lg">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="media-body text-right">
                                                                <h4><i class="bi bi-file-excel"></i>Delete <span
                                                                        class="text-muted">{{ $template->name }}
                                                                        <i class="bi bi-textarea-resize"></i></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div wire:ignore.self class="modal fade" id="DeleteTemplateModal" tabindex="-1"
                                        aria-labelledby="DeleteTemplateModallabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="DeleteTemplateModalText">Delete
                                                        <b>{{ $template->name }}</b>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" wire:click.prevent="clear()"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Session()->has('WrongTemplate'))
                                                        <div class="alert alert-danger">
                                                            {{ Session('WrongTemplate') }}
                                                        </div>
                                                    @endif
                                                    @if (!Session()->has('WrongTemplate'))
                                                        <div class="card-body">
                                                            <form autocomplete="off" method="POST">
                                                                @csrf
                                                                <h6 class="text-center">Are You Sure You Want To
                                                                    Delete This Template , Every Questions And Categoris
                                                                    Will be Delete</h6>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal" wire:click.prevent="clear()">No</button>
                                                    <a class="btn btn-outline-danger"
                                                        href="{{ route('template.delete', $template->template_id) }}">Yes</a>
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
        </main>
    </div>
</div>
