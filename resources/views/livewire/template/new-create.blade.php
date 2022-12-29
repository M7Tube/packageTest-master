<div id="myDiv">
    {{-- <button wire:click.prevent="test">print test</button> --}}
    <div class="mt-5" style="margin-bottom: 100%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6" wire:loading.remove wire:target="icon">
                    @if (!$icon)
                        <div class="col-12 col-md-3 logo-alignment">
                            <div class="position-relative">
                                <input type="file" wire:model.lazy="icon" alt="template icon" style="display:none;"
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
                                            r="4">
                                        </circle>
                                        <path
                                            d="M40.791103,32.3878833 L30.7918482,19.36966 C30.4139463,18.87678 29.5849081,18.87678 29.2070063,19.36966 L20.9649405,30.1001308 L14.7813214,22.3591948 C14.4024396,21.8839195 13.5987895,21.8839195 13.2199178,22.3591948 L5.22051392,32.3732128 C4.69807285,33.0261568 5.16230825,34 6.00121573,34 L39.998682,34 C40.8276403,34 41.2964253,33.0459845 40.791103,32.3878833 Z"
                                            id="Shape" fill="#5E9CFF"></path>
                                        <circle id="Oval" fill="#1ECF93" cx="38" cy="38"
                                            r="8">
                                        </circle>
                                        <path
                                            d="M41,37 L39,37 L39,35 C39,34.44769 38.55231,34 38,34 C37.44769,34 37,34.44769 37,35 L37,37 L35,37 C34.44769,37 34,37.44769 34,38 C34,38.55225 34.44769,39 35,39 L37,39 L37,41 C37,41.55225 37.44769,42 38,42 C38.55231,42 39,41.55225 39,41 L39,39 L41,39 C41.55231,39 42,38.55225 42,38 C42,37.44769 41.55231,37 41,37 Z"
                                            id="Shape" fill="#FFFFFF"></path>
                                    </svg>
                                    {{-- <a style="cursor: pointer; text-decoration: none;"
                                        wire:click.prevent="delete_image">
                                        <span class="position-absolute translate-middle badge rounded-pill"
                                            style="">
                                            <h1 class="text-danger"
                                                style="margin-bottom: 35px; margin-right: 10px; font-size: 25px;">*</h1>
                                        </span>
                                    </a> --}}
                                </label>
                                <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                                    Company logo
                                </label>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-md-3 position-relative logo-alignment">
                            <img type="image" src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/images/' . $icon))) !!}"
                                alt="template icon" class="customfileupload" style="">
                            <a style="cursor: pointer; text-decoration: none;" wire:click.prevent="delete_image">
                                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </a>
                            <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                                Company logo
                            </label>
                        </div>
                    @endif
                </div>
                <div class="col-6" wire:loading wire:target="icon">
                    <div class="col-12 col-md-4 logo-alignment">
                        <label for="customefileupload3" class="customfileupload">
                            <div class="la-ball-beat static-spinner">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </label>
                        <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                            Company logo
                        </label>
                    </div>
                </div>
                <div class="col-6" wire:loading.remove wire:target="optional_icon">
                    @if (!$optional_icon)
                        <div class="col-12 col-md-3 second-logo-alignment">
                            <input type="file" wire:model.lazy="optional_icon" alt="template icon"
                                style="display:none;" id="customefileupload2" accept="image/*">
                            <label for="customefileupload2" class="customfileupload">
                                <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M39,34 L36,34 L36,31 C36,30.44775 35.55273,30 35,30 C34.44727,30 34,30.44775 34,31 L34,34 L31,34 C30.44727,34 30,34.44775 30,35 C30,35.55225 30.44727,36 31,36 L34,36 L34,39 C34,39.55225 34.44727,40 35,40 C35.55273,40 36,39.55225 36,39 L36,36 L39,36 C39.55273,36 40,35.55225 40,35 C40,34.44775 39.55273,34 39,34 Z"
                                        id="Shape" fill="#FFFFFF"></path>
                                    <path
                                        d="M42,37 L37,42 L2,42 C0.89543,42 0,41.10457 0,40 L0,2 C0,0.89543 0.89543,0 2,0 L40,0 C41.10457,0 42,0.89543 42,2 L42,37 Z"
                                        id="Shape" fill="#EEF5FF"></path>
                                    <circle id="Oval" fill="#5E9CFF" cx="18" cy="12" r="4">
                                    </circle>
                                    <path
                                        d="M40.791103,32.3878833 L30.7918482,19.36966 C30.4139463,18.87678 29.5849081,18.87678 29.2070063,19.36966 L20.9649405,30.1001308 L14.7813214,22.3591948 C14.4024396,21.8839195 13.5987895,21.8839195 13.2199178,22.3591948 L5.22051392,32.3732128 C4.69807285,33.0261568 5.16230825,34 6.00121573,34 L39.998682,34 C40.8276403,34 41.2964253,33.0459845 40.791103,32.3878833 Z"
                                        id="Shape" fill="#5E9CFF"></path>
                                    <circle id="Oval" fill="#1ECF93" cx="38" cy="38" r="8">
                                    </circle>
                                    <path
                                        d="M41,37 L39,37 L39,35 C39,34.44769 38.55231,34 38,34 C37.44769,34 37,34.44769 37,35 L37,37 L35,37 C34.44769,37 34,37.44769 34,38 C34,38.55225 34.44769,39 35,39 L37,39 L37,41 C37,41.55225 37.44769,42 38,42 C38.55231,42 39,41.55225 39,41 L39,39 L41,39 C41.55231,39 42,38.55225 42,38 C42,37.44769 41.55231,37 41,37 Z"
                                        id="Shape" fill="#FFFFFF"></path>
                                </svg>
                            </label>
                            <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                                Additional logo
                            </label>
                        </div>
                    @else
                        <div class="col-12 col-md-3 position-relative second-logo-alignment">
                            <img type="image" src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/images/' . $optional_icon))) !!}"
                                alt="template icon" class="customfileupload" style="">
                            <a style="cursor: pointer; text-decoration: none;"
                                wire:click.prevent="delete_optional_image">
                                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </a>
                            <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                                Additional logo
                            </label>
                        </div>
                    @endif
                </div>
                <div class="col-6" wire:loading wire:target="optional_icon">
                    <div class="col-12 col-md-4 second-logo-alignment">
                        <label for="customefileupload4" class="customfileupload">
                            <div class="la-ball-beat static-spinner">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </label>
                        <label class="desc" style="margin: 12.5px; margin-top:0%; font-size: 0.9rem;">
                            Additional logo
                        </label>
                    </div>
                </div>
                <div class="col-12 mt-4" style="margin-left:1.6rem!important;margin-right:1.6rem!important;">
                    <div class="d-flex align-items-start justify-content-start">
                        <input type="text" style="font-family: sans-serif, 'Font Awesome 5 Free'" for="title"
                            wire:model.lazy="title" class="title mt-2" placeholder="Your template title" />
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                        <input type="text" for="title" wire:model.lazy="desc" class="mt-2 desc"
                            placeholder="Add a description" />
                    </div>
                </div>
            </div>
        </div>
        <div id="accordionExample" wire:ignore.self>
            <div class="accordion-item title_page">
                <div class="kVgydw" class="accordion-button collapsed" type="button">
                    <div class="Ceqkm" style="margin-left:1.2rem!important" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <svg viewBox="0 0 24 24" width="16" height="16" focusable="false">
                            <path
                                d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                fill="#828ea0" fill-rule="nonzero">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <div class="fceloL mt-1">
                            <input type="text" class="desc" style="font-size: 1.2rem; width: 110%;"
                                placeholder="Title Page" wire:model.lazy="title_page_title">
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
                    wire:ignore.self>
                    <div class="gKLkhd">
                        <div class="cxbltl">
                            <div class="lgSfIY mx-3">
                                The Title Page is the first page of your inspection report. You can
                                <span class="fHfWNd">customize the Title Page</span>
                                below.
                            </div>
                            <div style="padding: 0rem 1rem 0rem;">
                                <div class="kxrOmS eqGxMu">
                                    <div class="cldFRc" wire:click.prevent="title_page_add_question">
                                        <svg viewBox="0 0 24 24" width="14" height="14"
                                            style="cursor: pointer;" class="gdPDbX" focusable="false">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#545f70"></path>
                                        </svg>
                                    </div>
                                    <div class="bgiTWR">
                                        <div class="kGgXUq">
                                            Question
                                            <div class="bdOmts">
                                                <span class="LBNnk"></span>
                                            </div>
                                        </div>
                                        <div class="cYnFsn bfshfO">
                                            Type of response
                                        </div>
                                    </div>
                                </div>
                                <div class="kLpTzB wrapper" onclick="focusOnTitlePage()" {{-- {{ str_contains($this->activeone, 'p_') ? 'wire:ignore' : 'wire:ignore.self' }}  --}}>
                                    @forelse ($title_page_questions as $qkey => $title_page_question)
                                        <div class="hkphPX dragable">
                                            <div class="REnvQ">
                                                <div class="kxrOmS cuypVQ">
                                                    <div class="dBZFks">
                                                    </div>
                                                    <div class="bAJknk">
                                                        <div class="huXueT">
                                                            <div class="kGgXUq">
                                                                <div class="haXfJL drag-icon">
                                                                    <svg viewBox="0 0 24 24" width="24"
                                                                        height="24" focusable="false">
                                                                        <path fill="none" d="M0 0h24v24H0V0z">
                                                                        </path>
                                                                        <path fill="#675df4"
                                                                            d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <span style="padding-left: 0.3rem;"
                                                                    class="eSpMaC text-danger">
                                                                    {{ !empty($title_page_question['is_required']) ? ($title_page_question['is_required'] == 1 ? '*' : '') : '' }}
                                                                </span>
                                                                <div class="bBjJyf">
                                                                    {{-- <div class="eiFrFc" id="t{{ $qkey }}">
                                                                    </div> --}}
                                                                    <div style="display: flex; align-items: center;">
                                                                        <div class="eAfucY"
                                                                            onclick="@this.set('activeone', {{ $loop->index }});">
                                                                            @if ($title_page_question['response'] == 10)
                                                                                <textarea class="question-title-focus eVpkze w-100 question-title-instruction" placeholder="Write a Question ..."
                                                                                wire:model.lazy="title_page_questions.{{ $qkey }}.title" oninput="auto_grow(this);"></textarea>
                                                                                <script>
                                                                                    function auto_grow(element) {
                                                                                        element.style.height = "1px";
                                                                                        element.style.height = (element.scrollHeight) + "px";
                                                                                    }
                                                                                </script>
                                                                            @else
                                                                                <input
                                                                                    class="question-title-focus eVpkze w-100 h-100 question-title"
                                                                                    placeholder="Write a Question ..."
                                                                                    wire:model.lazy="title_page_questions.{{ $qkey }}.title">
                                                                            @endif
                                                                        </div>
                                                                        @if ($activeone == $qkey)
                                                                            <div style="z-index: 1;" class="kSUFwR"
                                                                                wire:click="give_active_one('null')">
                                                                                <button type="button" class="jvZSBO">
                                                                                    <svg viewBox="0 0 24 24"
                                                                                        width="24" height="24"
                                                                                        class="hFCnYj"
                                                                                        focusable="false">
                                                                                        <path fill="#545f70"
                                                                                            fill-rule="nonzero"
                                                                                            d="M8.364 16.075L3.59 11.687 2 13.149 8.364 19 22 6.463 20.41 5z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    {{-- <script>
                                                                        $(document).on("click", "#t" + {{ $qkey }}, function() {
                                                                            $(this).remove();
                                                                        });
                                                                    </script> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="response-select-and-options hyJfGO  {{ $activeone == $loop->index ? 'un-hide' : 'hide' }}">
                                                            <div style="width: 100%;" data-bs-toggle="modal"
                                                                data-bs-target="#TitlePageResponseModal"
                                                                onclick="@this.set('activechangingresponse',{{ $loop->index }})">
                                                                <div class="eWLEUv">
                                                                    <div>
                                                                        @if ($title_page_question['response'] == 2)
                                                                            <div class="iWJCbx">
                                                                                <svg width="15" height="15"
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
                                                                            Document number
                                                                        @elseif($title_page_question['response'] == 1)
                                                                            <div class="iWJCbx">
                                                                                <svg width="15" height="15"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M2.33333333,2.33333333 L2.33333333,4.97716191 L3.7929974,4.97716191 L3.7929974,4.28724799 C3.7929974,4.03503038 3.985625,3.82984264 4.22242188,3.82984264 L6.11229427,3.82984264 L6.11229427,9.52966171 C6.11229427,9.88941502 5.83754427,10.1820993 5.49979427,10.1820993 L4.8983776,10.1820993 L4.8983776,11.6666667 L9.11447396,11.6666667 L9.11447396,10.1820993 L8.51305729,10.1820993 C8.17534375,10.1820993 7.90055729,9.88941502 7.90055729,9.52966171 L7.90055729,3.82982322 L9.77757813,3.82982322 C10.0143568,3.82982322 10.2070026,4.03501096 10.2070026,4.28722858 L10.2070026,4.97714249 L11.6666667,4.97714249 L11.6666667,2.33333333 L2.33333333,2.33333333 Z"
                                                                                        fill="#fe8500"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Text answer
                                                                        @elseif($title_page_question['response'] == 3)
                                                                            <div class="jpgcYH">
                                                                                <svg viewBox="0 0 24 24"
                                                                                    width="15" height="15"
                                                                                    focusable="false">
                                                                                    <path fill="none"
                                                                                        d="M0 0h24v24H0V0z">
                                                                                    </path>
                                                                                    <path fill="#5e9cff"
                                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Checkbox
                                                                        @elseif($title_page_question['response'] == 4)
                                                                            <div class="erayDs">
                                                                                <svg width="15" height="15"
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
                                                                            Number
                                                                        @elseif($title_page_question['response'] == 5)
                                                                            <div class="flVgHp">
                                                                                <svg viewBox="0 0 24 24"
                                                                                    width="15" height="15"
                                                                                    focusable="false">
                                                                                    <path fill="none"
                                                                                        d="M0 0h24v24H0V0z">
                                                                                    </path>
                                                                                    <path fill="#81b532"
                                                                                        d="M20 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H7V2c0-.55-.45-1-1-1s-1 .45-1 1v1H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 18H5c-.55 0-1-.45-1-1V8h16v12c0 .55-.45 1-1 1z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Date & Time
                                                                        @elseif($title_page_question['response'] == 6)
                                                                            <div class="ipAtGo">
                                                                                <svg width="15" height="15"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M9.513 5.581l1.958.695-1.628 4.284c-.153.403-.98 1.663-1.555 1.92l-.14.368a.24.24 0 0 1-.306.138.229.229 0 0 1-.142-.297l.132-.348c-.292-.548-.074-2.14.054-2.476L9.513 5.58zm2.834-4.532c-.538-.19-1.169.203-1.35.679L9.819 4.832l1.958.694 1.178-3.104c.149-.389-.067-1.182-.607-1.373zM8.804 5.421a.478.478 0 0 0 .614-.272l1.245-3.243a.457.457 0 0 0-.282-.593.483.483 0 0 0-.615.272L8.522 4.828a.457.457 0 0 0 .282.593zM7.13 11.286c-.125-.117-.296-.5-.42-.35-.124.15-.035.094-.182.09h-.051c-.093-.251-.28-.41-.562-.471-.372-.078-.67.096-.875.23.018-.103.048-.225.07-.314.072-.284.145-.579.09-.855a.494.494 0 0 0-.452-.395c-.576-.032-1.047.276-1.461.554-.436.292-.715.466-.993.368-.34-.12-.374-1.031-.21-1.843.145-.731.417-2.093 1.113-2.71.234-.209.573-.434.852-.325.328.128.599.664.66 1.302.025.27.261.467.538.443a.491.491 0 0 0 .446-.535c-.098-1.04-.59-1.854-1.282-2.124-.415-.16-1.075-.203-1.875.507-.87.773-1.19 2.084-1.424 3.251-.116.583-.4 2.517.85 2.959.76.269 1.38-.147 1.876-.48.091-.06.181-.12.268-.174-.083.356-.134.737.083 1.058.322.482.779.534 1.356.157l.072-.047c.053.11.148.233.32.316.207.101.415.106.566.11.065.002.153.004.18.015.093.041-.228-.1-.121.001.08.075.165.153.272.234a.496.496 0 0 0 .692-.099.488.488 0 0 0-.1-.687c-.308-.19-.241-.134-.296-.186z"
                                                                                        fill="#00b6cb"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Signature
                                                                        @elseif($title_page_question['response'] == 7)
                                                                            <div class="fyczhl">
                                                                                @if (!empty($title_page_questions[$loop->index]['multiple_choice']))
                                                                                    @forelse ($title_page_questions[$loop->index]['multiple_choice'] as $responsKey => $respons)
                                                                                        <div class="nDePA mx-1"
                                                                                            style="color:{{ $respons['font_color'] }}; background-color:{{ $respons['color'] }};"
                                                                                            {{-- style="color:{{ $this->adjustBrightness($respons['color'], -0.5) }}; background-color:{{ $respons['color'] }};" --}}>
                                                                                            {{ $respons['title'] ?? '' }}
                                                                                        </div>
                                                                                    @empty
                                                                                    @endforelse
                                                                                @endif
                                                                            </div>
                                                                            {{-- <div class="fyczhl">
                                                                                @if (!empty($title_page_questions[$loop->index]['multiple_choice']))
                                                                                    @forelse ($title_page_questions[$loop->index]['multiple_choice'] as $responsKey => $respons)
                                                                                        <div class="badge mx-1"
                                                                                            style="background-color:{{ $respons['color'] ?? '' }}; color:{{ $respons['font_color'] }};">
                                                                                            {{ $respons['title'] ?? '' }}
                                                                                        </div>
                                                                                    @empty
                                                                                    @endforelse
                                                                                @endif
                                                                            </div> --}}
                                                                        @elseif($title_page_question['response'] == 8)
                                                                            <div class="iWJCbx">
                                                                                <svg width="15" height="15"
                                                                                    viewBox="0 0 14 14">
                                                                                    <g stroke="none" stroke-width="1"
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
                                                                            Location
                                                                        @elseif($title_page_question['response'] == 10)
                                                                            <div class="fDgnZG">
                                                                                <svg width="15" height="15"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M12.763 12.316c-.148-.086-1.049-.644-1.53-1.653a5.528 5.528 0 0 0 1.765-4.015c0-3.101-2.704-5.648-6-5.648C3.705 1 1 3.547 1 6.648c0 3.102 2.704 5.648 5.999 5.648.442 0 .917-.041 1.573-.179 1.723.916 3.269.89 3.857.88.262-.003.452.045.55-.226a.357.357 0 0 0-.216-.455zM7.702 9.484a.703.703 0 1 1-1.406 0V6.648a.703.703 0 1 1 1.406 0v2.836zm-.703-4.617a.703.703 0 1 1 0-1.406.703.703 0 0 1 0 1.406z"
                                                                                        fill="#648fff"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Instruction
                                                                        @elseif($title_page_question['response'] == 11)
                                                                            <div class="fJrMSZ">
                                                                                <svg width="15" height="15"
                                                                                    viewBox="0 0 16 16"
                                                                                    focusable="false" fill="none">
                                                                                    <path
                                                                                        d="M16 11.2V1.6c0-.88-.72-1.6-1.6-1.6H4.8c-.88 0-1.6.72-1.6 1.6v9.6c0 .88.72 1.6 1.6 1.6h9.6c.88 0 1.6-.72 1.6-1.6zM7.52 8.424l1.304 1.744 2.064-2.576a.4.4 0 0 1 .624 0l2.368 2.96a.399.399 0 0 1-.312.648H5.6a.4.4 0 0 1-.32-.64l1.6-2.136a.406.406 0 0 1 .64 0zM0 4v10.4c0 .88.72 1.6 1.6 1.6H12c.44 0 .8-.36.8-.8 0-.44-.36-.8-.8-.8H2.4c-.44 0-.8-.36-.8-.8V4c0-.44-.36-.8-.8-.8-.44 0-.8.36-.8.8z"
                                                                                        fill="#00b6cb">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                            Media
                                                                        @endif
                                                                    </div>
                                                                    <svg viewBox="0 0 24 24" width="16"
                                                                        height="16" class="kBTspn"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                            fill="#545f70" fill-rule="nonzero">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                class="three-dots-small-show"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="hcjgmp">
                                                                    <button type="button" class="jvZSBO">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 14 14" focusable="false">
                                                                            <g transform="translate(5.542 1.458)"
                                                                                fill="#545f70" fill-rule="nonzero">
                                                                                <circle
                                                                                    transform="rotate(90 1.458 5.542)"
                                                                                    cx="1.458" cy="5.542"
                                                                                    r="1.458">
                                                                                </circle>
                                                                                <circle
                                                                                    transform="rotate(90 1.458 9.625)"
                                                                                    cx="1.458" cy="9.625"
                                                                                    r="1.458">
                                                                                </circle>
                                                                                <circle
                                                                                    transform="rotate(90 1.458 1.458)"
                                                                                    cx="1.458" cy="1.458"
                                                                                    r="1.458">
                                                                                </circle>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <ul class="dropdown-menu">
                                                                @if ($title_page_question['response'] == 2)
                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    <span
                                                                                        style="margin-top:50px; "></span>
                                                                                    Format:
                                                                                    <div class="ORzaJ knjhoD">
                                                                                        <input type="text"
                                                                                            class="docNum_format"
                                                                                            wire:model.lazy="title_page_questions.{{ $qkey }}.docNum_format" />
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                @elseif($title_page_question['response'] == 1)
                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    Format:
                                                                                    <select
                                                                                        wire:model.lazy="title_page_questions.{{ $qkey }}.text_answer_format"
                                                                                        class="text_answer_format">
                                                                                        <option value="0">
                                                                                            {{ __('Short answer') }}
                                                                                        </option>
                                                                                        <option value="1">
                                                                                            {{ __('Long answer') }}
                                                                                        </option>
                                                                                    </select>
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                @elseif($title_page_question['response'] == 5)
                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    <input aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model.defer="title_page_questions.{{ $qkey }}.is_date">
                                                                                    Date
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>

                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    <input aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model.defer="title_page_questions.{{ $qkey }}.is_time">
                                                                                    Time
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                @elseif($title_page_question['response'] == 7)
                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    <input aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model.defer="title_page_questions.{{ $qkey }}.multi_select_multiple_choise">
                                                                                    Multiple Selection
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                @endif
                                                                @if ($title_page_question['response'] != 10)
                                                                    <div class="epicTj" style="margin-left: 5px;">
                                                                        <div class="iBzfYz">
                                                                            <li>
                                                                                <a class="dropdown-item">
                                                                                    <input aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model.defer="title_page_questions.{{ $qkey }}.is_required">
                                                                                    Required
                                                                                </a>
                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                    <li>
                                                                        <hr class="dropdown-divider">
                                                                    </li>
                                                                @endif
                                                                <div class="epicTj">
                                                                    <div class="iBzfYz">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                                <svg width="21" height="21"
                                                                                    viewBox="0 0 14 14"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                        fill="#545f70"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                                Delete
                                                                            </a>
                                                                        </li>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                            {{-- <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                style="z-index: auto; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                wire:ignore.self>
                                                                <div class="cKwbqr">
                                                                    @if ($title_page_question['response'] == 2)
                                                                        <div class="epicTj">
                                                                            <div class="krtjey">
                                                                                <span style="margin-top:50px; "></span>
                                                                                Format:
                                                                                <div class="ORzaJ knjhoD">
                                                                                    <input type="text"
                                                                                        class="docNum_format"
                                                                                        wire:model.lazy="title_page_questions.{{ $qkey }}.docNum_format" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($title_page_question['response'] == 1)
                                                                        <div class="epicTj">
                                                                            <div class="krtjey">
                                                                                <span style="margin-top:50px; "></span>
                                                                                Format:
                                                                                <div class="ORzaJ knjhoD">
                                                                                    <select
                                                                                        wire:model.lazy="title_page_questions.{{ $qkey }}.text_answer_format"
                                                                                        class="text_answer_format">
                                                                                        <option value="0">
                                                                                            {{ __('Short answer') }}
                                                                                        </option>
                                                                                        <option value="1">
                                                                                            {{ __('Long answer') }}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($title_page_question['response'] == 5)
                                                                        <div class="epicTj">
                                                                            <div class="eMiEgJ">
                                                                                <div role="checkbox"
                                                                                    aria-checked="true"
                                                                                    class="xxrKk">
                                                                                    <input
                                                                                        id="is_date{{ $loop->index }}"
                                                                                        aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model="title_page_questions.{{ $qkey }}.is_date">
                                                                                </div>
                                                                                <label
                                                                                    for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                    class="fJJVDV">
                                                                                    <div class="fDpeEn">
                                                                                        Date</div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="epicTj">
                                                                            <div class="eMiEgJ">
                                                                                <div role="checkbox"
                                                                                    aria-checked="true"
                                                                                    class="xxrKk">
                                                                                    <input
                                                                                        id="is_time{{ $loop->index }}"
                                                                                        aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model="title_page_questions.{{ $qkey }}.is_time">
                                                                                </div>
                                                                                <label
                                                                                    for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                    class="fJJVDV">
                                                                                    <div class="fDpeEn">
                                                                                        Time</div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($title_page_question['response'] == 7)
                                                                        <div class="epicTj">
                                                                            <div class="eMiEgJ">
                                                                                <div role="checkbox"
                                                                                    aria-checked="true"
                                                                                    class="xxrKk">
                                                                                    <input
                                                                                        id="multi_select_multiple_choise{{ $loop->index }}"
                                                                                        aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model="title_page_questions.{{ $qkey }}.multi_select_multiple_choise">
                                                                                </div>
                                                                                <label
                                                                                    for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                    class="fJJVDV">
                                                                                    <div class="fDpeEn">
                                                                                        Multiple Selection
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if ($title_page_question['response'] != 10)
                                                                        <div class="epicTj">
                                                                            <div class="eMiEgJ">
                                                                                <div role="checkbox"
                                                                                    aria-checked="false"
                                                                                    class="xxrKk">
                                                                                    <input
                                                                                        id="is_required{{ $loop->index }}"
                                                                                        aria-hidden="false"
                                                                                        type="checkbox"
                                                                                        wire:model="title_page_questions.{{ $qkey }}.is_required">
                                                                                </div>
                                                                                <label class="fJJVDV">
                                                                                    <div class="fDpeEn">
                                                                                        Required
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    <div class="epicTj"
                                                                        wire:click.prevent="title_page_delete_question({{ $loop->index }})">
                                                                        <div style="display: flex; align-items: center;"
                                                                            class="iBzfYz">
                                                                            <svg width="21" height="21"
                                                                                viewBox="0 0 14 14" focusable="false">
                                                                                <path
                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                    fill="#545f70"
                                                                                    fill-rule="nonzero">
                                                                                </path>
                                                                            </svg>
                                                                            <span
                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                Delete
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                    <button class="bKqzym blqywb"
                                                        wire:click.prevent="title_page_delete_question">
                                                        <svg width="21" height="21" viewBox="0 0 14 14"
                                                            focusable="false">
                                                            <path
                                                                d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                fill="#545f70" fill-rule="nonzero"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="sc-iJCRrE fwLGvX">
                                                    <div class="cukrBe">
                                                        <div class="hLDzma">
                                                            <div>
                                                                @if ($title_page_question['response'] == 2)
                                                                    <div class="epicTj">
                                                                        <div class="krtjey">
                                                                            <span style="margin-top:50px;"></span>
                                                                            Format:
                                                                            <div class="ORzaJ knjhoD">
                                                                                <input type="text"
                                                                                    class="docNum_format"
                                                                                    wire:model.lazy="title_page_questions.{{ $qkey }}.docNum_format" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @elseif($title_page_question['response'] == 1)
                                                                    <div class="epicTj">
                                                                        <div class="krtjey">
                                                                            <span style="margin-top:50px;"></span>
                                                                            Format:
                                                                            <div class="ORzaJ knjhoD">
                                                                                <select
                                                                                    wire:model.lazy="title_page_questions.{{ $qkey }}.text_answer_format"
                                                                                    class="text_answer_format">
                                                                                    <option value="0">
                                                                                        {{ __('Short answer') }}
                                                                                    </option>
                                                                                    <option value="1">
                                                                                        {{ __('Long answer') }}
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @elseif($title_page_question['response'] == 5)
                                                                    <div class="epicTj">
                                                                        <div class="eMiEgJ">
                                                                            <div role="checkbox" aria-checked="true"
                                                                                class="xxrKk">
                                                                                <input aria-hidden="false"
                                                                                    type="checkbox"
                                                                                    wire:model="title_page_questions.{{ $qkey }}.is_date">
                                                                            </div>
                                                                            <label
                                                                                for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                class="fJJVDV">
                                                                                <div class="fDpeEn">
                                                                                    Date</div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="epicTj">
                                                                        <div class="eMiEgJ">
                                                                            <div role="checkbox" aria-checked="true"
                                                                                class="xxrKk">
                                                                                <input aria-hidden="false"
                                                                                    type="checkbox"
                                                                                    wire:model="title_page_questions.{{ $qkey }}.is_time">
                                                                            </div>
                                                                            <label
                                                                                for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                class="fJJVDV">
                                                                                <div class="fDpeEn">
                                                                                    Time</div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                @elseif($title_page_question['response'] == 7)
                                                                    <div class="epicTj">
                                                                        <div class="eMiEgJ">
                                                                            <div role="checkbox" aria-checked="true"
                                                                                class="xxrKk">
                                                                                <input aria-hidden="false"
                                                                                    type="checkbox"
                                                                                    wire:model="title_page_questions.{{ $qkey }}.multi_select_multiple_choise">
                                                                            </div>
                                                                            <label class="fJJVDV">
                                                                                <div class="fDpeEn">
                                                                                    Multiple Selection
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if ($title_page_question['response'] != 10)
                                                                    <div class="epicTj">
                                                                        <div class="eMiEgJ">
                                                                            <div role="checkbox" aria-checked="false"
                                                                                class="xxrKk">
                                                                                <input aria-hidden="false"
                                                                                    type="checkbox"
                                                                                    wire:model="title_page_questions.{{ $qkey }}.is_required">
                                                                            </div>
                                                                            <label class="fJJVDV">
                                                                                <div class="fDpeEn">
                                                                                    Required
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($activeone == $loop->index)
                                                <div class="fyPxKd elTKUx"></div>
                                                <div class="fmcVJh jIirFj"></div>
                                                <div class="fmcVJh fPLdzz"></div>
                                                <div class="fmcVJh iXxEYF"></div>
                                                <div class="fmcVJh jIirFj iVHMfM"></div>
                                                <div class="fyPxKd kklQix"></div>
                                                <div class="fyecfK"></div>
                                            @else
                                            @endif
                                        </div>
                                    @empty
                                    @endforelse
                                    <div class="modal fade m-0 p-0" id="TitlePageResponseModal" tabindex="-1"
                                        aria-labelledby="TitlePageResponseModalLabel" aria-hidden="true"
                                        wire:ignore.self>
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="TitlePageResponseModalLabel">
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="response-model">
                                                        <div class="eOsZYi sc-lmgQwP hpRDUw">
                                                            <div class="ccjMQy">
                                                                <div class="dbrkQb">
                                                                    <button type="button"
                                                                        data-anchor="mobile-menu-back"
                                                                        class="jvZSBO kzBuRK" aria-label="Back"
                                                                        data-bs-dismiss="modal">
                                                                        <svg viewBox="0 0 24 24" width="24"
                                                                            height="24" fill="#3f495a"
                                                                            focusable="false">
                                                                            <path d="M0 0h24v24H0z" fill="none">
                                                                            </path>
                                                                            <path
                                                                                d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <h4 class="eXEpbc ddvElQ">
                                                                        Type of
                                                                        response
                                                                    </h4>
                                                                </div>
                                                                <div class="hLRzaS">
                                                                    <div class="hpIYCs">
                                                                        <div class="gtTPDH">
                                                                            <div class="fRFEnE">
                                                                                <div class="bJrSlZ">
                                                                                    <div class="bQMMjH">
                                                                                        Title
                                                                                        page
                                                                                        information
                                                                                    </div>
                                                                                </div>

                                                                                <a wire:click.prevent="setResponseValue(2)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu">
                                                                                        <div class="iWJCbx">
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
                                                                                        <span>
                                                                                            Document number
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="fRFEnE">
                                                                                <div class="bJrSlZ">
                                                                                    <div class="bQMMjH">
                                                                                        Other
                                                                                        responses
                                                                                    </div>
                                                                                </div>
                                                                                <a wire:click.prevent="setResponseValue(1)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="iWJCbx">
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
                                                                                        <span>
                                                                                            Text answer
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                                <a wire:click.prevent="setResponseValue(4)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="fNHrxp">
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
                                                                                        <span>
                                                                                            Number
                                                                                        </span>
                                                                                    </div>
                                                                                </a>
                                                                                <a wire:click.prevent="setResponseValue(3)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="hsvMMC">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                width="15"
                                                                                                height="15"
                                                                                                focusable="false">
                                                                                                <path fill="none"
                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                </path>
                                                                                                <path fill="#5e9cff"
                                                                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Checkbox</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="bcPAfa">
                                                                                </div>
                                                                                <a wire:click.prevent="setResponseValue(5)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="fXeslI">
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
                                                                                        </div>
                                                                                        <span>Date
                                                                                            &amp;
                                                                                            Time</span>
                                                                                    </div>
                                                                                </a>
                                                                                <div style="display: flex;"
                                                                                    wire:click.prevent="setResponseValue(11)"
                                                                                    data-bs-dismiss="modal"
                                                                                    class="gupkBu iDhWfr">
                                                                                    <div class="fJrMSZ">
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
                                                                                <a wire:click.prevent="setResponseValue(6)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="fJrMSZ">
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
                                                                                <a wire:click.prevent="setResponseValue(8)"
                                                                                    data-bs-dismiss="modal"
                                                                                    style="text-decoration: none;">
                                                                                    <div style="display: flex;"
                                                                                        class="gupkBu iDhWfr">
                                                                                        <div class="iWJCbx">
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
                                                                                <div class="bcPAfa">
                                                                                </div>
                                                                                <div style="display: flex;"
                                                                                    wire:click.prevent="setResponseValue(10)"
                                                                                    data-bs-dismiss="modal"
                                                                                    class="gupkBu iDhWfr mb-5">
                                                                                    <div class="fDgnZG">
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
                                                                        <div class="gtTPDH">
                                                                            <div class="hfhxmZ">
                                                                                <div class="sruOo">
                                                                                    <div class="fRFEnE">
                                                                                        <div class="cSjXGQ">
                                                                                            <div class="bQMMjH">
                                                                                                Multiple
                                                                                                choice
                                                                                                responses
                                                                                            </div>
                                                                                            <div role="button"
                                                                                                class="jyUuRY graKfr"
                                                                                                wire:click.prevent="setResponseValue(7)"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#TitlePageMultipleChoiseOptionModal">
                                                                                                +
                                                                                                Responses
                                                                                            </div>
                                                                                        </div>
                                                                                        @if (!empty($common_multiple_choise_options))
                                                                                            @forelse ($common_multiple_choise_options as $rKey => $common_multiple_choise_option)
                                                                                                <div
                                                                                                    class="gupkBu eCBvzO">
                                                                                                    <div class="evLYbt"
                                                                                                        {{-- Question key | response id | readyOption id --}}
                                                                                                        wire:click.prevent="setResponseValueFromReadyOptions(7,{{ $loop->index }})"
                                                                                                        data-bs-dismiss="modal">
                                                                                                        <div
                                                                                                            class="fyczhl">
                                                                                                            @forelse ($common_multiple_choise_option as $responsKey22 => $record)
                                                                                                                <div color="#13855f"
                                                                                                                    class="xXWzF"
                                                                                                                    style="font-family: Roboto, sans-serif;
                                                                                                                            font-size: 0.9rem;
                                                                                                                            font-weight: 500;
                                                                                                                            margin-right: 0.4rem;
                                                                                                                            display: inline-block;
                                                                                                                            vertical-align: inherit;
                                                                                                                            white-space: nowrap;
                                                                                                                            line-height: initial;
                                                                                                                            padding: 0.3rem 0.5rem;
                                                                                                                            border-radius: 0.75rem;
                                                                                                                            max-width: 8.75rem;
                                                                                                                            overflow: hidden;
                                                                                                                            text-overflow: ellipsis;
                                                                                                                            flex-shrink: 0;
                                                                                                                            color:{{ $record['font_color'] ?? '' }};
                                                                                                                            border: 1px solid transparent;
                                                                                                                            background-color: {{ $record['color'] ?? '' }};">
                                                                                                                    {{ $record['title'] ?? '' }}
                                                                                                                </div>
                                                                                                            @empty
                                                                                                            @endforelse
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="jvZSBO"
                                                                                                        wire:click.prevent="EditMultipleChoiseOptionModal({{ $loop->index }})"
                                                                                                        data-bs-toggle="modal"
                                                                                                        data-bs-target="#EditMultipleChoiseOptionModal">
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
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="jvZSBO"
                                                                                                        wire:click.prevent="delete_defualt_option({{ $rKey }})">
                                                                                                        <svg width="21"
                                                                                                            height="21"
                                                                                                            viewBox="0 0 14 14"
                                                                                                            focusable="false">
                                                                                                            <path
                                                                                                                d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                                fill="#545f70"
                                                                                                                fill-rule="nonzero">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                </div>

                                                                                            @empty
                                                                                            @endforelse
                                                                                        @endif
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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade m-0 p-0" id="TitlePageMultipleChoiseOptionModal"
                                        tabindex="-1" aria-labelledby="TitlePageMultipleChoiseOptionModalLabel"
                                        aria-hidden="true" wire:ignore.self>
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="TitlePageMultipleChoiseOptionModalLabel">
                                                        Response Options
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="iVmibF cxbltl">
                                                        <div class="bJfPHR hzzSzX">
                                                            <div wire:loading wire:target="setResponseValue">
                                                                <div class="la-ball-beat la-3x spinner"
                                                                    id="loader">
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                            <div wire:loading.remove wire:target="setResponseValue">
                                                                <div class="jOMNlj">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h4 class="lhPVYY">
                                                                                Multiple choice responses
                                                                            </h4>
                                                                        </div>
                                                                        <div class="grGybe">
                                                                            <div class="fDpeEn dZoNkv">
                                                                                e.g. Yes, No, N/A
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="kxrOmS eqGxMu">
                                                                            <div class="bgiTWR2">
                                                                                <div class="kGgXUq">
                                                                                    Response
                                                                                    <div class="bdOmts">
                                                                                        <span class="LBNnk"></span>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="kGgXUq2"
                                                                                    style="border-left: none; text-align:right; color:blue;"
                                                                                    wire:click.prevent="clear_new_response_option({{ $activeone }})">
                                                                                    Reset
                                                                                </div> --}}
                                                                            </div>
                                                                        </div>
                                                                        @if (!empty($title_page_questions[$activeone]['response']))
                                                                            @if ($title_page_questions[$activeone]['response'] == 7)
                                                                                @if (!empty($title_page_questions[$activeone]['multiple_choice']))
                                                                                    @forelse ($title_page_questions[$activeone]['multiple_choice'] as $responsKey => $respons)
                                                                                        <div class="kLpTzB multible_choise_wrapper"
                                                                                            style="border-bottom: 1px solid rgb(191, 198, 212);">
                                                                                            <div
                                                                                                class="hkphPX dragable">
                                                                                                <div class="REnvQ">
                                                                                                    <div
                                                                                                        class="kxrOmS cuypVQ">
                                                                                                        <div
                                                                                                            class="dBZFks">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="bAJknk">
                                                                                                            <div
                                                                                                                class="huXueT">
                                                                                                                <div
                                                                                                                    class="kGgXUq">
                                                                                                                    <div
                                                                                                                        class="haXfJL drag-icon">
                                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                                            width="24"
                                                                                                                            height="24"
                                                                                                                            focusable="false">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                fill="#675df4"
                                                                                                                                d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <div class="bBjJyf"
                                                                                                                        style="border: none;">
                                                                                                                        <div
                                                                                                                            style="display: flex; align-items: center;">
                                                                                                                            <div
                                                                                                                                class="eAfucY">
                                                                                                                                <input
                                                                                                                                    class="eVpkze w-100 h-100 question-title"
                                                                                                                                    placeholder="Response title"
                                                                                                                                    style="font-size: 12.5px;"
                                                                                                                                    wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.title"
                                                                                                                                    {{-- style="color:{{ $title_page_questions[$activeone]['multiple_choice'][$responsKey]['font_color'] }}" --}}>
                                                                                                                            </div>
                                                                                                                            <div
                                                                                                                                class="popover__Wrapper-sc-cb9u88-0 GvAgP color-editor__Container-sc-kdtz0f-0 iiszyV">
                                                                                                                                <label
                                                                                                                                    for="response-color{{ $activeone }}{{ $responsKey }}"
                                                                                                                                    color="#13855f"
                                                                                                                                    role="button"
                                                                                                                                    style="margin-top: 4px; margin-right: 10px; background-color: {{ $title_page_questions[$activeone]['multiple_choice'][$responsKey]['color'] }}"
                                                                                                                                    class="cTkvNJ">
                                                                                                                                </label>
                                                                                                                                <input
                                                                                                                                    type="color"
                                                                                                                                    wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                                                    class="form-control form-control-color cTkvNJ d-none"
                                                                                                                                    title="Choose background color">
                                                                                                                            </div>
                                                                                                                            {{-- <input
                                                                                                                                type="color"
                                                                                                                                wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                                                class="form-control form-control-color cTkvNJ"
                                                                                                                                style="margin-right: 5px; border: 0; background-color: {{$title_page_questions[$activeone]['multiple_choice'][$responsKey]['color'];}}"
                                                                                                                                id="response-color{{ $activeone }}{{ $responsKey }}"
                                                                                                                                title="Choose background color"> --}}
                                                                                                                            <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                                                                                class="bdOmts2"
                                                                                                                                data-bs-toggle="dropdown"
                                                                                                                                aria-expanded="false">
                                                                                                                                <div
                                                                                                                                    class="hcjgmp">
                                                                                                                                    <button
                                                                                                                                        type="button"
                                                                                                                                        class="jvZSBO">
                                                                                                                                        <svg width="19"
                                                                                                                                            height="19"
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
                                                                                                                                        </svg>
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                                                                wire:ignore.self>
                                                                                                                                <div
                                                                                                                                    class="cKwbqr">
                                                                                                                                    <div
                                                                                                                                        class="epicTj">
                                                                                                                                        <div
                                                                                                                                            class="krtjey">
                                                                                                                                            <span
                                                                                                                                                style="margin-top:50px; "></span>
                                                                                                                                            Font
                                                                                                                                            Color
                                                                                                                                            <div
                                                                                                                                                class="ORzaJ knjhoD">
                                                                                                                                                <select
                                                                                                                                                    wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.font_color"
                                                                                                                                                    class="text_answer_format">
                                                                                                                                                    <option
                                                                                                                                                        value="#ffffff">
                                                                                                                                                        {{ __('White') }}
                                                                                                                                                    </option>
                                                                                                                                                    <option
                                                                                                                                                        value="#000000">
                                                                                                                                                        {{ __('Black') }}
                                                                                                                                                    </option>
                                                                                                                                                </select>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="epicTj"
                                                                                                                                        wire:click.prevent="title_page_delete_mc_choise({{ $responsKey }})">
                                                                                                                                        <div style="display: flex; align-items: center;"
                                                                                                                                            class="iBzfYz">
                                                                                                                                            <svg width="21"
                                                                                                                                                height="21"
                                                                                                                                                viewBox="0 0 14 14"
                                                                                                                                                focusable="false">
                                                                                                                                                <path
                                                                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                                                                    fill="#545f70"
                                                                                                                                                    fill-rule="nonzero">
                                                                                                                                                </path>
                                                                                                                                            </svg>
                                                                                                                                            <span
                                                                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                                                                                Delete
                                                                                                                                            </span>
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
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @empty
                                                                                    @endforelse
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                    <a style="text-decoration: none;
                                                                                color: rgb(103, 93, 244);font-size: 12.5px;"
                                                                        wire:click.prevent="add_new_response({{ $activeone }})">
                                                                        <span
                                                                            style="font-size: 14px;font-weight: 800;">+</span>
                                                                        Response
                                                                    </a>
                                                                </div>
                                                                <div class="fhTZet" style="margin-left: 5px">
                                                                    <button role="button" class="kDSJkL"
                                                                        style="color: rgb(255, 255, 255);
                                                                                background-color: rgb(103, 93, 244); width: 85.75px"
                                                                        wire:click.prevent="save_multiple_choise({{ $activeone }})"
                                                                        data-bs-dismiss="modal">
                                                                        Save
                                                                    </button>
                                                                    <button role="button" class="kDSJkL"
                                                                        style="margin-left:10px;"
                                                                        wire:click.prevent="clear_new_response_option({{ $activeone }})"
                                                                        data-bs-dismiss="modal">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade m-0 p-0" id="EditMultipleChoiseOptionModal" tabindex="-1"
                                        aria-labelledby="EditMultipleChoiseOptionModalLabel" aria-hidden="true"
                                        wire:ignore.self>
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="EditMultipleChoiseOptionModalLabel">
                                                        Response Options
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="iVmibF cxbltl">
                                                        <div class="bJfPHR hzzSzX">
                                                            <div wire:loading
                                                                wire:target="EditMultipleChoiseOptionModal">
                                                                <div class="la-ball-beat la-3x spinner"
                                                                    id="loader">
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                            <div wire:loading.remove
                                                                wire:target="EditMultipleChoiseOptionModal">
                                                                <div class="jOMNlj">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12">
                                                                            <h4 class="lhPVYY">
                                                                                Multiple choice responses
                                                                            </h4>
                                                                        </div>
                                                                        <div class="grGybe">
                                                                            <div class="fDpeEn dZoNkv">
                                                                                e.g. Yes, No, N/A
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="kxrOmS eqGxMu">
                                                                            <div class="bgiTWR2">
                                                                                <div class="kGgXUq">
                                                                                    Response
                                                                                    <div class="bdOmts">
                                                                                        <span class="LBNnk"></span>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="kGgXUq2"
                                                                                    style="border-left: none; text-align:right; color:blue;"
                                                                                    wire:click.prevent="clear_new_response_option({{ $activeone }})">
                                                                                    Reset
                                                                                </div> --}}
                                                                            </div>
                                                                        </div>
                                                                        @if (!empty($title_page_questions[$activeone]['response']))
                                                                            @if ($title_page_questions[$activeone]['response'] == 7)
                                                                                @if (!empty($title_page_questions[$activeone]['multiple_choice']))
                                                                                    @forelse ($title_page_questions[$activeone]['multiple_choice'] as $responsKey => $respons)
                                                                                        <div class="kLpTzB multible_choise_wrapper"
                                                                                            style="border-bottom: 1px solid rgb(191, 198, 212);">
                                                                                            <div
                                                                                                class="hkphPX dragable">
                                                                                                <div class="REnvQ">
                                                                                                    <div
                                                                                                        class="kxrOmS cuypVQ">
                                                                                                        <div
                                                                                                            class="dBZFks">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="bAJknk">
                                                                                                            <div
                                                                                                                class="huXueT">
                                                                                                                <div
                                                                                                                    class="kGgXUq">
                                                                                                                    <div
                                                                                                                        class="haXfJL drag-icon">
                                                                                                                        <svg viewBox="0 0 24 24"
                                                                                                                            width="24"
                                                                                                                            height="24"
                                                                                                                            focusable="false">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h24v24H0V0z">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                fill="#675df4"
                                                                                                                                d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </div>
                                                                                                                    <div class="bBjJyf"
                                                                                                                        style="border: none;">
                                                                                                                        <div
                                                                                                                            style="display: flex; align-items: center;">
                                                                                                                            <div
                                                                                                                                class="eAfucY">
                                                                                                                                <input
                                                                                                                                    class="eVpkze w-100 h-100 question-title"
                                                                                                                                    placeholder="Response title"
                                                                                                                                    style="font-size: 12.5px;"
                                                                                                                                    wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.title"
                                                                                                                                    {{-- style="color:{{ $title_page_questions[$activeone]['multiple_choice'][$responsKey]['font_color'] }}" --}}>
                                                                                                                            </div>
                                                                                                                            <input
                                                                                                                                type="color"
                                                                                                                                wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                                                class="form-control form-control-color22 gocNNg kxrOmS"
                                                                                                                                style="margin-right: 5px; width:36.25px;"
                                                                                                                                title="Choose background color">
                                                                                                                            <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                                                                                class="bdOmts2"
                                                                                                                                data-bs-toggle="dropdown"
                                                                                                                                aria-expanded="false">
                                                                                                                                <div
                                                                                                                                    class="hcjgmp">
                                                                                                                                    <button
                                                                                                                                        type="button"
                                                                                                                                        class="jvZSBO">
                                                                                                                                        <svg width="19"
                                                                                                                                            height="19"
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
                                                                                                                                        </svg>
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                                                                style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                                                                wire:ignore.self>
                                                                                                                                <div
                                                                                                                                    class="cKwbqr">
                                                                                                                                    <div
                                                                                                                                        class="epicTj">
                                                                                                                                        <div
                                                                                                                                            class="krtjey">
                                                                                                                                            <span
                                                                                                                                                style="margin-top:50px; "></span>
                                                                                                                                            Font
                                                                                                                                            Color
                                                                                                                                            <div
                                                                                                                                                class="ORzaJ knjhoD">
                                                                                                                                                <select
                                                                                                                                                    wire:model="title_page_questions.{{ $activeone }}.multiple_choice.{{ $responsKey }}.font_color"
                                                                                                                                                    class="text_answer_format">
                                                                                                                                                    <option
                                                                                                                                                        value="#ffffff">
                                                                                                                                                        {{ __('White') }}
                                                                                                                                                    </option>
                                                                                                                                                    <option
                                                                                                                                                        value="#000000">
                                                                                                                                                        {{ __('Black') }}
                                                                                                                                                    </option>
                                                                                                                                                </select>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="epicTj"
                                                                                                                                        wire:click.prevent="title_page_delete_mc_choise({{ $responsKey }})">
                                                                                                                                        <div style="display: flex; align-items: center;"
                                                                                                                                            class="iBzfYz">
                                                                                                                                            <svg width="21"
                                                                                                                                                height="21"
                                                                                                                                                viewBox="0 0 14 14"
                                                                                                                                                focusable="false">
                                                                                                                                                <path
                                                                                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                                                                    fill="#545f70"
                                                                                                                                                    fill-rule="nonzero">
                                                                                                                                                </path>
                                                                                                                                            </svg>
                                                                                                                                            <span
                                                                                                                                                style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                                                                                Delete
                                                                                                                                            </span>
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
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @empty
                                                                                    @endforelse
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                    <a style="text-decoration: none;
                                                                                color: rgb(103, 93, 244);font-size: 12.5px;"
                                                                        wire:click.prevent="add_new_response({{ $activeone }})">
                                                                        <span
                                                                            style="font-size: 14px;font-weight: 800;">+</span>
                                                                        Response
                                                                    </a>
                                                                </div>
                                                                <div class="fhTZet" style="margin-left: 5px">
                                                                    <button role="button" class="kDSJkL"
                                                                        style="color: rgb(255, 255, 255);
                                                                                background-color: rgb(103, 93, 244); width: 85.75px"
                                                                        wire:click.prevent="edit_save_multiple_choise({{ $activeone }})" data-bs-dismiss="modal">
                                                                        Save
                                                                    </button>
                                                                    <button role="button" class="kDSJkL"
                                                                        style="margin-left:10px;"
                                                                        wire:click.prevent="clear_new_response_option({{ $activeone }})"
                                                                        data-bs-dismiss="modal">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">
                                                        Save changes
                                                    </button>
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
        </div>
        {{-- page system code --}}
        @if ($pages != [])
            @forelse ($pages as $pagekey => $page)
                <div id="accordionExample{{ $loop->index }}" wire:ignore.self>
                    <div class="accordion-item pages">
                        <div class="kVgydw" class="accordion-button collapsed" type="button">
                            {{-- <div class="haXfJL page_index_drag-icon" style="margin-left:0%;">
                                <svg viewBox="0 0 24 24" width="24"
                                    height="24" focusable="false" style="margin-left:0%;">
                                    <path fill="none"
                                        d="M0 0h24v24H0V0z">
                                    </path>
                                    <path fill="#675df4"
                                        d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                    </path>
                                </svg>
                            </div> --}}
                            <div class="Ceqkm" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo{{ $loop->index }}" aria-expanded="false"
                                aria-controls="collapseTwo{{ $loop->index }}">
                                <svg viewBox="0 0 24 24" width="16" height="16" focusable="false">
                                    <path
                                        d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                        fill="#828ea0" fill-rule="nonzero">
                                    </path>
                                </svg>
                            </div>
                            <div style="flex: 2 1 0%;">
                                <div class="fceloL mt-1">
                                    <input type="text" class="page-title" placeholder="Untitled page"
                                        wire:model.lazy="pages.{{ $loop->index }}.title">
                                </div>
                            </div>
                            <div>
                                <button type="button" class="jvZSBO" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 14 14" focusable="false">
                                        <g transform="translate(5.542 1.458)" fill="#545f70" fill-rule="nonzero">
                                            <circle transform="rotate(90 1.458 5.542)" cx="1.458"
                                                cy="5.542" r="1.458">
                                            </circle>
                                            <circle transform="rotate(90 1.458 9.625)" cx="1.458"
                                                cy="9.625" r="1.458">
                                            </circle>
                                            <circle transform="rotate(90 1.458 1.458)" cx="1.458"
                                                cy="1.458" r="1.458">
                                            </circle>
                                        </g>
                                    </svg>
                                </button>
                                <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                    style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                    wire:ignore.self>
                                    <div class="cKwbqr">
                                        <div class="epicTj" wire:click.prevent="delete_page({{ $loop->index }})">
                                            <div style="display: flex; align-items: center;" class="iBzfYz">
                                                <svg width="21" height="21" viewBox="0 0 14 14"
                                                    focusable="false">
                                                    <path
                                                        d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                        fill="#545f70" fill-rule="nonzero">
                                                    </path>
                                                </svg>
                                                <span style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                    Delete
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo{{ $loop->index }}" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample" wire:ignore.self>
                            <div class="gKLkhd">
                                <div class="cxbltl">
                                    <div style="padding: 0rem 1rem 0rem;">
                                        <div class="kxrOmS eqGxMu">
                                            <div class="cldFRc" wire:click.prevent="title_page_add_question">
                                                <svg viewBox="0 0 24 24" width="14" height="14"
                                                    style="cursor: pointer;" class="gdPDbX" focusable="false">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#545f70">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="bgiTWR">
                                                <div class="kGgXUq">
                                                    Question
                                                    <div class="bdOmts">
                                                        <span class="LBNnk"></span>
                                                    </div>
                                                </div>
                                                <div class="cYnFsn bfshfO">
                                                    Type of response
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kLpTzB pagewrapper{{ $loop->index }}" onclick="focusOnPage()"
                                            {{-- {{ str_contains($this->activeone, 'p_') ? 'wire:ignore.self' : 'wire:ignore' }} --}}>
                                            @forelse ($page['question'] as $pageQuestionkey => $pageQuestion)
                                                <div class="hkphPX page_dragable"
                                                    onclick="@this.set('activeone', 'p_' + {{ $loop->parent->index }} + '_' + {{ $loop->index }});@this.set('pageactiveone', {{ $loop->parent->index }});@this.set('pagequestionactiveone', {{ $loop->index }});">
                                                    <div class="REnvQ">
                                                        <div class="kxrOmS cuypVQ">
                                                            <div class="dBZFks">
                                                            </div>
                                                            <div class="bAJknk">
                                                                <div class="huXueT">
                                                                    <div class="kGgXUq">
                                                                        <div class="haXfJL page_drag-icon">
                                                                            <svg viewBox="0 0 24 24" width="24"
                                                                                height="24" focusable="false">
                                                                                <path fill="none"
                                                                                    d="M0 0h24v24H0V0z">
                                                                                </path>
                                                                                <path fill="#675df4"
                                                                                    d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <span style="padding-left: 0.3rem;"
                                                                            class="eSpMaC text-danger">
                                                                            {{ $pageQuestion['is_required'] == 1 ? '*' : '' }}
                                                                        </span>
                                                                        <div class="bBjJyf">
                                                                            {{-- <div class="eiFrFc"
                                                                                id="p{{ $pagekey }}{{ $pageQuestionkey }}">
                                                                            </div> --}}
                                                                            <div
                                                                                style="display: flex; align-items: center;">
                                                                                @if ($pageQuestion['response'] == 10)
                                                                                    <textarea class="question-title-focus eVpkze w-100 question-title-instruction" placeholder="Write a Question ..."
                                                                                        wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.title"></textarea>
                                                                                @else
                                                                                    <div class="eAfucY">
                                                                                        <input
                                                                                            class="question-title-focus eVpkze w-100 h-100 question-title"
                                                                                            placeholder="Write a Question ..."
                                                                                            wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.title">
                                                                                    </div>
                                                                                @endif

                                                                            </div>
                                                                            {{-- <script>
                                                                                $(document).on("dblclick", "#p" + {{ $pagekey }} + {{ $pageQuestionkey }}, function() {
                                                                                    $(this).remove();
                                                                                });
                                                                            </script> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="response-select-and-options hyJfGO {{ $activeone == 'p_' . $loop->parent->index . '_' . $loop->index ? 'd-flex' : 'd-none' }}">
                                                                    <div style="width: 100%;" data-bs-toggle="modal"
                                                                        data-bs-target="#PageResponseModal"
                                                                        onclick="@this.set('activechangingresponse',{{ $loop->index }})">
                                                                        <div class="eWLEUv">
                                                                            <div>
                                                                                @if ($pageQuestion['response'] == 2)
                                                                                    <div class="iWJCbx">
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
                                                                                    Document number
                                                                                @elseif($pageQuestion['response'] == 1)
                                                                                    <div class="iWJCbx">
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
                                                                                    Text answer
                                                                                @elseif($pageQuestion['response'] == 3)
                                                                                    <div class="jpgcYH">
                                                                                        <svg viewBox="0 0 24 24"
                                                                                            width="15"
                                                                                            height="15"
                                                                                            focusable="false">
                                                                                            <path fill="none"
                                                                                                d="M0 0h24v24H0V0z">
                                                                                            </path>
                                                                                            <path fill="#5e9cff"
                                                                                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                    Checkbox
                                                                                @elseif($pageQuestion['response'] == 4)
                                                                                    <div class="erayDs">
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
                                                                                    Number
                                                                                @elseif($pageQuestion['response'] == 5)
                                                                                    <div class="flVgHp">
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
                                                                                    </div>
                                                                                    Date & Time
                                                                                @elseif($pageQuestion['response'] == 6)
                                                                                    <div class="ipAtGo">
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
                                                                                    Signature
                                                                                @elseif($pageQuestion['response'] == 7)
                                                                                    <div class="fyczhl">
                                                                                        @if (!empty($pageQuestion['multiple_choice']))
                                                                                            @forelse ($pageQuestion['multiple_choice'] as $responsKey => $respons)
                                                                                                <div class="badge mx-1"
                                                                                                    style="background-color:{{ $respons['color'] ?? '' }}; color:{{ $respons['font_color'] }};">
                                                                                                    {{ $respons['title'] ?? '' }}
                                                                                                </div>
                                                                                            @empty
                                                                                            @endforelse
                                                                                        @endif
                                                                                    </div>
                                                                                @elseif($pageQuestion['response'] == 8)
                                                                                    <div class="iWJCbx">
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
                                                                                    Location
                                                                                @elseif($pageQuestion['response'] == 10)
                                                                                    <div class="fDgnZG">
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
                                                                                    Instruction
                                                                                @elseif($pageQuestion['response'] == 11)
                                                                                    <div class="fJrMSZ">
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
                                                                                    Media
                                                                                @endif
                                                                            </div>
                                                                            <svg viewBox="0 0 24 24" width="16"
                                                                                height="16" class="kBTspn"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                    fill="#545f70"
                                                                                    fill-rule="nonzero">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                        class="bdOmts" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <div class="hcjgmp">
                                                                            <button type="button" class="jvZSBO">
                                                                                <svg width="24" height="24"
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
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div wire:ignore.self
                                                                        class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                        style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;">
                                                                        <div class="cKwbqr">
                                                                            @if ($pageQuestion['response'] == 2)
                                                                                <div class="epicTj">
                                                                                    <div class="krtjey">
                                                                                        <span
                                                                                            style="margin-top:50px; "></span>
                                                                                        Format:
                                                                                        <div class="ORzaJ knjhoD">
                                                                                            <input type="text"
                                                                                                class="docNum_format"
                                                                                                wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.docNum_format" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @elseif($pageQuestion['response'] == 1)
                                                                                <div class="epicTj">
                                                                                    <div class="krtjey">
                                                                                        <span
                                                                                            style="margin-top:50px; "></span>
                                                                                        Format:
                                                                                        <div class="ORzaJ knjhoD">
                                                                                            <select
                                                                                                wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.text_answer_format"
                                                                                                class="text_answer_format">
                                                                                                <option
                                                                                                    value="0">
                                                                                                    {{ __('Short answer') }}
                                                                                                </option>
                                                                                                <option
                                                                                                    value="1">
                                                                                                    {{ __('Long answer') }}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @elseif($pageQuestion['response'] == 5)
                                                                                <div class="epicTj">
                                                                                    <div class="eMiEgJ">
                                                                                        <div role="checkbox"
                                                                                            aria-checked="true"
                                                                                            class="xxrKk">
                                                                                            <input aria-hidden="false"
                                                                                                type="checkbox"
                                                                                                wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_date">
                                                                                        </div>
                                                                                        <label
                                                                                            for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                            class="fJJVDV">
                                                                                            <div class="fDpeEn">
                                                                                                Date</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="epicTj">
                                                                                    <div class="eMiEgJ">
                                                                                        <div role="checkbox"
                                                                                            aria-checked="true"
                                                                                            class="xxrKk">
                                                                                            <input aria-hidden="false"
                                                                                                type="checkbox"
                                                                                                wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_time">
                                                                                        </div>
                                                                                        <label
                                                                                            for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                            class="fJJVDV">
                                                                                            <div class="fDpeEn">
                                                                                                Time</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            @elseif($pageQuestion['response'] == 7)
                                                                                <div class="epicTj">
                                                                                    <div class="eMiEgJ">
                                                                                        <div role="checkbox"
                                                                                            aria-checked="true"
                                                                                            class="xxrKk">
                                                                                            <input aria-hidden="false"
                                                                                                type="checkbox"
                                                                                                wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.multi_select_multiple_choise">
                                                                                        </div>
                                                                                        <label
                                                                                            for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                            class="fJJVDV">
                                                                                            <div class="fDpeEn">
                                                                                                Multiple
                                                                                                Selection
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            @if ($pageQuestion['response'] != 10)
                                                                                <div class="epicTj">
                                                                                    <div class="eMiEgJ">
                                                                                        <div role="checkbox"
                                                                                            aria-checked="false"
                                                                                            class="xxrKk">
                                                                                            <input aria-hidden="false"
                                                                                                type="checkbox"
                                                                                                wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_required">
                                                                                        </div>
                                                                                        <label class="fJJVDV">
                                                                                            <div class="fDpeEn">
                                                                                                Required
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            <div class="epicTj"
                                                                                wire:click.prevent="normal_page_delete_question({{ $loop->parent->index }},{{ $loop->index }})">
                                                                                <div style="display: flex; align-items: center;"
                                                                                    class="iBzfYz">
                                                                                    <svg width="21"
                                                                                        height="21"
                                                                                        viewBox="0 0 14 14"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                            fill="#545f70"
                                                                                            fill-rule="nonzero">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                        Delete
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <button class="bKqzym blqywb"
                                                                wire:click.prevent="normal_page_delete_question({{ $loop->parent->index }},{{ $loop->index }})">
                                                                <svg width="21" height="21"
                                                                    viewBox="0 0 14 14" focusable="false">
                                                                    <path
                                                                        d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                        fill="#545f70" fill-rule="nonzero">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="sc-iJCRrE fwLGvX">
                                                            <div class="cukrBe">
                                                                <div class="hLDzma">
                                                                    <div>
                                                                        @if ($pageQuestion['response'] == 2)
                                                                            <div class="epicTj">
                                                                                <div class="krtjey">
                                                                                    <span
                                                                                        style="margin-top:50px; "></span>
                                                                                    Format:
                                                                                    <div class="ORzaJ knjhoD">
                                                                                        <input type="text"
                                                                                            class="docNum_format"
                                                                                            wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.docNum_format" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($pageQuestion['response'] == 1)
                                                                            <div class="epicTj">
                                                                                <div class="krtjey">
                                                                                    <span
                                                                                        style="margin-top:50px; "></span>
                                                                                    Format:
                                                                                    <div class="ORzaJ knjhoD">
                                                                                        <select
                                                                                            wire:model.lazy="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.text_answer_format"
                                                                                            class="text_answer_format">
                                                                                            <option value="0">
                                                                                                {{ __('Short answer') }}
                                                                                            </option>
                                                                                            <option value="1">
                                                                                                {{ __('Long answer') }}
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($pageQuestion['response'] == 5)
                                                                            <div class="epicTj">
                                                                                <div class="eMiEgJ">
                                                                                    <div role="checkbox"
                                                                                        aria-checked="true"
                                                                                        class="xxrKk">
                                                                                        <input aria-hidden="false"
                                                                                            type="checkbox"
                                                                                            wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_date">
                                                                                    </div>
                                                                                    <label
                                                                                        for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                        class="fJJVDV">
                                                                                        <div class="fDpeEn">
                                                                                            Date</div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="epicTj">
                                                                                <div class="eMiEgJ">
                                                                                    <div role="checkbox"
                                                                                        aria-checked="true"
                                                                                        class="xxrKk">
                                                                                        <input aria-hidden="false"
                                                                                            type="checkbox"
                                                                                            wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_time">
                                                                                    </div>
                                                                                    <label
                                                                                        for="128d3837-41f6-4887-9807-8fd3c5db4330-input"
                                                                                        class="fJJVDV">
                                                                                        <div class="fDpeEn">
                                                                                            Time</div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($pageQuestion['response'] == 7)
                                                                            <div class="epicTj">
                                                                                <div class="eMiEgJ">
                                                                                    <div role="checkbox"
                                                                                        aria-checked="true"
                                                                                        class="xxrKk">
                                                                                        <input aria-hidden="false"
                                                                                            type="checkbox"
                                                                                            wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.multi_select_multiple_choise">
                                                                                    </div>
                                                                                    <label
                                                                                        for="9ea156a4-4105-43e5-9bcc-686d413e9961-input"
                                                                                        class="fJJVDV">
                                                                                        <div class="fDpeEn">
                                                                                            Multiple
                                                                                            Selection
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        @if ($pageQuestion['response'] != 10)
                                                                            <div class="epicTj">
                                                                                <div class="eMiEgJ">
                                                                                    <div role="checkbox"
                                                                                        aria-checked="false"
                                                                                        class="xxrKk">
                                                                                        <input aria-hidden="false"
                                                                                            type="checkbox"
                                                                                            wire:model="pages.{{ $loop->parent->index }}.question.{{ $loop->index }}.is_required">
                                                                                    </div>
                                                                                    <label class="fJJVDV">
                                                                                        <div class="fDpeEn">
                                                                                            Required
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($activeone == 'p_' . $loop->parent->index . '_' . $loop->index)
                                                        <div class="fyPxKd elTKUx"></div>
                                                        <div class="fmcVJh jIirFj"></div>
                                                        <div class="fmcVJh fPLdzz"></div>
                                                        <div class="fmcVJh iXxEYF"></div>
                                                        <div class="fmcVJh jIirFj iVHMfM"></div>
                                                        <div class="fyPxKd kklQix"></div>
                                                        <div class="fyecfK"></div>
                                                    @else
                                                    @endif
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                        <script>
                                            const page{{ $loop->index }} = document.querySelector(".pagewrapper" + {{ $loop->index }});
                                            new Sortable(page{{ $loop->index }}, {
                                                onEnd: function(evt) {
                                                    // Livewire.emit('change_active_one', evt.newIndex);
                                                    Livewire.emit('page_changeindex', evt.oldIndex, evt.newIndex, {{ $loop->index }});
                                                },
                                                animation: 350,
                                                filter: ".last-section",
                                                draggable: ".page_dragable",
                                                handle: ".page_drag-icon",
                                                dragClass: "sortable-chosen",
                                                ghostClass: "sortable-chosen",
                                                chosenClass: "sortable-chosen",
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        @endif
        <div class="modal fade m-0 p-0" id="PageResponseModal" tabindex="-1"
            aria-labelledby="PageResponseModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="PageResponseModalLabel">
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="response-model">
                            <div class="eOsZYi sc-lmgQwP hpRDUw">
                                <div class="ccjMQy">
                                    <div class="dbrkQb">
                                        <button type="button" data-anchor="mobile-menu-back"
                                            class="jvZSBO kzBuRK" aria-label="Back" data-bs-dismiss="modal">
                                            <svg viewBox="0 0 24 24" width="24" height="24"
                                                fill="#3f495a" focusable="false">
                                                <path d="M0 0h24v24H0z" fill="none">
                                                </path>
                                                <path
                                                    d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z">
                                                </path>
                                            </svg></button>
                                        <h4 class="eXEpbc ddvElQ">
                                            Type of
                                            response
                                        </h4>
                                    </div>
                                    <div class="hLRzaS">
                                        <div class="hpIYCs">
                                            <div class="gtTPDH">
                                                <div class="fRFEnE">
                                                    <div class="bJrSlZ">
                                                        <div class="bQMMjH">
                                                            Title
                                                            page
                                                            information
                                                        </div>
                                                    </div>
                                                    <a wire:click.prevent="PageSetResponseValue(2)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu">
                                                            <div class="iWJCbx">
                                                                <svg width="15" height="15"
                                                                    viewBox="0 0 14 14" focusable="false">
                                                                    <g fill="#fe8500" fill-rule="nonzero">
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
                                                <div class="fRFEnE">
                                                    <div class="bJrSlZ">
                                                        <div class="bQMMjH">
                                                            Other
                                                            responses
                                                        </div>
                                                    </div>
                                                    <a wire:click.prevent="PageSetResponseValue(1)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="iWJCbx">
                                                                <svg width="15" height="15"
                                                                    viewBox="0 0 14 14" focusable="false">
                                                                    <path
                                                                        d="M2.33333333,2.33333333 L2.33333333,4.97716191 L3.7929974,4.97716191 L3.7929974,4.28724799 C3.7929974,4.03503038 3.985625,3.82984264 4.22242188,3.82984264 L6.11229427,3.82984264 L6.11229427,9.52966171 C6.11229427,9.88941502 5.83754427,10.1820993 5.49979427,10.1820993 L4.8983776,10.1820993 L4.8983776,11.6666667 L9.11447396,11.6666667 L9.11447396,10.1820993 L8.51305729,10.1820993 C8.17534375,10.1820993 7.90055729,9.88941502 7.90055729,9.52966171 L7.90055729,3.82982322 L9.77757813,3.82982322 C10.0143568,3.82982322 10.2070026,4.03501096 10.2070026,4.28722858 L10.2070026,4.97714249 L11.6666667,4.97714249 L11.6666667,2.33333333 L2.33333333,2.33333333 Z"
                                                                        fill="#fe8500" fill-rule="nonzero">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <span>Text
                                                                answer</span>
                                                        </div>
                                                    </a>
                                                    <a wire:click.prevent="PageSetResponseValue(4)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="fNHrxp">
                                                                <svg width="15" height="15"
                                                                    viewBox="0 0 14 14" focusable="false">
                                                                    <g fill="#ffb000" fill-rule="nonzero">
                                                                        <path
                                                                            d="M2.21 9.682a.637.637 0 0 1-.637-.636V4.985l-.352.175a.636.636 0 1 1-.568-1.138l1.272-.636a.635.635 0 0 1 .921.57v5.09a.637.637 0 0 1-.636.636zM7.937 9.682H4.755a.637.637 0 0 1-.45-1.086l2.546-2.545a.85.85 0 0 0 .25-.605.849.849 0 0 0-.25-.604.874.874 0 0 0-1.21 0 .846.846 0 0 0-.25.604.637.637 0 0 1-1.272 0c0-.569.221-1.103.623-1.504.805-.804 2.205-.804 3.009 0 .402.402.623.937.623 1.504 0 .568-.222 1.103-.623 1.505L6.29 8.41h1.646a.637.637 0 0 1 0 1.272zM13 6.104c.214-.29.346-.646.346-1.035 0-.966-.785-1.75-1.75-1.75-.656 0-1.251.362-1.553.944a.636.636 0 1 0 1.13.586.477.477 0 1 1 .423.697.637.637 0 0 0 0 1.273.797.797 0 0 1 0 1.59.797.797 0 0 1-.795-.795.637.637 0 0 0-1.273 0 2.07 2.07 0 0 0 2.068 2.068 2.07 2.07 0 0 0 2.068-2.068c0-.597-.258-1.132-.665-1.51z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span>Number</span>
                                                        </div>
                                                    </a>
                                                    <a wire:click.prevent="PageSetResponseValue(3)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="hsvMMC">
                                                                <svg viewBox="0 0 24 24" width="15"
                                                                    height="15" focusable="false">
                                                                    <path fill="none" d="M0 0h24v24H0V0z">
                                                                    </path>
                                                                    <path fill="#5e9cff"
                                                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-8.29 13.29a.996.996 0 0 1-1.41 0L5.71 12.7a.996.996 0 1 1 1.41-1.41L10 14.17l6.88-6.88a.996.996 0 1 1 1.41 1.41l-7.58 7.59z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <span>Checkbox</span>
                                                        </div>
                                                    </a>
                                                    <div class="bcPAfa">
                                                    </div>
                                                    <a wire:click.prevent="PageSetResponseValue(5)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="fXeslI">
                                                                <svg viewBox="0 0 24 24" width="15"
                                                                    height="15" focusable="false">
                                                                    <path fill="none" d="M0 0h24v24H0V0z">
                                                                    </path>
                                                                    <path fill="#81b532"
                                                                        d="M20 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H7V2c0-.55-.45-1-1-1s-1 .45-1 1v1H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 18H5c-.55 0-1-.45-1-1V8h16v12c0 .55-.45 1-1 1z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <span>Date
                                                                &amp;
                                                                Time</span>
                                                        </div>
                                                    </a>
                                                    <div style="display: flex;"
                                                        wire:click.prevent="PageSetResponseValue(11)"
                                                        data-bs-dismiss="modal" class="gupkBu iDhWfr">
                                                        <div class="fJrMSZ">
                                                            <svg width="15" height="15" viewBox="0 0 16 16"
                                                                focusable="false" fill="none">
                                                                <path
                                                                    d="M16 11.2V1.6c0-.88-.72-1.6-1.6-1.6H4.8c-.88 0-1.6.72-1.6 1.6v9.6c0 .88.72 1.6 1.6 1.6h9.6c.88 0 1.6-.72 1.6-1.6zM7.52 8.424l1.304 1.744 2.064-2.576a.4.4 0 0 1 .624 0l2.368 2.96a.399.399 0 0 1-.312.648H5.6a.4.4 0 0 1-.32-.64l1.6-2.136a.406.406 0 0 1 .64 0zM0 4v10.4c0 .88.72 1.6 1.6 1.6H12c.44 0 .8-.36.8-.8 0-.44-.36-.8-.8-.8H2.4c-.44 0-.8-.36-.8-.8V4c0-.44-.36-.8-.8-.8-.44 0-.8.36-.8.8z"
                                                                    fill="#00b6cb">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span>Media</span>
                                                    </div>
                                                    {{-- <a wire:click.prevent="PageSetResponseValue(9)"
                                                    data-bs-dismiss="modal"
                                                    style="text-decoration: none;">
                                                    <div style="display: flex;"
                                                        class="gupkBu iDhWfr">
                                                        <div
                                                            class="dkfwqD">
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
                                                </a> --}}
                                                    <a wire:click.prevent="PageSetResponseValue(6)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="fJrMSZ">
                                                                <svg width="15" height="15"
                                                                    viewBox="0 0 14 14" focusable="false">
                                                                    <path
                                                                        d="M9.513 5.581l1.958.695-1.628 4.284c-.153.403-.98 1.663-1.555 1.92l-.14.368a.24.24 0 0 1-.306.138.229.229 0 0 1-.142-.297l.132-.348c-.292-.548-.074-2.14.054-2.476L9.513 5.58zm2.834-4.532c-.538-.19-1.169.203-1.35.679L9.819 4.832l1.958.694 1.178-3.104c.149-.389-.067-1.182-.607-1.373zM8.804 5.421a.478.478 0 0 0 .614-.272l1.245-3.243a.457.457 0 0 0-.282-.593.483.483 0 0 0-.615.272L8.522 4.828a.457.457 0 0 0 .282.593zM7.13 11.286c-.125-.117-.296-.5-.42-.35-.124.15-.035.094-.182.09h-.051c-.093-.251-.28-.41-.562-.471-.372-.078-.67.096-.875.23.018-.103.048-.225.07-.314.072-.284.145-.579.09-.855a.494.494 0 0 0-.452-.395c-.576-.032-1.047.276-1.461.554-.436.292-.715.466-.993.368-.34-.12-.374-1.031-.21-1.843.145-.731.417-2.093 1.113-2.71.234-.209.573-.434.852-.325.328.128.599.664.66 1.302.025.27.261.467.538.443a.491.491 0 0 0 .446-.535c-.098-1.04-.59-1.854-1.282-2.124-.415-.16-1.075-.203-1.875.507-.87.773-1.19 2.084-1.424 3.251-.116.583-.4 2.517.85 2.959.76.269 1.38-.147 1.876-.48.091-.06.181-.12.268-.174-.083.356-.134.737.083 1.058.322.482.779.534 1.356.157l.072-.047c.053.11.148.233.32.316.207.101.415.106.566.11.065.002.153.004.18.015.093.041-.228-.1-.121.001.08.075.165.153.272.234a.496.496 0 0 0 .692-.099.488.488 0 0 0-.1-.687c-.308-.19-.241-.134-.296-.186z"
                                                                        fill="#00b6cb" fill-rule="nonzero">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <span>Signature</span>
                                                        </div>
                                                    </a>
                                                    <a wire:click.prevent="PageSetResponseValue(8)"
                                                        data-bs-dismiss="modal" style="text-decoration: none;">
                                                        <div style="display: flex;" class="gupkBu iDhWfr">
                                                            <div class="iWJCbx">
                                                                <svg width="15" height="15"
                                                                    viewBox="0 0 14 14">
                                                                    <g stroke="none" stroke-width="1"
                                                                        fill="none" fill-rule="evenodd">
                                                                        <path
                                                                            d="M7,2 C5.065,2 3.5,3.60760144 3.5,5.59527478 C3.5,7.73703133 5.71,10.6902928 6.62,11.8151002 C6.82,12.0616333 7.185,12.0616333 7.385,11.8151002 C8.29,10.6902928 10.5,7.73703133 10.5,5.59527478 C10.5,3.60760144 8.935,2 7,2 Z M7,6.87930149 C6.31,6.87930149 5.75,6.30405752 5.75,5.59527478 C5.75,4.88649204 6.31,4.31124807 7,4.31124807 C7.69,4.31124807 8.25,4.88649204 8.25,5.59527478 C8.25,6.30405752 7.69,6.87930149 7,6.87930149 Z"
                                                                            fill="#fe8500" fill-rule="nonzero">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span>Location</span>
                                                        </div>
                                                    </a>
                                                    <div class="bcPAfa">
                                                    </div>
                                                    <div style="display: flex;"
                                                        wire:click.prevent="PageSetResponseValue(10)"
                                                        data-bs-dismiss="modal" class="gupkBu iDhWfr mb-5">
                                                        <div class="fDgnZG">
                                                            <svg width="15" height="15" viewBox="0 0 14 14"
                                                                focusable="false">
                                                                <path
                                                                    d="M12.763 12.316c-.148-.086-1.049-.644-1.53-1.653a5.528 5.528 0 0 0 1.765-4.015c0-3.101-2.704-5.648-6-5.648C3.705 1 1 3.547 1 6.648c0 3.102 2.704 5.648 5.999 5.648.442 0 .917-.041 1.573-.179 1.723.916 3.269.89 3.857.88.262-.003.452.045.55-.226a.357.357 0 0 0-.216-.455zM7.702 9.484a.703.703 0 1 1-1.406 0V6.648a.703.703 0 1 1 1.406 0v2.836zm-.703-4.617a.703.703 0 1 1 0-1.406.703.703 0 0 1 0 1.406z"
                                                                    fill="#648fff" fill-rule="nonzero">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span>Instruction</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gtTPDH">
                                                <div class="hfhxmZ">
                                                    <div class="sruOo">
                                                        <div class="fRFEnE">
                                                            <div class="cSjXGQ">
                                                                <div class="bQMMjH">
                                                                    Multiple
                                                                    choice
                                                                    responses
                                                                </div>
                                                                <div role="button" class="jyUuRY graKfr"
                                                                    wire:click.prevent="PageSetResponseValue(7)"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#MultipleChoiseOptionModal">
                                                                    +
                                                                    Responses
                                                                </div>
                                                            </div>
                                                            @if (!empty($common_multiple_choise_options))
                                                                @forelse ($common_multiple_choise_options as $rKey => $common_multiple_choise_option)
                                                                    <div class="gupkBu eCBvzO">
                                                                        <div class="evLYbt"
                                                                            wire:click.prevent="PageSetResponseValueFromReadyOptions({{ $pageactiveone }},{{ $pagequestionactiveone }},7,{{ $loop->index }})"
                                                                            data-bs-dismiss="modal">
                                                                            <div class="fyczhl">
                                                                                @forelse ($common_multiple_choise_option as $record)
                                                                                    <div color="#13855f"
                                                                                        class="xXWzF"
                                                                                        style="font-family: Roboto, sans-serif;
                                                                                            font-size: 0.8rem;
                                                                                            font-weight: 400;
                                                                                            margin-right: 0.4rem;
                                                                                            display: inline-block;
                                                                                            vertical-align: inherit;
                                                                                            white-space: nowrap;
                                                                                            line-height: initial;
                                                                                            padding: 0.2rem 0.4rem;
                                                                                            border-radius: 0.75rem;
                                                                                            max-width: 8.75rem;
                                                                                            overflow: hidden;
                                                                                            text-overflow: ellipsis;
                                                                                            flex-shrink: 0;
                                                                                            color:{{ $record['font_color'] ?? '' }};
                                                                                            border: 1px solid transparent;
                                                                                            background-color: {{ $record['color'] ?? '' }};">
                                                                                        {{ $record['title'] ?? '' }}
                                                                                    </div>
                                                                                @empty
                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                        <button type="button" class="jvZSBO"
                                                                            wire:click.prevent="pageEditMultipleChoiseOptionModal({{ $loop->index }})"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#pageEditMultipleChoiseOptionModal">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 14 14"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M2.313 9.734v1.954h1.953l5.76-5.761-1.953-1.953-5.76 5.76zm9.223-5.318a.519.519 0 0 0 0-.734l-1.218-1.219a.519.519 0 0 0-.735 0l-.953.953 1.953 1.953.953-.953z"
                                                                                    fill-rule="nonzero"
                                                                                    fill="#545f70">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                        <button type="button" class="jvZSBO"
                                                                            wire:click.prevent="delete_defualt_option({{ $rKey }})">
                                                                            <svg width="21" height="21"
                                                                                viewBox="0 0 14 14"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                    fill="#545f70"
                                                                                    fill-rule="nonzero">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                @empty
                                                                @endforelse
                                                            @endif
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade m-0 p-0" id="pageEditMultipleChoiseOptionModal" tabindex="-1"
            aria-labelledby="pageEditMultipleChoiseOptionModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="pageEditMultipleChoiseOptionModalLabel">
                            Response Options
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="iVmibF cxbltl">
                            <div class="bJfPHR hzzSzX">
                                <div wire:loading wire:target="pageEditMultipleChoiseOptionModal">
                                    <div class="la-ball-beat la-3x spinner" id="loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div wire:loading.remove wire:target="pageEditMultipleChoiseOptionModal">
                                    <div class="jOMNlj">
                                        <div class="row mb-5">
                                            <div class="col-8">
                                                <h4 class="lhPVYY">
                                                    Multiple choice responses
                                                </h4>
                                            </div>
                                            <div class="col-4">
                                                @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice'][0]['title']))
                                                    <a class="ggbIJY2 d-flex align-items-right justify-content-end"
                                                        style="color: rgb(103, 93, 244);"
                                                        wire:click.prevent="page_save_multiple_choise({{ $pageactiveone }},{{ $pagequestionactiveone }})"
                                                        data-bs-dismiss="modal">
                                                        Save
                                                    </a>
                                                @else
                                                    <a class="ggbIJY2 d-flex align-items-right justify-content-end"
                                                        style="color: gray;">
                                                        Save
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                            <div class="kxrOmS eqGxMu">
                                                <div class="bgiTWR2">
                                                    <div class="kGgXUq">
                                                        Response
                                                        <div class="bdOmts">
                                                            <span class="LBNnk"></span>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="kGgXUq2"
                                                        style="border-left: none; text-align:right; color:blue;"
                                                        wire:click.prevent="clear_new_response_option({{ $activeone }})">
                                                        Reset
                                                    </div> --}}
                                                </div>
                                            </div>
                                            @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['response']))
                                                @if ($pages[$pageactiveone]['question'][$pagequestionactiveone]['response'] == 7)
                                                    @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice']))
                                                        @forelse ($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice'] as $responsKey => $respons)
                                                            <div class="kLpTzB multible_choise_wrapper"
                                                                style="border-bottom: {{ !$loop->last ? '1px solid rgb(191, 198, 212)' : '' }};">
                                                                <div class="hkphPX dragable">
                                                                    <div class="REnvQ">
                                                                        <div class="kxrOmS cuypVQ">
                                                                            <div class="dBZFks">
                                                                            </div>
                                                                            <div class="bAJknk">
                                                                                <div class="huXueT">
                                                                                    <div class="kGgXUq">
                                                                                        <div class="haXfJL drag-icon">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                focusable="false">
                                                                                                <path fill="none"
                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                </path>
                                                                                                <path fill="#675df4"
                                                                                                    d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="bBjJyf"
                                                                                            style="border: none;">
                                                                                            <div
                                                                                                style="display: flex; align-items: center;">
                                                                                                <div class="eAfucY">
                                                                                                    <input
                                                                                                        class="eVpkze w-100 h-100 question-title"
                                                                                                        placeholder="Response title"
                                                                                                        style="font-size: 12.5px;"
                                                                                                        wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.title"
                                                                                                        {{-- style="color:{{ $title_page_questions[$activeone]['multiple_choice'][$responsKey]['font_color'] }}" --}}>
                                                                                                </div>
                                                                                                <input type="color"
                                                                                                    wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                    class="form-control form-control-color22 gocNNg kxrOmS"
                                                                                                    style="margin-right: 5px; width:36.25px;"
                                                                                                    title="Choose background color">
                                                                                                <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                                                    class="bdOmts2"
                                                                                                    data-bs-toggle="dropdown"
                                                                                                    aria-expanded="false">
                                                                                                    <div
                                                                                                        class="hcjgmp">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="jvZSBO">
                                                                                                            <svg width="19"
                                                                                                                height="19"
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
                                                                                                            </svg>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                                    style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                                    wire:ignore.self>
                                                                                                    <div
                                                                                                        class="cKwbqr">
                                                                                                        <div
                                                                                                            class="epicTj">
                                                                                                            <div
                                                                                                                class="krtjey">
                                                                                                                <span
                                                                                                                    style="margin-top:50px; "></span>
                                                                                                                Font
                                                                                                                Color
                                                                                                                <div
                                                                                                                    class="ORzaJ knjhoD">
                                                                                                                    <select
                                                                                                                        wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.font_color"
                                                                                                                        class="text_answer_format">
                                                                                                                        <option
                                                                                                                            value="#ffffff">
                                                                                                                            {{ __('White') }}
                                                                                                                        </option>
                                                                                                                        <option
                                                                                                                            value="#000000">
                                                                                                                            {{ __('Black') }}
                                                                                                                        </option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="epicTj"
                                                                                                            wire:click.prevent="page_delete_mc_choise({{ $responsKey }})">
                                                                                                            <div style="display: flex; align-items: center;"
                                                                                                                class="iBzfYz">
                                                                                                                <svg width="21"
                                                                                                                    height="21"
                                                                                                                    viewBox="0 0 14 14"
                                                                                                                    focusable="false">
                                                                                                                    <path
                                                                                                                        d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                                        fill="#545f70"
                                                                                                                        fill-rule="nonzero">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                                                    Delete
                                                                                                                </span>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @empty
                                                        @endforelse
                                                    @endif
                                                @endif
                                            @endif
                                            <div class="kxrOmS eqGxMu">
                                                <div class="bgiTWR3">
                                                    <div class="kGgXUq">
                                                        <div class="bdOmts">
                                                            <span class="LBNnk"></span>
                                                        </div>
                                                    </div>
                                                    <div class="kGgXUq2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fhTZet">
                                        <button type="button" class="ggbIJY"
                                            wire:click.prevent="page_add_new_response()">
                                            + Add Response
                                        </button>
                                        <button role="button" class="kDSJkL" style="margin-left:10px;"
                                            wire:click.prevent="page_clear_new_response_option()"
                                            data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade m-0 p-0" id="MultipleChoiseOptionModal" tabindex="-1"
            aria-labelledby="MultipleChoiseOptionModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="MultipleChoiseOptionModalLabel">
                            Response Options
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="iVmibF cxbltl">
                            <div class="bJfPHR hzzSzX">
                                <div wire:loading wire:target="PageSetResponseValue">
                                    <div class="la-ball-beat la-3x spinner" id="loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div wire:loading.remove wire:target="PageSetResponseValue">
                                    <div class="jOMNlj">
                                        <div class="row mb-5">
                                            <div class="col-8">
                                                <h4 class="lhPVYY">
                                                    Multiple choice responses
                                                </h4>
                                            </div>
                                            <div class="col-4">
                                                @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice'][0]['title']))
                                                    <a class="ggbIJY2 d-flex align-items-right justify-content-end"
                                                        style="color: rgb(103, 93, 244);"
                                                        wire:click.prevent="page_save_multiple_choise({{ $pageactiveone }},{{ $pagequestionactiveone }})"
                                                        data-bs-dismiss="modal">
                                                        Save
                                                    </a>
                                                @else
                                                    <a class="ggbIJY2 d-flex align-items-right justify-content-end"
                                                        style="color: gray;">
                                                        Save
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                            <div class="kxrOmS eqGxMu">
                                                <div class="bgiTWR2">
                                                    <div class="kGgXUq">
                                                        Response
                                                        <div class="bdOmts">
                                                            <span class="LBNnk"></span>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="kGgXUq2"
                                                        style="border-left: none; text-align:right; color:blue;"
                                                        wire:click.prevent="clear_new_response_option({{ $activeone }})">
                                                        Reset
                                                    </div> --}}
                                                </div>
                                            </div>
                                            @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['response']))
                                                @if ($pages[$pageactiveone]['question'][$pagequestionactiveone]['response'] == 7)
                                                    @if (!empty($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice']))
                                                        @forelse ($pages[$pageactiveone]['question'][$pagequestionactiveone]['multiple_choice'] as $responsKey => $respons)
                                                            <div class="kLpTzB multible_choise_wrapper"
                                                                style="border-bottom: {{ !$loop->last ? '1px solid rgb(191, 198, 212)' : '' }};">
                                                                <div class="hkphPX dragable">
                                                                    <div class="REnvQ">
                                                                        <div class="kxrOmS cuypVQ">
                                                                            <div class="dBZFks">
                                                                            </div>
                                                                            <div class="bAJknk">
                                                                                <div class="huXueT">
                                                                                    <div class="kGgXUq">
                                                                                        <div class="haXfJL drag-icon">
                                                                                            <svg viewBox="0 0 24 24"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                focusable="false">
                                                                                                <path fill="none"
                                                                                                    d="M0 0h24v24H0V0z">
                                                                                                </path>
                                                                                                <path fill="#675df4"
                                                                                                    d="M11 18c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2zm-2-8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="bBjJyf"
                                                                                            style="border: none;">
                                                                                            <div
                                                                                                style="display: flex; align-items: center;">
                                                                                                <div class="eAfucY">
                                                                                                    <input
                                                                                                        class="eVpkze w-100 h-100 question-title"
                                                                                                        placeholder="Response title"
                                                                                                        style="font-size: 12.5px;"
                                                                                                        wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.title"
                                                                                                        {{-- style="color:{{ $title_page_questions[$activeone]['multiple_choice'][$responsKey]['font_color'] }}" --}}>
                                                                                                </div>
                                                                                                <input type="color"
                                                                                                    wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.color"
                                                                                                    class="form-control form-control-color22 gocNNg kxrOmS"
                                                                                                    style="margin-right: 5px; width:36.25px;"
                                                                                                    title="Choose background color">
                                                                                                <div style="border-left: 1px solid rgb(191, 198, 212);"
                                                                                                    class="bdOmts2"
                                                                                                    data-bs-toggle="dropdown"
                                                                                                    aria-expanded="false">
                                                                                                    <div
                                                                                                        class="hcjgmp">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            class="jvZSBO">
                                                                                                            <svg width="19"
                                                                                                                height="19"
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
                                                                                                            </svg>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="tether-element dropdown-menu tether-element-attached-bottom tether-element-attached-right tether-target-attached-top tether-target-attached-center tether-enabled tether-out-of-bounds tether-out-of-bounds-bottom"
                                                                                                    style="z-index: 20; top: 0px; position: absolute; transform: translateX(375.733px) translateY(216.25px) translateZ(0px); left: 0px;"
                                                                                                    wire:ignore.self>
                                                                                                    <div
                                                                                                        class="cKwbqr">
                                                                                                        <div
                                                                                                            class="epicTj">
                                                                                                            <div
                                                                                                                class="krtjey">
                                                                                                                <span
                                                                                                                    style="margin-top:50px; "></span>
                                                                                                                Font
                                                                                                                Color
                                                                                                                <div
                                                                                                                    class="ORzaJ knjhoD">
                                                                                                                    <select
                                                                                                                        wire:model="pages.{{ $pageactiveone }}.question.{{ $pagequestionactiveone }}.multiple_choice.{{ $responsKey }}.font_color"
                                                                                                                        class="text_answer_format">
                                                                                                                        <option
                                                                                                                            value="#ffffff">
                                                                                                                            {{ __('White') }}
                                                                                                                        </option>
                                                                                                                        <option
                                                                                                                            value="#000000">
                                                                                                                            {{ __('Black') }}
                                                                                                                        </option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="epicTj"
                                                                                                            wire:click.prevent="page_delete_mc_choise({{ $responsKey }})">
                                                                                                            <div style="display: flex; align-items: center;"
                                                                                                                class="iBzfYz">
                                                                                                                <svg width="21"
                                                                                                                    height="21"
                                                                                                                    viewBox="0 0 14 14"
                                                                                                                    focusable="false">
                                                                                                                    <path
                                                                                                                        d="M3.541 11.083c.002.644.561 1.165 1.25 1.167h5c.69-.002 1.249-.523 1.25-1.167v-7H3.543v7zm8.125-8.75H9.479l-.625-.583H5.73l-.625.583H2.917V3.5h8.75l-.001-1.167z"
                                                                                                                        fill="#545f70"
                                                                                                                        fill-rule="nonzero">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    style="padding-left: 0.4rem; color: rgb(31, 37, 51);">
                                                                                                                    Delete
                                                                                                                </span>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @empty
                                                        @endforelse
                                                    @endif
                                                @endif
                                            @endif
                                            <div class="kxrOmS eqGxMu">
                                                <div class="bgiTWR3">
                                                    <div class="kGgXUq">
                                                        <div class="bdOmts">
                                                            <span class="LBNnk"></span>
                                                        </div>
                                                    </div>
                                                    <div class="kGgXUq2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fhTZet">
                                        <button type="button" class="ggbIJY"
                                            wire:click.prevent="page_add_new_response()">
                                            + Add Response
                                        </button>
                                        <button role="button" class="kDSJkL" style="margin-left:10px;"
                                            wire:click.prevent="page_clear_new_response_option()"
                                            data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ((new \Jenssegers\Agent\Agent())->isMobile())
        <div class="mt-5 under-1">
            <div class="under-2">
                <div class="under-3">
                    <a wire:click.prevent="title_page_add_question">
                        <div class="under-4">
                            <svg viewBox="0 0 24 24" width="21" height="21" focusable="false"
                                data-anchor="plus-svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#17966c"></path>
                            </svg>
                        </div>
                        <div class="under-5">
                            Question
                        </div>
                    </a>
                </div>
                <div class="under-6">
                    <div class="under-7">
                        <svg width="21" height="21" viewBox="0 0 14 14" focusable="false">
                            <g transform="translate(1 1)" fill="#675df4" fill-rule="nonzero">
                                <rect width="12" height="4.066" rx="0.733"></rect>
                                <path
                                    d="M.8 5.947v5.164h10.4V5.947H.8zm0-.89h10.4c.442 0 .8.399.8.89v5.164c0 .491-.358.889-.8.889H.8c-.442 0-.8-.398-.8-.889V5.947c0-.491.358-.89.8-.89z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="under-8">
                        Section
                    </div>
                </div>
                <div class="under-9">
                    <a wire:click.prevent="add_page()">
                        <div class="under-10">
                            <svg width="21" height="21" viewBox="0 0 14 14" focusable="false">
                                <g fill="#675df4" fill-rule="nonzero">
                                    <path d="M8.675.998v4L12 5z"></path>
                                    <path
                                        d="M7.833 6.018H12v6.232c0 .45-.286.75-.714.75H2.714C2.286 13 2 12.7 2 12.25V1.75c0-.45.286-.75.714-.75h5.12v5.018z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="under-11">
                            Page
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endif
    <script>
        function focusOnTitlePage() {
            const pages1 = document.querySelectorAll('.pages');
            const titlepage1 = document.querySelectorAll('.title_page');
            pages1.forEach(element2 => {
                element2.setAttribute('wire:ignore');
                element2.hasAttribute('wire:ignore');
            });
            titlepage1.forEach(element1 => {
                element1.removeAttribute('wire:ignore');
                element1.hasAttribute('wire:ignore');
            });
        }

        function focusOnPage() {
            const pages2 = document.querySelectorAll('.pages');
            const titlepage2 = document.querySelectorAll('.title_page');
            titlepage2.forEach(element4 => {
                element4.setAttribute('wire:ignore');
                element4.hasAttribute('wire:ignore');
            });
            pages2.forEach(element3 => {
                element3.removeAttribute('wire:ignore');
                element3.hasAttribute('wire:ignore');
            });
        }
    </script>
</div>
