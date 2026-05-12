<div class="container" style="max-width:700px; margin:auto;">

    <h2 style="margin-bottom:20px;">Expo Participation Form</h2>

    @if (session()->has('success'))
        <div style="color:green; margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="enter your phone" wire:model.lazy="phone">
            @error('phone') <span style="color:red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" wire:model.lazy="email">
            @error('email') <span style="color:red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name" wire:model.lazy="name">
            @error('name') <span style="color:red;">{{ $message }}</span> @enderror
        </div>

        <button class="form-control btn btn-primary btn-sm">Submit</button>
    </form>

    
</div>