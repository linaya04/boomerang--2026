# The most straightforward GitHub Pages deployment approach
# Copy everything from /docs to the root directory

# Build the project first
npm run build

# Copy all files from docs to root (excluding index.html which we'll handle separately)
Get-ChildItem -Path docs -Exclude index.html | ForEach-Object {
    if ($_.PSIsContainer) {
        # If it's a directory, copy it recursively
        Copy-Item -Path $_.FullName -Destination ".\" -Recurse -Force
    } else {
        # If it's a file
        Copy-Item -Path $_.FullName -Destination ".\" -Force
    }
}

# Now we'll copy the contents of the docs/index.html file and use it to replace our root index.html
$indexContent = Get-Content -Path docs\index.html -Raw
$indexContent | Out-File -FilePath index.html -Encoding utf8 -Force

# Create .nojekyll file to prevent GitHub from using Jekyll processing
New-Item -Path .nojekyll -ItemType File -Force

# Commit and push changes
git add .
git commit -m "Deploy site content directly to root for GitHub Pages"
git push origin main

Write-Host "Root deployment complete! Your site should be available at:" -ForegroundColor Green
Write-Host "https://linaya04.github.io/boomerang--2026/" -ForegroundColor Cyan
