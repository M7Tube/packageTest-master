@extends('layouts.create-template-navbar')
@section('body')
    @livewire('template.new-create')
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
