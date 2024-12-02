<div>
    <div class="col-lg-6">
        <div class="card ">
            <div class="card-header">
                <div class="card-title"><strong>Add</strong> Specification</div>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-lg-6">
                        <label class="form-label" for="brand">Brand</label>
                        <input wire:model="specification.brand" type="text" class="form-control @error('specification.brand') is-invalid   @enderror" id="brand">
                        @error('specification.brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="model">Model</label>
                        <input wire:model="specification.model" type="text" class="form-control @error('specification.model') is-invalid   @enderror" id="model">
                        @error('specification.model')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="type">type</label>
                        <input wire:model="specification.type" type="text" class="form-control @error('specification.type') is-invalid   @enderror" id="type">
                        @error('specification.type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>

                    
                </div>
            </div>
            <div class="card-footer">
                <button wire:click="addSpecification" class="btn btn-sm btn-primary">Add Specification</button>
            </div>
        </div>
    </div>
    
        
    


</div>
