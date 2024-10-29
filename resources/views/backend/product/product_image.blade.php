@extends('backend.master')

@section('style')

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
        .masonry {
        column-count: 4;
        column-gap: 1rem;
    }
    .item {
        break-inside: avoid;
    }
    .icons{
        position: absolute;
        margin-top: -39px;
    }
   .icons a {
        display: inline-block;
        margin: 0 10px;
        color: #fff; /* White color for the icons */
        font-size: 11px; /* Icon size */
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
        padding: 7px;
        border-radius: 50%;
    }
    .icons a:hover{
        color: red;
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

                @csrf
                {{-- button --}}
                <div class="col-12">
                    <div class="content-header">
                        <h2 class="content-title"> Product Gallery</h2>
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
                    <div class="col-md-12">
                        {{-- Basic --}}
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Product Image</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('product_image_upload') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-upload mb-4">
                                            <img src=" {{ asset('backend/assets/imgs/theme/upload.svg') }}" alt="">
                                            <input class="form-control" type="file" name="images[]" multiple
                                            accept="image/*">
                                            <button type="submit" class="btn btn-primary mt-3" >Upload</button>
                                        </div>
                                    </form>
                                    <div class="masonry">
                                        @foreach($product_images as $image)
                                        <div class="item mb-4">
                                            <img src="{{ asset('files/product/'.$image->image) }}" class="img-fluid rounded shadow-sm " alt="Prescription Image">
                                            <div class="icons">
                                                <a href="{{ route('product_image_delete', $image->id) }}" class=" " title="Delete">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach



                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4>Product Reviews</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('product_review_image_upload') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-upload mb-4">
                                            <img src=" {{ asset('backend/assets/imgs/theme/upload.svg') }}" alt="">
                                            <input class="form-control" type="file" name="review_images[]" multiple
                                                accept="image/*">
                                                <button type="submit" class="btn btn-primary mt-3" >Upload</button>
                                        </div>
                                    </form>
                                    <div class="masonry">
                                    @foreach($review_images as $image)
                                        <div class="item mb-4">
                                            <img src="{{ asset('files/product/'.$image->image) }}" class="img-fluid rounded shadow-sm " alt="Prescription Image">
                                            <div class="icons">
                                                <a href="{{ route('product_image_delete', $image->id) }}" class=" " title="Delete">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                    </div>
                                </div>
                            </div> <!-- card end// -->
                        </div>

                        {{-- SEO --}}

                    </div>


                    {{-- Right --}}

                </div>


        </div>
    </section>
@endsection


@section('script')
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
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
