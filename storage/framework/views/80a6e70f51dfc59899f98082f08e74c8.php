<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boomerang Cup 2026 Tennis Tournament</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="<?php echo e(asset('images/trophy-logo.png')); ?>" alt="Trophy logo" class="nav-trophy-logo" onerror="this.src='<?php echo e(asset('images/trophy.svg')); ?>'; this.onerror=null;">
                <h2>Boomerang Cup 2026</h2>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#tournament-details" class="nav-link">Tournament Details</a>
                <a href="#teams" class="nav-link">Teams</a>
                <a href="#social-events" class="nav-link">Social Events</a>
                <a href="#handicap-doubles" class="nav-link">Handicap Doubles</a>
                <a href="#schedule" class="nav-link">Schedule</a>
                <a href="#results" class="nav-link">Results</a>
                <a href="#registration" class="nav-link">Registration</a>
                <a href="#rules-regulations" class="nav-link">Rules & Regulations</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            <div class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation menu" style="display: flex !important;">
                <span class="bar" style="display: block !important; background-color: #2D5A27 !important;"></span>
                <span class="bar" style="display: block !important; background-color: #2D5A27 !important;"></span>
                <span class="bar" style="display: block !important; background-color: #2D5A27 !important;"></span>
            </div>
        </div>
    </nav>
    <div class="nav-backdrop" id="nav-backdrop"></div>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-background">
            <img src="https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop" alt="Tennis balls and racket on court" loading="eager">
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Boomerang Cup 2026</h1>
                <h2 class="hero-subtitle">Where Tennis Unites the World</h2>
                <p class="hero-description">7 days. 8 teams. One unforgettable tournament.</p>
                <div class="hero-buttons">
                    <a href="https://www.trybooking.com/events/landing/1399477" class="btn btn-primary" target="_blank" rel="noopener">Register Now</a>
                    <a href="#about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll to explore</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About the Tournament</h2>
            </div>
            <div class="about-grid">
                <div class="about-text">
                    <h3>A Prestigious Amateur Tennis Event</h3>
                    <p>Boomerang Cup 2026 is a renowned amateur tennis tournament, welcoming passionate players from various backgrounds. Over seven days, competitors and fans come together to celebrate the true spirit of tennis: camaraderie, competition, and sporting exchange in a friendly yet highly competitive environment.</p>

                    <p>With a focus on sportsmanship and memorable experiences, Boomerang Cup 2026 offers participants the chance to test their skills, forge new friendships, and enjoy a vibrant tennis community. The event features a variety of match formats and social activities, making it a highlight of the amateur tennis calendar.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop" alt="Tennis ball on court" loading="lazy" style="object-fit:cover;width:100%;height:auto;border-radius:12px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament Details Section -->
    <section id="tournament-details" class="tournament-details-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tournament Details</h2>
                <p class="section-subtitle">Everything you need to know about the Boomerang Cup 2026</p>
            </div>
            <div class="details-content" style="display: flex; flex-direction: column; align-items: center; gap: 2rem;">
                <div class="details-info" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <h3>Event Information</h3>
                    <ul class="details-list" style="list-style: none; padding: 0; margin: 1.5rem 0;">
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">🏆</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Event</strong>
                                <span>The Boomerang Cup 2026</span>
                            </div>
                        </li>
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">📍</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Location</strong>
                                <span>Melbourne (main event), with lead-in tournaments in Ballarat, Hobart, and Sydney</span>
                            </div>
                        </li>
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">🎾</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Type</strong>
                                <span>International amateur team handicap doubles</span>
                            </div>
                        </li>
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">📅</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Timing</strong>
                                <span>A bumper summer of tennis, with the main event likely in January 2026, based on previous years</span>
                            </div>
                        </li>
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">👥</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Social Events</strong>
                                <span>A number of social and sporting events will be hosted at the club and around Melbourne during the tournament</span>
                            </div>
                        </li>
                        <li style="display: flex; margin-bottom: 1rem; align-items: flex-start;">
                            <span style="background: var(--primary-color); color: white; padding: 0.5rem; border-radius: 50%; width: 2rem; height: 2rem; display: inline-flex; align-items: center; justify-content: center; margin-right: 1rem;">📞</span>
                            <div>
                                <strong style="display: block; margin-bottom: 0.25rem;">Contact</strong>
                                <span>For more information, contact RMTC</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Teams Section -->
    <section id="teams" class="teams-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tournament Teams</h2>
                <p class="section-subtitle">Meet the competing teams and players</p>
            </div>
            
            <div class="teams-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <!-- Team 1 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 1</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 15</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 18</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 12</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 20</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 2 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 2</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 14</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 19</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 16</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 22</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 3 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 3</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 12</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 17</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 15</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 21</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 4 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 4</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 13</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 18</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 14</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 20</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 5 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 5</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 16</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 22</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 17</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 23</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 6 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 6</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 15</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 20</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 14</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 21</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 7 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 7</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 16</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 19</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 15</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 22</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Team 8 -->
                <div class="team-card" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <div class="team-header" style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <h3 style="margin: 0;">Team 8</h3>
                    </div>
                    <ul class="team-players" style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 1</strong> (Captain)<br>
                            <span style="color: var(--neutral-500);">Handicap: 13</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 2</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 18</span>
                        </li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <strong>Player 3</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 14</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Player 4</strong><br>
                            <span style="color: var(--neutral-500);">Handicap: 20</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Events Section -->
    <section id="social-events" class="social-events">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Social Events</h2>
                <p class="section-subtitle">Experience the social side of the tournament</p>
            </div>
            <div class="events-grid" style="display: flex; flex-direction: column; align-items: center; gap: 2rem; background-color: rgba(45, 90, 39, 0.1); padding: 2rem; border-radius: 12px;">
                <div class="event-card" style="background: rgba(255,255,255,0.8); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1); width: 80%;">
                    <h3>All Social Events Package</h3>
                    <p>Includes access to all social events: Welcome Party, Mid Tournament Dinner, and Final Dinner.</p>
                </div>
                <div class="event-card" style="background: rgba(255,255,255,0.8); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1); width: 80%;">
                    <h3>Welcome Party</h3>
                    <p><strong>Date:</strong> Friday, January 12th, 2026</p>
                    <p>Kick off the tournament with a casual welcome party. Enjoy light refreshments and meet fellow participants.</p>
                </div>
                <div class="event-card" style="background: rgba(255,255,255,0.8); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1); width: 80%;">
                    <h3>Mid Tournament Dinner</h3>
                    <p><strong>Date:</strong> Tuesday, January 16th, 2026</p>
                    <p>Join us for a delightful dinner midway through the tournament. A great opportunity to relax and socialize.</p>
                </div>
                <div class="event-card" style="background: rgba(255,255,255,0.8); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1); width: 80%;">
                    <h3>Final Dinner</h3>
                    <p><strong>Date:</strong> Wednesday, January 24th, 2026</p>
                    <p>Celebrate the conclusion of the tournament with an elegant final dinner. Formal attire recommended.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Players Section removed as requested -->
    <!-- Schedule Section -->
    <section id="schedule" class="schedule">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tournament Schedule</h2>
            <p class="section-subtitle">Seven days of high-quality tennis competition</p>
        </div>
        <div class="schedule-grid">
            <table class="schedule-table" style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #f4f4f4;">
                        <th style="padding: 8px; border: 1px solid #ddd;">Day</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Time</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Match #</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Players</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Gobleteers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Thursday</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">08:40-09:15</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">1</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">David Goldsbury & Mark Sherwin</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Claire Hanley & Kevin Hanley</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd;">Thursday</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">09:15-09:50</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">2</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">John Piccolo & Luke Piccolo</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">Minty Oldham & Tom McNeilis</td>
                    </tr>
                    <!-- Add more rows as per the provided schedule -->
                </tbody>
            </table>
        </div>
    </div>
</section>

    <!-- Handicap Doubles Section -->
    <section id="handicap-doubles" class="handicap-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Handicap Doubles Tournament</h2>
                <p class="section-subtitle">A unique format where skill meets strategy</p>
            </div>
            
            <div class="handicap-content" style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                <div class="handicap-info" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                    <h3>About the Handicap System</h3>
                    <p>The Boomerang Cup's handicap scoring system is designed to level the playing field between players of different abilities, creating exciting and unpredictable matches. Each player is assigned a handicap number based on their skill level, ranging from 0 (top professionals) to 90 (beginners).</p>
                    
                    <p>In handicap doubles, the pair with the higher combined handicap receives points at the start of each game or set. This innovative approach means that tactical play becomes just as important as technical skill, making every match competitive regardless of the players' experience levels.</p>
                    
                    <h4>How It Works:</h4>
                    <ul>
                        <li>Players are assigned handicaps based on their skill level</li>
                        <li>Teams combine their handicaps for a total team handicap</li>
                        <li>The difference between team handicaps determines the starting score advantage</li>
                        <li>Matches are best of 3 sets to 6 games</li>
                    </ul>
                </div>
                
                <div class="featured-matchups" style="margin-top: 1rem;">
                    <h3>Featured Handicap Matchups</h3>
                    <div class="handicap-table" style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
                            <thead>
                                <tr style="background: var(--primary-color); color: white;">
                                    <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--neutral-300);">Team 1</th>
                                    <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Handicap</th>
                                    <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--neutral-300);">Team 2</th>
                                    <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Handicap</th>
                                    <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Starting Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background: rgba(255,255,255,0.02);">
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 1/Player 3</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">15</td>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 5/Player 8</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">20</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">0-15</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 2/Player 7</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">18</td>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 6/Player 10</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">12</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">15-0</td>
                                </tr>
                                <tr style="background: rgba(255,255,255,0.02);">
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 4/Player 12</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">25</td>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Player 9/Player 11</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">22</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">15-0</td>
                                </tr>
                                <tr>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Martin/Campbell</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">19</td>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Rodriguez/Hernandez</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">16</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">15-0</td>
                                </tr>
                                <tr style="background: rgba(255,255,255,0.02);">
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Mitchell/Pearson</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">28</td>
                                    <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">Johnson/Smith</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">32</td>
                                    <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">0-15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section id="results" class="results-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tournament Results</h2>
                <p class="section-subtitle">Live updates during the tournament - March 15-21, 2026</p>
            </div>
            
            <div class="results-content" style="background: rgba(255,255,255,0.04); border-radius: 12px; padding: 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);">
                <div class="results-placeholder" style="text-align: center; padding: 2rem 0;">
                    <img src="https://images.pexels.com/photos/2996254/pexels-photo-2996254.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&fit=crop" alt="Trophy presentation" style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 1.5rem;">
                    
                    <h3>Results will be posted here during the tournament</h3>
                    <p>This section will be updated daily throughout the Boomerang Cup 2026 with match results, team standings, and tournament statistics.</p>
                    
                    <div class="results-tables" style="margin-top: 2rem;">
                        <h4>Team Standings</h4>
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; margin: 1rem 0 2rem 0;">
                                <thead>
                                    <tr style="background: var(--primary-color); color: white;">
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Rank</th>
                                        <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--neutral-300);">Team</th>
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Wins</th>
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Losses</th>
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <h4>Handicap Doubles Leaderboard</h4>
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; margin: 1rem 0;">
                                <thead>
                                    <tr style="background: var(--primary-color); color: white;">
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Position</th>
                                        <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--neutral-300);">Pair</th>
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Combined Handicap</th>
                                        <th style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; border: 1px solid var(--neutral-300);">TBD</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                        <td style="padding: 0.75rem; text-align: center; border: 1px solid var(--neutral-300);">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->
    <section id="registration" class="registration">
        <div class="container">
            <div class="registration-content" style="display: flex; flex-wrap: wrap; gap: 48px; align-items: flex-start; justify-content: center;">
                <div class="registration-text" style="flex: 1 1 350px; min-width: 320px; max-width: 500px;">
                    <h2>How to Participate</h2>
                    <p class="participate-intro">Register for Boomerang Cup 2026 using the official registration link below:</p>
                    <div class="participation-options" style="display: flex; flex-direction: column; gap: 32px; margin-bottom: 32px;">
                        <div class="participation-card" style="background: rgba(255,255,255,0.04); border-radius: 16px; padding: 32px 24px 24px 24px; box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04); margin-bottom: 0;">
                            <h3 style="margin-top:0;margin-bottom:12px;font-size:1.5rem;">Official Registration</h3>
                            <p style="margin-bottom:18px;">All players must register through the official Boomerang Cup 2026 TryBooking page:</p>
                            <a href="https://www.trybooking.com/events/landing/1399477" class="btn btn-primary" target="_blank" rel="noopener" style="display:inline-block;min-width:200px;text-align:center;">Register Now</a>
                        </div>
                    </div>
                    <!-- registration-features removed as requested -->
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section removed as requested -->
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions about the tournament? We’re here to help.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <h4>Tournament Office</h4>
                            <p>Royal Melbourne Tennis Club<br>18 Sherwood Street<br>Richmond VIC 3121, Australia</p>
                        </div>
                        <div class="contact-item">
                            <h4>Phone</h4>
                            <p>+61 (3) 9429 9788<br>Available Monday to Friday, 9am–5pm AEST</p>
                        </div>
                        <div class="contact-item">
                            <h4>Email</h4>
                            <p>boomerang@rmtc.com.au</p>
                        </div>
                        <div class="contact-item">
                            <h4>Tournament Dates</h4>
                            <p>March 15 – 21, 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Boomerang Cup 2026</h3>
                    <p>International Tennis Tournament</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#tournament-details">Tournament Details</a></li>
                        <li><a href="#teams">Teams</a></li>
                        <li><a href="#social-events">Social Events</a></li>
                        <li><a href="#handicap-doubles">Handicap Doubles</a></li>
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#results">Results</a></li>
                        <li><a href="#registration">Register</a></li>
                        <li><a href="#rules-regulations">Rules</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li>Royal Melbourne Tennis Club</li>
                        <li>18 Sherwood Street</li>
                        <li>Richmond, Victoria 3121</li>
                        <li>+61 (3) 9429 9788</li>
                        <li>boomerang@rmtc.com.au</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://youtube.com/c/RoyalMelbourneTennisClub/videos" class="social-link" target="_blank">YouTube</a>
                        <a href="https://instagram.com/royalmelbournetennisclub/" class="social-link" target="_blank">Instagram</a>
                        <a href="mailto:pros@rmtc.com.au" class="social-link">Email Pros</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Boomerang Cup 2026 Tennis Tournament. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo e(asset('script.js')); ?>" type="module"></script>
</body>
</html><?php /**PATH C:\Users\LinayaPiyasiri\Downloads\boomerang--2026\resources\views/index.blade.php ENDPATH**/ ?>