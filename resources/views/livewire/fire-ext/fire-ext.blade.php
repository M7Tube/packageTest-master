<div class="container-fluid">
    <div class="row m-3">
        <div class="card" style="border: none;">
            <img src="{{ asset('images/logo - Copy.png') }}" alt="logo" srcset="" width="150px" class="mx-auto">
        </div>
        <div class="card border-secondary mt-2" style="border: none;">
            <div class="row mb-3">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Project code') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="project_code" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Fire Extinguisher Number') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="number" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Fire Extinguisher Type') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="fire_extinguisher_type" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Project Name') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="project_name" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Weight') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="weight" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Last Inspection') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="last_inspection" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 for="capacity" class="text-center mt-3">{{ __('Expire Date') }}</h5>
                </div>
                <div class="col-12">
                    <input type="text" wire:model="exp_date" id="" class="form-control w-50 mx-auto text-center" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
