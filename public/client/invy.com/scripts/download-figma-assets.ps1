$ErrorActionPreference = 'Stop'

$src = 'C:\Users\pc\.cursor\projects\c-xampp-htdocs-invy-com\agent-tools\b3c71602-2d1e-404a-a0ea-b5527fba7d75.txt'
$out = 'c:\xampp\htdocs\invy.com\img\_figma'

New-Item -ItemType Directory -Force -Path $out | Out-Null

$lines = Get-Content -LiteralPath $src | Select-Object -First 90
$assets = @()

foreach ($l in $lines) {
  if ($l -match '^const\s+(\w+)\s*=\s*"(https://www\.figma\.com/api/mcp/asset/[^"]+)"') {
    $assets += [pscustomobject]@{ Name = $Matches[1]; Url = $Matches[2] }
  }
}

function Get-ExtFromContentType([string]$ct) {
  if (-not $ct) { return '.bin' }
  $ct = $ct.ToLowerInvariant()
  if ($ct -match 'image/png') { return '.png' }
  if ($ct -match 'image/jpeg') { return '.jpg' }
  if ($ct -match 'image/webp') { return '.webp' }
  if ($ct -match 'image/svg') { return '.svg' }
  return '.bin'
}

$downloaded = 0
$failed = 0

foreach ($a in $assets) {
  try {
    $tmp = Join-Path $out ($a.Name + '.tmp')
    $resp = Invoke-WebRequest -UseBasicParsing -Uri $a.Url -OutFile $tmp -PassThru
    $ct = $resp.Headers['Content-Type']
    if (-not $ct) { $ct = $resp.ContentType }
    $ext = Get-ExtFromContentType $ct
    $dest = Join-Path $out ($a.Name + $ext)

    if (Test-Path -LiteralPath $dest) {
      Remove-Item -LiteralPath $tmp -Force
      continue
    }

    Move-Item -LiteralPath $tmp -Destination $dest -Force
    $downloaded++
  } catch {
    $failed++
  }
}

Write-Host ("Assets found: {0}" -f $assets.Count)
Write-Host ("Downloaded:  {0}" -f $downloaded)
Write-Host ("Failed:      {0}" -f $failed)
Write-Host ("Output dir:  {0}" -f $out)

