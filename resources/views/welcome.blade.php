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
                <div class="panel-heading">
                    <span class="panel-step">01</span>
                    <div>
                        <p class="section-label">Your invitation</p>
                        <h2 id="registration-title">Register for the show</h2>
                    </div>
                </div>

                <form class="registration-form" action="#" method="post">
                    <div class="form-row">
                        <div class="field">
                            <label for="first-name">First name</label>
                            <input id="first-name" name="first_name" type="text" placeholder="Tyler" required>
                        </div>
                        <div class="field">
                            <label for="last-name">Last name</label>
                            <input id="last-name" name="last_name" type="text" placeholder="Joseph" required>
                        </div>
                    </div>

                    <div class="field">
                        <label for="email">Email address</label>
                        <input id="email" name="email" type="email" placeholder="you@example.com" required>
                    </div>

                    <div class="field">
                        <label for="phone">Phone number <span>(optional)</span></label>
                        <input id="phone" name="phone" type="tel" placeholder="+66 81 234 5678">
                    </div>

                    <fieldset class="ticket-options">
                        <legend>Choose your ticket</legend>
                        <label class="ticket-option">
                            <input type="radio" name="ticket" value="general-admission" checked>
                            <span class="ticket-copy">
                                <strong>General admission</strong>
                                <small>Standing area · ฿2,500</small>
                            </span>
                            <span class="radio-mark"></span>
                        </label>
                        <label class="ticket-option">
                            <input type="radio" name="ticket" value="premium">
                            <span class="ticket-copy">
                                <strong>Premium experience</strong>
                                <small>Priority entry · ฿4,900</small>
                            </span>
                            <span class="radio-mark"></span>
                        </label>
                    </fieldset>

                    <div class="form-footer">
                        <label class="consent">
                            <input type="checkbox" name="updates" value="yes">
                            <span class="checkmark"></span>
                            <span>Send me occasional updates about 21 Pilots events.</span>
                        </label>
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
