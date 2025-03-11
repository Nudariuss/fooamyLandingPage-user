@extends('layout.master')
@section('title', 'Bantuan')
@section('content')
@include('layout.navbar')

<section class="faq-section container">
    <div class="text-start">
        <h1 class="faq-title">Kamu Kebingungan ?<br> Yuk Cari Masalah Nya Di Sini.</h1>
        <p class="faq-subtitle mt-3">Pertanyaan Yang Sering Ditanyakan</p>
    </div>

    <div class="accordion faq-accordion mt-4" id="faqAccordion">
        @foreach ($faqs as $index => $faq)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $index }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                    {{ $faq->question }}
                </button>
            </h2>
            <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    {{ $faq->answer }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('layout.download')
@include('layout.wa-icon-fixed-bottom')
@endsection
