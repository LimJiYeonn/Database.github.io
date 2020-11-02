### 1. 개발환경 소개 
bitnami로 컴퓨터에 많은 부하가 들지 않고 편리하다는 장점에서 선택하게 되었다.
- 윈도우 터미널 : Linux는 개발환경에서 좋지만 현재 작업하기에는 Windows power shell로도 충분히 가능하다
- apache web server : 오픈소스 커뮤니티가 있고 완성도가 높다
 	                    정적 컨텐츠를 효율적으로 제공한다
                     	tomcat보다 약 10% 향상된 속도를 제공한다
- mysql : 무료, 다양한 os와 언어를 지원한다
	         빠르고 효과적으로 처리가능하다
	         표준 SQL 형식을 사용한다  
- atom(php, html) : 백앤드와 클라이언트 서버 언어에 적합하다
 


### 2. 페이지 설명
#### 데이터 : https://www.kaggle.com/sootersaalu/amazon-top-50-bestselling-books-2009-2019
- 데이터는 캐글에서 아마존에서 선정한 베스트 셀러를 가져왔다. 
- 먼저 로컬에 .csv로 저장한 후 칼럼에 맞는 테이블을 생성해 
  LOAD DATA INFILE './prog_book.csv' INTO TABLE book FIELDS TERMINATED BY ','; 로 데이터를 넣었다. 

#### 발견한 정보 소개
* (1) 평가점수 조회 :  평가 점수가 높은 순으로 출력했습니다. 
* (2) 리뷰수 조회 : 리뷰수가 많은 순서대로 출력했습니다. 
* (3) 최근 베스트 셀러로 지정되었고 그 중 별점이 4.5이상인 책들을 출력했습니다. 
* 칼럼 설명   name 책 제목 / author 책의 저자 / rating 사용자 평점 / review 리뷰수 
             price  책 가격 / year 베스트 셀러로 지정된 연도 / genre 장르(픽션/논픽션) 

### 4. 구현 동영상
<a href="https://www.youtube.com/watch?v=9esC5DdAE8E">동영상 링크</a>
