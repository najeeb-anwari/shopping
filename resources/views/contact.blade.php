@extends('layouts.buyer')

@section('content')
<div class="container">
    <h1 class="mt-4">Contact Us</h1>
    <p class="mb-4">We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>

    <form action="{{ route('contact.submit') }}" method="POST" class="mb-3">
        @csrf <!-- CSRF token for security -->

        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
