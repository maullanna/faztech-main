# Script untuk menjalankan ngrok
Write-Host "Starting ngrok for Laragon (port 80)..." -ForegroundColor Green
Write-Host "Press Ctrl+C to stop ngrok" -ForegroundColor Yellow
Write-Host ""

# Jalankan ngrok
.\ngrok.exe http 80

Write-Host ""
Write-Host "Ngrok stopped." -ForegroundColor Red
