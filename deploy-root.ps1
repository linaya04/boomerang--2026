# PowerShell script for root deployment

# Build the app
Write-Host "Building the app..." -ForegroundColor Green
npm run build

# Create .nojekyll file in both root and docs folders
Write-Host "Creating .nojekyll files..." -ForegroundColor Green
New-Item -Path .nojekyll -ItemType File -Force
New-Item -Path docs\.nojekyll -ItemType File -Force

# Copy the root index.html file
Write-Host "Setting up root redirect..." -ForegroundColor Green
Copy-Item -Path index.html.root -Destination index.html -Force

# Create a README.md file in the root
Write-Host "Creating README.md..." -ForegroundColor Green
@"
# Boomerang Cup 2026

This is the website for the Boomerang Cup 2026 Tennis Tournament.

## Development

To run the development server:
\`\`\`
npm run dev
\`\`\`

## Deployment

The site is deployed to GitHub Pages and can be accessed at:
https://linaya04.github.io/boomerang--2026/
"@ | Out-File -FilePath README.md -Force

# Commit and push changes
Write-Host "Committing and pushing changes..." -ForegroundColor Green
git add .
git commit -m "Setup root deployment for GitHub Pages"
git push origin main

Write-Host "Deployment complete! Your site should be available at:" -ForegroundColor Green
Write-Host "https://linaya04.github.io/boomerang--2026/" -ForegroundColor Cyan
