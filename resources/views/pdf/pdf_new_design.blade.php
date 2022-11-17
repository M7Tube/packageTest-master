@if ($data['title_page'])
    @forelse ($data['title_page'] as $record)
        {{ $record['value'] }} <br />
        {{-- @forelse ($one as $lastloop)
                {{ $lastloop }}

            @empty
            @endforelse --}}

    @empty
    @endforelse
@endif
@if ($data['pages'])
    @forelse ($data['pages'] as $record)
        @forelse ($record['question'] as $one)
            {{ $one['value'] }} <br />
            {{-- @forelse ($one as $lastloop)
                {{ $lastloop }}

            @empty
            @endforelse --}}

        @empty
        @endforelse
    @empty
    @endforelse
@endif
