@props(['employer', 'width' => 90])

@if($employer->logo && file_exists(public_path($employer->logo)))
<img src="{{ asset($employer->logo) }}" alt="{{ $employer->name }}" class="rounded-xl" width="{{ $width }}">
@else
<img src="https://ui-avatars.com/api/?name={{ urlencode($employer->name) }}&size={{ $width }}&background=random&rounded=true"
    alt="{{ $employer->name }}" class="rounded-xl" width="{{ $width }}">
@endif