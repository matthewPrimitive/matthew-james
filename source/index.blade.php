@extends('_layouts.master')

@section('body')

<home-hero></home-hero>

<div id="about" class="w-4/5 mx-auto pt-32 pb-16">
    <h2 class="text-darkBlueGrey">What I Do?</h2>
    <p class="text-darkBlueGrey">I am a web developer that also assists clients, and I look forward to assisting you with your online needs.</p>
    <p class="text-darkBlueGrey">I create, maintain, and fix websites. With experience in web development and remote work, I will deliver in a timely manner with beautiful websites.</p>
    <p class="text-darkBlueGrey">Communication is key! Communication is one the most important parts of a relationship. There is no need to worry about waiting days for a response from me.</p>
</div>

<div id="process" class="w-4/5 mx-auto pt-32 pb-16">
    <h2 class="text-darkBlueGrey">The Process</h2>
    <div class="step">
        <div class="flex align-center just-center">
            <h2 class="text-darkBlueGrey pr-3">1.</h2>
            <p class="text-darkBlueGrey">Fill out the form below and connect with me!</p>
        </div>
        

        <div class="flex align-center just-center">
            <h2 class="text-darkBlueGrey pr-3">2.</h2>
            <p class="text-darkBlueGrey">I will be in contact with you soon after I recieve your message.</p>
        </div>

        <div class="flex align-center just-center">
            <h2 class="text-darkBlueGrey pr-3">3.</h2>
            <p class="text-darkBlueGrey">We will work together to find the solution that works best for you!</p>
        </div>
    </div>
</div>

<div id="contact-us" class="w-4/5 mx-auto pb-32 pt-16">
    <h2 class="text-darkBlueGrey mx-4">Interested in working with me?</h2>
    <h4 class="mx-4">Fill out the form below to reach out!</h4>

    <form method="post" enctype="text/plain" action="mailto:jamesmmatt@example.com">
        <div class="flex flex-wrap">
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
