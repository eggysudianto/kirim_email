Set WshShell = CreateObject("WScript.Shell") 
WshShell.Run chr(34) & "C:\xampp\htdocs\reminder\pengingat\create.bat" & Chr(34), 0
Set WshShell = Nothing