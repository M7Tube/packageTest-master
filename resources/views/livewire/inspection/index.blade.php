<div class="container mx-auto">
    {{-- <div class="space-x-4 sm:-my-px sm:flex hide-top-bar" style="border-bottom: 1px solid rgb(208, 215, 225);">
        <x-nav-link :active="$renderpage == 'index.template' ? true : false" style="text-decoration: none; cursor: pointer;"
            wire:click.prevent="changepage('index.template')">
            {{ __('Templates') }}
        </x-nav-link>
        <x-nav-link :active="$renderpage == 'edit.template' ? true : false" style="text-decoration: none; cursor: pointer;"
            wire:click.prevent="changepage('edit.template')">
            {{ __('Manage templates') }}
        </x-nav-link>
        <x-nav-link :active="$renderpage == 'create.template' ? true : false" style="text-decoration: none; cursor: pointer;"
            href="{{ route('create.template') }}">
            {{ __('Create template') }}
        </x-nav-link>
    </div> --}}
    <div class="max-w-7xl  sm:px-6 lg:px-8 mb-5">
        <div class="overflow-hidden sm:rounded-lg">
            <div class="py-6 ">
                @if (!$data->isEmpty())
                    <div class="advanced-table__TableContainer-sc-14py0xt-0 cxKRws table-responsive">
                        <table data-anchor="templates-table" class="table__TableContent-sc-1sw0wyl-0 dhuCxe">
                            <tbody>
                                <tr class="table__DefaultHeaderRow-sc-1sw0wyl-2 GClTa">
                                    <td class="table__ColumnSettingsContainer-sc-1sw0wyl-12 eJOYmq">
                                        <div data-anchor="column-settings-menu"><button type="button"
                                                data-anchor="column-settings-menu-button"
                                                class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                    viewBox="0 0 24 24" width="18" height="18" fill="#545f70"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.506 12c0 .306-.027.594-.063.882l1.9 1.485a.454.454 0 01.107.576l-1.8 3.114a.439.439 0 01-.549.198l-2.24-.9a6.915 6.915 0 01-1.522.882l-.342 2.385a.439.439 0 01-.44.378h-3.6a.439.439 0 01-.442-.378l-.342-2.385a6.575 6.575 0 01-1.52-.882l-2.242.9a.452.452 0 01-.549-.198l-1.8-3.114a.454.454 0 01.108-.576l1.9-1.485A7.138 7.138 0 015.005 12c0-.297.027-.594.063-.882L3.17 9.633a.444.444 0 01-.108-.576l1.8-3.114a.439.439 0 01.55-.198l2.24.9a6.915 6.915 0 011.521-.882l.342-2.385A.439.439 0 019.956 3h3.6c.225 0 .414.162.441.378l.342 2.385a6.575 6.575 0 011.521.882l2.241-.9a.452.452 0 01.55.198l1.8 3.114a.454.454 0 01-.109.576l-1.899 1.485c.036.288.063.576.063.882zm-9.9 0a3.153 3.153 0 003.15 3.15 3.153 3.153 0 003.15-3.15 3.153 3.153 0 00-3.15-3.15A3.153 3.153 0 008.606 12z"
                                                        fill="#545f70"></path>
                                                    <mask id="a" maskUnits="userSpaceOnUse" x="3"
                                                        y="3" width="18" height="18">
                                                        <path
                                                            d="M18.506 12c0 .306-.027.594-.063.882l1.9 1.485a.454.454 0 01.107.576l-1.8 3.114a.439.439 0 01-.549.198l-2.24-.9a6.915 6.915 0 01-1.522.882l-.342 2.385a.439.439 0 01-.44.378h-3.6a.439.439 0 01-.442-.378l-.342-2.385a6.575 6.575 0 01-1.52-.882l-2.242.9a.452.452 0 01-.549-.198l-1.8-3.114a.454.454 0 01.108-.576l1.9-1.485A7.138 7.138 0 015.005 12c0-.297.027-.594.063-.882L3.17 9.633a.444.444 0 01-.108-.576l1.8-3.114a.439.439 0 01.55-.198l2.24.9a6.915 6.915 0 011.521-.882l.342-2.385A.439.439 0 019.956 3h3.6c.225 0 .414.162.441.378l.342 2.385a6.575 6.575 0 011.521.882l2.241-.9a.452.452 0 01.55.198l1.8 3.114a.454.454 0 01-.109.576l-1.899 1.485c.036.288.063.576.063.882zm-9.9 0a3.153 3.153 0 003.15 3.15 3.153 3.153 0 003.15-3.15 3.153 3.153 0 00-3.15-3.15A3.153 3.153 0 008.606 12z"
                                                            fill="none"></path>
                                                    </mask>
                                                </svg></button></div>
                                    </td>
                                    <th style="display: none;" class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 40px; justify-content: center;"
                                        class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div class="templates-list-styled__CheckboxContainer-sc-13dox56-2 iKAMqi">
                                                <div data-anchor="templates-list-header-checkall" tabindex="0"
                                                    role="checkbox" aria-checked="false"
                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"><input
                                                        aria-hidden="false" type="checkbox" aria-checked="false"
                                                        hidden="">
                                                    <div data-anchor="renderer-container"
                                                        class="checkbox-renderer__StyledCheckbox-n77esq-0 eFQUJT"><svg
                                                            viewBox="0 0 24 24" width="21" height="21"
                                                            style="display: inline-block;" focusable="false"
                                                            data-anchor="unchecked-checkbox-svg">
                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                            <path fill="#545f70"
                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th style="min-width: 200px; padding-left: 0.5rem;"
                                        class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div data-anchor="templates-list-header-name"
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI llSwAt">
                                                Template</div>
                                        </div>
                                    </th>
                                    <th style="max-width: 150px;" class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div data-anchor="templates-list-header-last-modified"
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI llSwAt">
                                                Last modified</div><button type="button"
                                                class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO advanced-table-styled__StyledIconButton-lzzta2-0 idFTmJ"><svg
                                                    viewBox="0 0 24 24" width="18" height="18" focusable="false">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path fill="#3f495a"
                                                        d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">
                                                    </path>
                                                </svg></button>
                                        </div>
                                    </th>
                                    <th style="max-width: 100px;" class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI gFtxdA">
                                                Scheduled</div>
                                        </div>
                                    </th>
                                    <th style="max-width: 160px;" class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI gFtxdA">
                                                Access</div>
                                        </div>
                                    </th>
                                    <th style="max-width: 9.375rem;"
                                        class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 40px;" class="table__DefaultHeaderCell-sc-1sw0wyl-4 dPuREl">
                                        <div class="table__HeaderCellTextContainer-sc-1sw0wyl-3 czgRwF">
                                            <div
                                                class="typography__Label-rmkozr-7 table__HeaderLabel-sc-1sw0wyl-5 kCChDI gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                @forelse ($data as $record)
                                    <tr data-anchor="table-row"
                                        class="templates-list-styled__TemplateListTableRow-sc-13dox56-8 dwZqgh">
                                        <td style="display: none;" class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div class="avatar__BaseAvatar-sc-1xd35et-0 avatar__TableAvatar-sc-1xd35et-5 VTXFo jSNyoh"
                                                aria-label="Untitled template" data-anchor="avatar">
                                                <div class="avatar__Initials-sc-1xd35et-1 bMYHDk initials">UT</div>
                                            </div>
                                        </td>
                                        <td style="max-width: 40px; align-items: center;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div role="button"
                                                class="templates-list-styled__CheckboxContainer-sc-13dox56-2 iKAMqi">
                                                <div data-anchor="templates-list-checkbox" tabindex="0"
                                                    role="checkbox" aria-checked="false"
                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"><input
                                                        aria-hidden="false" type="checkbox" aria-checked="false"
                                                        hidden="">
                                                    <div data-anchor="renderer-container"
                                                        class="checkbox-renderer__StyledCheckbox-n77esq-0 eFQUJT"><svg
                                                            viewBox="0 0 24 24" width="21" height="21"
                                                            style="display: inline-block;" focusable="false"
                                                            data-anchor="unchecked-checkbox-svg">
                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                            <path fill="#545f70"
                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="min-width: 200px; padding: 1rem 0.5rem 1rem 0px; height: auto;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div width="100%"
                                                class="box__Box-rlfom8-0 flex__Flex-sc-5xuz1e-0 cdbMVx hjueeV">
                                                <div
                                                    class="templates-list-styled__NameAvatarContainer-sc-13dox56-3 kaSBNW">
                                                    <div height="100%"
                                                        class="box__Box-rlfom8-0 flex__Flex-sc-5xuz1e-0 hwXOPg bfMWNi">
                                                        <div class="avatar__BaseAvatar-sc-1xd35et-0 avatar__TableAvatar-sc-1xd35et-5 VTXFo jSNyoh"
                                                            aria-label="Untitled template" data-anchor="avatar">
                                                            <div class="avatar__Initials-sc-1xd35et-1 bMYHDk initials">
                                                                UT
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="name-cell-styled__TitleDescContainer-zd9378-0 dJilXy">
                                                        <div class="name-cell-styled__TitleContainer-zd9378-1 fJbZNY template-name"
                                                            role="presentation">
                                                            <div class="template-name" role="presentation"
                                                                aria-describedby="popup-8">{{ $record->title }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="max-width: 150px; padding-left: 1rem;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            @if (\Carbon\Carbon::parse($record->created_at ?? '')->diffInDays() > 0)
                                                <div aria-describedby="popup-9" class="text-left">
                                                    {{ \Carbon\Carbon::parse($record->created_at ?? '')->diffInDays() . __(' Days') }}</div>
                                            @endif
                                        </td>
                                        <td style="max-width: 100px;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div
                                                class="templates-list-styled__ScheduledCell-sc-13dox56-6 czAGDh text-center">
                                                No
                                            </div>
                                        </td>
                                        <td style="max-width: 160px;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div class="access-cell-styled__StyledCell-jt9x5j-0 eHqFMr"><svg
                                                    data-anchor="org-svg" width="14" height="14"
                                                    viewBox="0 0 24 24">
                                                    <g>
                                                        <rect fill="#3f495a" height="7" width="3"
                                                            x="4" y="10"></rect>
                                                        <rect fill="#3f495a" height="7" width="3"
                                                            x="10.5" y="10"></rect>
                                                        <rect fill="#3f495a" height="3" width="20"
                                                            x="2" y="19"></rect>
                                                        <rect fill="#3f495a" height="7" width="3"
                                                            x="17" y="10"></rect>
                                                        <polygon fill="#3f495a" points="12,1 2,6 2,8 22,8 22,6">
                                                        </polygon>
                                                    </g>
                                                </svg><span data-anchor="access-org-wide">All users</span></div>
                                        </td>
                                        <td style="max-width: 9.375rem;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb"><button color="#4740d4"
                                                font-size="0.875rem" data-anchor="templates-list-start-button"
                                                data-testid="templates-list-start-button" type="button"
                                                class="button__StyledButton-ftmyi7-1 kDSJkL">Start inspection</button>
                                        </td>
                                        <td style="max-width: 40px;"
                                            class="table__MutedTableCell-sc-1sw0wyl-1 jMRRAb">
                                            <div style="display: inline-flex;"><button type="button"
                                                    data-anchor="templates-list-overflow-actions-button"
                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                        width="18" height="18" viewBox="0 0 14 14"
                                                        focusable="false">
                                                        <g transform="translate(5.542 1.458)" fill="#1f2533"
                                                            fill-rule="nonzero">
                                                            <circle transform="rotate(90 1.458 5.542)" cx="1.458"
                                                                cy="5.542" r="1.458"></circle>
                                                            <circle transform="rotate(90 1.458 9.625)" cx="1.458"
                                                                cy="9.625" r="1.458"></circle>
                                                            <circle transform="rotate(90 1.458 1.458)" cx="1.458"
                                                                cy="1.458" r="1.458"></circle>
                                                        </g>
                                                    </svg></button></div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <div class="table-footer__PaginationContainer-hnj7ds-0 fxKnMk">
                            <div data-anchor="templates-list-pagination"
                                class="pagination__Container-nhcmqq-1 kWhAab"><button type="button"
                                    data-anchor="pagination-prev-button" style="margin-right: 0.8rem;" disabled=""
                                    class="icon-button__StyledButton-sc-1ev4xf3-1 hzIwPc"><svg viewBox="0 0 24 24"
                                        width="19" height="19" focusable="false">
                                        <path
                                            d="M6.367 11.181l9.52-8.866a1.323 1.323 0 0 1 1.745.028c.479.445.492 1.164.03 1.625L9.434 11.63a.509.509 0 0 0 0 .755l8.212 7.646c.461.461.448 1.18-.03 1.625a1.323 1.323 0 0 1-1.745.028l-9.504-8.85A1.123 1.123 0 0 1 6 12.007a1.12 1.12 0 0 1 .367-.827z"
                                            fill="#828ea0" fill-rule="nonzero"></path>
                                    </svg></button><input placeholder="1" data-anchor="pagination-input"
                                    class="page-input__Input-sc-1xd2qpa-0 etacVu" value="1">
                                <div style="margin: 0px 0.8em;"> / </div>
                                <div data-anchor="pagination-last-link" class="link__Link-um3jmd-2 bRhgET">
                                    <div style="text-align: center; width: 2.5rem;">2</div>
                                </div><button type="button" data-anchor="pagination-next-button"
                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg viewBox="0 0 24 24"
                                        width="19" height="19" focusable="false">
                                        <path
                                            d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                            fill="#675df4" fill-rule="nonzero"></path>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="container-fluid mt-4">
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-300 block w-48 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search">

                        <div class="overflow-x-auto relative mt-4 table-responsive">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase rounded-lg bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Icon
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Tilte
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Description
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Created By ?
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            <span class="sr-only">Created At</span>
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            <span class="sr-only">Action</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $record)
                                        <tr class="bg-white border-b  dark:border-gray-700">
                                            <th scope="row" class="py-4 px-6">
                                                <img src="{{ asset('images' . $record->icon) }}" alt="icon"
                                                    width="15px">
                                            </th>
                                            <td class="py-4 px-6">
                                                {{ $record->title ?? '' }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $record->desc ?? '' }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $record->user->email ?? '' }}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $record->created_at ?? '' }}
                                            </td>
                                            <td class="py-4 px-6">
                                                <button class="btn btn-outline-success">Start Inspection</button>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div> --}}
                @else
                @endif
            </div>
        </div>
    </div>
</div>
