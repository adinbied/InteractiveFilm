; OBS Studio non-existing keys test (Studio v0.15.4, ahk v1.0.47.3)

; Start loop as auto-execute, loop until ScrollLock is pressed!!!
; Infinite loop!!! Simulates f13, f16 keypress at ~3 sec intervals
; Swap to scene 4
Sleep, 65000
FileAppend, Another line.`n, tmp\votestartq2.txt
Send, {F15 Down}
Sleep, 10 ; pause 10ms to allow application to recognize the pressed state
Send, {F15 Up}

Sleep, 19500

Send, {F16 Down}
Sleep, 10 ; pause 10ms to allow application to recognize the pressed state
Send, {F16 Up}
return