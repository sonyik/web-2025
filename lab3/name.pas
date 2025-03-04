PROGRAM HelloName(INPUT, OUTPUT);
USES Dos;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  { �뢮� HTTP-��������� }
  WRITELN('Content-Type: text/plain');
  WRITELN; { ����� ��ப� ����� ���������� � ⥫�� �⢥� }

  { ����祭�� ��ப� ����� }
  QueryString := GetEnv('QUERY_STRING');

  { ���� ��ࠬ��� name= }
  PosName := Pos('name=', QueryString);
  
  IF PosName > 0 THEN
    Name := Copy(QueryString, PosName + 5, Length(QueryString)) { ��������� ��� ��᫥ 'name=' }
  ELSE
    Name := 'Anonymous';

  { �뢮� १���� }
  WRITELN('Hello dear, ', Name, '!')
END.