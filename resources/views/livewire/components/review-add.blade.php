<div>
    <form wire:ignore wire:submit.prevent="addReview">
    <div class="mb-3">
        <label class="form-label">Comment:</label>
        <textarea wire:model="review.comment" rows="3" class="form-control"
            placeholder="Your opinion on the product"></textarea>
    </div>
    <div class="mb-3 customer-ratings">
        <input  wire:model="review.rating" type="radio" value="1" id="review1" hidden>
        <label data-key="1" class="bi bi-star text-warning  icon-lg" for="review1"></label>
        <input  wire:model="review.rating" type="radio" value="2" id="review2" hidden>
        <label data-key="2" class="bi bi-star text-warning icon-lg" for="review2"></label>
        <input  wire:model="review.rating" type="radio" value="3" id="review3" hidden>
        <label data-key="3" class="bi bi-star text-warning icon-lg" for="review3"></label>
        <input  wire:model="review.rating" type="radio" value="4" id="review4" hidden>
        <label data-key="4" class="bi bi-star text-warning icon-lg" for="review4"></label>
        <input  wire:model="review.rating" type="radio" value="5" id="review5" hidden>
        <label data-key="5" class="bi bi-star text-warning icon-lg" for="review5"></label>
    </div>
    <button class="btn btn-primary mt-3" type="submit" id="button-addon2">Send
        Review</button>
    </form>

</div>

@push('scripts')
<script>
    let stars = document.querySelector(`.customer-ratings`);
    stars.addEventListener('click',(e)=> {
        if(e.target.nodeName == "LABEL"){
            let selectedStar = e.target.getAttribute('data-key');
            let selected = stars.querySelectorAll(`label`);
            selected.forEach((element, index) => {
                if(index + 1 <= selectedStar) {
                    element.classList.remove('bi-star');
                    element.classList.add('bi-star-fill');
                }
                else if(index + 1 > selectedStar) {
                    element.classList.remove('bi-star-fill');
                    element.classList.add('bi-star');
                }
            });
            
        }
    });

</script>
@endpush