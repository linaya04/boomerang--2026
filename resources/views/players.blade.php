<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players - Boomerang Cup 2026</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" type="module" defer></script>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="images/trophy-logo.png" alt="Trophy logo" class="nav-trophy-logo">
                <h2>Boomerang Cup 2026</h2>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="index.html#home" class="nav-link">Home</a>
                <a href="index.html#about" class="nav-link">About</a>
                <a href="index.html#schedule" class="nav-link">Schedule</a>
                <a href="index.html#registration" class="nav-link">Register</a>
                <a href="players.html" class="nav-link active">Players</a>
                <a href="rules.html" class="nav-link">Rules</a>
                <a href="index.html#contact" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <section class="players-page">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">All 170 Players</h2>
                <p class="section-subtitle">Complete list of tournament participants</p>
            </div>
            <div class="players-filter">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All Players</button>
                    <button class="filter-btn" data-filter="singles">Singles</button>
                    <button class="filter-btn" data-filter="doubles">Doubles</button>
                    <button class="filter-btn" data-filter="team">Team Event</button>
                    <button class="filter-btn" data-filter="handicap">Doubles Handicap</button>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search players..." id="playerSearch">
                </div>
            </div>
            <div class="players-grid" id="playersGrid">
                <!-- Player items copied from index.html, can be expanded to 170 -->
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Maria Rodriguez</span>
                    <span class="player-country">🇪🇸 Spain</span>
                    <span class="player-rank">#7</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">James Thompson</span>
                    <span class="player-country">🇬🇧 UK</span>
                    <span class="player-rank">#12</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Yuki Tanaka</span>
                    <span class="player-country">🇯🇵 Japan</span>
                    <span class="player-rank">#15</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Emma Johnson</span>
                    <span class="player-country">🇺🇸 USA</span>
                    <span class="player-rank">#9</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Lucas Silva</span>
                    <span class="player-country">🇧🇷 Brazil</span>
                    <span class="player-rank">#18</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Anna Petrov</span>
                    <span class="player-country">🇷🇺 Russia</span>
                    <span class="player-rank">#11</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Michael Chen</span>
                    <span class="player-country">🇨🇳 China</span>
                    <span class="player-rank">#14</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Sofia Andersson</span>
                    <span class="player-country">🇸🇪 Sweden</span>
                    <span class="player-rank">#21</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Pierre Dubois</span>
                    <span class="player-country">🇫🇷 France</span>
                    <span class="player-rank">#16</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Alessandro Rossi</span>
                    <span class="player-country">🇮🇹 Italy</span>
                    <span class="player-rank">#19</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Zara Ahmed</span>
                    <span class="player-country">🇪🇬 Egypt</span>
                    <span class="player-rank">#23</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Robert Mueller</span>
                    <span class="player-country">🇩🇪 Germany</span>
                    <span class="player-rank">#17</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Isabella Garcia</span>
                    <span class="player-country">🇦🇷 Argentina</span>
                    <span class="player-rank">#20</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Raj Patel</span>
                    <span class="player-country">🇮🇳 India</span>
                    <span class="player-rank">#25</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Olivia Wilson</span>
                    <span class="player-country">🇦🇺 Australia</span>
                    <span class="player-rank">#13</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Viktor Petrov</span>
                    <span class="player-country">🇺🇦 Ukraine</span>
                    <span class="player-rank">#22</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Chloe Martin</span>
                    <span class="player-country">🇫🇷 France</span>
                    <span class="player-rank">#24</span>
                </div>
                <div class="player-item" data-events="singles handicap">
                    <span class="player-name">Diego Fernandez</span>
                    <span class="player-country">🇲🇽 Mexico</span>
                    <span class="player-rank">#26</span>
                </div>
                <div class="player-item" data-events="singles doubles">
                    <span class="player-name">Amelia Thompson</span>
                    <span class="player-country">🇳🇿 New Zealand</span>
                    <span class="player-rank">#27</span>
                </div>
                <div class="player-item" data-events="singles team">
                    <span class="player-name">Hassan Al-Rashid</span>
                    <span class="player-country">🇸🇦 Saudi Arabia</span>
                    <span class="player-rank">#28</span>
                </div>
                <!-- Note: This shows 20 players. In a real implementation, all 170 players would be listed here -->
                <div class="load-more-section">
                    <p class="showing-count">Showing 20 of 170 players</p>
                    <button class="btn btn-secondary" onclick="loadMorePlayers()">Load More Players</button>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Boomerang 2026</h3>
                    <p>International Tennis Tournament</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html#home">Home</a></li>
                        <li><a href="index.html#about">About</a></li>
                        <li><a href="index.html#schedule">Schedule</a></li>
                        <li><a href="index.html#registration">Register</a></li>
                        <li><a href="players.html">Players</a></li>
                        <li><a href="rules.html">Rules</a></li>
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
                <p>&copy; 2024 Boomerang 2026 Tennis Tournament. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
