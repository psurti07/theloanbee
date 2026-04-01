@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--green-100 bg--scroll">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12 text-center">
                    <div class="txt-block left-column">
                        <span class="section-id"></span>
                        <h2 class="w-700">Frequently Asked <span class="color--green-500">Questions</span></h2>
                        <p class="p-md w-400">
                            It's our fundamental trait to be transparent with our customers!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="py-80 faqs-section">
    <div class="container">
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">1. For what purposes can a personal loan be used?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>A personal loan can be used for various personal financial needs, including medical emergencies, education expenses, home renovation, or consolidating existing debts.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">2. What are the eligibility criteria for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The basic eligibility requirements are as follows:</p>
                                            <p><strong>For Salaried Professionals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Minimum Salary: ₹15,000 per month (must reflect in the bank statement)</p>
                                                <p>&bull; Minimum Job duration: 1 year</p>
                                            </div>
                                            <p><strong>For Self-Employed Individuals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Minimum 1 year of Income Tax Return (ITR)</p>
                                                <p>&bull; Minimum 1 year into business</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">3. What documents are required to apply for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The commonly required documents include:</p>
                                            <p><strong>For Salaried:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills </p>
                                                <p>&bull; Bank Statement</p>
                                                <p>&bull; Income Proof: Salary Slips or Form 16</p>
                                            </div>
                                            <p><strong>For Self-Employed:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement</p>
                                                <p>&bull; Balance Sheet</p>
                                                <p>&bull; Income Computation</p>
                                                <p>&bull; Service Tax Registration, License, Registration Certificate</p>
                                                <p>&bull; Income Tax Returns</p>
                                            </div>
                                            <p>Please Note: Depending on the applicant’s profile and the lender’s guidelines, additional documents may be requested.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">4. How can I improve my chances of getting a personal loan approved?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                Maintaining a strong credit score, ensuring a stable source of income, and submitting accurate and complete documentation can help improve the chances of approval.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">5. Besides credit score, what other factors do lenders evaluate?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Apart from the credit score, lenders also assess factors such as the applicant’s age, income level, and employment or business stability.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush