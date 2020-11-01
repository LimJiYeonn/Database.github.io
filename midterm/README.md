# 1. mysql apache, atom, windows terminal을 쓴 이유
### bitnami로 컴퓨터에 많은 부하가 들지 않고 편리하다는 장점에서 선택하게 되었다.
 
# 2. 데이터 : https://www.kaggle.com/sootersaalu/amazon-top-50-bestselling-books-2009-2019
### 데이터는 캐글에서 아마존에서 선정한 베스트 셀러를 가져왔다. 
### 먼저 로컬에 .csv로 저장한 후 칼럼에 맞는 테이블을 생성해 
### LOAD DATA INFILE './prog_book.csv' INTO TABLE book FIELDS TERMINATED BY ','; 로 데이터를 넣었다. 

# 3. 웹페이지 설명
* (1) 평가점수 조회 :  평가 점수가 높은 순으로 출력을 했습니다. 
* (2) 리뷰수 조회 : 리뷰수가 많은 순서대로 출력했습니다. 
* (3) 최근 베스트 셀러로 지정된 책중에 별점이 4.5이상인 책들을 출력했습니다. 
* 칼럼 설명
name 책 제목 / author 책의 저자 / rating 사용자 평점 / review 리뷰수 
price  책 가격 / year 베스트 셀러로 지정된 연도 / genre 장르(픽션/논픽션) 
