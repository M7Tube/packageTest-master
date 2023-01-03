@extends('layouts.create-template-navbar')
@section('body')
    <div id="myDiv" style="display: none;">
        
        @livewire('template.new-create')
    </div>
@endsection
@section('script')
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
@endsection
