<div>
    @foreach($reviews as $review)
    <div class="list-group list-group-flush mb-4">
        <div class="list-group-item d-flex px-0">
            <div class="avatar flex-shrink-0 me-3">
                <img src="{{ $review->user->profile_photo_url }}" class="rounded-circle">
            </div>
            <div>
                <h5 class="mb-1">{{ $review->user->name }}</h5>
                <div class="d-flex gap-2 mb-3">
                    @foreach(range(1,5) as $i)
                        @if($i <= $review->rating)
                            
                            <i class="bi bi-star-fill text-warning"></i>
                        @else
                            <i class="bi bi-star-fill text-muted"></i>
                        @endif

                    @endforeach
                </div>
                <div>{{ $review->comment }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>