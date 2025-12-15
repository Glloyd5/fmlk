@extends('layouts.app')

@section('content')
    <section class="pt-5 my-20">
        <h1 class="text-5xl mb-10 font-bold text-primary">Contact Us</h1>

        @if(request()->get('success'))
            <div id="formResponse" class="mt-4 text-center text-lg text-green-600">
                Thanks! Your message has been sent, we will be in touch shortly.
            </div>
        @elseif(request()->get('error'))
            <div id="formResponse" class="mt-4 text-center text-lg text-red-600">
                Something went wrong. Please try again.
            </div>
        @endif

        <form id="contact-form" class="space-y-6 bg-white p-6 rounded-lg shadow-md" method="POST"
            action="{{ esc_url(admin_url('admin-post.php')) }}">
            {!! wp_nonce_field('contact_form_nonce', 'contact_form_nonce_field', true, false) !!}

            <input type="hidden" name="action" value="contact_form">

            {{-- Reason --}}
            <div>
                <label for="reason" class="block mb-2 font-medium">What do you want to talk about?</label>
                <select name="reason" id="reason" required class="w-full p-2 border rounded-md">
                    <option value="">Select a topic</option>
                    <option value="general">General Inquiry </option>
                    <option value="catering">Catering Request</option>
                    <option value="gift-box">Gift Box Inquiry</option>
                    <option value="white-label">White Label Sauce</option>
                </select>
            </div>

            {{-- Common Fields --}}
            <div>
                <label for="name" class="block mb-2 font-medium">Name</label>
                <input type="text" name="name" id="name" required class="w-full p-2 border rounded-md" />
            </div>

            <div>
                <label for="email" class="block mb-2 font-medium">Email</label>
                <input type="email" name="email" id="email" required class="w-full p-2 border rounded-md" />
            </div>

            <div>
                <label for="phone" class="block mb-2 font-medium">Phone Number</label>
                <input type="tel" name="phone" id="phone" required class="w-full p-2 border rounded-md" />
            </div>

            {{-- Conditional Sections --}}
            <div id="general-fields" class="hidden space-y-4">
                <div>
                    <label for="general_message" class="block mb-2 font-medium">Message</label>
                    <textarea name="general_message" id="general_message" rows="3"
                        class="w-full p-2 border rounded-md"></textarea>
                </div>
            </div>

            {{-- Catering fields --}}
            <div id="catering-fields" class="hidden space-y-4">
                <div>
                    <label for="num_people" class="block mb-2 font-medium">Number of People</label>
                    <input type="number" name="num_people" id="num_people" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="budget" class="block mb-2 font-medium">Budget $CAD</label>
                    <input type="text" name="budget" id="budget" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="event_type" class="block mb-2 font-medium">Event Type</label>
                    <select name="event_type" id="event_type" class="w-full p-2 border rounded-md">
                        <option value="">Select</option>
                        <option value="corporate">Corporate Event</option>
                        <option value="private">Private Party</option>
                        <option value="fundraiser">Fundraiser</option>
                        <option value="festival">Festival</option>
                        <option value="wedding">Wedding</option>
                    </select>
                </div>
                <div>
                    <label for="location" class="block mb-2 font-medium">Location</label>
                    <input type="text" name="location" id="location" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="catering_message" class="block mb-2 font-medium">Tell us about your event</label>
                    <textarea name="catering_message" id="catering_message" rows="3"
                        class="w-full p-2 border rounded-md"></textarea>
                </div>
            </div>

            {{-- Gift box fields --}}
            <div id="gift-fields" class="hidden space-y-4">
                <div>
                    <label for="gift_quantity" class="block mb-2 font-medium">Quantity requested</label>
                    <input type="number" name="gift_quantity" id="gift_quantity" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="gift_budget" class="block mb-2 font-medium">Budget per box $CAD</label>
                    <input type="number" name="gift_budget" id="gift_budget" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="gift_message" class="block mb-2 font-medium">Do you have any prefered prodcuts you would
                        like included?</label>
                    <textarea name="gift_message" id="gift_message" rows="3"
                        class="w-full p-2 border rounded-md"></textarea>
                </div>
            </div>

            {{-- White label sauce fields --}}
            <div id="white-label-fields" class="hidden space-y-4">
                <div>
                    <label for="wl_recurring" class="block mb-2 font-medium">Reccuring Order?</label>
                    <select name="wl_recurring" id="wl_recurring" class="w-full p-2 border rounded-md">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="wl_quantity" class="block mb-2 font-medium">Quantity</label>
                    <input type="number" name="wl_quantity" id="wl_quantity" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="wl_brand" class="block mb-2 font-medium">Brand Name</label>
                    <input type="text" name="wl_brand" id="wl_brand" class="w-full p-2 border rounded-md" />
                </div>
                <div>
                    <label for="wl_message" class="block mb-2 font-medium">Tell us about your brand and why you would like a
                        custom sauce</label>
                    <textarea name="wl_message" id="wl_message" rows="3" class="w-full p-2 border rounded-md"></textarea>
                </div>
            </div>

            <button type="submit" class="px-6 py-2 bg-black text-white rounded-md hover:bg-red-600">Submit</button>
        </form>

    </section>

@endsection