<div id="root">
    <div id="app-container" class="gtvfKz">
        <div class="brCoKm">
            <div class="gBIxUd">
                <nav class="cSkQhk">
                    <button type="button" style="margin: 0px 1rem;" class="jvZSBO">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="#1f2533" focusable="false">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                        </svg>
                    </button>
                    <div style="max-width: calc(-4rem + 100vw);">
                        <h3 class="dtcQgF gLYoqV">
                            {{ $data->title == '' ? 'Untitled template' : $data->title ?? '' }}
                        </h3>
                        <a target="_blank" style="display: inline-block; text-decoration: none;"
                            class="link__HyperLink-sc-um3jmd-1 fLTbiF">
                            <div class="typography__Caption-sc-rmkozr-8 jcwCWQ">
                                <u>Cretaed by {{ $data->user->first_name ?? '' }} {{ $data->user->last_name ?? '' }} at
                                    {{ $data->created_at ?? '' }}
                                </u>
                            </div>
                        </a>
                    </div>
                </nav>
                <div class="editor-styled__Container-sc-aa265n-1 iAEKFw">
                    <div class="editor-styled__EditorLayoutContainer-sc-aa265n-2 jTJKJe">
                        <div data-anchor="inspection-editor-container"
                            class="inspection-editor-styled__Container-sc-vw1s0m-2 blRQIx">
                            <div class="inspection-editor-styled__StickyHeaderContainer-sc-vw1s0m-0 kYZfuZ">
                                <div data-anchor="page-selector"
                                    class="page-selector__PageSelectorContainer-sc-lwphxe-0 kSYIEK">
                                    <div
                                        class="select-styled__Container-sc-1m31k7u-0 kWyuDi page-selector__StyledStatelessSelect-sc-lwphxe-1 hLlPJJ">
                                        <div class="select-styled__SelectedContainer-sc-1m31k7u-2 bqdqKq select-selected-container"
                                            tabindex="0">
                                            <div style="border: medium none;" class="select-value">
                                                <div class="page-selector__PageSelectorHeader-sc-lwphxe-2 hZgdqC">
                                                    <div class="page-selector__PageInfo-sc-lwphxe-4 fPDdjU">
                                                        <div>
                                                            <div class="bBMTve">
                                                                <svg viewBox="0 0 24 24" width="12" height="12"
                                                                    class="kyEOXC hLZApJ" focusable="false">
                                                                    <path
                                                                        d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                        fill="#545f70" fill-rule="nonzero"></path>
                                                                </svg>
                                                                <div style="margin-bottom: 0.5rem;"
                                                                    class="typography__Caption-sc-rmkozr-8 jcwCWQ">
                                                                    Page 1 of 2
                                                                </div>
                                                            </div>
                                                            <div class="page-selector__PageLabel-sc-lwphxe-5 dxopML">
                                                                Title Page
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inspection-editor-styled__ItemsContainer-sc-vw1s0m-3 dkIXnY">
                                <div data-anchor="item-component"></div>
                                @forelse ($data['title_page'] as $question)
                                    <div data-anchor="item-component">
                                        <div class="item-styled__QuestionCard-sc-zz77uk-1 dWlTBc QuestionCard"
                                            data-item-id="f3245d43-ea77-11e1-aff1-0800200c9a66"
                                            data-anchor="complete-item">
                                            <div class="QuestionInnerContainer">
                                                <div class="item-styled__StyledAnnotationAndLabel-sc-zz77uk-4 iGjeXI">
                                                    <div class="shared__LabelContainer-sc-1umkzuk-2 ljnLdg">
                                                        <div
                                                            class="new-branding__CanopyBody1-sc-lk87sy-4 item-styled__ItemLabel-sc-zz77uk-5 cTGqGw kYUEsK">
                                                            <span class="linkify__StyledLinkify-sc-m6d4qt-0 jjaCv">
                                                                {{ !empty($question['response']) ? ($question['response'] == 3 ? null : $question['title'] ?? '') : $question['title'] ?? '' }}
                                                                {{-- {{ $question['title'] ?? '' }} --}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if (!empty($question['response']))
                                                    @if ($question['response'] == 1)
                                                        <input class="hxhzuE gEIQZu fs-block" type="text"
                                                            wire:model.lazy="title_page_result.{{ $loop->index }}.value">
                                                    @endif
                                                    @if ($question['response'] == 2)
                                                        <input class="hxhzuE gEIQZu fs-block" type="text"
                                                            wire:model.lazy="title_page_result.{{ $loop->index }}.value">
                                                        {{-- <script>
                                                            @this.set('title_page_result.' + {{ $loop->index }} + '.value', '00');
                                                        </script> --}}
                                                    @endif
                                                    @if ($question['response'] == 3)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                wire:model="title_page_result.{{ $loop->index }}.value"
                                                                id="flexCheckDefault{{ $loop->index }}">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                {{ $question['title'] ?? '' }}
                                                            </label>
                                                        </div>
                                                    @endif
                                                    @if ($question['response'] == 4)
                                                        <input class="hxhzuE gEIQZu fs-block only-number" type="number"
                                                            wire:model.lazy="title_page_result.{{ $loop->index }}.value">
                                                        <script>
                                                            document.querySelector(".only-number").addEventListener("keypress", function(evt) {
                                                                if (evt.which < 48 || evt.which > 57) {
                                                                    evt.preventDefault();
                                                                }
                                                            });
                                                        </script>
                                                    @endif
                                                    @if ($question['response'] == 5)
                                                        <input class="hxhzuE gEIQZu fs-block"
                                                            type="{{ !empty($question['is_date']) && !empty($question['is_time']) ? ($question['is_date'] == 1 && $question['is_time'] == 1 ? 'datetime-local' : 'date') : 'date' }}"
                                                            wire:model.lazy="title_page_result.{{ $loop->index }}.value">
                                                    @endif
                                                    @if ($question['response'] == 6)
                                                        {{-- <input class="hxhzuE gEIQZu fs-block"
                                                            type="{{ $question['is_date'] == 1 && $question['is_time'] == 1 ? 'datetime-local' : 'date' }}"
                                                            wire:model.lazy="title_page_result.{{ $loop->index }}.value"> --}}
                                                        {{-- sigature --}}
                                                        {{-- @if ((new \Jenssegers\Agent\Agent())->isMobile()) --}}
                                                            {{ $arr['title'] ?? '' }}
                                                            <div class="d-flex">
                                                                <input type="text" name="" id=""
                                                                    class="form-control w-75">
                                                                <!-- Button trigger modal -->
                                                                <button class="btn w-25 mx-1"
                                                                    style="background-color: #4740d4; color:white;"
                                                                    class="btn btn-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#signatureModal"><img
                                                                        src="{{ asset('images/signature-svgrepo-com.svg') }}"
                                                                        width="25px" alt="signature"
                                                                        style="color:white;"></button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="signatureModal"
                                                                    tabindex="-1" aria-labelledby="signatureModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title text-center"
                                                                                    id="signatureModalLabel">
                                                                                    Please add your signature
                                                                                </h5>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <canvas id="signature-pad"
                                                                                    class="small-sign-pad"></canvas>
                                                                                <button id="clear"
                                                                                    class="btn btn-outline-secondary"
                                                                                    style="margin-top:300px;">Clear</button>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-outline-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-outline-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                                                                    backgroundColor: 'rgba(150, 100, 25, 0)',
                                                                    penColor: 'rgb(0, 0, 0)'
                                                                });
                                                                var saveButton = document.getElementById('save');
                                                                var cancelButton = document.getElementById('clear');


                                                                cancelButton.addEventListener('click', function(event) {
                                                                    signaturePad.clear();
                                                                });
                                                                saveButton.addEventListener('click', function(event) {
                                                                    var data = signaturePad.toDataURL('image/png');

                                                                    // Send data to server instead...
                                                                    window.open(data);
                                                                });
                                                            </script>
                                                        {{-- @endif --}}
                                                    @endif
                                                @endif
                                            </div>
                                            <div
                                                class="attachment-bar-legacy-styled__AttachmentContainer-sc-10ob62d-0 hDVsDR">
                                                {{-- add note --}}
                                                <div class="attachment__ContentWrapper-sc-1vxbrfc-0 kRvCBh"
                                                    wire:ignore.self>
                                                    <div class="attachment__SectionWrapper-sc-1vxbrfc-1 gqIGVk">
                                                        <div class="attachment__NoteEditContainer-sc-1vxbrfc-4 kMPIlg">
                                                            <textarea class="mSXeo fs-block" placeholder="Type your notes..." style="height: 42px;"
                                                                wire:model.lazy="title_page_result.{{ $loop->index }}.note"></textarea>
                                                            <div
                                                                style="display: flex; justify-content: space-between; align-items: center;">
                                                                <div
                                                                    class="attachment__StyledButtonContainer-sc-1vxbrfc-10 czOQuo">
                                                                    <button color="#ffffff" font-size="0.875rem"
                                                                        data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-save-note-btn"
                                                                        data-testid="f3245d42-ea77-11e1-aff1-0800200c9a66-save-note-btn"
                                                                        type="button" disabled=""
                                                                        class="button__StyledButton-sc-ftmyi7-1 cEDpxx">
                                                                        Save
                                                                    </button>
                                                                    <button color="#4740d4" font-size="0.875rem"
                                                                        data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-cancel-note-btn"
                                                                        data-testid="f3245d42-ea77-11e1-aff1-0800200c9a66-cancel-note-btn"
                                                                        type="button"
                                                                        class="button__StyledButton-sc-ftmyi7-1 chnkCq"
                                                                        onclick="cancel_note_action({{ $loop->index }})">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="attachment-bar-styled__ItemGroup-sc-aafr4f-0 bJmYpV">
                                                        <div class="sc-bqGGPW fyoKEo"><button type="button"
                                                                onclick="document.getElementsByClassName('kRvCBh')[0].style.display='block'"
                                                                data-anchor="f3245d43-ea77-11e1-aff1-0800200c9a66-add-note-btn"
                                                                class="sc-kEqXSa dVzWRr"><span
                                                                    class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                        height="1rem" viewBox="0 0 24 24"
                                                                        color="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2 6a2 2 0 0 1 2-2h10a1 1 0 1 1 0 2H4v14h13V9a1 1 0 1 1 2 0v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M6 9a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 13a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 17a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM19.5 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16 4.5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                                                            fill="currentColor"></path>
                                                                    </svg></span>Add note...</button>
                                                            {{-- <div class="inline-file-input__Container-sc-o4sv0k-0 etYWGL">
                                                                <button type="button"
                                                                    data-anchor="f3245d43-ea77-11e1-aff1-0800200c9a66-add-media-btn"
                                                                    class="sc-kEqXSa dVzWRr"><span
                                                                        class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                            height="1rem" viewBox="0 0 24 24"
                                                                            color="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M20.095.624a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1Z"
                                                                                fill="currentColor"></path>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M16.595 4.124a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1ZM9 11a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V11Zm12 0H11v10h10V11Z"
                                                                                fill="currentColor"></path>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M1 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v7a1 1 0 1 1-2 0V3H3v10h7a1 1 0 1 1 0 2H3a2 2 0 0 1-2-2V3ZM12.155 15.96c.494-.904 1.809-.856 2.235.082l2.36 5.19A1.25 1.25 0 0 1 15.612 23h-5.19a1.25 1.25 0 0 1-1.098-1.849l2.831-5.19Zm1.036 2.277L11.684 21h2.763l-1.256-2.762Z"
                                                                                fill="currentColor"></path>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M17.355 14.123c.437-.999 1.853-.999 2.29 0l3.118 7.126A1.25 1.25 0 0 1 21.618 23h-6.236a1.25 1.25 0 0 1-1.145-1.751l3.118-7.126Zm1.145 2.372L16.529 21h3.942L18.5 16.495ZM4 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1ZM4 10a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Z"
                                                                                fill="currentColor"></path>
                                                                        </svg></span>Attach media</button><input
                                                                    type="file" accept="image/*,.pdf,video/*"
                                                                    tabindex="-1" multiple=""
                                                                    data-anchor="f3245d43-ea77-11e1-aff1-0800200c9a66-add-media-input"
                                                                    class="inline-file-input__HiddenFileInput-sc-o4sv0k-1 hHuzqj">
                                                            </div>
                                                            <button type="button"
                                                                data-anchor="f3245d43-ea77-11e1-aff1-0800200c9a66-add-action-btn"
                                                                class="sc-kEqXSa dVzWRr">
                                                                <span class="sc-iqAclL jibPFy">
                                                                    <svg width="1rem" height="1rem"
                                                                        viewBox="0 0 24 24" color="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M6 4a2 2 0 0 1 2-2h13a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4Zm15 0H8v13h13V4Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M3 4a1 1 0 0 1 1 1v16h15a1 1 0 1 1 0 2H4a2 2 0 0 1-2-2V5a1 1 0 0 1 1-1Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M19.207 7.293a1 1 0 0 1 0 1.414l-4.823 4.823a1.25 1.25 0 0 1-1.768 0l-2.323-2.323a1 1 0 1 1 1.414-1.414l1.793 1.793 4.293-4.293a1 1 0 0 1 1.414 0Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                Create action
                                                            </button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                                <script>
                                    function cancel_note_action(id) {
                                        @this.set('title_page_result.' + id + '.note', null);
                                        document.getElementsByClassName('kRvCBh')[id].style.display = 'none';
                                    }
                                </script>
                                <!--<div data-anchor="item-component">
                                    <div class="item-styled__QuestionCard-sc-zz77uk-1 dWlTBc QuestionCard"
                                        data-item-id="f3245d42-ea77-11e1-aff1-0800200c9a66"
                                        data-anchor="complete-item">
                                        <div class="QuestionInnerContainer">
                                            <div class="item-styled__StyledAnnotationAndLabel-sc-zz77uk-4 iGjeXI">
                                                <div class="shared__LabelContainer-sc-1umkzuk-2 ljnLdg">
                                                    <div
                                                        class="new-branding__CanopyBody1-sc-lk87sy-4 item-styled__ItemLabel-sc-zz77uk-5 cTGqGw kYUEsK">
                                                        <span
                                                            class="linkify__StyledLinkify-sc-m6d4qt-0 jjaCv">Conducted
                                                            on</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="date-picker-styled__Container-sc-11dvrxw-0 hsbxkD datetime-question__StyledDatePicker-sc-1hx2eb9-0 iiLOuT">
                                                <div class="react-datepicker-wrapper">
                                                    <div class="react-datepicker__input-container"><input
                                                            type="text" placeholder="Enter date and time"
                                                            class="" value="3 Nov 2022 3:41 AM"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="attachment-bar-legacy-styled__AttachmentContainer-sc-10ob62d-0 hDVsDR">
                                            {{-- add note --}}
                                            <div class="attachment__ContentWrapper-sc-1vxbrfc-0 kRvCBh">
                                                <div class="attachment__SectionWrapper-sc-1vxbrfc-1 gqIGVk">
                                                    <div class="attachment__NoteEditContainer-sc-1vxbrfc-4 kMPIlg">
                                                        <textarea class="textarea__StyledTextarea-sc-f8apvd-0 mSXeo fs-block" placeholder="Type your notes..."
                                                            style="height: 42px;"></textarea>
                                                        <div
                                                            style="display: flex; justify-content: space-between; align-items: center;">
                                                            <div
                                                                class="attachment__StyledButtonContainer-sc-1vxbrfc-10 czOQuo">
                                                                <button color="#ffffff" font-size="0.875rem"
                                                                    data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-save-note-btn"
                                                                    data-testid="f3245d42-ea77-11e1-aff1-0800200c9a66-save-note-btn"
                                                                    type="button" disabled=""
                                                                    class="button__StyledButton-sc-ftmyi7-1 cEDpxx">
                                                                    Save
                                                                </button>
                                                                <button color="#4740d4" font-size="0.875rem"
                                                                    data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-cancel-note-btn"
                                                                    data-testid="f3245d42-ea77-11e1-aff1-0800200c9a66-cancel-note-btn"
                                                                    type="button"
                                                                    class="button__StyledButton-sc-ftmyi7-1 chnkCq"
                                                                    onclick="document.getElementsByClassName('kRvCBh')[0].style.display='none'">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="attachment-bar-styled__ItemGroup-sc-aafr4f-0 bJmYpV">
                                                    <div class="sc-bqGGPW fyoKEo">
                                                        <button type="button"
                                                            onclick="document.getElementsByClassName('kRvCBh')[0].style.display='block'"
                                                            data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-add-note-btn"
                                                            class="sc-kEqXSa dVzWRr">
                                                            <span class="sc-iqAclL jibPFy">
                                                                <svg width="1rem" height="1rem"
                                                                    viewBox="0 0 24 24" color="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M2 6a2 2 0 0 1 2-2h10a1 1 0 1 1 0 2H4v14h13V9a1 1 0 1 1 2 0v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6 9a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 13a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 17a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM19.5 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M16 4.5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            Add note...
                                                        </button>
                                                        {{-- <div class="inline-file-input__Container-sc-o4sv0k-0 etYWGL">
                                                            <button type="button"
                                                                data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-add-media-btn"
                                                                class="sc-kEqXSa dVzWRr"><span
                                                                    class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                        height="1rem" viewBox="0 0 24 24"
                                                                        color="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M20.095.624a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.595 4.124a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1ZM9 11a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V11Zm12 0H11v10h10V11Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M1 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v7a1 1 0 1 1-2 0V3H3v10h7a1 1 0 1 1 0 2H3a2 2 0 0 1-2-2V3ZM12.155 15.96c.494-.904 1.809-.856 2.235.082l2.36 5.19A1.25 1.25 0 0 1 15.612 23h-5.19a1.25 1.25 0 0 1-1.098-1.849l2.831-5.19Zm1.036 2.277L11.684 21h2.763l-1.256-2.762Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.355 14.123c.437-.999 1.853-.999 2.29 0l3.118 7.126A1.25 1.25 0 0 1 21.618 23h-6.236a1.25 1.25 0 0 1-1.145-1.751l3.118-7.126Zm1.145 2.372L16.529 21h3.942L18.5 16.495ZM4 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1ZM4 10a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Z"
                                                                            fill="currentColor"></path>
                                                                    </svg></span>Attach media</button><input
                                                                type="file" accept="image/*,.pdf,video/*"
                                                                tabindex="-1" multiple=""
                                                                data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-add-media-input"
                                                                class="inline-file-input__HiddenFileInput-sc-o4sv0k-1 hHuzqj">
                                                        </div> --}}
                                                        {{-- <button type="button"
                                                            data-anchor="f3245d42-ea77-11e1-aff1-0800200c9a66-add-action-btn"
                                                            class="sc-kEqXSa dVzWRr">
                                                            <span class="sc-iqAclL jibPFy">
                                                                <svg width="1rem" height="1rem"
                                                                    viewBox="0 0 24 24" color="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6 4a2 2 0 0 1 2-2h13a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4Zm15 0H8v13h13V4Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M3 4a1 1 0 0 1 1 1v16h15a1 1 0 1 1 0 2H4a2 2 0 0 1-2-2V5a1 1 0 0 1 1-1Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M19.207 7.293a1 1 0 0 1 0 1.414l-4.823 4.823a1.25 1.25 0 0 1-1.768 0l-2.323-2.323a1 1 0 1 1 1.414-1.414l1.793 1.793 4.293-4.293a1 1 0 0 1 1.414 0Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            Create action
                                                        </button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                {{-- <div data-anchor="item-component">
                                    <div class="item-styled__QuestionCard-sc-zz77uk-1 dWlTBc QuestionCard"
                                        data-item-id="f3245d44-ea77-11e1-aff1-0800200c9a66"
                                        data-anchor="complete-item">
                                        <div class="QuestionInnerContainer">
                                            <div class="item-styled__StyledAnnotationAndLabel-sc-zz77uk-4 iGjeXI">
                                                <div class="shared__LabelContainer-sc-1umkzuk-2 ljnLdg">
                                                    <div
                                                        class="new-branding__CanopyBody1-sc-lk87sy-4 item-styled__ItemLabel-sc-zz77uk-5 cTGqGw kYUEsK">
                                                        <span
                                                            class="linkify__StyledLinkify-sc-m6d4qt-0 jjaCv">Location</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="location-question__InputsContainer-sc-1k9ig2e-1 jrgQob">
                                                <textarea class="textarea__StyledTextarea-sc-f8apvd-0 mSXeo fs-block" placeholder="Location"
                                                    style="margin-right: 0.5rem; flex-grow: 1; height: 66px;">
                                                </textarea><button color="#ffffff"
                                                    font-size="0.875rem" data-anchor="location-picker-button"
                                                    data-testid="location-picker-button" type="button"
                                                    class="button__StyledButton-sc-ftmyi7-1 gqAxJM"><svg
                                                        width="17" height="17" viewBox="0 0 14 14">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <path
                                                                d="M7,2 C5.065,2 3.5,3.60760144 3.5,5.59527478 C3.5,7.73703133 5.71,10.6902928 6.62,11.8151002 C6.82,12.0616333 7.185,12.0616333 7.385,11.8151002 C8.29,10.6902928 10.5,7.73703133 10.5,5.59527478 C10.5,3.60760144 8.935,2 7,2 Z M7,6.87930149 C6.31,6.87930149 5.75,6.30405752 5.75,5.59527478 C5.75,4.88649204 6.31,4.31124807 7,4.31124807 C7.69,4.31124807 8.25,4.88649204 8.25,5.59527478 C8.25,6.30405752 7.69,6.87930149 7,6.87930149 Z"
                                                                fill="#ffffff" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg>Map</button>
                                            </div>
                                        </div>
                                        <div
                                            class="attachment-bar-legacy-styled__AttachmentContainer-sc-10ob62d-0 hDVsDR">
                                            <div>
                                                <div class="attachment-bar-styled__ItemGroup-sc-aafr4f-0 bJmYpV">
                                                    <div class="sc-bqGGPW fyoKEo"><button type="button"
                                                            data-anchor="f3245d44-ea77-11e1-aff1-0800200c9a66-add-note-btn"
                                                            class="sc-kEqXSa dVzWRr"><span
                                                                class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                    height="1rem" viewBox="0 0 24 24"
                                                                    color="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M2 6a2 2 0 0 1 2-2h10a1 1 0 1 1 0 2H4v14h13V9a1 1 0 1 1 2 0v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6 9a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 13a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 17a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM19.5 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M16 4.5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                                                        fill="currentColor"></path>
                                                                </svg></span>Add note...</button>
                                                        <div class="inline-file-input__Container-sc-o4sv0k-0 etYWGL">
                                                            <button type="button"
                                                                data-anchor="f3245d44-ea77-11e1-aff1-0800200c9a66-add-media-btn"
                                                                class="sc-kEqXSa dVzWRr"><span
                                                                    class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                        height="1rem" viewBox="0 0 24 24"
                                                                        color="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M20.095.624a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.595 4.124a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1ZM9 11a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H11a2 2 0 0 1-2-2V11Zm12 0H11v10h10V11Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M1 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v7a1 1 0 1 1-2 0V3H3v10h7a1 1 0 1 1 0 2H3a2 2 0 0 1-2-2V3ZM12.155 15.96c.494-.904 1.809-.856 2.235.082l2.36 5.19A1.25 1.25 0 0 1 15.612 23h-5.19a1.25 1.25 0 0 1-1.098-1.849l2.831-5.19Zm1.036 2.277L11.684 21h2.763l-1.256-2.762Z"
                                                                            fill="currentColor"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.355 14.123c.437-.999 1.853-.999 2.29 0l3.118 7.126A1.25 1.25 0 0 1 21.618 23h-6.236a1.25 1.25 0 0 1-1.145-1.751l3.118-7.126Zm1.145 2.372L16.529 21h3.942L18.5 16.495ZM4 6a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1ZM4 10a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Z"
                                                                            fill="currentColor"></path>
                                                                    </svg></span>Attach media</button><input
                                                                type="file" accept="image/*,.pdf,video/*"
                                                                tabindex="-1" multiple=""
                                                                data-anchor="f3245d44-ea77-11e1-aff1-0800200c9a66-add-media-input"
                                                                class="inline-file-input__HiddenFileInput-sc-o4sv0k-1 hHuzqj">
                                                        </div><button type="button"
                                                            data-anchor="f3245d44-ea77-11e1-aff1-0800200c9a66-add-action-btn"
                                                            class="sc-kEqXSa dVzWRr"><span
                                                                class="sc-iqAclL jibPFy"><svg width="1rem"
                                                                    height="1rem" viewBox="0 0 24 24"
                                                                    color="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6 4a2 2 0 0 1 2-2h13a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4Zm15 0H8v13h13V4Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M3 4a1 1 0 0 1 1 1v16h15a1 1 0 1 1 0 2H4a2 2 0 0 1-2-2V5a1 1 0 0 1 1-1Z"
                                                                        fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M19.207 7.293a1 1 0 0 1 0 1.414l-4.823 4.823a1.25 1.25 0 0 1-1.768 0l-2.323-2.323a1 1 0 1 1 1.414-1.414l1.793 1.793 4.293-4.293a1 1 0 0 1 1.414 0Z"
                                                                        fill="currentColor"></path>
                                                                </svg></span>Create action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="inspection-editor-styled__ButtonContainer-sc-vw1s0m-1 eIqTdO">
                                <button color="#ffffff" font-size="0.875rem"style="float: right;" type="button"
                                    wire:click.prevent="export" class="gIOqQk">
                                    Export (TEST)
                                    <svg viewBox="0 0 24 24" width="17" height="17" class="button_icon"
                                        focusable="false" data-anchor="arrow-right-svg">
                                        <path
                                            d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                            fill="#ffffff" fill-rule="nonzero"></path>
                                    </svg>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
