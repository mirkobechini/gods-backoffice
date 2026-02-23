@props(['god'])


@php
    $imagePath = 'storage/';
    if (!file_exists(public_path($imagePath . $god->image)) || !is_file(public_path($imagePath . $god->image))) {
        $god->image = 'gods-thumb/default.png';
    }
    $imagePath . $god->image;
@endphp


<a class="text-decoration-none text-dark" href="{{ route('gods.show', $god) }}">

    <div class="card h-100" style="width: 100%">

        <div class="card-img-top align-self-middle" style="aspect-ratio: 1 / 1; overflow: hidden;">
            <img class="img-fluid zoom-hover" style="width: 100%; height: 100%; object-fit: cover; object-position: center;" src="{{ asset($imagePath . $god->image) }}" alt="{{ $god->name }}">
        </div>

        <div class="card-body">
            <div class="row">
                <span><strong>{{ $god->name }}</strong> - {{ $god->title }}</span>
                <div class="mt-2">
                    @foreach ($god->domains as $domain)
                        <a href="{{ route('domains.show', $domain) }}"><i class="{{ $domain->icon }} zoom-hover domain-badge-icon"
                                style="color: {{ $domain->color }};"></i></a>
                    @endforeach
                    </span>
                </div>
            </div>
        </div>
    </div>
</a>
