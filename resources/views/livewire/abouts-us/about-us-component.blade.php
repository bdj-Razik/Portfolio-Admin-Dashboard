<div>
    <form wire:submit.prevent='update'>


        <div class="form-row">

            <div class="col-12 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title')  is-invalid  @enderror" id="title"
                    name="title" wire:model='title' required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control @error('first_name')  is-invalid  @enderror" id="first_name"
                    name="first_name" wire:model='first_name' required>
                @error('first_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control @error('last_name')  is-invalid  @enderror" id="last_name"
                    name="last_name" wire:model='last_name' required>
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email')  is-invalid  @enderror" id="email"
                    name="email" wire:model='email' required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone')  is-invalid  @enderror" id="phone"
                    name="phone" wire:model='phone' required>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-6 mb-3">
                <label for="github" class="form-label">Github</label>
                <input type="text" class="form-control @error('github')  is-invalid  @enderror" id="github"
                    name="github" wire:model='github' required>
                @error('github')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text" class="form-control @error('phone')  is-invalid  @enderror" id="linkedin"
                    name="linkedin" wire:model='linkedin' required>
                @error('linkedin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-6 mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control @error('facebook')  is-invalid  @enderror" id="facebook"
                    name="facebook" wire:model='facebook' required>
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" class="form-control @error('phone')  is-invalid  @enderror" id="twitter"
                    name="twitter" wire:model='twitter' required>
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>







        <div class="form-row">

            <div class="form-group col-12 mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control @error('adresse')  is-invalid  @enderror" id="adresse"
                    name="adresse" wire:model='adresse' required>
                @error('adresse')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description @error('description')  is-invalid  @enderror" name="description"
                    wire:model='description'></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="row col-12 my-4">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>



    </form>
</div>
