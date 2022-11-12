<div class="container-fluid">
    <div class="row m-3">
        <div class="card" style="border: none;">
            <img src="{{ asset('images/logo - Copy.png') }}" alt="logo" srcset="" width="150px" class="mx-auto">
        </div>
        <form wire:submit.prevent="submit">
            <div class="card border-secondary mt-2" style="border: none;">
                <div class="text-center text-danger">
                    {{ $errormessage }}
                </div>
                <div class="row mb-3">
                    {{-- <div class="col-12">
                        <h5 for="capacity" class="text-center mt-3">{{ __('Project code') }}</h5>
                    </div> --}}
                    <div class="col-12">
                        <input type="text" wire:model="project_code" id="" placeholder="Project code"
                            class="form-control w-75 mx-auto">
                        <div class="text-center text-danger">
                            @error('project_code')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    {{-- <div class="col-12">
                        <h5 for="capacity" class="text-center mt-3">{{ __('Fire Extinguisher Number') }}</h5>
                    </div> --}}
                    <div class="col-12">
                        <input type="text" wire:model="number" id="" placeholder="Fire Extinguisher Number"
                            class="form-control w-75 mx-auto">
                        <div class="text-center text-danger">

                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mx-auto d-flex justify-content-center">
                        <button class="btn btn-block btn-outline-info mx-auto w-75"
                            style="background-color: #30b0e8; color:white;" type="submit">{{ __('Submit') }}</button>
                    </div>
                </div>
            </div>
        </form>
        @if (!session()->get('TrueAccessCode', []))
        <hr class="w-50 mx-auto mt-3">
        <div class="col-12 mx-auto d-flex justify-content-center">
            <button class="btn btn-block btn-outline-info mx-auto w-75" style="background-color: #30b0e8; color:white;"
                data-bs-toggle="modal" data-bs-target="#AccessCodeModal">{{ __('Project Contractor') }}</button>
        </div>
        @endif
        @if (session()->get('TrueAccessCode', []))
            <hr class="w-50 mx-auto mt-3">
            <h4 class="text-center">{{ __('Project Contractor Options') }}</span>
            <div class="col-12 mx-auto d-flex justify-content-center mb-2 mt-2">
                <button class="btn btn-block mx-auto w-75"
                    style="background-color: #6fa2b8; color:white;">{{ __('Add New Project') }}</button>
            </div>
            <div class="col-12 mx-auto d-flex justify-content-center mb-2">
                <button class="btn btn-block mx-auto w-75"
                    style="background-color: #6fa2b8; color:white;">{{ __('Projects') }}</button>
            </div>
            <div class="col-12 mx-auto d-flex justify-content-center mb-2">
                <button class="btn btn-block mx-auto w-75"
                    style="background-color: #6fa2b8; color:white;">{{ __('Fire Extinguisher Data') }}</button>
            </div>
        @endif
        <!-- Modal -->
        <div class="modal fade" id="AccessCodeModal" tabindex="-1" aria-labelledby="AccessCodeModalLabel"
            aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AccessCodeModalLabel">Enter Access Code</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="accessCode">
                        <div class="modal-body">
                            @if ($codeMessage)
                                <div class="alert alert-danger text-center">
                                    {{ $codeMessage }}
                                </div>
                            @endif
                            @if ($SuccesscodeMessage)
                                <div class="alert alert-success text-center">
                                    {{ $SuccesscodeMessage }}
                                </div>
                            @endif
                            <div class="row">
                                <input class="form-control" id="code" type="text" wire:model="code"
                                    placeholder="Code">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
