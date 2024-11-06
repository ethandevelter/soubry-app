<!-- resources/views/emails/contact-form.blade.php -->

<h1>New Contact Form Submission</h1>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Type:</strong> {{ $data['type'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] }}</p>
