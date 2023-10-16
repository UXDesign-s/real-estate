@extends('layouts.app')
@section('content')

<div class="faqMain pt-5">
<h2><strong>Help and FAQ's</strong></h2>
<p>If you have a question or want to find out a little more about our service, our collection of frequently asked questions should help.</p>
</div>

<div class="browseQue mb-5">
    <div class="row justify-content-start">
        <div class="col-md-4">
            <img src="{{ asset('images/files.png') }}" alt="">
            <p>Selling Your Car</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/edit.png') }}" alt="">
            <p>Making an Appointment</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/book.png') }}" alt="">
            <p>What Car we Buy</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/paper.png') }}" alt="">
            <p>Documentation</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/text.png') }}" alt="">
            <p>Miscellaneous</p>
        </div>
    </div>
</div>


{{-- FAQ's --}}

<div class="container faq">
    <h1 class="text-center mb-4">Frequently Asked Questions</h1>

    <div class="accordion" id="faqAccordion">
        <!-- FAQ Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Q: Where is my local branch?
                </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, obcaecati. Enim, non! Vitae,
                    consectetur, quibusdam officiis, accusamus sit cum rerum dignissimos culpa molestiae ea porro est
                    repudiandae excepturi quidem voluptatibus nesciunt.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                        Q: How do I get a valuation?
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, obcaecati. Enim, non! Vitae,
                        consectetur, quibusdam officiis, accusamus sit cum rerum dignissimos culpa molestiae ea porro
                        est repudiandae excepturi quidem voluptatibus nesciunt.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                        Q: Do I have to book an appointment before visiting a branch?
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, obcaecati. Enim, non! Vitae,
                        consectetur, quibusdam officiis, accusamus sit cum rerum dignissimos culpa molestiae ea porro
                        est repudiandae excepturi quidem voluptatibus nesciunt.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                        Q: Will you collect my car?
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, obcaecati. Enim, non! Vitae,
                        consectetur, quibusdam officiis, accusamus sit cum rerum dignissimos culpa molestiae ea porro
                        est repudiandae excepturi quidem voluptatibus nesciunt.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                        Q: Is there a transaction fee?
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, obcaecati. Enim, non! Vitae,
                        consectetur, quibusdam officiis, accusamus sit cum rerum dignissimos culpa molestiae ea porro
                        est repudiandae excepturi quidem voluptatibus nesciunt.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



{{-- FAQ'S ENDS --}}

<div class="cantFInd">
    <h4 class="text-center mb-5">Can't find answer to your question? Visit <a href="{{route ('contact') }}">Contact Us</a></h4>
</div>

@endsection