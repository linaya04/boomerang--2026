# Final GitHub Pages Deployment Fix

# Let's try a different approach for GitHub Pages deployment
# This time using a tried and true method with correct paths

# Step 1: Build the project with correct base path
npm run build

# Step 2: Create the necessary files for GitHub Pages
$rootContent = @"
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Boomerang Cup 2026</title>
  <script type="text/javascript">
    // Single Page Apps for GitHub Pages
    // MIT License
    // https://github.com/rafgraph/spa-github-pages
    (function(l) {
      if (l.search[1] === '/' ) {
        var decoded = l.search.slice(1).split('&').map(function(s) { 
          return s.replace(/~and~/g, '&')
        }).join('?');
        window.history.replaceState(null, null,
            l.pathname.slice(0, -1) + decoded + l.hash
        );
      }
    }(window.location))
  </script>
  <meta http-equiv="refresh" content="0;url=./docs/index.html">
</head>
<body>
  <p>Redirecting to <a href="./docs/index.html">Boomerang Cup 2026</a>...</p>
</body>
</html>
"@

$rootContent | Out-File -FilePath "index.html" -Encoding utf8 -Force

# Create a copy for the 404 page
$rootContent | Out-File -FilePath "404.html" -Encoding utf8 -Force

# Make sure we have a .nojekyll file
New-Item -Path .nojekyll -ItemType File -Force

# Create root README
@"
# Boomerang Cup 2026

This is the website for the Boomerang Cup 2026 Tennis Tournament.

Visit the live site at: https://linaya04.github.io/boomerang--2026/
"@ | Out-File -FilePath "README.md" -Force

# Commit and push changes
git add .
git commit -m "Fix GitHub Pages deployment with proper redirects"
git push origin main

Write-Host "Deployment complete! Your site should be available at:" -ForegroundColor Green
Write-Host "https://linaya04.github.io/boomerang--2026/" -ForegroundColor Cyan
