# PowerShell script to fix deployment

# Build the app with CSS extraction
Write-Host "Building the app..." -ForegroundColor Green
npm run build

# Make sure we have a clean docs directory
Write-Host "Creating .nojekyll file..." -ForegroundColor Green
New-Item -Path docs\.nojekyll -ItemType File -Force

# Copy CSS file
Write-Host "Copying CSS file..." -ForegroundColor Green
Copy-Item -Path styles.css -Destination docs\styles.css -Force
Copy-Item -Path styles.css -Destination docs\assets\index-BGpH7Pqw.css -Force

# Copy images
Write-Host "Copying trophy images..." -ForegroundColor Green
Copy-Item -Path images\trophy-logo.png -Destination docs\assets\trophy-logo-VZB-JA3L.png -Force

# Add and commit changes
git add docs
git commit -m "Fix assets for GitHub Pages deployment"

# Push to gh-pages branch
Write-Host "Pushing changes to gh-pages branch..." -ForegroundColor Green
git add .
git commit -m "Update docs for GitHub Pages"
git push origin main

# Deploy using gh-pages
Write-Host "Deploying with gh-pages..." -ForegroundColor Green
npm run deploy

Write-Host "Deployment fix complete!" -ForegroundColor Green