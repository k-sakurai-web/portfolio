# resize_portfolio.ps1
# Resizes PORTFOLIO.png so neither dimension exceeds 7900 pixels

Add-Type -AssemblyName System.Drawing

$src = Join-Path $PSScriptRoot "PORTFOLIO.png"
$img = [System.Drawing.Image]::FromFile($src)

Write-Host "Original size: $($img.Width) x $($img.Height)"

$maxDim = 7900
$scaleW = $maxDim / $img.Width
$scaleH = $maxDim / $img.Height
$scale  = [Math]::Min($scaleW, $scaleH)

if ($scale -ge 1) {
    Write-Host "Image is already within limits. No resize needed."
    $img.Dispose()
    exit 0
}

$nw = [int]($img.Width  * $scale)
$nh = [int]($img.Height * $scale)

$bmp = New-Object System.Drawing.Bitmap($nw, $nh)
$g   = [System.Drawing.Graphics]::FromImage($bmp)
$g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$g.DrawImage($img, 0, 0, $nw, $nh)

$bmp.Save($src, [System.Drawing.Imaging.ImageFormat]::Png)

$g.Dispose()
$bmp.Dispose()
$img.Dispose()

Write-Host "Resized successfully to: $nw x $nh"
Write-Host "Saved to: $src"
