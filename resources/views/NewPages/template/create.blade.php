@extends('layouts.create-template-navbar')
@section('body')
    <div id="myDiv" style="display: none;">
        <div class="hgfTTj sticky-top">
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
                        {{-- href="{{ route('create.template') }}" --}}
                        >
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
                {{-- <div class="gZDClP kFKVjj">
                    <div class="jzVVFK"></div>
                    <div class="bzDJqY"></div>
                </div> --}}
                <div class="ePvnVu hqxmFH">
                    <div class="jzVVFK"></div>
                    <div class="bzDJqY"></div>
                    <div class="fFYwLD">
                        <span class="badge text-bg-light" id="saving" style="display: none;">
                            Saving...
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    var x = document.getElementById("saving");
                    document.addEventListener('updatedstart', () => {
                        x.style.display = "flex";
                        setTimeout(delayFunction, 1000);
                    });

                    function delayFunction() {
                        x.style.display = "none";
                    }
                </script>
            </nav>
        </div>
        @livewire('template.new-create')
    </div>
@endsection
@section('script')
    <script>
        function remove_layout(id) {
            $("#t"+id).on("click", function(event) {
                $("#t"+id).removeClass("d-block");
                $("#t"+id).addClass("d-none");
                // $("#clients-edit-wrapper").remove();
                // event.preventDefault();
            });
        }
        function section_remove_layout(question_id) {
            $("#s"+question_id).on("click", function(event) {
                $("#s"+question_id).removeClass("d-block");
                $("#s"+question_id).addClass("d-none");
                // $("#clients-edit-wrapper").remove();
                // event.preventDefault();
            });
        }
    </script>
    <script>
        function section_hide_control(id) {
            const questions=document.getElementById("section"+id);
            const hide=document.getElementById("hide"+id);
            const un_hide=document.getElementById("un_hide"+id);
            const drag_icon=document.getElementById("drag_icon"+id);
            if(hide.style.display=='block'){
                hide.style.display="none";
                un_hide.style.display="block";
                questions.style.display="none";
                drag_icon.style.display="flex";
            }else if(hide.style.display=='none'){
                hide.style.display="block";
                un_hide.style.display="none";
                questions.style.display="block";
                drag_icon.style.display="none";
            }
        }
    </script>
    <script>
        const dragArea = document.querySelector(".wrapper");
        new Sortable(dragArea, {
            onEnd: function(evt) {
                // Livewire.emit('change_active_one', evt.newIndex);
                Livewire.emit('changeindex', evt.oldDraggableIndex, evt.newDraggableIndex);
            },
            animation: 350,
            filter: ".last-section",
            draggable: ".dragable",
            handle: ".drag-icon",
            // dragClass: "sortable-chosen",
            // ghostClass: "sortable-chosen",
            // chosenClass: "sortable-chosen",
        });

        // const dragArea2 = document.querySelector(".multible_choise_wrapper");
        // new Sortable(dragArea2, {
        //     onEnd: function(evt) {
        //         // Livewire.emit('change_active_one', evt.newIndex);
        //         Livewire.emit('multiple_choise_changeindex', evt.oldIndex, evt.newIndex);
        //     },
        //     animation: 350,
        //     filter: ".last-section",
        //     draggable: ".dragable",
        //     handle: ".drag-icon",
        //     // dragClass: "sortable-chosen",
        //     // ghostClass: "sortable-chosen",
        //     // chosenClass: "sortable-chosen",
        // });
    </script>
    <script>
        const spcial_dragArea = document.querySelector(".add_response_multible_choise_wrapper");
        new Sortable(spcial_dragArea, {
            onEnd: function(evt) {
                // Livewire.emit('change_active_one', evt.newIndex);
                Livewire.emit('multiple_choise_changeindex', evt.oldIndex, evt.newIndex);
            },
            animation: 350,
            filter: ".last-section",
            draggable: ".dragable",
            handle: ".drag-icon",
            // dragClass: "sortable-chosen",
            // ghostClass: "sortable-chosen",
            // chosenClass: "sortable-chosen",
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endsection
