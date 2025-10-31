@extends('layouts.app')

@section('content')
    <section class="pt-5 my-20">
        <h1 class="text-5xl font-bold text-primary">Find us</h1>
    </section>

    <section>
        <h2 id="events" class="text-5xl">Events</h2>
        {!! the_content() !!}
    </section>

    <section class="my-20 flex justify-center flex-col gap-5">
        <h2 id="stores" class="text-5xl">Friends of the Fat Man</h2>
        <div class="max-w-lg flex flex-col gap-2 mb-5">
            <p class="text-2xl">Fatmanlittlekitchen is proud to be partnered with the following businesses who carry our products in their store:</p>
            <ul>
                <li class="text-xl">- Donburi King</li>
                <li class="text-xl">- River Cree Convenience</li>
            </ul>
        </div>

        <div class="flex justify-center">
            <iframe class="rounded-xl" src="https://www.google.com/maps/d/u/1/embed?mid=12k58C1TE2ZRI-2mQ1H7rOvAYituJJcY&ehbc=2E312F&noprof=1"
                width="1000" height="600">
            </iframe>
        </div>
    </section>
@endsection