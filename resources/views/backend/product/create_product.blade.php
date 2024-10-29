@extends('backend.master')

@section('style')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <style>
        label.form-label.w-full {
            width: 100%;
            /* background: aqua; */
            height: 120px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dotted #a7a7a7;
            cursor: pointer;
        }

        label.form-label.w-full:hover {
            background: #d1d0d0b5;
            transition-duration: 0.200s;
            transition-timing-function: ease-in-out;
        }

        .contentFit {
            height: fit-content;
        }
    </style>
@endsection

@section('content')
    <section class="content-main">
        @if (session('succ'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ session('succ') }}</li>
                </ul>
            </div>
        @endif
        @if (session('err'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ session('err') }}</li>
                </ul>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $key => $error)
                        <li>{{ $key . '.' . $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- button --}}
                <div class="col-12">
                    <div class="content-header">
                        <h2 class="content-title">Add Landing Page Details</h2>
                        {{-- <div>
                            <a class="btn btn-md btn-primary mr-5 font-sm hover-up"
                                href="{{ route('product.index') }}">Product list</a>
                            <button type="submit" name="btn" value="deactive"
                                class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button type="submit" name="btn" value="active"
                                class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div> --}}
                    </div>
                </div>

                <div class="row">
                    {{-- Left --}}
                    <div class="col-lg-12">
                        {{-- Basic --}}
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Basic</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        {{-- <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Select A Category</label>
                                                <select class="form-select @error('category_id') is-invalid @enderror"
                                                    name="category_id">
                                                    <option value="">Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Product Name</label>
                                                <input type="text" placeholder="Entire Name" required
                                                    class="form-control @error('product_name') is-invalid @enderror"
                                                    name="product_name" value="{{ $product?->name ? $product->name : old('product_name') }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">Stars Rating (0-100)</label>
                                                <input type="number" placeholder="90" required
                                                    class="form-control " name="stars_rating"
                                                    value="{{ $product?->star_rating ? $product->star_rating : old('stars_rating') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">Review Count</label>
                                                <input type="number" placeholder="10" required
                                                    class="form-control " name="review_count"
                                                    value="{{ $product?->review_count ? $product->review_count : old('review_count') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">Before Price</label>
                                                <input type="number" placeholder="100"
                                                    class="form-control " name="before_price"
                                                    value="{{ $product?->before_price ? $product->before_price : old('before_price') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">After Price</label>
                                                <input type="number" placeholder="90" required
                                                    class="form-control " name="after_price"
                                                    value="{{ $product?->after_price ? $product->after_price : old('after_price') }}">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">SKU</label>
                                                <input type="text" placeholder="Stock-keeping unit"
                                                    class="form-control @error('sku') is-invalid @enderror" name="sku"
                                                    value="{{ old('sku') }}">
                                            </div>
                                        </div> --}}

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Short Description</label>
                                                <textarea required class="form-control  @error('short_description') is-invalid @enderror" name="short_description" id=""
                                                    cols="30" rows="10" placeholder="Short details"> {{ $product?->short_description ? $product->short_description : old('short_description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">Tags</label>
                                                <input type="text" placeholder="Cloth, Women, Dress" required
                                                    class="form-control " name="tags"
                                                    value="{{ $product?->tags ? $product->tags : old('tags') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">In Stock</label>
                                                <input type="number" placeholder="10" required
                                                    class="form-control " name="stock"
                                                    value="{{ $product?->in_stock ? $product->in_stock : old('stock') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <label for="sku" class="form-label">Shipping Charge</label>
                                                <input type="number" placeholder="10" required
                                                    class="form-control " name="shipping_charge"
                                                    value="{{ $product?->shipping_charge ? $product->shipping_charge : old('shipping_charge') }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="product_name"
                                                    class="form-label @error('description') text-danger @enderror">Description
                                                    @error('description')
                                                        is *
                                                    @enderror
                                                </label>
                                                <textarea  id="description" class="form-control" name="description" cols="30" rows="10"
                                                    placeholder="Short details">{{ $product?->description ? $product->description : old('description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label for="product_name"
                                                    class="form-label @error('description') text-danger @enderror">Additional
                                                    Information
                                                </label>
                                                <textarea id="additional_info" class="form-control" name="additional_info" cols="30" rows="10"
                                                    placeholder="Additional information">{{ $product?->additional_info ? $product->additional_info : old('additional_info') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
@endsection


@section('script')
    <script>
        // Description editor with all features (including image and video)
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error('There was an error initializing the description editor:', error);
            });

        // Additional Info editor without image and video upload
        ClassicEditor
            .create(document.querySelector('#additional_info'), {
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'heading', '|', 'bold', 'italic', 'link',
                        'blockQuote', 'insertTable', 'numberedList', 'bulletedList',
                        'outdent', 'indent', 'alignment', '|', 'removeFormat'
                    ]
                }
            })
            .catch(error => {
                console.error('There was an error initializing the additional_info editor:', error);
            });
    </script>
    <script>
        let valueOfVariant = 0; // Declare properly using let

        document.getElementById('addVariant').addEventListener('click', function() {
            // Clone the first accordion item
            const firstAccordionItem = document.querySelector('.accordion-item');
            const clonedAccordionItem = firstAccordionItem.cloneNode(true);

            // Update accordion header and body IDs and text
            const accordionHeader = clonedAccordionItem.querySelector('.accordion-header');
            const accordionCollapse = clonedAccordionItem.querySelector('.accordion-collapse');
            const headingId = 'heading' + (valueOfVariant + 1); // Concatenate number properly
            const collapseId = 'collapse' + (valueOfVariant + 1); // Concatenate number properly
            const button = accordionHeader.querySelector('button');

            accordionHeader.id = headingId;
            accordionHeader.setAttribute('aria-labelledby', headingId);
            accordionHeader.querySelector('button').textContent = 'Attributes #' + (valueOfVariant +
                1); // Concatenate number properly
            button.setAttribute('data-bs-target', '#' + collapseId); // Include '#' in data-bs-target
            button.setAttribute('aria-controls', collapseId);

            accordionCollapse.id = collapseId;
            accordionCollapse.setAttribute('aria-labelledby', headingId);
            accordionCollapse.classList.remove('show');

            // Append the cloned accordion item to the accordion
            document.getElementById('accordionExample').appendChild(clonedAccordionItem);

            valueOfVariant++;

            if (document.querySelectorAll('.accordion-item').length > 1) {
                const deleteButton = document.createElement('button');
                deleteButton.classList.add('btn', 'btn-danger', 'btn-sm', 'delete-btn', 'contentFit');
                deleteButton.type = 'button';
                deleteButton.type = 'button';
                deleteButton.textContent = 'Delete';
                deleteButton.addEventListener('click', function() {
                    // Find the parent accordion item
                    const accordionItem = deleteButton.closest('.accordion-item');
                    // Remove the accordion item from the DOM
                    accordionItem.remove();
                });
                accordionHeader.appendChild(deleteButton);
            }
        });
    </script>
@endsection
