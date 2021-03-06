# FNBase-Engine
MIT 라이선스로 배포되는 오픈소스 CMS이며, Vanilla PHP 기반입니다.
아직 최적화가 되어있지 않아 사용을 권하지는 않습니다.

**현재 버전은 2.1.9로, 기능이 제대로 작동하지 않습니다.**


한국형 게시판을 지향하며, 보조 위키위키 또한 번들로 포함되어있습니다.
6MB 미만의 적은 용량으로, 기본 세팅된 미디어위키보다 약 20배<sup>1</sup> 적습니다. 확장기능을 고려하면 훨씬 차이가 날 것입니다. 데이터베이스 용량도 얼마 필요하지 않습니다.
모바일 친화적으로 설계되었으며, 최초 로드시에도 300KB 미만<sup>2</sup>의 비교적 적은 전송만이 필요합니다.


설치도 간편합니다. 파일을 업로드하고 기본 설정만<sup>3</sup> 거치면 모든 작업은 끝납니다.

PHP 7 버전 이상에서 구동하실 것을 권장하며, 데이터베이스 및 서버 용량은 최소 100MB를 권장합니다.
이전 버전의 CMS를 추천하는 웹 호스팅에서 사용 시 정상 작동하지 않습니다.
아직 한국어만을 지원하며, 영어와 스페인어, 중국어와 일본어를 공식적으로 지원할 예정입니다.


작동을 위해 필요한 오픈 소스는 다음과 같습니다.
| 이름 | 제작자 | 라이선스 | 사용 목적 | 비고 |
|---|---|---|---|---|
| [PicnicCss](https://picnicss.com/) | Francisco Presencia, Jordan Wallwork, Alex Galushka, Emilio Coppola. | MIT | 기본 디자인·레이아웃 | |
| [IcoFont](https://icofont.org/) | IcoFont | MIT | 디자인 | |
| [HTML Purifier](https://htmlpurifier.org/) | HTML Purifier | _LGPL_<sup>4</sup> | 문자열 필터링 | 선택 사항<sup>5</sup> |
| [Summernote Editor](https://summernote.org/) | Summernote team | MIT | 사용자 편의 | 선택 사항<sup>5</sup>, 라이브러리 사용<sup>6</sup> |



----
1. 1.30.0 버전 기준, 기본 제공 확장기능(cite 등) 포함.
2. 추가적으로 삽입될 이미지 등의 파일은 제외.
3. 압축 해제 과정이 필요할 수 있음.
4. LGPL 라이선스에 맞지 않는 프로젝트일 경우, 해당 코드를 제거할 수 있음.
5. 선택 사항이나, 기본적으로 포함됨.
6. Summernote 에디터를 사용할 때에만 JQuery를 불러옴. Bootstrap은 사용되지 않음. 옵션을 비활성화하거나 해당 코드를 제거할 수 있음.