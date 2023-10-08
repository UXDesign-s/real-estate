<div class="col-md-6">
    <div class="sectionInput d-flex">
        <form wire:submit.prevent="submit">

            <h2><span class="green">30 second car</span> valuation</h2>
            <input type="text" wire:model="houseNo" placeholder="Enter Your House number">
            @error('houseNo')
                <span class="error">{{ $message }}</span>
            @enderror
            <input type="text" wire:model="postCode" placeholder="Postcode">
            @error('postCode')
                <span class="error">{{ $message }}</span>
            @enderror
            {{-- <a href="{{ route('check-registration') }}"> --}}
                <input type="submit" value="Submit">
            {{-- </a> --}}
            <p>Excellent 207,415 reviews on <i class="fa fa-star" aria-hidden="true"></i> Trustpilot </p>
        </form>
    </div>
</div>
