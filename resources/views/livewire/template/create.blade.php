<div id="myDiv">
    <div class="aaa">
        <nav class="bbb">
            <div class="ccc">
                <div class="qqq">
                    <div>
                        <div class="hgh">
                        </div>
                    </div>
                </div>
            </div>
            <div class="eer">
                <a @class([
                    'nonactivetoplink' => $currentpage == 'preview',
                    'activetoplink' => $currentpage == 'build',
                    'jjj',
                ]) onclick="@this.set('currentpage', 'build');">
                    <span>Build</span>
                </a>
                <div class="fdf">
                    <a @class([
                        'nonactivetoplink' => $currentpage == 'build',
                        'activetoplink' => $currentpage == 'preview',
                        'pop',
                    ])
                        onclick="@this.set('currentpage', 'preview');
                        // @this.set('id', $template_id);
                        ">
                        <span>Preview</span>
                    </a>
                </div>
            </div>
            <div class="lll">
            </div>
        </nav>
    </div>
    @if ($currentpage == 'build')
        <div class="mt-5" style="margin-bottom: 100%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-left justify-content-start">
                            @if (!$icon)
                                <div class="col-12 col-md-2 ">
                                    <input type="file" wire:model="icon" alt="template icon" style="display:none;"
                                        id="customefileupload" accept="image/*">
                                    <label for="customefileupload" class="customfileupload">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M39,34 L36,34 L36,31 C36,30.44775 35.55273,30 35,30 C34.44727,30 34,30.44775 34,31 L34,34 L31,34 C30.44727,34 30,34.44775 30,35 C30,35.55225 30.44727,36 31,36 L34,36 L34,39 C34,39.55225 34.44727,40 35,40 C35.55273,40 36,39.55225 36,39 L36,36 L39,36 C39.55273,36 40,35.55225 40,35 C40,34.44775 39.55273,34 39,34 Z"
                                                id="Shape" fill="#FFFFFF"></path>
                                            <path
                                                d="M42,37 L37,42 L2,42 C0.89543,42 0,41.10457 0,40 L0,2 C0,0.89543 0.89543,0 2,0 L40,0 C41.10457,0 42,0.89543 42,2 L42,37 Z"
                                                id="Shape" fill="#EEF5FF"></path>
                                            <circle id="Oval" fill="#5E9CFF" cx="18" cy="12"
                                                r="4"></circle>
                                            <path
                                                d="M40.791103,32.3878833 L30.7918482,19.36966 C30.4139463,18.87678 29.5849081,18.87678 29.2070063,19.36966 L20.9649405,30.1001308 L14.7813214,22.3591948 C14.4024396,21.8839195 13.5987895,21.8839195 13.2199178,22.3591948 L5.22051392,32.3732128 C4.69807285,33.0261568 5.16230825,34 6.00121573,34 L39.998682,34 C40.8276403,34 41.2964253,33.0459845 40.791103,32.3878833 Z"
                                                id="Shape" fill="#5E9CFF"></path>
                                            <circle id="Oval" fill="#1ECF93" cx="38" cy="38"
                                                r="8"></circle>
                                            <path
                                                d="M41,37 L39,37 L39,35 C39,34.44769 38.55231,34 38,34 C37.44769,34 37,34.44769 37,35 L37,37 L35,37 C34.44769,37 34,37.44769 34,38 C34,38.55225 34.44769,39 35,39 L37,39 L37,41 C37,41.55225 37.44769,42 38,42 C38.55231,42 39,41.55225 39,41 L39,39 L41,39 C41.55231,39 42,38.55225 42,38 C42,37.44769 41.55231,37 41,37 Z"
                                                id="Shape" fill="#FFFFFF"></path>
                                        </svg>
                                    </label>
                                </div>
                            @else
                                <div class="col-12 col-md-2 position-relative">
                                    <img type="image" src="{{ $icon->temporaryUrl() }}" alt="template icon"
                                        class="customfileupload" style="">
                                    <a style="cursor: pointer; text-decoration: none;"
                                        wire:click.prevent="delete_image">
                                        <span
                                            class="position-absolute top-0 translate-middle badge rounded-pill bg-danger small-delete-icon">
                                            <i class="bi bi-trash"></i>
                                        </span>
                                    </a>
                                </div>
                            @endif
                            <div class="col-12 col-md-10 mt-3 big-title-desc">
                                <div class="d-flex align-items-start justify-content-start">
                                    <input type="text" for="title" wire:model.lazy="title" class="title mt-2"
                                        placeholder="Untitled template" />
                                </div>
                                <div class="d-flex align-items-start justify-content-start">
                                    <input type="text" for="title" wire:model.lazy="desc"
                                        class="form-control mt-2 desc" placeholder="Add a description" id="desc" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 mt-3 small-title-desc">
                            <div class="d-flex align-items-start justify-content-start">
                                <input type="text" style="font-family: sans-serif, 'Font Awesome 5 Free'"
                                    for="title" wire:model.lazy="title" class="title w-100 mt-2"
                                    placeholder="Untitled template" />
                            </div>
                            <div class="d-flex align-items-start justify-content-start">
                                <input type="text" style="color:gray;" for="title" wire:model.lazy="desc"
                                    class="form-control  w-100 mt-2 desc" placeholder="Add a description"
                                    id="desc" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="accordionExample" wire:ignore.self>
                <div class="accordion-item">
                    <div class="template-table-styled__PageHeader-sc-1bccu6o-2 kVgydw"
                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div data-anchor="template-table-expandable-indicator"
                            class="template-table-styled__ExpandableIndicator-sc-1bccu6o-3 Ceqkm">
                            <svg viewBox="0 0 24 24" width="16" height="16" focusable="false">
                                <path
                                    d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                    fill="#828ea0" fill-rule="nonzero"></path>
                            </svg>
                        </div>
                        <div>
                            <div data-anchor="page-title"
                                class="template-table-styled__PageTitle-sc-1bccu6o-6 fceloL">Title Page</div>
                        </div>
                    </div>
                    <div id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
                        wire:ignore.self>
                        <div data-anchor="title-page" class="template-table-styled__Page-sc-1bccu6o-0 gKLkhd">
                            <div class="sc-fKgJPI cxbltl">
                                <div class="template-table-styled__PageDescription-sc-1bccu6o-4 lgSfIY">The
                                    Title Page is
                                    the first page of your inspection report. You can
                                    <a target="_blank" href="" class="link__HyperLink-um3jmd-1 fHfWNd">
                                        customize the Title Page
                                    </a>
                                    below.
                                </div>
                                <div data-anchor="template-table-body-f3245d39-ea77-11e1-aff1-0800200c9a66">
                                    <div
                                        class="popover__Wrapper-cb9u88-0 kxrOmS template-table-styled__StyledPopover-sc-1bccu6o-20 eqGxMu">
                                        <div class="popover__FloatRight-cb9u88-2 cldFRc popover_element">
                                            <div>
                                                <div data-anchor="view-score-column-button"
                                                    aria-describedby="popup-43">
                                                    <svg viewBox="0 0 24 24" width="14" height="14"
                                                        style="cursor: pointer;"
                                                        class="template-table-styled__StyledPlusSvg-sc-1bccu6o-21 gdPDbX"
                                                        focusable="false" data-anchor="plus-svg">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#545f70">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="template-table-styled__HeaderRow-sc-1bccu6o-12 bgiTWR">
                                            <div class="template-table-styled__NameColumn-sc-1bccu6o-13 kGgXUq">
                                                Question
                                                <div class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts">
                                                    <div><span class="LBNnk"></span></div>
                                                </div>
                                            </div>
                                            <div
                                                class="template-table-styled__TypeColumn-sc-1bccu6o-15 template-table-styled__HeaderTypeColumn-sc-1bccu6o-16 cYnFsn bfshfO">
                                                Type of response</div>
                                        </div>
                                    </div>
                                    <div class="template-table-styled__Table-sc-1bccu6o-9 kLpTzB wrapper"
                                        data-rbd-droppable-id="f3245d39-ea77-11e1-aff1-0800200c9a66"
                                        data-rbd-droppable-context-id="0">
                                        @forelse ($title_page_questions as $qkey => $title_page_question)
                                            <div data-anchor="itemId-{{ $loop->index }}"
                                                data-rbd-draggable-context-id="{{ $loop->index }}"
                                                data-rbd-draggable-id="{{ $loop->index }}" class="hkphPX dragable"
                                                onclick="@this.set('activeone', {{ $loop->index }});">
                                                <div class="REnvQ">
                                                    <div class="kxrOmS cuypVQ">
                                                        <div class="dBZFks">
                                                            <div class="frYDzu">
                                                                <div role="button" aria-label="Question"
                                                                    class="kKTQOg">
                                                                    <svg viewBox="0 0 24 24" width="21"
                                                                        height="21" focusable="false"
                                                                        data-anchor="plus-svg">
                                                                        <path d="M0 0h24v24H0z" fill="none">
                                                                        </path>
                                                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"
                                                                            fill="#17966c"></path>
                                                                    </svg>
                                                                    <div class="fEdSrJ">
                                                                        Question
                                                                    </div>
                                                                </div>
                                                                <div role="button" aria-label="Section"
                                                                    data-anchor="section-plus-button-vertical"
                                                                    class="kKTQOg">
                                                                    <svg width="21" height="21"
                                                                        viewBox="0 0 14 14" focusable="false">
                                                                        <g transform="translate(1 1)" fill="#4740d4"
                                                                            fill-rule="nonzero">
                                                                            <rect width="12" height="4.066"
                                                                                rx="0.733">
                                                                            </rect>
                                                                            <path
                                                                                d="M.8 5.947v5.164h10.4V5.947H.8zm0-.89h10.4c.442 0 .8.399.8.89v5.164c0 .491-.358.889-.8.889H.8c-.442 0-.8-.398-.8-.889V5.947c0-.491.358-.89.8-.89z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="fEdSrJ">
                                                                        Section
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="template-item-styled__ItemContainer-sc-1tq96ts-1 bAJknk">
                                                            <div
                                                                class="template-item-styled__ItemContent-sc-1tq96ts-14 huXueT">
                                                                <div
                                                                    class="template-table-styled__NameColumn-sc-1bccu6o-13 kGgXUq">
                                                                    <div data-anchor="question-drag-handle"
                                                                        tabindex="-1" role="button"
                                                                        aria-describedby="popup-44"
                                                                        data-rbd-drag-handle-draggable-id="{{ $loop->index }}"
                                                                        data-rbd-drag-handle-context-id="0"
                                                                        draggable="false"
                                                                        class="template-item-styled__DragHandle-sc-1tq96ts-11 haXfJL drag-icon">
                                                                        <svg viewBox="0 0 24 24" width="24"
                                                                            height="24" focusable="false">
                                                                            <path fill="none" d="M0 0h24v24H0V0z">
                                                                            </path>
                                                                            <path fill="#675df4"
                                                                                d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                            <span data-anchor="mandatory-annotation"
                                                                                style="padding-left: 0.3rem;"
                                                                                class="mandatory-annotation__MandatoryAnnotation-sc-1qns4oi-0 eSpMaC">*</span>
                                                                        @else
                                                                            <span data-anchor="mandatory-annotation"
                                                                                style="padding-left: 0.3rem;"
                                                                                class="mandatory-annotation__MandatoryAnnotation-sc-1qns4oi-0 eSpMaC"></span>
                                                                        @endif
                                                                    @else
                                                                        <span data-anchor="mandatory-annotation"
                                                                            style="padding-left: 0.3rem;"
                                                                            class="mandatory-annotation__MandatoryAnnotation-sc-1qns4oi-0 eSpMaC"></span>
                                                                    @endif
                                                                    <div data-anchor="site-item-label" tabindex="-1"
                                                                        class="template-item-styled__TextareaWrapper-sc-1tq96ts-9 bBjJyf">
                                                                        {{-- <div
                                                                                class="selection-mask-styled__Anchor-sc-1mcpw94-0 selection-mask-styled__LeftAnchor-sc-1mcpw94-1 fyPxKd elTKUx">
                                                                            </div> --}}
                                                                        {{-- <div
                                                                                class="selection-mask-styled__Border-sc-1mcpw94-3 selection-mask-styled__HorizontalBorder-sc-1mcpw94-4 fmcVJh cqcaeh">
                                                                            </div>
                                                                            <div
                                                                                class="selection-mask-styled__Border-sc-1mcpw94-3 selection-mask-styled__HorizontalBorder-sc-1mcpw94-4 selection-mask-styled__BottomBorder-sc-1mcpw94-5 fmcVJh cqcaeh iVHMfM">
                                                                            </div> --}}
                                                                        {{-- <div
                                                                                class="selection-mask-styled__Anchor-sc-1mcpw94-0 selection-mask-styled__RightAnchor-sc-1mcpw94-2 fyPxKd kklQix">
                                                                            </div> --}}
                                                                        {{-- <div
                                                                                class="selection-mask-styled__Background-sc-1mcpw94-8 fyeGHz">
                                                                            </div> --}}
                                                                        <div
                                                                            style="display: flex; align-items: center;">
                                                                            {{-- response title --}}
                                                                            <div itemtype="site"
                                                                                tabindex="{{ $loop->index }}"
                                                                                class="eAfucY">
                                                                                <input
                                                                                    class="question-title-focus eVpkze w-100 h-100 question-title"
                                                                                    placeholder="Write a Question ..."
                                                                                    wire:model.lazy="title_page_questions.{{ $qkey }}.title"
                                                                                    id="question-title-input-{{ $loop->index }}"
                                                                                    {{-- onfocus="unhide({{ $loop->index }})"
                                                                                        onfocusout="hide({{ $loop->index }})" --}}>
                                                                            </div>
                                                                            {{-- response done button --}}
                                                                            {{--  display: none; --}}
                                                                            {{-- @if ($activeone == $loop->index)
                                                                                    <div style="z-index: 1;"
                                                                                        wire:ignore.self
                                                                                        class="bdOmts"
                                                                                        id="done-focus-icon-{{ $loop->index }}">
                                                                                        <button type="button"
                                                                                            data-anchor="template-item-check-button"
                                                                                            class="jvZSBO"
                                                                                            onclick="focuse_outfocuse_btn({{ $loop->index }})"><svg
                                                                                                viewBox="0 0 24 24"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                class="template-item-styled__StyledCheckSvg-sc-1tq96ts-13 hFCnYj"
                                                                                                focusable="false">
                                                                                                <path fill="#545f70"
                                                                                                    fill-rule="nonzero"
                                                                                                    d="M8.364 16.075L3.59 11.687 2 13.149 8.364 19 22 6.463 20.41 5z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                @endif --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if ($activeone == $loop->index)
                                                                @if (empty($title_page_questions[$loop->index]['response']))
                                                                    <div class="response-select-and-options hyJfGO"
                                                                        {{-- wire:ignore.self style="display: none;" --}}
                                                                        id="response-select-and-options-{{ $loop->index }}">
                                                                        <div data-anchor="item-type{{ $loop->index }}"
                                                                            style="width: 100%; "
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                            <div
                                                                                class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                    aria-describedby="popup-45">
                                                                                    <div
                                                                                        class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                        <svg width="15"
                                                                                            height="15"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <path
                                                                                                d="M2.33333333,2.33333333 L2.33333333,4.97716191 L3.7929974,4.97716191 L3.7929974,4.28724799 C3.7929974,4.03503038 3.985625,3.82984264 4.22242188,3.82984264 L6.11229427,3.82984264 L6.11229427,9.52966171 C6.11229427,9.88941502 5.83754427,10.1820993 5.49979427,10.1820993 L4.8983776,10.1820993 L4.8983776,11.6666667 L9.11447396,11.6666667 L9.11447396,10.1820993 L8.51305729,10.1820993 C8.17534375,10.1820993 7.90055729,9.88941502 7.90055729,9.52966171 L7.90055729,3.82982322 L9.77757813,3.82982322 C10.0143568,3.82982322 10.2070026,4.03501096 10.2070026,4.28722858 L10.2070026,4.97714249 L11.6666667,4.97714249 L11.6666667,2.33333333 L2.33333333,2.33333333 Z"
                                                                                                fill="#fe8500"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div><span
                                                                                        data-anchor="type-selector-site{{ $loop->index }}">Text
                                                                                        answer</span>
                                                                                </div><svg viewBox="0 0 24 24"
                                                                                    width="16" height="16"
                                                                                    class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                        fill="#545f70"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                            data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                            class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                            role="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <div
                                                                                class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                <button type="button"
                                                                                    data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 14 14"
                                                                                        focusable="false">
                                                                                        <g transform="translate(5.542 1.458)"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 5.542)"
                                                                                                cx="1.458"
                                                                                                cy="5.542"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 9.625)"
                                                                                                cx="1.458"
                                                                                                cy="9.625"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 1.458)"
                                                                                                cx="1.458"
                                                                                                cy="1.458"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                        </g>
                                                                                    </svg></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                            style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                            wire:ignore.self>
                                                                            <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                <div
                                                                                    class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                    <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                        aria-describedby="popup-94">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="{{ $loop->index }}"
                                                                                                role="checkbox"
                                                                                                aria-checked="false"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                onclick="set_is_required({{ $loop->index }})">
                                                                                                <input
                                                                                                    id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    hidden="">
                                                                                                @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                    @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                        <div data-anchor="renderer-container{{ $loop->index }}"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="checked-checkbox-svg{{ $loop->index }}">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#4740d4"
                                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container{{ $loop->index }}"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg{{ $loop->index }}">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @else
                                                                                                    <div data-anchor="renderer-container{{ $loop->index }}"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="unchecked-checkbox-svg{{ $loop->index }}">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#545f70"
                                                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <label
                                                                                                for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Required
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                    wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                    <div style="display: flex; align-items: center;"
                                                                                        class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                        <svg width="21"
                                                                                            height="21"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <path
                                                                                                d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </svg><span
                                                                                            style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($title_page_questions[$loop->index]['response']))
                                                                    @if ($title_page_questions[$loop->index]['response'] == 2)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                            <svg width="15"
                                                                                                height="15"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <g fill="#fe8500"
                                                                                                    fill-rule="nonzero">
                                                                                                    <path
                                                                                                        d="M2.21 9.682a.637.637 0 0 1-.637-.636V4.985l-.352.175a.636.636 0 1 1-.568-1.138l1.272-.636a.635.635 0 0 1 .921.57v5.09a.637.637 0 0 1-.636.636zM7.937 9.682H4.755a.637.637 0 0 1-.45-1.086l2.546-2.545a.85.85 0 0 0 .25-.605.849.849 0 0 0-.25-.604.874.874 0 0 0-1.21 0 .846.846 0 0 0-.25.604.637.637 0 0 1-1.272 0c0-.569.221-1.103.623-1.504.805-.804 2.205-.804 3.009 0 .402.402.623.937.623 1.504 0 .568-.222 1.103-.623 1.505L6.29 8.41h1.646a.637.637 0 0 1 0 1.272zM13 6.104c.214-.29.346-.646.346-1.035 0-.966-.785-1.75-1.75-1.75-.656 0-1.251.362-1.553.944a.636.636 0 1 0 1.13.586.477.477 0 1 1 .423.697.637.637 0 0 0 0 1.273.797.797 0 0 1 0 1.59.797.797 0 0 1-.795-.795.637.637 0 0 0-1.273 0 2.07 2.07 0 0 0 2.068 2.068 2.07 2.07 0 0 0 2.068-2.068c0-.597-.258-1.132-.665-1.51z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Document
                                                                                            number</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16" height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 1)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                            <svg width="15"
                                                                                                height="15"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M2.33333333,2.33333333 L2.33333333,4.97716191 L3.7929974,4.97716191 L3.7929974,4.28724799 C3.7929974,4.03503038 3.985625,3.82984264 4.22242188,3.82984264 L6.11229427,3.82984264 L6.11229427,9.52966171 C6.11229427,9.88941502 5.83754427,10.1820993 5.49979427,10.1820993 L4.8983776,10.1820993 L4.8983776,11.6666667 L9.11447396,11.6666667 L9.11447396,10.1820993 L8.51305729,10.1820993 C8.17534375,10.1820993 7.90055729,9.88941502 7.90055729,9.52966171 L7.90055729,3.82982322 L9.77757813,3.82982322 C10.0143568,3.82982322 10.2070026,4.03501096 10.2070026,4.28722858 L10.2070026,4.97714249 L11.6666667,4.97714249 L11.6666667,2.33333333 L2.33333333,2.33333333 Z"
                                                                                                    fill="#fe8500"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Text
                                                                                            answer</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16" height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                                role="button"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                wire:ignore.self>
                                                                                <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                    class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                            aria-describedby="popup-94">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                    onclick="set_is_required({{ $loop->index }})">
                                                                                                    <input
                                                                                                        id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="false"
                                                                                                        hidden="">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="checked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#4740d4"
                                                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="unchecked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#545f70"
                                                                                                                        d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <label
                                                                                                    for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Required
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    {{-- <div
                                                                                            class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                    <input
                                                                                                        id="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="true"
                                                                                                        checked=""
                                                                                                        hidden="">
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="checked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#4740d4"
                                                                                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div><label
                                                                                                    for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Date</div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                    <input
                                                                                                        id="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="true"
                                                                                                        checked=""
                                                                                                        hidden="">
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="checked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#4740d4"
                                                                                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div><label
                                                                                                    for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Time</div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                    <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                        <div style="display: flex; align-items: center;"
                                                                                            class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                            <svg width="21"
                                                                                                height="21"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                    fill="#545f70"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg><span
                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 8)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                            <svg width="15"
                                                                                                height="15"
                                                                                                viewBox="0 0 14 14">
                                                                                                <g stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd">
                                                                                                    <path
                                                                                                        d="M7,2 C5.065,2 3.5,3.60760144 3.5,5.59527478 C3.5,7.73703133 5.71,10.6902928 6.62,11.8151002 C6.82,12.0616333 7.185,12.0616333 7.385,11.8151002 C8.29,10.6902928 10.5,7.73703133 10.5,5.59527478 C10.5,3.60760144 8.935,2 7,2 Z M7,6.87930149 C6.31,6.87930149 5.75,6.30405752 5.75,5.59527478 C5.75,4.88649204 6.31,4.31124807 7,4.31124807 C7.69,4.31124807 8.25,4.88649204 8.25,5.59527478 C8.25,6.30405752 7.69,6.87930149 7,6.87930149 Z"
                                                                                                        fill="#fe8500"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Location</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16" height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                                role="button"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                wire:ignore.self>
                                                                                <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                    class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                            aria-describedby="popup-94">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                    onclick="set_is_required({{ $loop->index }})">
                                                                                                    <input
                                                                                                        id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="false"
                                                                                                        hidden="">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="checked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#4740d4"
                                                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="unchecked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#545f70"
                                                                                                                        d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <label
                                                                                                    for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Required
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Date</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Time</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                        <div style="display: flex; align-items: center;"
                                                                                            class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                            <svg width="21"
                                                                                                height="21"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                    fill="#545f70"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg><span
                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 4)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 fNHrxp">
                                                                                            <svg width="15"
                                                                                                height="15"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <g fill="#ffb000"
                                                                                                    fill-rule="nonzero">
                                                                                                    <path
                                                                                                        d="M2.21 9.682a.637.637 0 0 1-.637-.636V4.985l-.352.175a.636.636 0 1 1-.568-1.138l1.272-.636a.635.635 0 0 1 .921.57v5.09a.637.637 0 0 1-.636.636zM7.937 9.682H4.755a.637.637 0 0 1-.45-1.086l2.546-2.545a.85.85 0 0 0 .25-.605.849.849 0 0 0-.25-.604.874.874 0 0 0-1.21 0 .846.846 0 0 0-.25.604.637.637 0 0 1-1.272 0c0-.569.221-1.103.623-1.504.805-.804 2.205-.804 3.009 0 .402.402.623.937.623 1.504 0 .568-.222 1.103-.623 1.505L6.29 8.41h1.646a.637.637 0 0 1 0 1.272zM13 6.104c.214-.29.346-.646.346-1.035 0-.966-.785-1.75-1.75-1.75-.656 0-1.251.362-1.553.944a.636.636 0 1 0 1.13.586.477.477 0 1 1 .423.697.637.637 0 0 0 0 1.273.797.797 0 0 1 0 1.59.797.797 0 0 1-.795-.795.637.637 0 0 0-1.273 0 2.07 2.07 0 0 0 2.068 2.068 2.07 2.07 0 0 0 2.068-2.068c0-.597-.258-1.132-.665-1.51z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Number</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16" height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                                role="button"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                wire:ignore.self>
                                                                                <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                    class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                            aria-describedby="popup-94">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                    onclick="set_is_required({{ $loop->index }})">
                                                                                                    <input
                                                                                                        id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="false"
                                                                                                        hidden="">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="checked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#4740d4"
                                                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="unchecked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#545f70"
                                                                                                                        d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <label
                                                                                                    for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Required
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Date</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Time</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                        <div style="display: flex; align-items: center;"
                                                                                            class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                            <svg width="21"
                                                                                                height="21"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                    fill="#545f70"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg><span
                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 3)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 hsvMMC">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                width="15"
                                                                                                height="15"
                                                                                                focusable="false"
                                                                                                data-anchor="checked-checkbox-svg">
                                                                                                <path fill="none"
                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                </path>
                                                                                                <path fill="#5e9cff"
                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Checkbox</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16" height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                                role="button"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                wire:ignore.self>
                                                                                <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                    class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                            aria-describedby="popup-94">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                    onclick="set_is_required({{ $loop->index }})">
                                                                                                    <input
                                                                                                        id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="false"
                                                                                                        hidden="">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="checked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#4740d4"
                                                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="unchecked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#545f70"
                                                                                                                        d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <label
                                                                                                    for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Required
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Date</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                                                <input
                                                                                                    id="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                <div data-anchor="renderer-container"
                                                                                                    class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="21"
                                                                                                        height="21"
                                                                                                        style="display: inline-block;"
                                                                                                        focusable="false"
                                                                                                        data-anchor="checked-checkbox-svg">
                                                                                                        <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h24v24H0V0z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            fill="#4740d4"
                                                                                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div><label
                                                                                                for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Time</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                        <div style="display: flex; align-items: center;"
                                                                                            class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                            <svg width="21"
                                                                                                height="21"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                    fill="#545f70"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg><span
                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 5)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 fXeslI">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                width="15"
                                                                                                height="15"
                                                                                                focusable="false">
                                                                                                <path fill="none"
                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                </path>
                                                                                                <path fill="#81b532"
                                                                                                    d="M20 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H7V2c0-.55-.45-1-1-1s-1 .45-1 1v1H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 18H5c-.55 0-1-.45-1-1V8h16v12c0 .55-.45 1-1 1z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Date
                                                                                            &amp;
                                                                                            Time</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16"
                                                                                        height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                                role="button"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                wire:ignore.self>
                                                                                <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                    class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                            aria-describedby="popup-94">
                                                                                            <div
                                                                                                class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                                <div tabindex="0"
                                                                                                    role="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                    onclick="set_is_required({{ $loop->index }})">
                                                                                                    <input
                                                                                                        id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                        aria-hidden="false"
                                                                                                        type="checkbox"
                                                                                                        aria-checked="false"
                                                                                                        hidden="">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                        @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="checked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#4740d4"
                                                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            <div data-anchor="renderer-container"
                                                                                                                class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                    width="21"
                                                                                                                    height="21"
                                                                                                                    style="display: inline-block;"
                                                                                                                    focusable="false"
                                                                                                                    data-anchor="unchecked-checkbox-svg">
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#545f70"
                                                                                                                        d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <label
                                                                                                    for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                    <div
                                                                                                        class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                        Required
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                onclick="set_is_date({{ $loop->index }})">
                                                                                                <input
                                                                                                    id="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                @if (!empty($title_page_questions[$loop->index]['is_date']))
                                                                                                    @if ($title_page_questions[$loop->index]['is_date'] == 1)
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="checked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#4740d4"
                                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @else
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="unchecked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#545f70"
                                                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <label
                                                                                                for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Date</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="true"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                onclick="set_is_time({{ $loop->index }})">
                                                                                                <input
                                                                                                    id="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="true"
                                                                                                    checked=""
                                                                                                    hidden="">
                                                                                                @if (!empty($title_page_questions[$loop->index]['is_time']))
                                                                                                    @if ($title_page_questions[$loop->index]['is_time'] == 1)
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="checked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#4740d4"
                                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @else
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="unchecked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#545f70"
                                                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <label
                                                                                                for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Time</div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                        <div style="display: flex; align-items: center;"
                                                                                            class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                            <svg width="21"
                                                                                                height="21"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                    fill="#545f70"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg><span
                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 6)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div
                                                                                            class="type-icon__IconOutline-p10uwy-0 fJrMSZ">
                                                                                            <svg width="15"
                                                                                                height="15"
                                                                                                viewBox="0 0 14 14"
                                                                                                focusable="false">
                                                                                                <path
                                                                                                    d="M9.513 5.581l1.958.695-1.628 4.284c-.153.403-.98 1.663-1.555 1.92l-.14.368a.24.24 0 0 1-.306.138.229.229 0 0 1-.142-.297l.132-.348c-.292-.548-.074-2.14.054-2.476L9.513 5.58zm2.834-4.532c-.538-.19-1.169.203-1.35.679L9.819 4.832l1.958.694 1.178-3.104c.149-.389-.067-1.182-.607-1.373zM8.804 5.421a.478.478 0 0 0 .614-.272l1.245-3.243a.457.457 0 0 0-.282-.593.483.483 0 0 0-.615.272L8.522 4.828a.457.457 0 0 0 .282.593zM7.13 11.286c-.125-.117-.296-.5-.42-.35-.124.15-.035.094-.182.09h-.051c-.093-.251-.28-.41-.562-.471-.372-.078-.67.096-.875.23.018-.103.048-.225.07-.314.072-.284.145-.579.09-.855a.494.494 0 0 0-.452-.395c-.576-.032-1.047.276-1.461.554-.436.292-.715.466-.993.368-.34-.12-.374-1.031-.21-1.843.145-.731.417-2.093 1.113-2.71.234-.209.573-.434.852-.325.328.128.599.664.66 1.302.025.27.261.467.538.443a.491.491 0 0 0 .446-.535c-.098-1.04-.59-1.854-1.282-2.124-.415-.16-1.075-.203-1.875.507-.87.773-1.19 2.084-1.424 3.251-.116.583-.4 2.517.85 2.959.76.269 1.38-.147 1.876-.48.091-.06.181-.12.268-.174-.083.356-.134.737.083 1.058.322.482.779.534 1.356.157l.072-.047c.053.11.148.233.32.316.207.101.415.106.566.11.065.002.153.004.18.015.093.041-.228-.1-.121.001.08.075.165.153.272.234a.496.496 0 0 0 .692-.099.488.488 0 0 0-.1-.687c-.308-.19-.241-.134-.296-.186z"
                                                                                                    fill="#00b6cb"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div><span
                                                                                            data-anchor="type-selector-site{{ $loop->index }}">Signature</span>
                                                                                    </div><svg viewBox="0 0 24 24"
                                                                                        width="16"
                                                                                        height="16"
                                                                                        class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                                data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                                class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts">
                                                                                <div
                                                                                    class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                    <button type="button"
                                                                                        data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                        class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <g transform="translate(5.542 1.458)"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                                    cx="1.458"
                                                                                                    cy="5.542"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                                    cx="1.458"
                                                                                                    cy="9.625"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                                <circle
                                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                                    cx="1.458"
                                                                                                    cy="1.458"
                                                                                                    r="1.458">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif ($title_page_questions[$loop->index]['response'] == 7)
                                                                        <div class="response-select-and-options hyJfGO"
                                                                            {{-- wire:ignore.self style="display: none;" --}}
                                                                            id="response-select-and-options-{{ $loop->index }}">
                                                                            <div data-anchor="item-type{{ $loop->index }}"
                                                                                style="width: 100%; "
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#TitlePageResponseModal{{ $loop->index }}">
                                                                                <div
                                                                                    class="type-selector-styled__SelectedWrapper-sc-1ab7v3q-0 eWLEUv">
                                                                                    <div data-anchor="response-set-menu-select{{ $loop->index }}"
                                                                                        aria-describedby="popup-45">
                                                                                        <div data-anchor="response-menu-item-response-container"
                                                                                            class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                            @if (!empty($title_page_questions[$loop->index]['multiple_choice']))
                                                                                                @forelse ($title_page_questions[$loop->index]['multiple_choice'] as $responsKey => $respons)
                                                                                                    @if ($loop->index <= 3)
                                                                                                        <div color="{{ $respons['color'] ?? '' }}"
                                                                                                            @class([
                                                                                                                'xXWzF' => $respons['color'] ?? '' == '#e7f3ef',
                                                                                                                'jZNie' => $respons['color'] ?? '' == '#f9f2e2',
                                                                                                                'hcaARf' => $respons['color'] ?? '' == '#f3e0e5',
                                                                                                                'gOgMGu' => $respons['color'] ?? '' == '#eaebed',
                                                                                                            ])
                                                                                                            style="background-color:{{ $respons['color'] ?? '' }};">

                                                                                                            {{ $respons['title'] ?? '' }}
                                                                                                        </div>
                                                                                                    @elseif($loop->count > 4)
                                                                                                        <div>
                                                                                                            +{{ $loop->remaining + 1 }}
                                                                                                        </div>
                                                                                                    @break
                                                                                                @endif
                                                                                            @empty
                                                                                            @endforelse
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <svg viewBox="0 0 24 24"
                                                                                    width="16"
                                                                                    height="16"
                                                                                    class="type-selector-styled__StyledArrowDownSvg-sc-1ab7v3q-2 kBTspn"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                        fill="#545f70"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div style="border-left: 1px solid rgb(191, 198, 212); "
                                                                            data-anchor="item-setting-mobile{{ $loop->index }}"
                                                                            class="sc-media-query__NoAboveTablet-buhhas-2 bdOmts"
                                                                            role="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <div
                                                                                class="item-settings__StyledDropdownMenu-efh9r8-2 hcjgmp">
                                                                                <button type="button"
                                                                                    data-testid="dropdown-trigger{{ $loop->index }}"
                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO dropdownMenu--trigger"><svg
                                                                                        width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 14 14"
                                                                                        focusable="false">
                                                                                        <g transform="translate(5.542 1.458)"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 5.542)"
                                                                                                cx="1.458"
                                                                                                cy="5.542"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 9.625)"
                                                                                                cx="1.458"
                                                                                                cy="9.625"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                            <circle
                                                                                                transform="rotate(90 1.458 1.458)"
                                                                                                cx="1.458"
                                                                                                cy="1.458"
                                                                                                r="1.458">
                                                                                            </circle>
                                                                                        </g>
                                                                                    </svg></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                            style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                            wire:ignore.self>
                                                                            <div data-anchor="dropdown-menu-container{{ $loop->index }}"
                                                                                class="stateless-dropdown-menu__StyledClickOutsideDetector-sc-13cwobv-0 cKwbqr">
                                                                                <div
                                                                                    class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                    <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                        aria-describedby="popup-94">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="false"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                onclick="set_is_required({{ $loop->index }})">
                                                                                                <input
                                                                                                    id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    hidden="">
                                                                                                @if (!empty($title_page_questions[$loop->index]['is_required']))
                                                                                                    @if ($title_page_questions[$loop->index]['is_required'] == 1)
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="checked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#4740d4"
                                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @else
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="unchecked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#545f70"
                                                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <label
                                                                                                for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Required
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj">
                                                                                    <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                                        aria-describedby="popup-94">
                                                                                        <div
                                                                                            class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                                            <div tabindex="0"
                                                                                                role="checkbox"
                                                                                                aria-checked="false"
                                                                                                class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk"
                                                                                                onclick="set_multi_select_multiple_choise({{ $loop->index }})">
                                                                                                <input
                                                                                                    id="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                    aria-hidden="false"
                                                                                                    type="checkbox"
                                                                                                    aria-checked="false"
                                                                                                    hidden="">
                                                                                                @if (!empty($title_page_questions[$loop->index]['multi_select_multiple_choise']))
                                                                                                    @if ($title_page_questions[$loop->index]['multi_select_multiple_choise'] == 1)
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="checked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#4740d4"
                                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div data-anchor="renderer-container"
                                                                                                            class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                            <svg viewBox="0 0 24 24"
                                                                                                                width="21"
                                                                                                                height="21"
                                                                                                                style="display: inline-block;"
                                                                                                                focusable="false"
                                                                                                                data-anchor="unchecked-checkbox-svg">
                                                                                                                <path
                                                                                                                    fill="none"
                                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    fill="#545f70"
                                                                                                                    d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                @else
                                                                                                    <div data-anchor="renderer-container"
                                                                                                        class="checkbox-renderer__StyledCheckbox-sc-n77esq-0 bDlfyK">
                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                            width="21"
                                                                                                            height="21"
                                                                                                            style="display: inline-block;"
                                                                                                            focusable="false"
                                                                                                            data-anchor="unchecked-checkbox-svg">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                            </path>
                                                                                                            <path
                                                                                                                fill="#545f70"
                                                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1zm1-16H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <label
                                                                                                for="7c173c7f-522b-426c-bf49-4a3f1006861d-input"
                                                                                                class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                                                <div
                                                                                                    class="typography__Body2-sc-rmkozr-5 fDpeEn">
                                                                                                    Multiple
                                                                                                    selection
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="menu-items__MenuDiv-sc-cbv7ay-1 epicTj"
                                                                                    wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                    <div style="display: flex; align-items: center;"
                                                                                        class="link__Link-sc-um3jmd-2 iBzfYz">
                                                                                        <svg width="21"
                                                                                            height="21"
                                                                                            viewBox="0 0 14 14"
                                                                                            focusable="false">
                                                                                            <path
                                                                                                d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                fill="#545f70"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </svg><span
                                                                                            style="padding-left: 0.4rem; color: rgb(31, 37, 51);">Delete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                            @if ((new \Jenssegers\Agent\Agent())->isMobile())
                                                                <!-- Modal -->
                                                                <div class="modal fade m-0 p-0"
                                                                    id="TitlePageResponseModal{{ $loop->index }}"
                                                                    tabindex="-1"
                                                                    aria-labelledby="TitlePageResponseModal{{ $loop->index }}Label"
                                                                    aria-hidden="true" wire:ignore.self>
                                                                    <div class="modal-dialog modal-fullscreen">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="TitlePageResponseModal{{ $loop->index }}Label">
                                                                                    Modal
                                                                                    title
                                                                                </h1>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="response-model">
                                                                                    <div
                                                                                        class="full-screen-controller-styled__FullScreenControllerContainer-f2lnls-0 eOsZYi sc-lmgQwP hpRDUw">
                                                                                        <div
                                                                                            class="fullscreen-menu-standalone__Container-sc-12l9vgg-0 ccjMQy">
                                                                                            <div
                                                                                                class="fullscreen-menu-standalone__MenuHeader-sc-12l9vgg-1 dbrkQb">
                                                                                                <button
                                                                                                    type="button"
                                                                                                    data-anchor="mobile-menu-back"
                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO fullscreen-menu-standalone__StyledIconButton-sc-12l9vgg-3 kzBuRK"
                                                                                                    aria-label="Back"
                                                                                                    data-bs-dismiss="modal"><svg
                                                                                                        viewBox="0 0 24 24"
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        fill="#3f495a"
                                                                                                        focusable="false">
                                                                                                        <path
                                                                                                            d="M0 0h24v24H0z"
                                                                                                            fill="none">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                                <h4
                                                                                                    class="typography__H4-rmkozr-3 fullscreen-menu-standalone__MenuTitle-sc-12l9vgg-2 eXEpbc ddvElQ">
                                                                                                    Type of
                                                                                                    response
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div data-anchor="item-type-menu-default"
                                                                                                class="item-type-menu-styled__MenuScroll-sc-1jgt554-0 hLRzaS">
                                                                                                <div
                                                                                                    class="item-type-menu-styled__Menu-sc-1jgt554-1 hpIYCs">
                                                                                                    <div
                                                                                                        class="item-type-menu-styled__MenuColumn-sc-1jgt554-3 gtTPDH">
                                                                                                        <div
                                                                                                            class="item-type-menu-styled__ResponsesGroup-sc-1jgt554-8 fRFEnE">
                                                                                                            <div
                                                                                                                class="item-type-menu-styled__MenuHeader-sc-1jgt554-5 bJrSlZ">
                                                                                                                <div
                                                                                                                    class="item-type-menu-styled__MenuTitle-sc-1jgt554-4 bQMMjH">
                                                                                                                    Title
                                                                                                                    page
                                                                                                                    information
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            {{-- <div data-anchor="title-response-item-site" onclick="@this.set('title_page_questions.{{ $qkey }}.response', null);"
                                                                                            style="display: flex;"
                                                                                            class="menu-items__MenuDiv-cbv7ay-1 fJVAxM">
                                                                                            <div
                                                                                                class="type-icon__IconOutline-p10uwy-0 fDgnZG">
                                                                                                <svg viewBox="0 0 24 24" width="15"
                                                                                                    height="15" fill="#648fff"
                                                                                                    focusable="false">
                                                                                                    <path d="M0 0h24v24H0V0z"
                                                                                                        fill="none">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M21.41 11.41l-8.83-8.83c-.37-.37-.88-.58-1.41-.58H4c-1.1 0-2 .9-2 2v7.17c0 .53.21 1.04.59 1.41l8.83 8.83c.78.78 2.05.78 2.83 0l7.17-7.17c.78-.78.78-2.04-.01-2.83zM6.5 8C5.67 8 5 7.33 5 6.5S5.67 5 6.5 5 8 5.67 8 6.5 7.33 8 6.5 8z"
                                                                                                        fill="#648fff"></path>
                                                                                                </svg>
                                                                                            </div><span>Site</span>
                                                                                        </div> --}}
                                                                                                            <a onclick="setResponseValue({{ $qkey }},2)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="title-response-item-document-number"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                                                        <svg width="15"
                                                                                                                            height="15"
                                                                                                                            viewBox="0 0 14 14"
                                                                                                                            focusable="false">
                                                                                                                            <g fill="#fe8500"
                                                                                                                                fill-rule="nonzero">
                                                                                                                                <path
                                                                                                                                    d="M2.21 9.682a.637.637 0 0 1-.637-.636V4.985l-.352.175a.636.636 0 1 1-.568-1.138l1.272-.636a.635.635 0 0 1 .921.57v5.09a.637.637 0 0 1-.636.636zM7.937 9.682H4.755a.637.637 0 0 1-.45-1.086l2.546-2.545a.85.85 0 0 0 .25-.605.849.849 0 0 0-.25-.604.874.874 0 0 0-1.21 0 .846.846 0 0 0-.25.604.637.637 0 0 1-1.272 0c0-.569.221-1.103.623-1.504.805-.804 2.205-.804 3.009 0 .402.402.623.937.623 1.504 0 .568-.222 1.103-.623 1.505L6.29 8.41h1.646a.637.637 0 0 1 0 1.272zM13 6.104c.214-.29.346-.646.346-1.035 0-.966-.785-1.75-1.75-1.75-.656 0-1.251.362-1.553.944a.636.636 0 1 0 1.13.586.477.477 0 1 1 .423.697.637.637 0 0 0 0 1.273.797.797 0 0 1 0 1.59.797.797 0 0 1-.795-.795.637.637 0 0 0-1.273 0 2.07 2.07 0 0 0 2.068 2.068 2.07 2.07 0 0 0 2.068-2.068c0-.597-.258-1.132-.665-1.51z">
                                                                                                                                </path>
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Document
                                                                                                                        number</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="item-type-menu-styled__ResponsesGroup-sc-1jgt554-8 fRFEnE">
                                                                                                            <div
                                                                                                                class="item-type-menu-styled__MenuHeader-sc-1jgt554-5 bJrSlZ">
                                                                                                                <div
                                                                                                                    class="item-type-menu-styled__MenuTitle-sc-1jgt554-4 bQMMjH">
                                                                                                                    Other
                                                                                                                    responses
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},1)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                                                        <svg width="15"
                                                                                                                            height="15"
                                                                                                                            viewBox="0 0 14 14"
                                                                                                                            focusable="false">
                                                                                                                            <path
                                                                                                                                d="M2.33333333,2.33333333 L2.33333333,4.97716191 L3.7929974,4.97716191 L3.7929974,4.28724799 C3.7929974,4.03503038 3.985625,3.82984264 4.22242188,3.82984264 L6.11229427,3.82984264 L6.11229427,9.52966171 C6.11229427,9.88941502 5.83754427,10.1820993 5.49979427,10.1820993 L4.8983776,10.1820993 L4.8983776,11.6666667 L9.11447396,11.6666667 L9.11447396,10.1820993 L8.51305729,10.1820993 C8.17534375,10.1820993 7.90055729,9.88941502 7.90055729,9.52966171 L7.90055729,3.82982322 L9.77757813,3.82982322 C10.0143568,3.82982322 10.2070026,4.03501096 10.2070026,4.28722858 L10.2070026,4.97714249 L11.6666667,4.97714249 L11.6666667,2.33333333 L2.33333333,2.33333333 Z"
                                                                                                                                fill="#fe8500"
                                                                                                                                fill-rule="nonzero">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Text
                                                                                                                        answer</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},4)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 fNHrxp">
                                                                                                                        <svg width="15"
                                                                                                                            height="15"
                                                                                                                            viewBox="0 0 14 14"
                                                                                                                            focusable="false">
                                                                                                                            <g fill="#ffb000"
                                                                                                                                fill-rule="nonzero">
                                                                                                                                <path
                                                                                                                                    d="M2.21 9.682a.637.637 0 0 1-.637-.636V4.985l-.352.175a.636.636 0 1 1-.568-1.138l1.272-.636a.635.635 0 0 1 .921.57v5.09a.637.637 0 0 1-.636.636zM7.937 9.682H4.755a.637.637 0 0 1-.45-1.086l2.546-2.545a.85.85 0 0 0 .25-.605.849.849 0 0 0-.25-.604.874.874 0 0 0-1.21 0 .846.846 0 0 0-.25.604.637.637 0 0 1-1.272 0c0-.569.221-1.103.623-1.504.805-.804 2.205-.804 3.009 0 .402.402.623.937.623 1.504 0 .568-.222 1.103-.623 1.505L6.29 8.41h1.646a.637.637 0 0 1 0 1.272zM13 6.104c.214-.29.346-.646.346-1.035 0-.966-.785-1.75-1.75-1.75-.656 0-1.251.362-1.553.944a.636.636 0 1 0 1.13.586.477.477 0 1 1 .423.697.637.637 0 0 0 0 1.273.797.797 0 0 1 0 1.59.797.797 0 0 1-.795-.795.637.637 0 0 0-1.273 0 2.07 2.07 0 0 0 2.068 2.068 2.07 2.07 0 0 0 2.068-2.068c0-.597-.258-1.132-.665-1.51z">
                                                                                                                                </path>
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Number</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},3)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 hsvMMC">
                                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                                            width="15"
                                                                                                                            height="15"
                                                                                                                            focusable="false"
                                                                                                                            data-anchor="checked-checkbox-svg">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                fill="#5e9cff"
                                                                                                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Checkbox</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="item-type-menu-styled__MenuDivider-sc-1jgt554-7 bcPAfa">
                                                                                                            </div>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},5)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 fXeslI">
                                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                                            width="15"
                                                                                                                            height="15"
                                                                                                                            focusable="false">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                fill="#81b532"
                                                                                                                                d="M20 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H7V2c0-.55-.45-1-1-1s-1 .45-1 1v1H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 18H5c-.55 0-1-.45-1-1V8h16v12c0 .55-.45 1-1 1z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Date
                                                                                                                        &amp;
                                                                                                                        Time</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div data-anchor="other-response-item"
                                                                                                                style="display: flex;"
                                                                                                                {{-- onclick="setResponseValue({{ $qkey }},4)" --}}
                                                                                                                data-bs-dismiss="modal"
                                                                                                                class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                <div
                                                                                                                    class="type-icon__IconOutline-p10uwy-0 fJrMSZ">
                                                                                                                    <svg width="15"
                                                                                                                        height="15"
                                                                                                                        viewBox="0 0 16 16"
                                                                                                                        focusable="false"
                                                                                                                        fill="none">
                                                                                                                        <path
                                                                                                                            d="M16 11.2V1.6c0-.88-.72-1.6-1.6-1.6H4.8c-.88 0-1.6.72-1.6 1.6v9.6c0 .88.72 1.6 1.6 1.6h9.6c.88 0 1.6-.72 1.6-1.6zM7.52 8.424l1.304 1.744 2.064-2.576a.4.4 0 0 1 .624 0l2.368 2.96a.399.399 0 0 1-.312.648H5.6a.4.4 0 0 1-.32-.64l1.6-2.136a.406.406 0 0 1 .64 0zM0 4v10.4c0 .88.72 1.6 1.6 1.6H12c.44 0 .8-.36.8-.8 0-.44-.36-.8-.8-.8H2.4c-.44 0-.8-.36-.8-.8V4c0-.44-.36-.8-.8-.8-.44 0-.8.36-.8.8z"
                                                                                                                            fill="#00b6cb">
                                                                                                                        </path>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                                <span>Media</span>
                                                                                                            </div>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},9)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 dkfwqD">
                                                                                                                        <svg viewBox="0 0 14 14"
                                                                                                                            width="15"
                                                                                                                            height="15"
                                                                                                                            focusable="false">
                                                                                                                            <g id="icon_slider_v2"
                                                                                                                                fill="none"
                                                                                                                                fill-rule="evenodd">
                                                                                                                                <g id="Group"
                                                                                                                                    transform="translate(1.5 1)"
                                                                                                                                    fill="#1ecf93">
                                                                                                                                    <g
                                                                                                                                        id="Group-3">
                                                                                                                                        <g
                                                                                                                                            id="Group-2">
                                                                                                                                            <path
                                                                                                                                                d="M1.75 2v2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 2h1.25zm4 0h4.75a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H5.75V2z"
                                                                                                                                                id="Combined-Shape">
                                                                                                                                            </path>
                                                                                                                                            <rect
                                                                                                                                                id="Rectangle-Copy-2"
                                                                                                                                                x="2.25"
                                                                                                                                                y="0.5"
                                                                                                                                                width="3"
                                                                                                                                                height="5"
                                                                                                                                                rx="0.5">
                                                                                                                                            </rect>
                                                                                                                                        </g>
                                                                                                                                    </g>
                                                                                                                                    <g id="Group-3-Copy"
                                                                                                                                        transform="matrix(-1 0 0 1 11 6)">
                                                                                                                                        <g
                                                                                                                                            id="Group-2">
                                                                                                                                            <path
                                                                                                                                                d="M1.75 2v2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 2h1.25zm4 0h4.75a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H5.75V2z"
                                                                                                                                                id="Combined-Shape">
                                                                                                                                            </path>
                                                                                                                                            <rect
                                                                                                                                                id="Rectangle-Copy-2"
                                                                                                                                                x="2.25"
                                                                                                                                                y="0.5"
                                                                                                                                                width="3"
                                                                                                                                                height="5"
                                                                                                                                                rx="0.5">
                                                                                                                                            </rect>
                                                                                                                                        </g>
                                                                                                                                    </g>
                                                                                                                                </g>
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Slider</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div data-anchor="other-response-item"
                                                                                                                style="display: flex;"
                                                                                                                {{-- onclick="setResponseValue({{ $qkey }},4)" --}}
                                                                                                                data-bs-dismiss="modal"
                                                                                                                class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                <div
                                                                                                                    class="type-icon__IconOutline-p10uwy-0 fNHrxp">
                                                                                                                    <svg viewBox="0 0 14 14"
                                                                                                                        width="15"
                                                                                                                        height="15"
                                                                                                                        focusable="false">
                                                                                                                        <g id="icon_annotate_2"
                                                                                                                            fill="none"
                                                                                                                            fill-rule="evenodd">
                                                                                                                            <path
                                                                                                                                d="M1.524 11.854c.141.239.753 1.21 1.345 1.143.151-.017.324-.165.546-.424.268-.315 1.098-.73 2.353-.827 1.072-.082 1.973-.866 2.537-2.206.156-.37.285-.768.383-1.183l.066-.263 4.13-3.605a.316.316 0 0 0 .028-.465l-2.854-2.933a.298.298 0 0 0-.452.029L6.122 5.376c-.55-.05-1.119.027-1.69.23a5.627 5.627 0 0 0-2.195 1.45c-.662.713-1.077 1.552-1.203 2.426-.114.8.06 1.642.49 2.372zm3.368-5.2c-.002-.518.744-.656 1.172-.611.024.002.276.025.33.046L7.873 7.67c-.01.055-.06.245-.067.276a6.957 6.957 0 0 1-.333 1.073c-.3.74-.854 1.598-1.773 1.712-1.561.192-.8-1.501-.808-4.077z"
                                                                                                                                id="Shape"
                                                                                                                                fill="#ffb000"
                                                                                                                                fill-rule="nonzero">
                                                                                                                            </path>
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                                <span>Annotation</span>
                                                                                                            </div>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},6)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 fJrMSZ">
                                                                                                                        <svg width="15"
                                                                                                                            height="15"
                                                                                                                            viewBox="0 0 14 14"
                                                                                                                            focusable="false">
                                                                                                                            <path
                                                                                                                                d="M9.513 5.581l1.958.695-1.628 4.284c-.153.403-.98 1.663-1.555 1.92l-.14.368a.24.24 0 0 1-.306.138.229.229 0 0 1-.142-.297l.132-.348c-.292-.548-.074-2.14.054-2.476L9.513 5.58zm2.834-4.532c-.538-.19-1.169.203-1.35.679L9.819 4.832l1.958.694 1.178-3.104c.149-.389-.067-1.182-.607-1.373zM8.804 5.421a.478.478 0 0 0 .614-.272l1.245-3.243a.457.457 0 0 0-.282-.593.483.483 0 0 0-.615.272L8.522 4.828a.457.457 0 0 0 .282.593zM7.13 11.286c-.125-.117-.296-.5-.42-.35-.124.15-.035.094-.182.09h-.051c-.093-.251-.28-.41-.562-.471-.372-.078-.67.096-.875.23.018-.103.048-.225.07-.314.072-.284.145-.579.09-.855a.494.494 0 0 0-.452-.395c-.576-.032-1.047.276-1.461.554-.436.292-.715.466-.993.368-.34-.12-.374-1.031-.21-1.843.145-.731.417-2.093 1.113-2.71.234-.209.573-.434.852-.325.328.128.599.664.66 1.302.025.27.261.467.538.443a.491.491 0 0 0 .446-.535c-.098-1.04-.59-1.854-1.282-2.124-.415-.16-1.075-.203-1.875.507-.87.773-1.19 2.084-1.424 3.251-.116.583-.4 2.517.85 2.959.76.269 1.38-.147 1.876-.48.091-.06.181-.12.268-.174-.083.356-.134.737.083 1.058.322.482.779.534 1.356.157l.072-.047c.053.11.148.233.32.316.207.101.415.106.566.11.065.002.153.004.18.015.093.041-.228-.1-.121.001.08.075.165.153.272.234a.496.496 0 0 0 .692-.099.488.488 0 0 0-.1-.687c-.308-.19-.241-.134-.296-.186z"
                                                                                                                                fill="#00b6cb"
                                                                                                                                fill-rule="nonzero">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Signature</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <a onclick="setResponseValue({{ $qkey }},8)"
                                                                                                                data-bs-dismiss="modal"
                                                                                                                style="text-decoration: none;">
                                                                                                                <div data-anchor="other-response-item"
                                                                                                                    style="display: flex;"
                                                                                                                    class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr">
                                                                                                                    <div
                                                                                                                        class="type-icon__IconOutline-p10uwy-0 iWJCbx">
                                                                                                                        <svg width="15"
                                                                                                                            height="15"
                                                                                                                            viewBox="0 0 14 14">
                                                                                                                            <g stroke="none"
                                                                                                                                stroke-width="1"
                                                                                                                                fill="none"
                                                                                                                                fill-rule="evenodd">
                                                                                                                                <path
                                                                                                                                    d="M7,2 C5.065,2 3.5,3.60760144 3.5,5.59527478 C3.5,7.73703133 5.71,10.6902928 6.62,11.8151002 C6.82,12.0616333 7.185,12.0616333 7.385,11.8151002 C8.29,10.6902928 10.5,7.73703133 10.5,5.59527478 C10.5,3.60760144 8.935,2 7,2 Z M7,6.87930149 C6.31,6.87930149 5.75,6.30405752 5.75,5.59527478 C5.75,4.88649204 6.31,4.31124807 7,4.31124807 C7.69,4.31124807 8.25,4.88649204 8.25,5.59527478 C8.25,6.30405752 7.69,6.87930149 7,6.87930149 Z"
                                                                                                                                    fill="#fe8500"
                                                                                                                                    fill-rule="nonzero">
                                                                                                                                </path>
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <span>Location</span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="item-type-menu-styled__MenuDivider-sc-1jgt554-7 bcPAfa">
                                                                                                            </div>
                                                                                                            <div data-anchor="other-response-item"
                                                                                                                style="display: flex;"
                                                                                                                {{-- onclick="setResponseValue({{ $qkey }},4)" --}}
                                                                                                                data-bs-dismiss="modal"
                                                                                                                class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__StyledMenuItem-sc-1jgt554-2 iDhWfr mb-5">
                                                                                                                <div
                                                                                                                    class="type-icon__IconOutline-p10uwy-0 fDgnZG">
                                                                                                                    <svg width="15"
                                                                                                                        height="15"
                                                                                                                        viewBox="0 0 14 14"
                                                                                                                        focusable="false">
                                                                                                                        <path
                                                                                                                            d="M12.763 12.316c-.148-.086-1.049-.644-1.53-1.653a5.528 5.528 0 0 0 1.765-4.015c0-3.101-2.704-5.648-6-5.648C3.705 1 1 3.547 1 6.648c0 3.102 2.704 5.648 5.999 5.648.442 0 .917-.041 1.573-.179 1.723.916 3.269.89 3.857.88.262-.003.452.045.55-.226a.357.357 0 0 0-.216-.455zM7.702 9.484a.703.703 0 1 1-1.406 0V6.648a.703.703 0 1 1 1.406 0v2.836zm-.703-4.617a.703.703 0 1 1 0-1.406.703.703 0 0 1 0 1.406z"
                                                                                                                            fill="#648fff"
                                                                                                                            fill-rule="nonzero">
                                                                                                                        </path>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                                <span>Instruction</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="item-type-menu-styled__MenuColumn-sc-1jgt554-3 gtTPDH">
                                                                                                        <div
                                                                                                            class="item-type-menu-styled__ResponsesContainer-sc-1jgt554-6 hfhxmZ">
                                                                                                            <div
                                                                                                                class="multiple-choice-response-type-options__MCContainer-sc-70uo3g-0 sruOo">
                                                                                                                <div
                                                                                                                    class="item-type-menu-styled__ResponsesGroup-sc-1jgt554-8 fRFEnE">
                                                                                                                    <div
                                                                                                                        class="item-type-menu-styled__MenuHeader-sc-1jgt554-5 cSjXGQ">
                                                                                                                        <div
                                                                                                                            class="item-type-menu-styled__MenuTitle-sc-1jgt554-4 bQMMjH">
                                                                                                                            Multiple
                                                                                                                            choice
                                                                                                                            responses
                                                                                                                        </div>
                                                                                                                        <div role="button"
                                                                                                                            class="link__Link-um3jmd-2 multiple-choice-response-type-options__StyledLink-sc-70uo3g-1 jyUuRY graKfr"
                                                                                                                            onclick="setResponseValue({{ $qkey }},7)"
                                                                                                                            data-bs-toggle="modal"
                                                                                                                            data-bs-target="#MultipleChoiseOptionModal{{ $loop->index }}">
                                                                                                                            +
                                                                                                                            Responses
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div data-anchor="response-set-menu-item"
                                                                                                                        class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                                        <div data-anchor="response-set-item"
                                                                                                                            class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt"
                                                                                                                            {{-- Question key | response id | readyOption id --}}
                                                                                                                            onclick="setResponseValueFromReadyOptions({{ $qkey }},7,1)"
                                                                                                                            data-bs-dismiss="modal">
                                                                                                                            <div data-anchor="response-menu-item-response-container"
                                                                                                                                class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                                                                <div color="#13855f"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 xXWzF">
                                                                                                                                    Good
                                                                                                                                </div>
                                                                                                                                <div color="#ffb000"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 jZNie">
                                                                                                                                    Fair
                                                                                                                                </div>
                                                                                                                                <div color="#c60022"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 hcaARf">
                                                                                                                                    Poor
                                                                                                                                </div>
                                                                                                                                <div color="#707070"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 gOgMGu">
                                                                                                                                    N/A
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        {{-- <button
                                                                                                                                    type="button"
                                                                                                                                    data-anchor="response-set-item-edit-5b69aee5-0532-46a4-b2f5-d020d4d5381d"
                                                                                                                                    tabindex="-1"
                                                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO">
                                                                                                                                    <svg width="20"
                                                                                                                                        height="20"
                                                                                                                                        viewBox="0 0 14 14"
                                                                                                                                        focusable="false">
                                                                                                                                        <path
                                                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                                                            fill-rule="nonzero"
                                                                                                                                            fill="#545f70">
                                                                                                                                        </path>
                                                                                                                                    </svg>
                                                                                                                                </button> --}}
                                                                                                                    </div>
                                                                                                                    <div data-anchor="response-set-menu-item"
                                                                                                                        class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                                        <div data-anchor="response-set-item"
                                                                                                                            class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt"
                                                                                                                            {{-- Question key | response id | readyOption id --}}
                                                                                                                            onclick="setResponseValueFromReadyOptions({{ $qkey }},7,2)"
                                                                                                                            data-bs-dismiss="modal">
                                                                                                                            <div data-anchor="response-menu-item-response-container"
                                                                                                                                class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                                                                <div color="#13855f"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 xXWzF">
                                                                                                                                    Safe
                                                                                                                                </div>
                                                                                                                                <div color="#c60022"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 hcaARf">
                                                                                                                                    At
                                                                                                                                    Risk
                                                                                                                                </div>
                                                                                                                                <div color="#707070"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 gOgMGu">
                                                                                                                                    N/A
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        {{-- <button
                                                                                                                                    type="button"
                                                                                                                                    data-anchor="response-set-item-edit-7601fb75-80ae-4409-b31a-9acd58d45445"
                                                                                                                                    tabindex="-1"
                                                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO">
                                                                                                                                    <svg
                                                                                                                                        width="20"
                                                                                                                                        height="20"
                                                                                                                                        viewBox="0 0 14 14"
                                                                                                                                        focusable="false">
                                                                                                                                        <path
                                                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                                                            fill-rule="nonzero"
                                                                                                                                            fill="#545f70">
                                                                                                                                        </path>
                                                                                                                                    </svg>
                                                                                                                                </button> --}}
                                                                                                                    </div>
                                                                                                                    <div data-anchor="response-set-menu-item"
                                                                                                                        class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                                        <div data-anchor="response-set-item"
                                                                                                                            class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt"
                                                                                                                            {{-- Question key | response id | readyOption id --}}
                                                                                                                            onclick="setResponseValueFromReadyOptions({{ $qkey }},7,3)"
                                                                                                                            data-bs-dismiss="modal">
                                                                                                                            <div data-anchor="response-menu-item-response-container"
                                                                                                                                class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                                                                <div color="#13855f"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 xXWzF">
                                                                                                                                    Pass
                                                                                                                                </div>
                                                                                                                                <div color="#c60022"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 hcaARf">
                                                                                                                                    Fail
                                                                                                                                </div>
                                                                                                                                <div color="#707070"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 gOgMGu">
                                                                                                                                    N/A
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        {{-- <button
                                                                                                                                    type="button"
                                                                                                                                    data-anchor="response-set-item-edit-b52a8b4c-048b-4f7d-99b9-c6b9680be5ed"
                                                                                                                                    tabindex="-1"
                                                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                                                                                                        width="20"
                                                                                                                                        height="20"
                                                                                                                                        viewBox="0 0 14 14"
                                                                                                                                        focusable="false">
                                                                                                                                        <path
                                                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                                                            fill-rule="nonzero"
                                                                                                                                            fill="#545f70">
                                                                                                                                        </path>
                                                                                                                                    </svg></button> --}}
                                                                                                                    </div>
                                                                                                                    <div data-anchor="response-set-menu-item"
                                                                                                                        class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                                        <div data-anchor="response-set-item"
                                                                                                                            class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt"
                                                                                                                            {{-- Question key | response id | readyOption id --}}
                                                                                                                            onclick="setResponseValueFromReadyOptions({{ $qkey }},7,4)"
                                                                                                                            data-bs-dismiss="modal">
                                                                                                                            <div data-anchor="response-menu-item-response-container"
                                                                                                                                class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                                                                <div color="#13855f"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 xXWzF">
                                                                                                                                    Yes
                                                                                                                                </div>
                                                                                                                                <div color="#c60022"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 hcaARf">
                                                                                                                                    No
                                                                                                                                </div>
                                                                                                                                <div color="#707070"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 gOgMGu">
                                                                                                                                    N/A
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        {{-- <button
                                                                                                                                    type="button"
                                                                                                                                    data-anchor="response-set-item-edit-c6c011ed-4ade-460d-a04b-da730834b667"
                                                                                                                                    tabindex="-1"
                                                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                                                                                                        width="20"
                                                                                                                                        height="20"
                                                                                                                                        viewBox="0 0 14 14"
                                                                                                                                        focusable="false">
                                                                                                                                        <path
                                                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                                                            fill-rule="nonzero"
                                                                                                                                            fill="#545f70">
                                                                                                                                        </path>
                                                                                                                                    </svg></button> --}}
                                                                                                                    </div>
                                                                                                                    <div data-anchor="response-set-menu-item"
                                                                                                                        class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                                        <div data-anchor="response-set-item"
                                                                                                                            class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt"
                                                                                                                            {{-- Question key | response id | readyOption id --}}
                                                                                                                            onclick="setResponseValueFromReadyOptions({{ $qkey }},7,5)"
                                                                                                                            data-bs-dismiss="modal">
                                                                                                                            <div data-anchor="response-menu-item-response-container"
                                                                                                                                class="responses-menu-item-styled__ResponseContainer-sc-1qz79w6-0 fyczhl">
                                                                                                                                <div color="#13855f"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 xXWzF">
                                                                                                                                    Compliant
                                                                                                                                </div>
                                                                                                                                <div color="#c60022"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 hcaARf">
                                                                                                                                    Non-Compliant
                                                                                                                                </div>
                                                                                                                                <div color="#707070"
                                                                                                                                    mode="light"
                                                                                                                                    class="response-chip__ResponseChip-yr894r-0 gOgMGu">
                                                                                                                                    N/A
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        {{-- <button
                                                                                                                                    type="button"
                                                                                                                                    data-anchor="response-set-item-edit-d743f356-a147-472c-a790-0c46a187de92"
                                                                                                                                    tabindex="-1"
                                                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                                                                                                        width="20"
                                                                                                                                        height="20"
                                                                                                                                        viewBox="0 0 14 14"
                                                                                                                                        focusable="false">
                                                                                                                                        <path
                                                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                                                            fill-rule="nonzero"
                                                                                                                                            fill="#545f70">
                                                                                                                                        </path>
                                                                                                                                    </svg></button> --}}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            {{-- <div data-anchor="grs-responses-group"
                                                                                            class="item-type-menu-styled__ResponsesGroup-sc-1jgt554-8 fRFEnE">
                                                                                            <div
                                                                                                class="item-type-menu-styled__MenuHeader-sc-1jgt554-5 cSjXGQ">
                                                                                                <div
                                                                                                    class="item-type-menu-styled__MenuTitle-sc-1jgt554-4 bQMMjH">
                                                                                                    Global Response Sets
                                                                                                </div>
                                                                                            </div>
                                                                                            <div data-anchor="global-response-set-item-responseset_0d567bb3323746cd91545ba4298c11ac"
                                                                                                class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                <div
                                                                                                    class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt">
                                                                                                    Untitled response set
                                                                                                </div><button
                                                                                                    type="button"
                                                                                                    data-anchor="global-response-set-item-edit-responseset_0d567bb3323746cd91545ba4298c11ac"
                                                                                                    tabindex="-1"
                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                                                                        width="20"
                                                                                                        height="20"
                                                                                                        viewBox="0 0 14 14"
                                                                                                        focusable="false">
                                                                                                        <path
                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                            fill-rule="nonzero"
                                                                                                            fill="#545f70">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                            </div>
                                                                                            <div data-anchor="global-response-set-item-responseset_e7ed34a744f1487abd30079194eff3ce"
                                                                                                class="menu-items__MenuDiv-cbv7ay-1 gupkBu item-type-menu-styled__MenuResponseSetItem-sc-1jgt554-9 eCBvzO">
                                                                                                <div
                                                                                                    class="item-type-menu-styled__ResponseSetMenuItemWrapper-sc-1jgt554-10 evLYbt">
                                                                                                    AD</div><button
                                                                                                    type="button"
                                                                                                    data-anchor="global-response-set-item-edit-responseset_e7ed34a744f1487abd30079194eff3ce"
                                                                                                    tabindex="-1"
                                                                                                    class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO"><svg
                                                                                                        width="20"
                                                                                                        height="20"
                                                                                                        viewBox="0 0 14 14"
                                                                                                        focusable="false">
                                                                                                        <path
                                                                                                            d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                                            fill-rule="nonzero"
                                                                                                            fill="#545f70">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="modal fade m-0 p-0"
                                                                            id="ResponseOptionModal{{ $loop->index }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="ResponseOptionModal{{ $loop->index }}Label"
                                                                            aria-hidden="true" wire:ignore.self>
                                                                            <div
                                                                                class="modal-dialog modal-fullscreen">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5"
                                                                                            id="ResponseOptionModal{{ $loop->index }}Label">
                                                                                            Response
                                                                                            Options
                                                                                        </h1>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="response-model">
                                                                                            <div
                                                                                                class="full-screen-controller-styled__FullScreenControllerContainer-f2lnls-0 eOsZYi sc-lmgQwP hpRDUw">
                                                                                                <div
                                                                                                    class="fullscreen-menu-standalone__Container-sc-12l9vgg-0 ccjMQy">
                                                                                                    <div
                                                                                                        class="fullscreen-menu-standalone__MenuHeader-sc-12l9vgg-1 dbrkQb">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-anchor="mobile-menu-back"
                                                                                                            class="icon-button__StyledButton-sc-1ev4xf3-1 jvZSBO fullscreen-menu-standalone__StyledIconButton-sc-12l9vgg-3 kzBuRK"
                                                                                                            data-bs-toggle="modal"
                                                                                                            data-bs-target="#TitlePageResponseModal{{ $loop->index }}"><svg
                                                                                                                viewBox="0 0 24 24"
                                                                                                                width="24"
                                                                                                                height="24"
                                                                                                                fill="#3f495a"
                                                                                                                focusable="false">
                                                                                                                <path
                                                                                                                    d="M0 0h24v24H0z"
                                                                                                                    fill="none">
                                                                                                                </path>
                                                                                                                <path
                                                                                                                    d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z">
                                                                                                                </path>
                                                                                                            </svg></button>
                                                                                                        <h4
                                                                                                            class="typography__H4-rmkozr-3 fullscreen-menu-standalone__MenuTitle-sc-12l9vgg-2 eXEpbc ddvElQ">
                                                                                                            Response
                                                                                                            options
                                                                                                        </h4>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="row">
                                                                                                        <div
                                                                                                            class="col-12">
                                                                                                            <div class="my-3"
                                                                                                                style="margin-left:0%; ">
                                                                                                                <input
                                                                                                                    class="form-check-input ml-1"
                                                                                                                    type="checkbox"
                                                                                                                    wire:model="title_page_questions.{{ $qkey }}.is_required"
                                                                                                                    id="flexCheckChecked{{ $qkey }}"
                                                                                                                    wire:ignore.self>
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="flexCheckChecked{{ $qkey }}">
                                                                                                                    {{ __('Required') }}
                                                                                                                </label><br>
                                                                                                            </div>
                                                                                                            @if (!empty($title_page_questions[$loop->index]['response']))
                                                                                                                @if ($title_page_questions[$loop->index]['response'] == 1)
                                                                                                                    <span
                                                                                                                        class="mx-2">Text
                                                                                                                        Answer
                                                                                                                        Format:</span>
                                                                                                                    <select
                                                                                                                        wire:ignore.self
                                                                                                                        wire:model="title_page_questions.{{ $qkey }}.text_answer_type"
                                                                                                                        class="form-control m-1 w-75">
                                                                                                                        <option
                                                                                                                            value="1">
                                                                                                                            Short
                                                                                                                            Answer
                                                                                                                        </option>
                                                                                                                        <option
                                                                                                                            value="2">
                                                                                                                            Long
                                                                                                                            Answer
                                                                                                                        </option>
                                                                                                                    </select>
                                                                                                                @elseif($title_page_questions[$loop->index]['response'] == 2)
                                                                                                                    <span
                                                                                                                        class="mx-2">Document
                                                                                                                        Number
                                                                                                                        Format:</span>
                                                                                                                    <div class="input-group mx-1 my-1 w-75"
                                                                                                                        wire:ignore.self>
                                                                                                                        <span
                                                                                                                            class="input-group-text">Format:</span>
                                                                                                                        <input
                                                                                                                            type="text"
                                                                                                                            wire:model="title_page_questions.{{ $qkey }}.docNum_format"
                                                                                                                            class="form-control">
                                                                                                                        <input
                                                                                                                            type="text"
                                                                                                                            wire:model="title_page_questions.{{ $qkey }}.docNum_format_number"
                                                                                                                            class="form-control">
                                                                                                                    </div>
                                                                                                                @endif
                                                                                                            @endif
                                                                                                            <div
                                                                                                                class="row m-5">
                                                                                                                <a class="btn btn-outline-success w-100"
                                                                                                                    aria-label="Back"
                                                                                                                    data-bs-dismiss="modal">{{ __('Done') }}</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-primary">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> --}}
                                                                <div class="modal fade m-0 p-0"
                                                                    id="MultipleChoiseOptionModal{{ $loop->index }}"
                                                                    tabindex="-1"
                                                                    aria-labelledby="MultipleChoiseOptionModal{{ $loop->index }}Label"
                                                                    aria-hidden="true" wire:ignore.self>
                                                                    <div class="modal-dialog modal-fullscreen">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="MultipleChoiseOptionModal{{ $loop->index }}Label">
                                                                                    Response
                                                                                    Options
                                                                                </h1>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="iVmibF cxbltl">
                                                                                    <div class="bJfPHR hzzSzX">
                                                                                        <div>
                                                                                            <div class="jOMNlj">
                                                                                                <h3
                                                                                                    class="lhPVYY">
                                                                                                    Multiple
                                                                                                    choice
                                                                                                    responses
                                                                                                </h3>
                                                                                                <div
                                                                                                    class="grGybe">
                                                                                                    <div
                                                                                                        class="gEVyqy dZoNkv">
                                                                                                        e.g.
                                                                                                        Yes,
                                                                                                        No, N/A
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="eMiEgJ">
                                                                                                        <button
                                                                                                            role="button"
                                                                                                            style="color: rgb(71, 64, 212);"
                                                                                                            wire:click.prevent="clear_new_response_option({{ $qkey }})">
                                                                                                            Reset
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="dFFhJP">
                                                                                                    <span>Response</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div style="background: transparent; border: medium none;"
                                                                                                class="jkEVJ">
                                                                                                <div
                                                                                                    class="multible_choise_wrapper">
                                                                                                    @if (!empty($title_page_questions[$loop->index]['response']))
                                                                                                        @if ($title_page_questions[$loop->index]['response'] == 7)
                                                                                                            @if (!empty($title_page_questions[$loop->index]['multiple_choice']))
                                                                                                                @forelse ($title_page_questions[$loop->index]['multiple_choice'] as $responsKey => $respons)
                                                                                                                    <div data-rbd-droppable-id="responses{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                        data-rbd-droppable-context-id="{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                        class="dragable">
                                                                                                                        <div data-rbd-draggable-context-id="{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                            data-rbd-draggable-id="9c02a8c5-159b-4384-9f81-64a7d62dd89c"
                                                                                                                            class="response-set-editor-styled__ResponseContainer-sc-1s2q5r6-4 kOpTns">
                                                                                                                            <div tabindex="{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                                role="button"
                                                                                                                                aria-describedby="rbd-hidden-text-1-hidden-text-8"
                                                                                                                                data-rbd-drag-handle-draggable-id="9c02a8c5-159b-4384-9f81-64a7d62dd89c"
                                                                                                                                data-rbd-drag-handle-context-id="1"
                                                                                                                                draggable="false"
                                                                                                                                class="response-set-editor-styled__DragHandler-sc-1s2q5r6-5 eCLrAf drag-icon">
                                                                                                                                <svg viewBox="0 0 24 24"
                                                                                                                                    width="21"
                                                                                                                                    height="21"
                                                                                                                                    focusable="false">
                                                                                                                                    <path
                                                                                                                                        fill="none"
                                                                                                                                        d="M0 0h24v24H0V0z">
                                                                                                                                    </path>
                                                                                                                                    <path
                                                                                                                                        fill="#bfc6d4"
                                                                                                                                        d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                                                    </path>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="response-editor-styled__ResponseEditorContainer-sc-1acg0vk-0 kxFgkR">
                                                                                                                                <div
                                                                                                                                    class="response-editor-styled__LabelContainer-sc-1acg0vk-7 iAngMj">
                                                                                                                                    <div
                                                                                                                                        class="response-editor-styled__ResponseLabel-sc-1acg0vk-8 bWxUpN">
                                                                                                                                        <input
                                                                                                                                            class="eVpkze w-100 h-100 question-title"
                                                                                                                                            placeholder="Response title"
                                                                                                                                            id="response-title{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                                            wire:model="title_page_questions.{{ $loop->parent->index }}.multiple_choice.{{ $responsKey }}.title">
                                                                                                                                    </div>
                                                                                                                                    <input
                                                                                                                                        type="color"
                                                                                                                                        wire:model="title_page_questions.{{ $loop->parent->index }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                                                        class="form-control form-control-color gocNNg kxrOmS"
                                                                                                                                        style="height: 25px; width:30px; border-radius: 300px;"
                                                                                                                                        id="response-color{{ $loop->parent->index }}{{ $responsKey }}"
                                                                                                                                        title="Choose your color">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                @empty
                                                                                                                @endforelse
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    @endif
                                                                                                    @if (!empty($title_page_questions[$loop->index]['multiple_choice']))
                                                                                                        <button
                                                                                                            role="button"
                                                                                                            class="response-set-editor-styled__AddResponse-sc-1s2q5r6-3 nyGSP"
                                                                                                            wire:click.prevent="add_new_response({{ $qkey }})">
                                                                                                            +
                                                                                                            Add
                                                                                                            Response
                                                                                                        </button>
                                                                                                    @endif
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="builder-side-panel-legacy__FooterContainer-sc-9xkla-2 fhTZet">
                                                                                                @if (!empty($title_page_questions[$loop->index]['multiple_choice'][0]['title']))
                                                                                                    <button
                                                                                                        color="#ffffff"
                                                                                                        font-size="0.875rem"
                                                                                                        type="button"
                                                                                                        class="button__StyledButton-ftmyi7-1 ggbIJY"
                                                                                                        style="margin-left:10px;"
                                                                                                        data-bs-dismiss="modal">
                                                                                                        Save and
                                                                                                        apply
                                                                                                    </button>
                                                                                                @endif
                                                                                                <button
                                                                                                    color="#4740d4"
                                                                                                    font-size="0.875rem"
                                                                                                    type="button"
                                                                                                    class="button__StyledButton-ftmyi7-1 kDSJkL"
                                                                                                    style="margin-left:10px;"
                                                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endif

                                                        <script>
                                                            function set_is_required(key) {
                                                                if (@this.get('title_page_questions.' + key + '.is_required') == 1) {
                                                                    @this.set('title_page_questions.' + key + '.is_required', 0);
                                                                } else {
                                                                    @this.set('title_page_questions.' + key + '.is_required', 1);
                                                                }
                                                            }

                                                            function set_multi_select_multiple_choise(key) {
                                                                if (@this.get('title_page_questions.' + key + '.multi_select_multiple_choise') == 1) {
                                                                    @this.set('title_page_questions.' + key + '.multi_select_multiple_choise', 0);
                                                                } else {
                                                                    @this.set('title_page_questions.' + key + '.multi_select_multiple_choise', 1);
                                                                }
                                                            }

                                                            function set_is_date(key) {
                                                                if (@this.get('title_page_questions.' + key + '.is_date') == 1) {
                                                                    @this.set('title_page_questions.' + key + '.is_date', 0);
                                                                } else {
                                                                    @this.set('title_page_questions.' + key + '.is_date', 1);
                                                                }
                                                            }

                                                            function set_is_time(key) {
                                                                if (@this.get('title_page_questions.' + key + '.is_time') == 1) {
                                                                    @this.set('title_page_questions.' + key + '.is_time', 0);
                                                                } else {
                                                                    @this.set('title_page_questions.' + key + '.is_time', 1);
                                                                }
                                                            }

                                                            function setResponseValue(value, response) {
                                                                @this.set('title_page_questions.' + value + '.response', response);
                                                                if (response == 7) {
                                                                    if (!@this.get('title_page_questions.' + value).hasOwnProperty('multiple_choice')) {
                                                                        @this.set('title_page_questions.' + value + '.multiple_choice', ['']);
                                                                    }
                                                                }
                                                            }

                                                            function setResponseValueFromReadyOptions(questionKey, responseId, optionId) {
                                                                @this.set('title_page_questions.' + questionKey + '.response', responseId);
                                                                var option = [];
                                                                if (optionId == 1) {
                                                                    option[0] = {
                                                                        title: "Good",
                                                                        color: "#e7f3ef"
                                                                    };
                                                                    option[1] = {
                                                                        title: "Fair",
                                                                        color: "#f9f2e2"
                                                                    };
                                                                    option[2] = {
                                                                        title: "Poor",
                                                                        color: "#f3e0e5"
                                                                    };
                                                                    option[3] = {
                                                                        title: "N/A",
                                                                        color: "#eaebed"
                                                                    };
                                                                }
                                                                if (optionId == 2) {
                                                                    option[0] = {
                                                                        title: "Safe",
                                                                        color: "#e7f3ef"
                                                                    };
                                                                    option[1] = {
                                                                        title: "At Risk",
                                                                        color: "#f3e0e5"
                                                                    };
                                                                    option[2] = {
                                                                        title: "N/A",
                                                                        color: "#eaebed"
                                                                    };
                                                                }
                                                                if (optionId == 3) {
                                                                    option[0] = {
                                                                        title: "Pass",
                                                                        color: "#e7f3ef"
                                                                    };
                                                                    option[1] = {
                                                                        title: "Fail",
                                                                        color: "#f3e0e5"
                                                                    };
                                                                    option[2] = {
                                                                        title: "N/A",
                                                                        color: "#eaebed"
                                                                    };
                                                                }
                                                                if (optionId == 4) {
                                                                    option[0] = {
                                                                        title: "Yes",
                                                                        color: "#e7f3ef"
                                                                    };
                                                                    option[1] = {
                                                                        title: "No",
                                                                        color: "#f3e0e5"
                                                                    };
                                                                    option[2] = {
                                                                        title: "N/A",
                                                                        color: "#eaebed"
                                                                    };
                                                                }
                                                                if (optionId == 5) {
                                                                    option[0] = {
                                                                        title: "Compliant",
                                                                        color: "#e7f3ef"
                                                                    };
                                                                    option[1] = {
                                                                        title: "Non-Compliant",
                                                                        color: "#f3e0e5"
                                                                    };
                                                                    option[2] = {
                                                                        title: "N/A",
                                                                        color: "#eaebed"
                                                                    };
                                                                }
                                                                @this.set('title_page_questions.' + questionKey + '.multiple_choice', option);
                                                            }
                                                        </script>
                                                    </div>
                                                    {{-- <script>
                                                                checkinputfocus = document.querySelector('#question-title-input-' + {{ $loop->index }});

                                                                function unhide(id) {
                                                                    document.querySelector('#done-focus-icon-' + {{ $loop->index }}).style.display = 'block';
                                                                    document.querySelector('#response-select-and-options-' + {{ $loop->index }}).style.display = 'flex';
                                                                }

                                                                function hide(id) {
                                                                    document.querySelector('#done-focus-icon-' + {{ $loop->index }}).style.display='none';
                                                                    document.querySelector('#response-select-and-options-' + {{ $loop->index }}).style.display = 'none';
                                                                }

                                                                function focuse_outfocuse_btn(id) {
                                                                    checkinputfocus.blur
                                                                    // console.log(@this.activeone+1);
                                                                    // @this.set('activeone', 11);
                                                                    // document.querySelector('#done-focus-icon-' + {{ $loop->index }}).style.display = 'none';
                                                                    document.querySelector('#response-select-and-options-' + {{ $loop->index }}).style.display = 'none';
                                                                }
                                                            </script> --}}
                                                    <button data-anchor="template-row-content-delete-button"
                                                        tabindex="-1" id
                                                        class="template-table-styled__TransparentButton-sc-1bccu6o-22 template-table-styled__DeleteButton-sc-1bccu6o-23 bKqzym blqywb"><svg
                                                            width="21" height="21" viewBox="0 0 14 14"
                                                            focusable="false">
                                                            <path
                                                                d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                fill="#545f70" fill-rule="nonzero"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="sc-iJCRrE fwLGvX transition-enter-done">
                                                    <div class="item-settings__Container-efh9r8-6 cukrBe">
                                                        <div class="inline-bar__Container-sc-1mmetu6-0 hLDzma">
                                                            <div>
                                                                <div data-anchor="required-question-checkbox{{ $loop->index }}"
                                                                    aria-describedby="popup-57">
                                                                    <div
                                                                        class="labelled-checkbox__Container-sc-1mtrxoa-0 eMiEgJ">
                                                                        <div tabindex="0" role="checkbox"
                                                                            aria-checked="true"
                                                                            class="checkbox__CheckboxContainer-sc-1w2w3z1-0 xxrKk">
                                                                            <input
                                                                                id="c9746959-4e97-4d3f-a378-caeb4648de05-input"
                                                                                aria-hidden="false"
                                                                                type="checkbox"
                                                                                aria-checked="true"
                                                                                checked="" hidden="">
                                                                            <div data-anchor="renderer-container"
                                                                                class="checkbox-renderer__StyledCheckbox-n77esq-0 eFQUJT">
                                                                                <svg viewBox="0 0 24 24"
                                                                                    width="21"
                                                                                    height="21"
                                                                                    style="display: inline-block;"
                                                                                    focusable="false"
                                                                                    data-anchor="checked-checkbox-svg">
                                                                                    <path fill="none"
                                                                                        d="M0 0h24v24H0V0z">
                                                                                    </path>
                                                                                    <path fill="#4740d4"
                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div><label
                                                                            for="c9746959-4e97-4d3f-a378-caeb4648de05-input"
                                                                            class="labelled-checkbox__CheckboxLabel-sc-1mtrxoa-1 fJJVDV">
                                                                            <div
                                                                                class="typography__Body2-rmkozr-5 gEVyqy">
                                                                                Required</div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div data-anchor="no-sites-caption"
                                                                    class="typography__Caption-rmkozr-8 cETscp">
                                                                    Your team
                                                                    currently has no sites.</div>
                                                                <div data-anchor="manage-sites-link"
                                                                    class="link__Link-um3jmd-2 item-settings__StyledLink-efh9r8-3 jyUuRY iSDgGw">
                                                                    Manage sites<svg viewBox="0 0 24 24"
                                                                        width="14" height="14"
                                                                        focusable="false">
                                                                        <g fill="#675df4" fill-rule="nonzero">
                                                                            <path
                                                                                d="M18 19H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h5c.55 0 1-.45 1-1s-.45-1-1-1H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6c0-.55-.45-1-1-1s-1 .45-1 1v5c0 .55-.45 1-1 1zM14 4c0 .55.45 1 1 1h2.59l-9.13 9.13a.996.996 0 1 0 1.41 1.41L19 6.41V9c0 .55.45 1 1 1s1-.45 1-1V4c0-.55-.45-1-1-1h-5c-.55 0-1 .45-1 1z">
                                                                            </path>
                                                                        </g>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="template-table-styled__PageFooter-sc-1bccu6o-8 kxBwiI mt-2">
                                    <div
                                        class="template-table-styled__PageFooterButtonContainer-sc-1bccu6o-24 jrayfl">
                                        <button color="#4740d4" font-size="0.75rem" letter-spacing="0.025rem"
                                            data-anchor="footer-add-question-button"
                                            data-testid="footer-add-question-button"
                                            class="button__StyledButton-ftmyi7-1 kPZJzm template-table-styled__PageFooterButton-sc-1bccu6o-25 lhxjeC"
                                            type="button" wire:click.prevent="title_page_add_question">
                                            <svg viewBox="0 0 24 24" width="16" height="16"
                                                focusable="false" data-anchor="plus-svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#675df4">
                                                </path>
                                            </svg>
                                            Add question
                                        </button>
                                        {{-- <button color="#4740d4" font-size="0.75rem"
                                                    letter-spacing="0.025rem"
                                                    data-anchor="footer-add-section-button"
                                                    data-testid="footer-add-section-button"
                                                    class="button__StyledButton-ftmyi7-1 kPZJzm template-table-styled__PageFooterButton-sc-1bccu6o-25 template-table-styled__PageFooterAddSectionButton-sc-1bccu6o-26 lhxjeC elUjnm"
                                                    type="button">
                                                    <svg width="16" height="16" viewBox="0 0 14 14"
                                                        focusable="false">
                                                        <g transform="translate(1 1)" fill="#675df4"
                                                            fill-rule="nonzero">
                                                            <rect width="12" height="4.066" rx="0.733">
                                                            </rect>
                                                            <path
                                                                d="M.8 5.947v5.164h10.4V5.947H.8zm0-.89h10.4c.442 0 .8.399.8.89v5.164c0 .491-.358.889-.8.889H.8c-.442 0-.8-.398-.8-.889V5.947c0-.491.358-.89.8-.89z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    Add section
                                                </button> --}}
                                    </div>
                                    <div data-anchor="btn-add-page"
                                        class="link__Link-um3jmd-2 template-table-styled__StyledLink-sc-1bccu6o-1 cRLFaw cGmsts">
                                        Add page</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif
</div>
