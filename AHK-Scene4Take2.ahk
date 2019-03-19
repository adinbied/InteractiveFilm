; OBS Studio non-existing keys test (Studio v0.15.4, ahk v1.0.47.3)

; Start loop as auto-execute, loop until ScrollLock is pressed!!!
; Infinite loop!!! Simulates f13, f16 keypress at ~3 sec intervals
; Swap to scene 4
Sleep, 59000
FileAppend, Another line.`n, tmp\votestartq4.txt
Send, {F19 Down}
Sleep, 10 ; pause 10ms to allow application to recognize the pressed state
Send, {F19 Up}

Sleep, 19500

Send, {F16 Down}
Sleep, 10 ; pause 10ms to allow application to recognize the pressed state
Send, {F16 Up}
return