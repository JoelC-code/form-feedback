<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>21 Pilots | Concert registration</title>

        <style>
            {!! file_get_contents(resource_path('views/concert.css')) !!}
        </style>
    </head>
    <body>
        <main class="page-shell">
            <section class="event-intro" aria-labelledby="event-title">
                <div class="intro-topline">
                    <span class="eyebrow">Live event registration</span>
                    <span class="event-number">01 / 01</span>
                </div>

                <div class="intro-content">
                    <p class="event-kicker">The Clancy World Tour</p>
                    <h1 id="event-title">21<br><span>Pilots</span></h1>
                    <p class="event-description">
                        Get ready for an unforgettable night of music, lights, and stories.
                        Reserve your place at the next 21 Pilots experience.
                    </p>
                </div>

                <div class="event-details">
                    <div class="detail">
                        <span class="detail-label">Date</span>
                        <strong>Friday, 24 May 2025</strong>
                    </div>
                    <div class="detail">
                        <span class="detail-label">Venue</span>
                        <strong>Impact Arena, Bangkok</strong>
                    </div>
                    <div class="detail">
                        <span class="detail-label">Doors open</span>
                        <strong>18:00 onwards</strong>
                    </div>
                </div>

                <div class="intro-mark" aria-hidden="true">Ø</div>
            </section>

            <section class="registration-panel" aria-labelledby="registration-title">
                @if (session('success'))
                    <p role="status">{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <div role="alert">
                        <p>Please correct the following errors:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel-heading">
                    <span class="panel-step">01</span>
                    <div>
                        <p class="section-label">Your invitation</p>
                        <h2 id="registration-title">Register for the show</h2>
                    </div>
                </div>

                <form class="registration-form" action="{{ route('registrations.store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="field">
                            <label for="first-name">First name</label>
                            <input id="first-name" name="first_name" type="text" value="{{ old('first_name') }}" placeholder="Tyler" required>
                        </div>
                        <div class="field">
                            <label for="last-name">Last name</label>
                            <input id="last-name" name="last_name" type="text" value="{{ old('last_name') }}" placeholder="Joseph" required>
                        </div>
                    </div>

                    <div class="field">
                        <label for="email">Email address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                    </div>

                    <div class="field">
                        <label for="phone">Phone number <span>(optional)</span></label>
                        <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="+66 81 234 5678">
                    </div>

                    <fieldset class="ticket-options">
                        <legend>Choose your ticket</legend>
                        <label class="ticket-option">
                            <input type="radio" name="ticket" value="general-admission" @checked(old('ticket', 'general-admission') === 'general-admission')>
                            <span class="ticket-copy">
                                <strong>General admission</strong>
                                <small>Standing area · ฿2,500</small>
                            </span>
                            <span class="radio-mark"></span>
                        </label>
                        <label class="ticket-option">
                            <input type="radio" name="ticket" value="premium" @checked(old('ticket') === 'premium')>
                            <span class="ticket-copy">
                                <strong>Premium experience</strong>
                                <small>Priority entry · ฿4,900</small>
                            </span>
                            <span class="radio-mark"></span>
                        </label>
                    </fieldset>

                    <div class="form-footer">
                        <button type="submit">
                            <span>Complete registration</span>
                            <span class="button-arrow" aria-hidden="true">↗</span>
                        </button>
                    </div>
                </form>

                <p class="fine-print">By registering, you agree to our event terms and privacy policy.</p>
            </section>
        </main>
    </body>
</html>