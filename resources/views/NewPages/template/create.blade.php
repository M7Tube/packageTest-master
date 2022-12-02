@extends('layouts.create-template-navbar')
@section('body')
    @if ($new_template == 1 || request('new_template') == 1)
        <div id="myDiv" style="display: none;">
            <div class="hgfTTj">
                <nav class="cSQsdR">
                    <div class="gZDClP">
                        <a href="{{ route('index.template') }}" class="jvZSBO ldzCUn">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="#1f2533" focusable="false">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                            </svg>
                        </a>
                        <div class="jdIrDI">
                            <div>
                                <div class="ijlOct kLHZgE">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gZDClP kSQegF">
                        <a class="{{ request()->routeIs('create.template') ? 'ispaZE' : 'cwqemj' }}"
                            href="{{ route('create.template') }}">
                            <span>
                                Build
                            </span>
                        </a>
                        <div class="bMyjvq">
                            <a class="{{ request()->routeIs('preview.template') ? 'ispaZE' : 'cwqemj' }}"
                                href="{{ route('preview.template', request()->query('template_id') ?? request('template_id')) }}">
                                <span>
                                    Preview
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="gZDClP kFKVjj">
                        <div class="jzVVFK"></div>
                        <div class="bzDJqY"></div>
                    </div>
                </nav>
                @livewire('template.new-create')
            </div>
        </div>
    @else
        <div id="root">
            <div id="app-container" class="gtvfKz">
                <div class="brCoKm">
                    <div style="margin-top: 100px;">
                        <div class="cQllaj">
                            <div class="gBxdyU">
                                <div class="dyTSdm">
                                    <a class="cXeMab mx-1" href="{{ route('create.template', ['new_template' => 1]) }}"
                                        style="text-decoration: none;">
                                        <svg id="create_new_template_icon" viewBox="0 0 386.ؤمث01 386.01" width="48"
                                            height="48" focusable="false">
                                            <path class="st0"
                                                d="M193 347.37c-14.05 0-25.43-11.39-25.43-25.43V64.06c0-14.05 11.39-25.43 25.43-25.43 14.05 0 25.43 11.39 25.43 25.43v257.88c0 14.05-11.38 25.43-25.43 25.43z"
                                                fill="#6659FF"></path>
                                            <path class="st0"
                                                d="M38.63 193c0-14.05 11.39-25.43 25.43-25.43h257.88c14.05 0 25.43 11.39 25.43 25.43 0 14.05-11.39 25.43-25.43 25.43H64.06c-14.04 0-25.43-11.38-25.43-25.43z"
                                                fill="#6659FF"></path>
                                        </svg>
                                        <div class="icALmG">Blank template</div>
                                    </a>
                                    <a class="QDVsG mx-1" href="{{ route('create.template', ['new_template' => 1]) }}"
                                        style="text-decoration: none;">
                                        <div class="etYWGL kqBtwD">
                                            <div class="cXeMab">
                                                <svg width="48" height="48" viewBox="0 0 24 24">
                                                    <g id="icons/nav/templates" stroke="none" stroke-width="1"
                                                        fill="none" fill-rule="evenodd" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M15.9130435,4.42105263 L15.9130435,19.5789474"
                                                            id="Path" stroke="#4740d4" stroke-width="2"></path>
                                                        <path d="M3.39130435,9.47368421 L15.9130435,9.47368421"
                                                            id="Path" stroke="#4740d4" stroke-width="2"></path>
                                                        <path d="M3.39130435,14.5263158 L15.9130435,14.5263158"
                                                            id="Path" stroke="#4740d4" stroke-width="2"></path>
                                                        <rect id="Rectangle" stroke="#4740d4" stroke-width="2"
                                                            x="3.39130435" y="4.42105263" width="17.2173913"
                                                            height="15.1578947" rx="2"></rect>
                                                    </g>
                                                </svg>
                                                <div class="icALmG">
                                                    Continue editing last template
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('script')
    <script>
        const dragArea = document.querySelector(".wrapper");
        new Sortable(dragArea, {
            onEnd: function(evt) {
                Livewire.emit('change_active_one', evt.newIndex);
                Livewire.emit('changeindex', evt.oldIndex, evt.newIndex);
            },
            animation: 350,
            filter: ".last-section",
            draggable: ".dragable",
            handle: ".drag-icon",
            dragClass: "sortable-chosen",
            ghostClass: "sortable-chosen",
            chosenClass: "sortable-chosen",
        });
        const dragArea2 = document.querySelector(".multible_choise_wrapper");
        new Sortable(dragArea2, {
            onEnd: function(evt) {
                // Livewire.emit('change_active_one', evt.newIndex);
                Livewire.emit('multiple_choise_changeindex', evt.oldIndex, evt.newIndex);
            },
            animation: 350,
            filter: ".last-section",
            draggable: ".dragable",
            handle: ".drag-icon",
            dragClass: "sortable-chosen",
            ghostClass: "sortable-chosen",
            chosenClass: "sortable-chosen",
        });
    </script>
@endsection
