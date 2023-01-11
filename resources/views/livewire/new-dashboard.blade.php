<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 border">
            <div class="bg-white">
                <div class="p-5 bg-white">
                    <img src="{{ asset('images/undraw_building_blocks_re_5ahy.svg') }}" alt="Create new template"
                        width="200px" class="d-flex mx-auto align-items-center justify-content-center">
                    <h6 class="text-center mt-2">Convert your current paper inspections into smart inspection forms in
                        minutes.
                    </h6>
                    <a class=" mt-4 d-flex mx-auto align-items-center justify-content-center dashboard-createTemplate-button"
                        href="{{ route('create.template') }}">{{ __('Create new template') }}</a>
                        {{-- {{ route('create.template') }} --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-md-6 border">
            <div class="bg-white">
                <div class="p-5 bg-white">
                    <img src="{{ asset('images/undraw_code_inspection_bdl7(1).svg') }}" alt="Start Inspection"
                        width="200px" class="d-flex mx-auto align-items-center justify-content-center">
                    <h6 class="text-center mt-2">Start Making Your Reports with the modern inspection creator .
                    </h6>
                    <a class=" mt-4 d-flex mx-auto align-items-center justify-content-center dashboard-createTemplate-button"
                        href="{{ route('index.inspection') }}">{{ __('Start Inspection') }}</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
