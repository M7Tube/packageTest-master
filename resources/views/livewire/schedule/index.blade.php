<div class="container mx-auto">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Navigation Links -->
                    <div class="space-x-4 sm:-my-px sm:flex" style="border-bottom: 1px solid rgb(208, 215, 225);">
                        <x-nav-link :active="$renderpage == 'index.schedule' ? true : false" style="text-decoration: none; cursor: pointer;"
                            wire:click.prevent="changepage('index.schedule')">
                            {{ __('My Schedules') }}
                        </x-nav-link>
                        <x-nav-link :active="$renderpage == 'edit.schedule' ? true : false" style="text-decoration: none; cursor: pointer;"
                            wire:click.prevent="changepage('edit.schedule')">
                            {{ __('Manage Schedules') }}
                        </x-nav-link>
                        <x-nav-link :active="$renderpage == 'missed_late.schedule' ? true : false" style="text-decoration: none; cursor: pointer;"
                            wire:click.prevent="changepage('missed_late.schedule')">
                            {{ __('Missed/Late Inspections') }}
                        </x-nav-link>
                    </div>
                    @if ($renderpage == 'index.schedule')
                        <div class="container-fluid mt-4">
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-300 block w-48 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search">

                            <div class="overflow-x-auto relative mt-4 table-responsive">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase rounded-lg bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3 px-6">
                                                Tilte
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Assigned by
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Assigned to
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Status
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                <span class="sr-only">Next due</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $record)
                                            <tr class="bg-white border-b  dark:border-gray-700">
                                                <th scope="row" class="py-4 px-6">
                                                    {{ $record->template->name ?? 'Alarabia' }}
                                                </th>
                                                <td class="py-4 px-6">
                                                    {{ $record->assigned_by->first_name ?? 'Abo Samer' }}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{ $record->assigned_to->first_name ?? 'Abo Samer' }}
                                                </td>
                                                <td class="py-4 px-6" style="color:green;">
                                                    {{ $record->status == 1 ? 'active' : 'disabled' }}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{ $record->created_at }}
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @elseif($renderpage == 'edit.schedule')
                        this is edit page
                    @elseif($renderpage == 'missed_late.schedule')
                        this is missed page
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
