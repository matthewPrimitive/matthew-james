@extends('_layouts.master')

@section('body')

<home-hero></home-hero>

{{-- <div class="cta" id="cta">
    <div class="cta__content" data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000">
        <p>Interested in learning more?</p>
    </div>
    <div class="cta__btn" data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000">
        <a href="#contact-us">Contact Us Today!</a>
    </div>
</div> --}}

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
                        Markable creates custom websites with personal web design and development. We Specialize in creating custom websites for our clients needs.
                    </p>
                </div>
                <div class="origin__tabbed">
                    <div class="origin__head">
                        <button class="origin__head__tab active js-origin__head__tab" data-item="first">Web Development</button>
                        <button class="origin__head__tab js-origin__head__tab" data-item="second">Client Assisting</button>
                    </div>
                    <div class="origin__tab js-origin__tab active" id="first">
                        <p>We create custom websites for our clients needs. If you are in need for just a simple one page website or are looking for something a little bit bigger to help drive in customers for your busniness then Markable is for you.</p>
                    </div>
                    <div class="origin__tab js-origin__tab" id="second">
                        <p>With technology changing everyday it can be hard to keep up. Markable is here to help guide you down the road.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="contact-us" class="w-4/5 mx-auto pb-32 pt-16">
    <h2 data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" class="text-darkBlueGrey mx-4">Interested in working with us?</h2>
    <h4 data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" class="mx-4">Fill out the form below to reach out!</h4>

    <form action="https://getform.io/f/0ba3603d-b4ee-4df3-9864-61b42a81631f" method="POST">
        <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" class="flex flex-wrap">
            <div class="w-full pb-4">
                <div class="flex flex-col mx-4">
                    <label for="company_name">Company Name</label>
                    <input class="border-2 border-darkBlueGrey rounded-lg h-12 pl-4" type="text" name="company_name" id="company_name">
                </div>
            </div>

            <div class="w-full pb-4">
                <div class="flex flex-col mx-4">
                    <label for="full_name">Full Name</label>
                    <input class="border-2 border-darkBlueGrey rounded-lg h-12 pl-4" type="text" name="full_name" id="full_name">
                </div>
            </div>

            <div class="md:w-1/2 w-full pb-4">
                <div class="flex flex-col mx-4">
                    <label for="number">Phone Number</label>
                    <input class="border-2 border-darkBlueGrey rounded-lg h-12 pl-4" type="text" name="number" id="number">
                </div>
            </div>

            <div class="md:w-1/2 w-full pb-4">
                <div class="flex flex-col mx-4">
                    <label for="email">Email</label>
                    <input class="border-2 border-darkBlueGrey rounded-lg h-12 pl-4" type="text" name="email" id="email">
                </div>
            </div>

            <div class="w-full pb-4">
                <div class="flex flex-col mx-4">
                    <label for="message">Message</label>
                    <textarea class="border-2 border-darkBlueGrey rounded-lg h-48 pl-4 pt-4" name="message" id="message"></textarea>
                </div>
            </div>

            <div class="w-full pb-4">
                <div class="flex flex-col mx-4 pt-12">
                    <input class="border-2 border-darkBlueGrey bg-darkBlueGrey text-white rounded-sm hover:bg-hoverDarkBlueGrey transition-fast cursor-pointer h-12 pl-4" type="submit" name="submit" id="submit">
                </div>
            </div>
        </div>
    </form>
    
</div>

@stop
