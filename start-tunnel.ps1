# Script untuk menjalankan localtunnel
Write-Host "Starting localtunnel for Laragon (port 80)..." -ForegroundColor Green
Write-Host "This will create a public URL for your project" -ForegroundColor Yellow
Write-Host "Press Ctrl+C to stop the tunnel" -ForegroundColor Red
Write-Host ""

# Jalankan localtunnel
lt --port 80

Write-Host ""
Write-Host "Tunnel stopped." -ForegroundColor Red
