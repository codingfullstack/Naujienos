<div>
    @foreach ($comments as $item)
    <h5>Email: {{ $item->email }}</h5>
    <div class="bg-gray-200 p-2">
        <p>{{ $item->text }}</p>
    </div>
    @endforeach
</div>
