Нормальный код кому лень:
PROGRAM SarahRevere(INPUT, OUTPUT);
USES Dos;
VAR
  QueryString: STRING;
BEGIN

  WRITELN('Content-Type: text/plain');
  WRITELN; 

  QueryString := GetEnv('QUERY_STRING');

  { Проверяем значение  lanterns }
  IF QueryString = 'lanterns=1' THEN
    WRITELN('The British are coming by land.')
  ELSE IF QueryString = 'lanterns=2' THEN
    WRITELN('The British are coming by sea.')
  ELSE
    WRITELN('Sarah didn''t say.')
END.
