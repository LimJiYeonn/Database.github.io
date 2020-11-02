### 1. 캐글에서 csv파일을 다운받은 후 C:\Bitnami\wampstack-7.4.9-0\mysql\data파일 안에 저장
### 2. 칼럼수와 타입을 확인했다. 
* 메모장 형식으로 열어서 데이터의 형식 확인
### 3. 각 칼럼의 데이터가 들어갈 수 있도록 테이블을 생성하였다. 
### 4. 명령어를 입력해 데이터를 mysql에 넣었다. 
* LOAD DATA INFILE './bestsellers with categories.csv' INTO TABLE book FIELDS TERMINATED BY ',' ignore 1 rows;
* 오류나서 my.ini 파일에 secure-file-priv = "" 을 추가하였다. (출처 : https://sungwookkang.com/1328)
* 쉼표(,)를 기준으로 나누어 데이터가 들어가기 때문에 데이터 자체에 ,가 없어야 수월하게 들어간다. 

 - 아쉬웠던 점
'책의 저자나 제목 검색하면 해당하는 책 나오기'를 구현하고 싶었으나 오류도 나오지 않고 데이터도 출력되지 않았다..
Select author, name, genre, rating, review from best where '$category' like '%{$search}%';





