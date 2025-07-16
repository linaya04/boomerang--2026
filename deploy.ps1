# PowerShell script to deploy to GitHub Pages

# Build the app
Write-Host "Building the app..." -ForegroundColor Green
npm run build

# Create a temporary directory for the deployment
$tempDir = "gh-pages-deploy"
if (Test-Path $tempDir) {
    Remove-Item -Recurse -Force $tempDir
}
New-Item -ItemType Directory -Path $tempDir | Out-Null

# Copy the dist contents to the temporary directory
Write-Host "Copying built files to temporary directory..." -ForegroundColor Green
Copy-Item -Path "dist\*" -Destination $tempDir -Recurse

# Initialize a new git repository in the temporary directory
Set-Location $tempDir
git init
git add .
git commit -m "Deploy to GitHub Pages"

# Push to the gh-pages branch
Write-Host "Pushing to gh-pages branch..." -ForegroundColor Green
git push -f "https://github.com/linaya04/boomerang--2026.git" master:gh-pages

# Clean up
Set-Location ..
Remove-Item -Recurse -Force $tempDir

Write-Host "Deployment complete!" -ForegroundColor Green
