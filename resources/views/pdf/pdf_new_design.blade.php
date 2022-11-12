@forelse ($data as $record)
    {{ $record['title'] ?? '' }}<br />
    {{ $record['note'] ?? '' }}
@empty
@endforelse
