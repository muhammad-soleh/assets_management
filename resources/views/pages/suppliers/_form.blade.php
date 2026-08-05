<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">@yield('title_form') Suppliers</div>
    </div>

    <div class="card-body">

        <div class="mb-3">
            <label for="name" class="form-label">Supplier Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $supplier->name ?? '') }}">

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contact_person" class="form-label">Contact Person</label>
            <input type="text" class="form-control @error('contact_person') is-invalid @enderror" id="contact_person"
                name="contact_person" value="{{ old('contact_person', $supplier->contact_person ?? '') }}">

            @error('contact_person')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" placeholder="Add address here" style="height: 6rem" name="address">{{ old('address', $supplier->address ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email', $supplier->email ?? '') }}">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                name="phone" value="{{ old('phone', $supplier->phone ?? '') }}">

            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>




    </div>

</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/suppliers" class="btn btn-warning">Kembali</a>
</div>
