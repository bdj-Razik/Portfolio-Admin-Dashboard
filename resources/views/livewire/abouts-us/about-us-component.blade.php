<div>
    <form wire:submit.prevent='update' enctype="multipart/form-data">


        <div class="form-row">

            <div class="col-12 mb-3">
                <label for="title" class="form-label">Title<span class="text-danger">&nbsp;*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    wire:model='title' required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name<span class="text-danger">&nbsp;*</span></label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                    wire:model='first_name' required>
                @error('first_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name<span class="text-danger">&nbsp;*</span></label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                    wire:model='last_name' required>
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-6 mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">&nbsp;*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    wire:model='email' required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="phone" class="form-label">Phone<span class="text-danger">&nbsp;*</span></label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    wire:model='phone' required>
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
                <input type="text" class="form-control @error('github') is-invalid @enderror" name="github"
                    wire:model='github'>
                @error('github')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                    wire:model='linkedin'>
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
                <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                    wire:model='facebook'>
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                    wire:model='twitter'>
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>



        <div class="form-row">

            <div class="form-group col-md-6 mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                    wire:model='instagram'>
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-md-6 mb-3">
                <label for="dribbble" class="form-label">Dribbble</label>
                <input type="text" class="form-control @error('dribbble') is-invalid @enderror" name="dribbble"
                    wire:model='dribbble'>
                @error('dribbble')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>



        <div class="form-row">

            <div class="form-group col-12 mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                    wire:model='adresse'>
                @error('adresse')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    wire:model='description'></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>


        <div class="row">
            <div class="col-12 my-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="cv">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('cv') is-invalid @enderror"
                            aria-describedby="cv" name="cv" wire:model='cv'>
                        <label class="custom-file-label" for="cv">Choose file (CV)</label>
                    </div>
                </div>

                <x-layout.loader target='cv' />

                @error('cv')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>






        <div class="row">
            <div class="col-12 my-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="logo">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('logo') is-invalid @enderror"
                            aria-describedby="logo" name="logo" wire:model='logo'>
                        <label class="custom-file-label" for="logo">Choose file (Logo)</label>
                    </div>
                </div>

                <x-layout.loader target='logo' />

                @error('logo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>

        <div class="row col-12 my-4 ">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>



    </form>
</div>
