<div id="root">
    {{-- <button wire:click.prevent="test">print test</button> --}}
    <div id="app-container" class="gtvfKz">
        <div class="brCoKm">
            <div class="gBIxUd">
                <nav class="cSkQhk">
                    <a href="{{ route('index.template') }}" style="margin: 0px 1rem;" class="jvZSBO">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="#1f2533" focusable="false">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                        </svg>
                    </a>
                    <div style="max-width: calc(-4rem + 100vw);">
                        <h3 class="dtcQgF gLYoqV">
                            {{ $data->title == '' ? 'Untitled template' : $data->title ?? '' }}
                        </h3>
                        <a target="_blank" style="display: inline-block; text-decoration: none;"
                            class="link__HyperLink-sc-um3jmd-1 fLTbiF">
                            <div class="jcwCWQ">
                                <u>Cretaed by {{ $data->user->first_name ?? '' }} {{ $data->user->last_name ?? '' }}
                                    at
                                    {{ $data->created_at ?? '' }}
                                </u>
                            </div>
                        </a>
                    </div>
                </nav>
                @if ($page == 0)
                    <div class="iAEKFw">
                        <div class="jTJKJe">
                            <div class="blRQIx">
                                <div class="kYZfuZ">
                                    <div class="kSYIEK">
                                        <div class="kWyuDi hLlPJJ">
                                            <div class="bqdqKq" tabindex="0">
                                                <div style="border: medium none;" class="select-value">
                                                    <div class="hZgdqC">
                                                        <div class="fPDdjU">
                                                            <div>
                                                                <div class="bBMTve">
                                                                    <svg viewBox="0 0 24 24" width="12"
                                                                        height="12" class="kyEOXC hLZApJ"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                            fill="#545f70" fill-rule="nonzero"></path>
                                                                    </svg>
                                                                    <div style="margin-bottom: 0.5rem;" class="jcwCWQ">
                                                                        Page 1 of {{ count($data['pages']) + 1 }}
                                                                    </div>
                                                                </div>
                                                                <div class="dxopML">
                                                                    {{ $data['title_page_title'] ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dkIXnY">
                                    <div></div>
                                    @forelse ($data['title_page'] as $question)
                                        <div>
                                            <div class="dWlTBc QuestionCard"
                                                style="{{ $question['is_required'] == true && (!isset($title_page_result[$loop->index]['value']) || $title_page_result[$loop->index]['value'] == '') ? 'border-left: 0.25rem solid rgb(168, 36, 42);' : '' }}">
                                                <div class="QuestionInnerContainer">
                                                    <div class="iGjeXI">
                                                        @if ($question['is_required'] == true && $question['response'] != 3)
                                                            <div class="bQzAit">*</div>
                                                        @endif
                                                        <div class="ljnLdg">
                                                            <div class="cTGqGw kYUEsK">
                                                                <span class="jjaCv">
                                                                    {{ $question['response'] == 3 ? null : $question['title'] ?? '' }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($question['response'] == 1)
                                                        @if ($question['text_answer_format'] == 0)
                                                            <input class="form-control fs-block" type="text"
                                                                wire:model="title_page_result.{{ $loop->index }}.value">
                                                        @elseif ($question['text_answer_format'] == 1)
                                                            <textarea class="form-control fs-block" type="text" wire:model="title_page_result.{{ $loop->index }}.value"></textarea>
                                                        @endif
                                                    @elseif ($question['response'] == 2)
                                                        <input class="form-control fs-block" type="text"
                                                            wire:model="title_page_result.{{ $loop->index }}.value">
                                                    @elseif ($question['response'] == 3)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                wire:model="title_page_result.{{ $loop->index }}.value"
                                                                id="flexCheckDefault{{ $loop->index }}">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                {{ $question['title'] ?? '' }}
                                                            </label>
                                                        </div>
                                                    @elseif ($question['response'] == 5)
                                                        <input class="form-control fs-block text-left"
                                                            {{-- hxhzuE gEIQZu  --}}
                                                            type="{{ !empty($question['is_date']) && !empty($question['is_time']) ? ($question['is_date'] == 1 && $question['is_time'] == 1 ? 'datetime-local' : 'date') : 'date' }}"
                                                            wire:model="title_page_result.{{ $loop->index }}.value">
                                                    @elseif ($question['response'] == 4)
                                                        <input
                                                            class="form-control fs-block only-number{{ $loop->index }}"
                                                            type="number"
                                                            wire:model="title_page_result.{{ $loop->index }}.value">
                                                        <script>
                                                            document.querySelector(".only-number" + {{ $loop->index }}).addEventListener("keypress", function(evt) {
                                                                if (evt.which < 48 || evt.which > 57) {
                                                                    evt.preventDefault();
                                                                }
                                                            });
                                                        </script>
                                                    @elseif ($question['response'] == 6)
                                                        <div class="d-flex">
                                                            <input type="text"
                                                                wire:model.lazy="title_page_result.{{ $loop->index }}.signature.name"
                                                                id="" class="form-control w-75">
                                                            <!-- Button trigger modal -->
                                                            <button class="btn w-25 mx-1"
                                                                style="background-color: #4740d4; color:white;"
                                                                class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="#signatureModal{{ $loop->index }}">
                                                                <img src="{{ asset('images/signature-svgrepo-com.svg') }}"
                                                                    width="25px" alt="signature" style="color:white;">
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade"
                                                                id="signatureModal{{ $loop->index }}" tabindex="-1"
                                                                aria-labelledby="signatureModal{{ $loop->index }}Label"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-fullscreen-sm-down">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-center"
                                                                                id="signatureModal{{ $loop->index }}Label">
                                                                                Please add your signature
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div>

                                                                                <canvas
                                                                                    id="signature-pad{{ $loop->index }}"
                                                                                    class="small-sign-pad w-100"
                                                                                    style="border-bottom: 2px dashed rgb(191, 198, 212);"></canvas>
                                                                            </div>
                                                                            <button id="clear{{ $loop->index }}"
                                                                                class="btn btn-outline-secondary"
                                                                                style="margin-top:300px;">Clear</button>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="button"
                                                                                class="btn btn-outline-primary"
                                                                                id="save{{ $loop->index }}">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var signaturePad{{ $loop->index }} = new SignaturePad(document.getElementById('signature-pad' +
                                                                {{ $loop->index }}), {
                                                                backgroundColor: '#ede9e8',
                                                                penColor: 'rgb(0, 0, 0)'
                                                            });
                                                            var saveButton{{ $loop->index }} = document.getElementById('save' + {{ $loop->index }});
                                                            var cancelButton{{ $loop->index }} = document.getElementById('clear' + {{ $loop->index }});


                                                            cancelButton{{ $loop->index }}.addEventListener('click', function(event) {
                                                                signaturePad{{ $loop->index }}.clear();
                                                            });
                                                            saveButton{{ $loop->index }}.addEventListener('click', function(event) {
                                                                var data{{ $loop->index }} = signaturePad{{ $loop->index }}.toDataURL('image/png');
                                                                console.log(@this.set('title_page_result.' + {{ $loop->index }} + '.signature.value',
                                                                    data{{ $loop->index }}));
                                                                // console.log(@this.get('title_page_result.' + {{ $loop->index }} + '.signature.name'));
                                                                $('#signatureModal' + {{ $loop->index }}).modal('hide');
                                                                // console.log(data);
                                                                // Send data to server instead...
                                                                // window.open(data);
                                                            });
                                                        </script>
                                                    @elseif ($question['response'] == 7)
                                                        <div class="" role="group"
                                                            aria-label="Basic radio toggle button group">
                                                            <div class="row">
                                                                @forelse ($question['multiple_choice'] as $response)
                                                                    <div class="col-12 my-1 test">
                                                                        <input type="radio" class="btn-check"
                                                                            wire:model.lazy="title_page_result.{{ $loop->parent->index }}.value"
                                                                            value="{{ $response['title'] }}._.{{ $response['color'] ?? '' }}"
                                                                            id="{{ $loop->parent->index }}{{ $loop->index }}">
                                                                        <label class="btn w-100 border-0"
                                                                            style=""
                                                                            for="{{ $loop->parent->index }}{{ $loop->index }}">
                                                                            {{ $response['title'] ?? '' }}
                                                                        </label>
                                                                    </div>
                                                                    <style>
                                                                        .test:focus-within {
                                                                            background-color: red;
                                                                            border: 2px solid grey;
                                                                            transition: width 2s;
                                                                        }
                                                                    </style>
                                                                @empty
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                    @elseif ($question['response'] == 8)
                                                        <textarea rows="5" cols="30" type="text" class="form-control" id="demo"></textarea>
                                                        <script>
                                                            function runFunction() {
                                                                getLocation();
                                                            }
                                                            runFunction();
                                                            var x = document.getElementById("demo");

                                                            function getLocation() {
                                                                if (navigator.geolocation) {
                                                                    navigator.geolocation.getCurrentPosition(showPosition, showError, {
                                                                        maximumAge: 60000,
                                                                        timeout: 5000,
                                                                        enableHighAccuracy: true
                                                                    });
                                                                } else {
                                                                    x.value = "Geolocation is not supported by this browser.";
                                                                }
                                                            }

                                                            function showPosition(position) {
                                                                // function to handle success
                                                                function success() {
                                                                    var data = JSON.parse(this.responseText); //parse the string to JSON
                                                                    x.value = data['results'][0]['formatted_address'];
                                                                    @this.set('title_page_result.' + {{ $loop->index }} + '.value', data['results'][0]['formatted_address']);
                                                                    // console.log(data);
                                                                }

                                                                // function to handle error
                                                                function error(err) {
                                                                    console.log('Request Failed', err); //error details will be in the "err" object
                                                                }

                                                                var xhr = new XMLHttpRequest(); //invoke a new instance of the XMLHttpRequest
                                                                xhr.onload = success; // call success function if request is successful
                                                                xhr.onerror = error; // call error function if request failed
                                                                xhr.open('GET',
                                                                    'https://maps.googleapis.com/maps/api/geocode/json?language=ar&key=AIzaSyA0-aDu6GDrzZapOcgzMrZCwnyF0CLyNdw&latlng=' +
                                                                    position.coords.latitude + "," + position.coords.longitude
                                                                ); // open a GET request
                                                                xhr.send(); // send the request to the server.

                                                            }

                                                            function showError(error) {
                                                                switch (error.code) {
                                                                    case error.PERMISSION_DENIED:
                                                                        x.value = "User denied the request for Geolocation."
                                                                        break;
                                                                    case error.POSITION_UNAVAILABLE:
                                                                        x.value = "Location information is unavailable."
                                                                        break;
                                                                    case error.TIMEOUT:
                                                                        x.value = "The request to get user location timed out."
                                                                        break;
                                                                    case error.UNKNOWN_ERROR:
                                                                        x.value = "An unknown error occurred."
                                                                        break;
                                                                }
                                                            }
                                                        </script>
                                                    @elseif ($question['response'] == 11)
                                                        <div class="etYWGL cBEPSE fehvTc">
                                                            <button color="#ffffff" font-size="0.875rem"
                                                                style="width: 100%;" type="button" class="gqAxJM">
                                                                <svg width="17" height="17"
                                                                    viewBox="0 0 16 16" class="button_icon"
                                                                    focusable="false" fill="none">
                                                                    <path
                                                                        d="M16 11.2V1.6c0-.88-.72-1.6-1.6-1.6H4.8c-.88 0-1.6.72-1.6 1.6v9.6c0 .88.72 1.6 1.6 1.6h9.6c.88 0 1.6-.72 1.6-1.6zM7.52 8.424l1.304 1.744 2.064-2.576a.4.4 0 0 1 .624 0l2.368 2.96a.399.399 0 0 1-.312.648H5.6a.4.4 0 0 1-.32-.64l1.6-2.136a.406.406 0 0 1 .64 0zM0 4v10.4c0 .88.72 1.6 1.6 1.6H12c.44 0 .8-.36.8-.8 0-.44-.36-.8-.8-.8H2.4c-.44 0-.8-.36-.8-.8V4c0-.44-.36-.8-.8-.8-.44 0-.8.36-.8.8z"
                                                                        fill="#ffffff">
                                                                    </path>
                                                                </svg>
                                                                Add media
                                                            </button>
                                                            <input type="file" class="hHuzqj" accept="image/*"
                                                                tabindex="-1" wire:model="pictures" multiple>
                                                        </div>
                                                        <div class="hiuMsG">
                                                            <div class="gCLqFS">
                                                                @if ($pictures)
                                                                    @forelse ($pictures as $pic)
                                                                        <div class="ikLXml">
                                                                            <div class="lazyload-wrapper ">
                                                                                <img class="iokESV ekAWcw"
                                                                                    id="myImg{{ $loop->index }}"
                                                                                    src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/images/' . $pic))) !!}">
                                                                                <!-- The Modal -->
                                                                                <div id="myModal{{ $loop->index }}"
                                                                                    class="img-modal">
                                                                                    <span
                                                                                        class="close{{ $loop->index }}">&times;</span>
                                                                                    <img class="img-modal-content"
                                                                                        id="img{{ $loop->index }}">
                                                                                    <div
                                                                                        id="caption{{ $loop->index }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            // Get the modal
                                                                            var modal{{ $loop->index }} = document.getElementById("myModal" + {{ $loop->index }});

                                                                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                                                                            var img{{ $loop->index }} = document.getElementById("myImg" + {{ $loop->index }});
                                                                            var modalImg{{ $loop->index }} = document.getElementById("img" + {{ $loop->index }});
                                                                            var captionText{{ $loop->index }} = document.getElementById("caption" + {{ $loop->index }});
                                                                            img{{ $loop->index }}.onclick = function() {
                                                                                modal{{ $loop->index }}.style.display = "block";
                                                                                modalImg{{ $loop->index }}.src = this.src;
                                                                                captionText{{ $loop->index }}.innerHTML = this.alt;
                                                                            }

                                                                            // Get the <span> element that closes the modal
                                                                            var span{{ $loop->index }} = document.getElementsByClassName("close" + {{ $loop->index }})[0];

                                                                            // When the user clicks on <span> (x), close the modal
                                                                            span{{ $loop->index }}.onclick = function() {
                                                                                modal{{ $loop->index }}.style.display = "none";
                                                                            }
                                                                        </script>
                                                                    @empty
                                                                    @endforelse
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="hDVsDR">
                                                    {{-- add note --}}
                                                    <div class="kRvCBh" wire:ignore.self>
                                                        <div class="gqIGVk">
                                                            <div class="kMPIlg">
                                                                <textarea class="mSXeo fs-block" placeholder="Type your notes..." style="height: 42px;"
                                                                    wire:model.lazy="title_page_result.{{ $loop->index }}.note"></textarea>
                                                                <div
                                                                    style="display: flex; justify-content: space-between; align-items: center;">
                                                                    <div class="czOQuo">
                                                                        <button color="#ffffff" font-size="0.875rem"
                                                                            type="button"
                                                                            onclick="hide_note_action({{ $loop->index }})"
                                                                            class="cEDpxx">
                                                                            Save
                                                                        </button>
                                                                        <button color="#4740d4" font-size="0.875rem"
                                                                            type="button" class="chnkCq"
                                                                            onclick="cancel_note_action({{ $loop->index }})">
                                                                            Cancel
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="bJmYpV">
                                                            <div class="sc-bqGGPW fyoKEo"><button type="button"
                                                                    onclick="document.getElementsByClassName('kRvCBh')[{{ $loop->index }}].style.display='block'"
                                                                    class="sc-kEqXSa dVzWRr">
                                                                    <span class="sc-iqAclL jibPFy">
                                                                        <svg width="1rem" height="1rem"
                                                                            viewBox="0 0 24 24" color="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M2 6a2 2 0 0 1 2-2h10a1 1 0 1 1 0 2H4v14h13V9a1 1 0 1 1 2 0v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"
                                                                                fill="currentColor"></path>
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M6 9a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 13a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 17a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM19.5 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1Z"
                                                                                fill="currentColor"></path>
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M16 4.5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Add note...
                                                                </button>
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

                                        function hide_note_action(id) {
                                            document.getElementsByClassName('kRvCBh')[id].style.display = 'none';
                                        }
                                    </script>
                                </div>
                                @if (count($data['pages']) > 0 && request('page') < count($data['pages']) + 1)
                                    <div class="eIqTdO">
                                        <button color="#ffffff" font-size="0.875rem" style="float: right;"
                                            type="button" {{-- onclick="focusOnTitlePage({{ request('page') ?? 0 }})" --}} wire:click.prevent="next_page"
                                            class="gIOqQk">
                                            Next page
                                            <svg viewBox="0 0 24 24" width="17" height="17"
                                                class="button_icon" focusable="false" data-anchor="arrow-right-svg">
                                                <path
                                                    d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                                    fill="#ffffff" fill-rule="nonzero"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @else
                                    <div class="eIqTdO">
                                        <button color="#ffffff" font-size="0.875rem" style="float: right;"
                                            type="button" wire:click.prevent="export" class="gIOqQk">
                                            Export
                                            <svg viewBox="0 0 24 24" width="17" height="17"
                                                class="button_icon" focusable="false" data-anchor="arrow-right-svg">
                                                <path
                                                    d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                                    fill="#ffffff" fill-rule="nonzero"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @for ($i = 1; $i <= count($data['pages']); $i++)
                    @if ($page == $i)
                        @forelse ($data['pages'] as $pKey => $page)
                            @if ($loop->iteration == $i)
                                <div class="iAEKFw">
                                    <div class="jTJKJe">
                                        <div class="blRQIx">
                                            <div class="kYZfuZ">
                                                <div class="kSYIEK">
                                                    <div class="kWyuDi hLlPJJ">
                                                        <div class="bqdqKq" tabindex="0">
                                                            <div style="border: medium none;" class="select-value">
                                                                <div class="hZgdqC">
                                                                    <div class="fPDdjU">
                                                                        <div>
                                                                            <div class="bBMTve">
                                                                                <svg viewBox="0 0 24 24"
                                                                                    width="12" height="12"
                                                                                    class="kyEOXC hLZApJ"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M12.819 17.633l8.866-9.52a1.323 1.323 0 0 0-.028-1.745 1.113 1.113 0 0 0-1.625-.03l-7.663 8.228a.509.509 0 0 1-.755 0L3.968 6.354a1.113 1.113 0 0 0-1.625.03 1.323 1.323 0 0 0-.028 1.745l8.85 9.504c.22.235.517.368.827.367a1.12 1.12 0 0 0 .827-.367z"
                                                                                        fill="#545f70"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                                <div style="margin-bottom: 0.5rem;"
                                                                                    class="jcwCWQ">
                                                                                    Page {{ $loop->iteration + 1 }} of
                                                                                    {{ count($data['pages']) + 1 }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="dxopML">
                                                                                {{ $page['title'] ?? '' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dkIXnY">
                                                <div></div>
                                                @forelse ($page['question'] as $qKey => $question)
                                                    <div>
                                                        <div class="dWlTBc QuestionCard">
                                                            <div class="QuestionInnerContainer">
                                                                <div class="iGjeXI">
                                                                    <div class="ljnLdg">
                                                                        <div class="cTGqGw kYUEsK">
                                                                            <span class="jjaCv">
                                                                                {{ $question['response'] == 3 ? null : $question['title'] ?? '' }}
                                                                                {{-- {{ $question['title'] ?? '' }} --}}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if ($question['response'] == 1)
                                                                    @if ($question['text_answer_format'] == 0)
                                                                        <input class="hxhzuE gEIQZu fs-block"
                                                                            type="text"
                                                                            wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.value">
                                                                    @elseif ($question['text_answer_format'] == 1)
                                                                        <textarea class="hxhzuE gEIQZu fs-block" type="text"
                                                                            wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.value"></textarea>
                                                                    @endif
                                                                @elseif ($question['response'] == 2)
                                                                    <input class="hxhzuE gEIQZu fs-block"
                                                                        type="text"
                                                                        wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.value">
                                                                    <script>
                                                                        @this.set('page_result.' + {{ $loop->parent->index }} + '.question.' + {{ $loop->index }} + '.value',
                                                                            {!! json_encode($question['docNum_format'], JSON_HEX_TAG) !!});
                                                                    </script>
                                                                @elseif ($question['response'] == 5)
                                                                    <input class="hxhzuE gEIQZu fs-block"
                                                                        type="{{ !empty($question['is_date']) && !empty($question['is_time']) ? ($question['is_date'] == 1 && $question['is_time'] == 1 ? 'datetime-local' : 'date') : 'date' }}"
                                                                        wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.value">
                                                                @elseif ($question['response'] == 4)
                                                                    <input class="hxhzuE gEIQZu fs-block only-number"
                                                                        type="number"
                                                                        wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.value">
                                                                    <script>
                                                                        document.querySelector(".only-number").addEventListener("keypress", function(evt) {
                                                                            if (evt.which < 48 || evt.which > 57) {
                                                                                evt.preventDefault();
                                                                            }
                                                                        });
                                                                    </script>
                                                                @elseif ($question['response'] == 6)
                                                                    <div class="d-flex">
                                                                        <input type="text"
                                                                            wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.signature.name"
                                                                            id="" class="form-control w-75">
                                                                        <!-- Button trigger modal -->
                                                                        <button class="btn w-25 mx-1"
                                                                            style="background-color: #4740d4; color:white;"
                                                                            class="btn btn-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#signatureModal{{ $loop->parent->index }}{{ $loop->index }}">
                                                                            <img src="{{ asset('images/signature-svgrepo-com.svg') }}"
                                                                                width="25px" alt="signature"
                                                                                style="color:white;">
                                                                        </button>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade"
                                                                            id="signatureModal{{ $loop->parent->index }}{{ $loop->index }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="signatureModal{{ $loop->parent->index }}{{ $loop->index }}Label"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-fullscreen-sm-down">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title text-center"
                                                                                            id="signatureModal{{ $loop->parent->index }}{{ $loop->index }}Label">
                                                                                            Please add your signature
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <canvas
                                                                                            id="signature-pad{{ $loop->parent->index }}{{ $loop->index }}"
                                                                                            class="small-sign-pad w-100"
                                                                                            style="border-bottom: 2px dashed rgb(191, 198, 212);"></canvas>
                                                                                        <button
                                                                                            id="clear{{ $loop->parent->index }}{{ $loop->index }}"
                                                                                            class="btn btn-outline-secondary"
                                                                                            style="margin-top:300px;">Clear</button>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-outline-secondary"
                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-outline-primary"
                                                                                            id="save{{ $loop->parent->index }}{{ $loop->index }}">Save
                                                                                            changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        var signaturePad{{ $loop->parent->index }}{{ $loop->index }} = new SignaturePad(document.getElementById(
                                                                            'signature-pad' + {{ $loop->parent->index }}{{ $loop->index }}), {
                                                                            backgroundColor: 'rgba(150, 100, 25, 0)',
                                                                            penColor: 'rgb(0, 0, 0)'
                                                                        });
                                                                        var saveButton{{ $loop->parent->index }}{{ $loop->index }} = document.getElementById('save' +
                                                                            {{ $loop->parent->index }}{{ $loop->index }});
                                                                        var cancelButton{{ $loop->parent->index }}{{ $loop->index }} = document.getElementById('clear' +
                                                                            {{ $loop->parent->index }}{{ $loop->index }});


                                                                        cancelButton{{ $loop->parent->index }}{{ $loop->index }}.addEventListener('click', function(event) {
                                                                            signaturePad{{ $loop->parent->index }}{{ $loop->index }}.clear();
                                                                        });
                                                                        saveButton{{ $loop->parent->index }}{{ $loop->index }}.addEventListener('click', function(event) {
                                                                            var data{{ $loop->parent->index }}{{ $loop->index }} =
                                                                                signaturePad{{ $loop->parent->index }}{{ $loop->index }}.toDataURL('image/png');
                                                                            @this.set('page_result.' + {{ $loop->parent->index }} + '.question.' + {{ $loop->index }} +
                                                                                '.signature.value', data{{ $loop->parent->index }}{{ $loop->index }});
                                                                            $('#signatureModal' + {{ $loop->parent->index }}{{ $loop->index }}).modal('hide');
                                                                            // console.log(data);
                                                                            // Send data to server instead...
                                                                            // window.open(data);
                                                                        });
                                                                    </script>
                                                                @elseif ($question['response'] == 7)
                                                                    <div class="btn-group" role="group"
                                                                        aria-label="Basic radio toggle button group">
                                                                        <div class="row">
                                                                            @forelse ($question['multiple_choice'] as $rKey => $response)
                                                                                <div class="col-12 my-1">
                                                                                    <input type="radio"
                                                                                        class="btn-check"
                                                                                        wire:model.lazy="page_result.{{ $pKey }}.question.{{ $qKey }}.value"
                                                                                        value="{{ $response['title'] }}._.{{ $response['color'] }}"
                                                                                        id="{{ $loop->parent->index }}{{ $loop->index }}">
                                                                                    <label class="btn w-100"
                                                                                        for="{{ $loop->parent->index }}{{ $loop->index }}">
                                                                                        {{ $response['title'] }}
                                                                                    </label>
                                                                                </div>
                                                                            @empty
                                                                            @endforelse
                                                                        </div>
                                                                    </div>
                                                                @elseif ($question['response'] == 8)
                                                                    <textarea rows="5" cols="30" type="text" class="form-control" id="demo"></textarea>
                                                                    <script>
                                                                        function runFunction() {
                                                                            getLocation();
                                                                        }
                                                                        runFunction();
                                                                        var x = document.getElementById("demo");

                                                                        function getLocation() {
                                                                            if (navigator.geolocation) {
                                                                                navigator.geolocation.getCurrentPosition(showPosition, showError, {
                                                                                    maximumAge: 60000,
                                                                                    timeout: 5000,
                                                                                    enableHighAccuracy: true
                                                                                });
                                                                            } else {
                                                                                x.value = "Geolocation is not supported by this browser.";
                                                                            }
                                                                        }

                                                                        function showPosition(position) {
                                                                            // function to handle success
                                                                            function success() {
                                                                                var data = JSON.parse(this.responseText); //parse the string to JSON
                                                                                x.value = data['results'][0]['formatted_address'];
                                                                                @this.set('page_result.' + {{ $loop->parent->index }} + '.question.' + {{ $loop->index }} + '.value',
                                                                                    data['results'][0]['formatted_address']);
                                                                                // console.log(data);
                                                                            }

                                                                            // function to handle error
                                                                            function error(err) {
                                                                                console.log('Request Failed', err); //error details will be in the "err" object
                                                                            }

                                                                            var xhr = new XMLHttpRequest(); //invoke a new instance of the XMLHttpRequest
                                                                            xhr.onload = success; // call success function if request is successful
                                                                            xhr.onerror = error; // call error function if request failed
                                                                            xhr.open('GET',
                                                                                'https://maps.googleapis.com/maps/api/geocode/json?language=ar&key=AIzaSyA0-aDu6GDrzZapOcgzMrZCwnyF0CLyNdw&latlng=' +
                                                                                position.coords.latitude + "," + position.coords.longitude
                                                                            ); // open a GET request
                                                                            xhr.send(); // send the request to the server.

                                                                        }

                                                                        function showError(error) {
                                                                            switch (error.code) {
                                                                                case error.PERMISSION_DENIED:
                                                                                    x.value = "User denied the request for Geolocation."
                                                                                    break;
                                                                                case error.POSITION_UNAVAILABLE:
                                                                                    x.value = "Location information is unavailable."
                                                                                    break;
                                                                                case error.TIMEOUT:
                                                                                    x.value = "The request to get user location timed out."
                                                                                    break;
                                                                                case error.UNKNOWN_ERROR:
                                                                                    x.value = "An unknown error occurred."
                                                                                    break;
                                                                            }
                                                                        }
                                                                    </script>
                                                                @elseif ($question['response'] == 11)
                                                                    <div class="etYWGL cBEPSE fehvTc"
                                                                        style="top: 12.5%;">
                                                                        <button style="width: 100%;" type="button"
                                                                            class="gqAxJM">
                                                                            <svg width="17" height="17"
                                                                                viewBox="0 0 16 16"
                                                                                class="button_icon" focusable="false"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M16 11.2V1.6c0-.88-.72-1.6-1.6-1.6H4.8c-.88 0-1.6.72-1.6 1.6v9.6c0 .88.72 1.6 1.6 1.6h9.6c.88 0 1.6-.72 1.6-1.6zM7.52 8.424l1.304 1.744 2.064-2.576a.4.4 0 0 1 .624 0l2.368 2.96a.399.399 0 0 1-.312.648H5.6a.4.4 0 0 1-.32-.64l1.6-2.136a.406.406 0 0 1 .64 0zM0 4v10.4c0 .88.72 1.6 1.6 1.6H12c.44 0 .8-.36.8-.8 0-.44-.36-.8-.8-.8H2.4c-.44 0-.8-.36-.8-.8V4c0-.44-.36-.8-.8-.8-.44 0-.8.36-.8.8z"
                                                                                    fill="#ffffff">
                                                                                </path>
                                                                            </svg>
                                                                            Add media
                                                                        </button>
                                                                        <input type="file" class="hHuzqj"
                                                                            wire:model="pictures.page.{{ $loop->parent->index }}.question.{{ $loop->index }}.images"
                                                                            accept="image/*" multiple>
                                                                    </div>
                                                                    {{-- @if ($picture)
                                                                            @forelse ($picture as $pic)
                                                                                <div class="col-6 col-md-3">
                                                                                    <img src="{{ $pic->temporaryUrl() }}"
                                                                                        alt="preview pictures" width="175px">
                                                                                </div>
                                                                                <div class="hiuMsG">
                                                                                    <div class="gCLqFS">
                                                                                        <div class="ikLXml">
                                                                                            <div class="lazyload-wrapper "><img
                                                                                                    class="iokESV ekAWcw"
                                                                                                    src="blob:https://app.au.safetyculture.com/7a0215ef-ad66-4009-824b-cd289e117550">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="ikLXml">
                                                                                            <div class="lazyload-wrapper "><img
                                                                                                    class="iokESV ekAWcw"
                                                                                                    src="blob:https://app.au.safetyculture.com/b130795f-ccf7-4fb5-8abb-acb4465c5a86">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @empty
                                                                            @endforelse
                                                                        @endif --}}
                                                                @endif
                                                            </div>
                                                            <div class="hDVsDR">
                                                                {{-- add note --}}
                                                                <div class="kRvCBh kRvCBh{{ $loop->parent->index }}"
                                                                    wire:ignore.self>
                                                                    <div class="gqIGVk">
                                                                        <div class="kMPIlg">
                                                                            <textarea class="mSXeo fs-block" placeholder="Type your notes..." style="height: 42px;"
                                                                                wire:model.lazy="page_result.{{ $loop->parent->index }}.question.{{ $loop->index }}.note"></textarea>
                                                                            <div
                                                                                style="display: flex; justify-content: space-between; align-items: center;">
                                                                                <div class="czOQuo">
                                                                                    <button color="#ffffff"
                                                                                        font-size="0.875rem"
                                                                                        type="button"
                                                                                        onclick="page_hide_note_action({{ $loop->parent->index }},{{ $loop->index }})"
                                                                                        class="cEDpxx">
                                                                                        Save
                                                                                    </button>
                                                                                    <button color="#4740d4"
                                                                                        font-size="0.875rem"
                                                                                        type="button" class="chnkCq"
                                                                                        onclick="page_cancel_note_action({{ $loop->parent->index }},{{ $loop->index }})">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="bJmYpV">
                                                                        <div class="sc-bqGGPW fyoKEo"><button
                                                                                type="button"
                                                                                onclick="document.getElementsByClassName('kRvCBh')[{{ $loop->index }}].style.display='block'"
                                                                                class="sc-kEqXSa dVzWRr">
                                                                                <span class="sc-iqAclL jibPFy">
                                                                                    <svg width="1rem" height="1rem"
                                                                                        viewBox="0 0 24 24"
                                                                                        color="currentColor"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M2 6a2 2 0 0 1 2-2h10a1 1 0 1 1 0 2H4v14h13V9a1 1 0 1 1 2 0v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Z"
                                                                                            fill="currentColor"></path>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M6 9a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 13a1 1 0 0 1 1-1h7a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM6 17a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM19.5 1a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1Z"
                                                                                            fill="currentColor"></path>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M16 4.5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                                Add note...
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                @endforelse
                                                <script>
                                                    function page_cancel_note_action(pId, id) {
                                                        @this.set('page_result.' + pId + '.question.' + id + '.note', null);
                                                        document.getElementsByClassName('kRvCBh' + {{ $loop->index }})[id].style.display = 'none';
                                                    }

                                                    function page_hide_note_action(pId, id) {
                                                        document.getElementsByClassName('kRvCBh' + {{ $loop->index }})[id].style.display = 'none';
                                                    }
                                                </script>
                                            </div>
                                            <div class="eIqTdO">
                                                <button style="float: left;" type="button"
                                                    wire:click.prevent="previous_page" class="gqAxJM">
                                                    <svg viewBox="0 0 24 24" width="17" height="17"
                                                        class="button_icon" focusable="false">
                                                        <path
                                                            d="M6.367 11.181l9.52-8.866a1.323 1.323 0 0 1 1.745.028c.479.445.492 1.164.03 1.625L9.434 11.63a.509.509 0 0 0 0 .755l8.212 7.646c.461.461.448 1.18-.03 1.625a1.323 1.323 0 0 1-1.745.028l-9.504-8.85A1.123 1.123 0 0 1 6 12.007a1.12 1.12 0 0 1 .367-.827z"
                                                            fill="#ffffff" fill-rule="nonzero"></path>
                                                    </svg>
                                                    Previous Page
                                                </button>
                                                @if (count($data['pages']) > 0 && !$loop->last)
                                                    <button style="float: right;" type="button" {{-- onclick="focusOnTitlePage({{ $loop->iteration }})" --}}
                                                        wire:click.prevent="next_page" class="gIOqQk">
                                                        Next page
                                                        <svg viewBox="0 0 24 24" width="17" height="17"
                                                            class="button_icon" focusable="false"
                                                            data-anchor="arrow-right-svg">
                                                            <path
                                                                d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                                                fill="#ffffff" fill-rule="nonzero"></path>
                                                        </svg>
                                                    </button>
                                                @else
                                                    <button style="float: right;" type="button"
                                                        wire:click.prevent="export" class="gIOqQk">
                                                        Export
                                                        <svg viewBox="0 0 24 24" width="17" height="17"
                                                            class="button_icon" focusable="false"
                                                            data-anchor="arrow-right-svg">
                                                            <path
                                                                d="M17.633 11.181l-9.52-8.866a1.323 1.323 0 0 0-1.745.028 1.113 1.113 0 0 0-.03 1.625l8.228 7.663a.509.509 0 0 1 0 .755l-8.212 7.646c-.461.461-.448 1.18.03 1.625.479.446 1.25.458 1.745.028l9.504-8.85c.235-.22.368-.517.367-.827a1.12 1.12 0 0 0-.367-.827z"
                                                                fill="#ffffff" fill-rule="nonzero"></path>
                                                        </svg>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    @endif
                @endfor
                {{-- <script>
                    function focusOnTitlePage(id) {
                        const pages = document.querySelectorAll('.iAEKFw');
                        pages.forEach(function callback(value, index) {
                            value.setAttribute('class', 'iAEKFw d-none');
                            // value.setAttribute('class', 'iAEKFw');
                            // id);
                            if (index == id + 1)
                                value.removeAttribute('class', 'iAEKFw d-none');
                        });
                        // @this.set('page', id + 1);

                        // pages[id].removeAttribute('class', 'd-none');
                    }
                </script> --}}
            </div>
        </div>
    </div>
</div>
