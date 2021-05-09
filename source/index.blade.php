@extends('_layouts.master')

@section('body')

<home-hero></home-hero>

<section class="origin" id="origin">
    <div class="origin__inner wrapper come-in">
        <div class="origin__col" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
            <div class="origin__image">
                <img loading="lazy" src="/assets/img/home-hero.jpeg" alt="background" />
            </div>
        </div>
        <div class="origin__col" data-aos="fade-down" data-aos-delay="0" data-aos-duration="1000">
            <div class="origin__info">
                <div class="origin__pull">
                    <p class="origin__sub">MARKABLE</p>
                    <h2 class="origin__title">What We Do</h2>
                    <p class="origin__content">
                        Markable creates custom websites with personal web design and development. We specialize in creating custom websites for our clients needs.
                    </p>
                </div>
                <div class="origin__tabbed">
                    <div class="origin__head">
                        <button class="origin__head__tab active js-origin__head__tab" data-item="first">Web Development</button>
                        <button class="origin__head__tab js-origin__head__tab" data-item="second">Client Assisting</button>
                    </div>
                    <div class="origin__tab js-origin__tab active" id="first">
                        <p>We create custom websites for our clients needs. If you are in need for just a simple one page website or are looking for something a little bit bigger to help drive in customers for your business then Markable is for you.</p>
                    </div>
                    <div class="origin__tab js-origin__tab" id="second">
                        <p>With technology changing everyday it can be hard to keep up. Markable is here to help guide you down the road.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-cover bg-no-repeat w-full" style="background-image: url(/assets/img/background-pattern-two.svg);">
    <div class="flex flex-wrap md:w-9/10 w-full mx-auto md:pb-32 pt-0 pt-16">
        <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1500" class="md:w-1/2 w-9/10 mx-auto md:w-full pb-8 relative">
            <h2 class="text-mainPurple">Reach Out!</h2>
            <p class="text-mainPurple max-w-9/10 mt-4">Even if you just have questions, feel free to reach out and our team will connect with you. We will work with you to find out your best path!</p>
            <p class="text-mainPurple max-w-9/10 mt-8">If you prefer a direct line to us, feel free to reach out with a phone call or a direct email.</p>

            <div class="flex items-center mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#282651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <a href="tel:7856141661" class="text-darkPurple ml-4">(785) 614-1661</a>
            </div>

            <div class="flex items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#282651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <a href="mailto:jamesmmatt@gmail.com" class="text-darkPurple ml-4">jamesmmatt@gmail.com</a>
            </div>

            <img class="h-48 rounded-full mt-24" src="/assets/img/markable-logo.svg" alt="{{ $page->siteName }} logo" />

        </div>

        <div data-aos="fade-down" data-aos-delay="0" data-aos-duration="1500" class="md:w-1/2 w-full border-8 p-8 pt-12 border-mainBlue bg-mainPurple">
            <div id="contact-us">
                <h2 class="text-white mx-0 md:mx-4">Interested in working with us?</h2>
                <h4 class="text-white mx-0 md:mx-4">Fill out the form below to reach out!</h4>

                <form action="https://getform.io/f/0ba3603d-b4ee-4df3-9864-61b42a81631f" method="POST">
                    <div class="flex flex-wrap">
                        <div class="w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4">
                                <label class="text-mainPurple" for="company_name">Company Name</label>
                                <input class="border-b-2 border-mainBlue placeholder-mainBlue text-white h-12 pl-4 bg-mainPurple" placeholder="Business Name" type="text" name="company_name" id="company_name">
                            </div>
                        </div>

                        <div class="w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4">
                                <label class="text-mainPurple" for="full_name">Full Name</label>
                                <input class="border-b-2 border-mainBlue placeholder-mainBlue text-white h-12 pl-4 bg-mainPurple" placeholder="Full Name" type="text" name="full_name" id="full_name">
                            </div>
                        </div>

                        <div class="md:w-1/2 w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4">
                                <label class="text-mainPurple" for="number">Phone Number</label>
                                <input class="border-b-2 border-mainBlue placeholder-mainBlue text-white h-12 pl-4 bg-mainPurple" placeholder="Phone Number" type="text" name="number" id="number">
                            </div>
                        </div>

                        <div class="md:w-1/2 w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4">
                                <label class="text-mainPurple" for="email">Email</label>
                                <input class="border-b-2 border-mainBlue placeholder-mainBlue text-white h-12 pl-4 bg-mainPurple" placeholder="Email" type="text" name="email" id="email">
                            </div>
                        </div>

                        <div class="w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4">
                                <label class="text-mainPurple" for="message">Message</label>
                                <textarea class="border-b-2 text-mainBlue placeholder-mainBlue border-mainBlue h-12 pl-4 pt-4 bg-mainPurple" placeholder="Message" name="message" id="message"></textarea>
                            </div>
                        </div>

                        <div class="w-full pb-4">
                            <div class="flex flex-col mx-0 md:mx-4 pt-12">
                                <button class="flex group justify-center items-center border-2 border-white w-48 text-white placeholder-mainBlue bg-darkBlueGrey hover:text-mainPurple rounded-sm hover:bg-white transition-fast cursor-pointer h-12" id="submit">Submit
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right stroke-white transition-fast group-hover:stroke-mainPurple" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <line x1="15" y1="16" x2="19" y2="12" />
                                        <line x1="15" y1="8" x2="19" y2="12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@stop
