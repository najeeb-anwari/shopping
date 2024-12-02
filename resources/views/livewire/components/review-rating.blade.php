<div>
    <div class="d-flex gap-2  justify-content-center">
        @foreach(range(1,5) as $i)
            @if($i <= $rating_average)
                
                <i class="bi bi-star-fill  text-warning"></i>
            @else
                <i class="bi bi-star  text-warning"></i>
            @endif

        @endforeach
        <span>({{ $total_reviews }})</span>
    </div>
</div>
