### 회고
- !executeUpdate() : 몇 개의 로우가 업데이트 되었는지  개수를 return
- -오류해결1 
	SQL 오류: ORA-00984: column not allowed here	00984. 00000 -  "column not allowed here"
	 -> insert시 칼럼이 string일 경우 작은따옴표 넣기
- -오류해결2
	select의 결과만 나오고 insert부터 결과가 나오지 않았다.
	-> sql developer에서 연습했던거 rollback 하기 그래야 결과가 제대로 나온다. 

https://youtu.be/CrhH7FKohRM
