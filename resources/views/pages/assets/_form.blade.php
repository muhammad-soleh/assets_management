<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">@yield('title_form') Assets</div>
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">

            {{-- Kolom Kiri --}}
            <div class="col-md-6">

                {{-- Category --}}
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>

                    <select id="category" name="category_id"
                        class="form-control @error('category_id') is-invalid @enderror">

                        <option value="">Select Category</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $asset->category_id ?? '') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach

                    </select>

                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Asset Code --}}
                <div class="mb-3">
                    <label for="asset_code" class="form-label">Asset Code</label>

                    <input type="text" class="form-control @error('asset_code') is-invalid @enderror" id="asset_code"
                        name="asset_code" placeholder="Add asset code here"
                        value="{{ old('asset_code', $asset->asset_code ?? '') }}">

                    @error('asset_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Asset Name --}}
                <div class="mb-3">
                    <label for="asset_name" class="form-label">Asset Name</label>

                    <input type="text" class="form-control @error('asset_name') is-invalid @enderror" id="asset_name"
                        name="asset_name" placeholder="Add asset name here"
                        value="{{ old('asset_name', $asset->asset_name ?? '') }}">

                    @error('asset_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Brand --}}
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>

                    <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand"
                        name="brand" placeholder="Add brand here" value="{{ old('brand', $asset->brand ?? '') }}">

                    @error('brand')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Model --}}
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>

                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                        name="model" placeholder="Add model here" value="{{ old('model', $asset->model ?? '') }}">

                    @error('model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

            {{-- Kolom Kanan --}}
            <div class="col-md-6">

                {{-- Unit --}}
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>

                    <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit"
                        name="unit" placeholder="Add unit here" value="{{ old('unit', $asset->unit ?? '') }}">

                    @error('unit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Minimum Stock --}}
                <div class="mb-3">
                    <label for="minimum_stock" class="form-label">Minimum Stock</label>

                    <input type="number" class="form-control @error('minimum_stock') is-invalid @enderror"
                        id="minimum_stock" name="minimum_stock" placeholder="Add minimum stock"
                        value="{{ old('minimum_stock', $asset->minimum_stock ?? '') }}">

                    @error('minimum_stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>

                    <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">

                        <option value="Active" @selected(old('status', $asset->status ?? '') == 'Active')>
                            Active
                        </option>

                        <option value="Discontinued" @selected(old('status', $asset->status ?? '') == 'Discontinued')>
                            Discontinued
                        </option>

                    </select>

                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>

                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="6" placeholder="Add description here">{{ old('description', $asset->description ?? '') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>

        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>

        <a href="{{ url('/master-assets') }}" class="btn btn-warning">
            Kembali
        </a>
    </div>

</div>
