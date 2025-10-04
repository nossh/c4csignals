@extends('emails.layout')

@section('content')


<!-- BODY -->
	<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#fff; max-width:600px; margin:30px auto; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
		<tr>
		  <td style="padding:40px;">
		    <h2 style="color:#111; margin-bottom:20px;">Welcome {{ $user->fname}} 👋</h2>
		    <p style="font-size:15px; line-height:1.6; color:#333; margin-bottom:30px;">
		      Thanks for registering on <strong>C4CSignals</strong>.<br>
		      We’re excited to help you trade smarter with real-time crypto & forex signals.
		    </p>

		    <!-- Button -->
		    <a href="{{ url('/dashboard') }}" 
		       style="display:inline-block; padding:12px 28px; background:#4F46E5; color:#fff; text-decoration:none; border-radius:6px; font-weight:bold;">
		       Go to Dashboard
		    </a>

		    <p style="margin-top:40px; font-size:14px; color:#555;">
		      Thanks,<br>
		      <strong>{{ config('app.name') }}</strong>
		    </p>
		  </td>
		</tr>
	</table>


@endsection