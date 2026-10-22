$ErrorActionPreference = 'Stop'

$path = 'c:\xampp\htdocs\invy.com\css\style.css'
$t = Get-Content -Raw -LiteralPath $path

function CountMatch([string]$pattern) {
  return [regex]::Matches($t, $pattern).Count
}

$openCurly = CountMatch '\{'
$closeCurly = CountMatch '\}'
$openComment = CountMatch '/\*'
$closeComment = CountMatch '\*/'

Write-Host ("Curly braces: {0} open, {1} close" -f $openCurly, $closeCurly)
Write-Host ("Comments:     {0} '/*' , {1} '*/'" -f $openComment, $closeComment)

# Stack-based scan for unmatched braces
$stack = New-Object 'System.Collections.Generic.Stack[int]'
$unmatchedClose = $null

for ($i = 0; $i -lt $t.Length; $i++) {
  $c = $t[$i]
  if ($c -eq '{') {
    $stack.Push($i) | Out-Null
    continue
  }

  if ($c -eq '}') {
    if ($stack.Count -eq 0) {
      $unmatchedClose = $i
      break
    }
    $stack.Pop() | Out-Null
  }
}

if ($unmatchedClose -ne $null) {
  Write-Host ("ERROR: Unmatched '}}' at char index {0}" -f $unmatchedClose)
  exit 2
}

if ($stack.Count -gt 0) {
  $pos = $stack.Peek()
  Write-Host ("ERROR: Unmatched '{{' at char index {0}" -f $pos)
  exit 2
}

if ($openComment -ne $closeComment) {
  Write-Host "ERROR: Unbalanced comment delimiters /* */"
  exit 3
}

Write-Host "OK: No unmatched { } and comments balanced."

