<div class="dNSYVt">
    <div class="kwsxgF">
        <div class="iGhnrh">
            <div class="clRFWA">
                <div class="gDGYDn">
                    <span class="dMDFzp">
                        <h4>{{ __('Documents') }}</h4>
                        {{-- <p>(1 - 25 of 40)</p> --}}
                    </span>
                    {{-- <div style="margin-bottom: 1rem;" class="cmmgBQ eOSHju">
                        <div class="eGgiUw">
                            <div class="ixlcxv">
                                <div class="tcgHY">
                                    <div class="ldRzjU">
                                        <svg width="21" height="21" viewBox="0 0 24 24" color="currentColor"
                                            class="sc-kmIPcE htFMXJ" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.329 17.743A9.96 9.96 0 0 1 10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10a9.959 9.959 0 0 1-2.257 6.329l3.964 3.964a1 1 0 0 1-1.414 1.414l-3.964-3.964ZM18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <input type="text" aria-label="search input" placeholder="Search" class="bVrqEX"
                                        value="">
                                    <div class="kLuCqN">
                                        <button type="button" class="kfoEVM" hidden="">
                                            <svg width="21" height="21" viewBox="0 0 24 24" color="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM8.707 7.293a1 1 0 0 0-1.414 1.414L10.586 12l-3.293 3.293a1 1 0 1 0 1.414 1.414L12 13.414l3.293 3.293a1 1 0 0 0 1.414-1.414L13.414 12l3.293-3.293a1 1 0 0 0-1.414-1.414L12 10.586 8.707 7.293Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="BJtFb">
                                <button type="button" class="immkQS">
                                    <span class="jibPFy">
                                        <svg width="1rem" height="1rem" viewBox="0 0 24 24" color="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 5a1 1 0 1 0-2 0v6H5a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2h-6V5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    Create
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    <div class="cxKRws kexDQG table-responsive">
                        <table class="dhuCxe">
                            <tbody>
                                <tr class="GClTa">
                                    <th style="display: none;" class="dPuREl">
                                        <div class="czgRwF">
                                            <div class="gAMBnx gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                    <th style="min-width: 200px; padding-left: 0.5rem;" class="dPuREl">
                                        <div class="czgRwF">
                                            <div class="gAMBnx">
                                                {{ __('Name') }}
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 150px;" class="dPuREl hide-on-small">
                                        <div class="czgRwF">
                                            <div class="gAMBnx">
                                                {{ __('File type') }}
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 150px;" class="dPuREl hide-on-small">
                                        <div class="czgRwF">
                                            <div class="gAMBnx">
                                                {{ __('Created at') }}
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 150px;" class="dPuREl hide-on-small">
                                        <div class="czgRwF">
                                            <div class="gAMBnx">
                                                {{ __('Size') }}
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 9.375rem;" class="dPuREl hide-on-small">
                                        <div class="czgRwF">
                                            <div class="gAMBnx gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                    <th style="max-width: 40px;" class="dPuREl hide-on-small">
                                        <div class="czgRwF">
                                            <div class="gAMBnx gFtxdA">
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                @forelse ($data as $key => $record)
                                    <tr class="dwZqgh">
                                        <td style="min-width: 200px; padding: 1rem 0.5rem 1rem 0px; height: auto;"
                                            class="jMRRAb" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight{{ $loop->index }}"
                                            aria-controls="offcanvasRight{{ $loop->index }}">
                                            <div width="100%" class="bHGiRI hjueeV">
                                                <div class="kaSBNW">
                                                    <div height="100%" class="cSYTlB bfMWNi">
                                                        <div class="VTXFo jSNyoh">
                                                            <div class="bMYHDk initials">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fdHgzT">
                                                        <div class="jAZCxh template-name">
                                                            <div class="template-name">
                                                                {{ $record['filename'] }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="max-width: 150px;" class="jMRRAb hide-on-small">
                                            <div class="czAGDh hide-on-small">
                                                {{ $record['dirname'] }}
                                            </div>
                                        </td>
                                        <td style="max-width: 200px;" class="jMRRAb hide-on-small">
                                            <div class="czAGDh hide-on-small">
                                                {{ date('m/d/Y', $record['timestamp']) }}
                                            </div>
                                        </td>
                                        <td style="max-width: 150px;" class="jMRRAb hide-on-small">
                                            <div class="hide-on-small">
                                                @if ($record['size'] >= 1073741824)
                                                    {{ number_format($record['size'] / 1073741824, 2) . ' GB' }}
                                                @elseif ($record['size'] >= 1048576)
                                                    {{ number_format($record['size'] / 1048576, 2) . ' MB' }}
                                                @elseif ($record['size'] >= 1024)
                                                    {{ number_format($record['size'] / 1024, 2) . ' KB' }}
                                                @elseif ($record['size'] > 1)
                                                    {{ $record['size'] . ' bytes' }}
                                                @elseif ($bytes == 1)
                                                    {{ $bytes . ' byte' }}
                                                @else
                                                    {{ '0 bytes' }}
                                                @endif
                                            </div>
                                        </td>
                                        {{-- <td style="max-width: 160px;" class="jMRRAb hide-on-small">
                                            <div class="eBkHvW hide-on-small" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight{{ $loop->index }}"
                                                aria-controls="offcanvasRight{{ $loop->index }}">
                                                <span>
                                                    {{ count($record->pages) }}
                                                </span>
                                            </div>
                                        </td> --}}
                                        <td style="max-width: 9.375rem;" class="jMRRAb hide-on-small">
                                            <a wire:click.prevent="download('{{ $record['basename'] }}')"
                                                class="chnkCq hide-on-small" style="text-decoration: none;">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="dwZqgh">
                                        <td colspan="10" rowspan="10" class="text-center">
                                            {{ __('Empty') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
