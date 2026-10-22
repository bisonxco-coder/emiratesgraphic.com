param(
  [Parameter(Mandatory = $true)]
  [int]$Index
)

$ErrorActionPreference = 'Stop'

$path = 'c:\xampp\htdocs\invy.com\css\style.css'
$t = Get-Content -Raw -LiteralPath $path

if ($Index -lt 0 -or $Index -ge $t.Length) {
  Write-Host "Index out of range. Length: $($t.Length)"
  exit 1
}

$pre = $t.Substring(0, $Index)
$line = ($pre -split "`n").Count
$start = [Math]::Max(0, $Index - 220)
$len = [Math]::Min(520, $t.Length - $start)
$snippet = $t.Substring($start, $len)

Write-Host "Approx line: $line"
Write-Host "-----"
Write-Host $snippet
Write-Host "-----"

