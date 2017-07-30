@echo off
title XQS_Server 0.1.0
for /f "skip=1 tokens=2 delims==" %%a in (xqs.ini) do set "value=%%a"
%value%php.exe -q server.php
pause